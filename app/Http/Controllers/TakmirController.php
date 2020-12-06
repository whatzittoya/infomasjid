<?php

namespace App\Http\Controllers;

use App\ErrorLog;
use App\Mail\UserRegistered;
use App\Masjid;
use App\Takmir;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Monolog\Handler\ErrorLogHandler;

class TakmirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resetPassword($id)
    {
        $user = User::find($id);
        $password = $this->generatePassword();
        $user->password = bcrypt($password);
        $user->temp_pass = $password;
        $user->update();
        return redirect()->back()->with('message', 'Password takmir berhasil direset!');
    }
    public function create($masjid_id)
    {
        return view('masjid.masjid_takmir', ['status'=>'new',"masjid_id"=>$masjid_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $mid)
    {
        $masjid_takmir=new User;
        $masjid_takmir->name = $request->name;
        $masjid_takmir->email = $request->email;
        $password = $this->generatePassword();

        $masjid_takmir->password = bcrypt($password);
        $masjid_takmir->user_role = 'takmir';
        $masjid_takmir->temp_pass = $password;
        $masjid_takmir->save();
        $takmir=new Takmir;
        $takmir->no_identitas=$request->no_identitas;
        $takmir->tanggal_lahir=$request->tanggal_lahir;
        $takmir->attachment="";
        if ($request->has('attachment')) {
            $file = $request->file('attachment')->store('public/takmir_attachment');
            $file = str_replace('public/', 'storage/', $file);
            $takmir->attachment = $file;
        }
        $masjid_takmir->takmir()->save($takmir);


        $masjid=Masjid::find($mid);
        $masjid->users()->attach($masjid_takmir->id);
        $objUser = new \stdClass();
        $objUser->username = $masjid_takmir->email;
        $objUser->password =  $password;

        try {
            Mail::to('$masjid_takmir->email')->send(new UserRegistered($objUser));
        } catch (Exception $ex) {
            $error = new ErrorLog();
            $error->name = "Mail registration";
            $error->type = "Sending Mail";
            $error->exception = $ex->getMessage();
            $error->table = 'user';
            $error->value = json_encode($user);
            $error->save();
        }

        return redirect()->route('masjid.edit', $mid)->with('message', 'Data musharaf berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($mid, $tid)
    {
        $masjid_takmir= User::find($tid);
        return view('masjid.masjid_takmir', ['status'=>'edit',"masjid_id"=>$mid,'masjid_takmir'=>$masjid_takmir]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mid, $tid)
    {
        $masjid_takmir=User::find($tid);
        $masjid_takmir->name = $request->name;
        $masjid_takmir->email = $request->email;

        $masjid_takmir->update();

   
        return redirect()->route('masjid.edit', $mid)->with('message', 'Data takmir berhasil diubah!');
    }

    public function activate($mid, $tid)
    {
        $masjid=Masjid::find($mid);
        $active_status=$masjid->users()->find($tid)->pivot->active_status;
        $masjid->users()->sync([$tid => ['active_status'=> !$active_status]]);
        $active_status= $masjid->users()->find($tid)->pivot->active_status;
        return redirect()->route('masjid.edit', $mid)->with('message', ($active_status ? 'Aktivasi ' : 'Deaktivasi ') . 'data takmir berhasil !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
