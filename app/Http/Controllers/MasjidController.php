<?php

namespace App\Http\Controllers;

use App\Masjid;
use Illuminate\Http\Request;
use app\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MasjidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masjid = Masjid::with('users')->get();
        return view('masjid.masjid', ['masjid' => $masjid]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('masjid.new_masjid');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(

            'email_takmir'       => 'required|email|unique:users,email',
        );
        $messages = [
            'email_takmir.email' => 'Email tidak valid',
            'email_takmir.unique' => 'Email ini sudah terdaftar silahkan pilih email lain',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $masjid = new Masjid;
            $masjid->nama = $request->nama_masjid;
            $masjid->alamat = $request->alamat_masjid;
            $masjid->geotag = $request->geotag_masjid;
            $masjid->save();

            $user = new User();
            $user->name = $request->nama_takmir;
            $user->email = $request->email_takmir;
            $password = $this->generatePassword();

            $user->password = bcrypt($password);
            $user->user_role = 'takmir';
            $user->temp_pass = $password;
            $user->save();

            $masjid->users()->attach($user->id);

            return redirect()->route('masjid.index')->with('message', 'Data masjid berhasil disimpan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function detail()
    {
        $masjid = Auth::user()->masjids->first();

        return view('masjid.detail_masjid', ['masjid' => $masjid]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function edit(Masjid $masjid)
    {
        $masjid = Masjid::with('users')->find($masjid->masjid_id);
        return view('masjid.edit_masjid', ['status' => 'edit', 'masjid' => $masjid]);
    }

    public function takmirEdit(Masjid $masjid)
    {
        $masjid = Auth::user()->masjids->first();
        return view('masjid.edit_masjid', ['status' => 'edit', 'masjid' => $masjid]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function globalUpdate(Request $request, Masjid $masjid)
    {
        $masjid->nama = $request->nama_masjid;
        $masjid->alamat = $request->alamat_masjid;
        $masjid->geotag = $request->geotag_masjid;
        $masjid->norek = $request->norek_masjid;
        $masjid->deskripsi = $request->deskripsi_masjid;
        if ($request->has('foto_masjid')) {
            $file = $request->file('foto_masjid')->store('public/foto_masjid');
            $file = str_replace('public/', 'storage/', $file);
            $masjid->foto = $file;
        }

        $masjid->update();
    }
    public function update(Request $request, Masjid $masjid)
    {

        $this->globalUpdate($request, $masjid);
        return redirect()->route('masjid.index')->with('message', 'Data masjid berhasil diubah!');
    }

    public function takmirUpdate(Request $request)
    {
        $masjid = Auth::user()->masjids->first();
        $this->globalUpdate($request, $masjid);
        return view('masjid.edit_masjid', ['status' => 'edit', 'masjid' => $masjid]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masjid $masjid)
    {

        $masjid->delete();
        return redirect()->back()->with('message', "Data berhasil dihapus!");
    }
}
