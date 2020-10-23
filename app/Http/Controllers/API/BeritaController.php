<?php

namespace App\Http\Controllers\API;

use App\Berita;
use App\Http\Controllers\Controller;
use App\Masjidapi as Masjid;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::select('berita_id', 'kategori_berita', 'judul', 'tgl_berita', 'masjid_id')->with('masjids:masjid_id,nama,foto')->get();
        return response()->json($berita, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function searchable(Request $request)
    {
        // search database, with result, list on page, with links to products,
        $berita = Berita::select('berita_id', 'kategori_berita', 'judul', 'tgl_berita', 'masjid_id')->with('masjids:masjid_id,nama,foto')->where('judul', 'like', '%' . $request->search . '%')->get();
        return response()->json($berita, 200);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita, $id)
    {
        $berita = Berita::with('masjids:masjid_id,nama')->find($id);
        return response()->json($berita, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
