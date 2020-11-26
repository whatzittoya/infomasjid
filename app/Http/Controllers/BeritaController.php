<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Kategori;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->isTakmir()) {
            $masjid_id = Auth::user()->masjids->first()->masjid_id;

            $berita = Berita::where('masjid_id', $masjid_id)->with('masjids')->orderby('tgl_berita', 'desc')->get();
            $baseroute = 'berita';
            $breadcrumb = 'takmir_berita';
        } else {
            $berita = Berita::with('masjids')->get();
            $baseroute = 'beritaall';
            $breadcrumb = 'admin_berita';
        }

        return view('berita.berita', ['berita' => $berita, 'baseroute' => $baseroute, 'breadcrumb' => $breadcrumb]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori = Kategori::get();
        $kategori = $kategori->pluck('nama', 'nama')->toArray();
        return view('berita.new_berita', ['kategori' => $kategori]);
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

            // 'email_takmir'       => 'required|email|unique:users,email',
        );
        $messages = [
            // 'email_takmir.email' => 'Email tidak valid',
            // 'email_takmir.unique' => 'Email ini sudah terdaftar silahkan pilih email lain',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $berita = new Berita();
            $berita->judul = $request->judul_berita;
            $berita->kategori_berita = $request->kategori_berita;
            $berita->deskripsi = $this->upload($request->deskripsi_berita);
            $berita->masjid_id = Auth::user()->masjids->first()->masjid_id;
            $date = Carbon::now();
            $berita->tgl_berita = $date->toDateTimeString();
            if ($request->has('dokumen_berita')) {
                $file = $request->file('dokumen_berita')->store('public/dokumen_berita');
                $file = str_replace('public/', 'storage/', $file);
                $berita->url_file = $file;
            }
            $berita->save();



            return redirect()->route('berita.index')->with('message', 'Data berita berhasil disimpan!');
        }
    }


    private function upload($content)
    {
        $dom = new \DomDocument();
        // $content=$this->addNamespaces($content);
        $dom->loadHTML(
            $content,
            LIBXML_HTML_NOIMPLIED | # Make sure no extra BODY
            LIBXML_HTML_NODEFDTD |  # or DOCTYPE is created
            LIBXML_NOERROR |        # Suppress any errors
            LIBXML_NOWARNING        # or warnings about prefixes.
        );

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $image_name= time().$k.'.png';
            //$path = public_path() . $image_name;

            //file_put_contents($path, $data);
            Storage::disk('public')->put("img_berita/".$image_name, $data);

            //$file = $request->file('dokumen_berita')->store('public/dokumen_berita');
            // $file = str_replace('public/', 'storage/', $file);
            //$berita->url_file = $file;
            $url=asset('img_berita/'.$image_name);

            $img->removeAttribute('src');
            $img->setAttribute('src', $url);
        }
        $content = $dom->saveHTML();
        return $content;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita, $id)
    {
        $berita = Berita::find($id);
        if (Auth::user()->isTakmir()) {
            $breadcrumb = 'takmir_view_berita';
        } else {
            $breadcrumb = 'admin_view_berita';
        }

        return view('berita.detail_berita', ['berita' => $berita, 'breadcrumb' => $breadcrumb]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita, $id)
    {
        $berita = Berita::find($id);
        $kategori = Kategori::get();
        $kategori = $kategori->pluck('nama', 'nama')->toArray();
        return view('berita.new_berita', ['berita' => $berita, 'kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita, $id)
    {
        $rules = array(

            // 'email_takmir'       => 'required|email|unique:users,email',
        );
        $messages = [
            // 'email_takmir.email' => 'Email tidak valid',
            // 'email_takmir.unique' => 'Email ini sudah terdaftar silahkan pilih email lain',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $berita = Berita::find($id);
            $berita->judul = $request->judul_berita;
            $berita->kategori_berita = $request->kategori_berita;
            $berita->deskripsi = $request->deskripsi_berita;
            $berita->masjid_id = Auth::user()->masjids->first()->masjid_id;

            if ($request->has('dokumen_berita')) {
                $file = $request->file('dokumen_berita')->store('public/dokumen_berita');
                $file = str_replace('public/', 'storage/', $file);
                $berita->url_file = $file;
            }
            $berita->update();



            return redirect()->route('berita.index')->with('message', 'Data berita berhasil diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita, $id)
    {
        $berita = Berita::find($id);

        $berita->delete();
        return redirect()->back()->with('message', "Data berhasil dihapus!");
    }
}
