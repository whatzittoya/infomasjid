<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Masjid;
use Illuminate\Http\Request;

class MasjidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masjid = Masjid::select('masjid_id', 'nama', 'alamat', 'foto')->get();
        return response()->json($masjid, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchable(Request $request)
    {
        // search database, with result, list on page, with links to products,
        $masjid = Masjid::select('masjid_id', 'nama', 'alamat', 'foto')->where('nama', 'like', '%' . $request->search . '%')->get();
        return response()->json($masjid, 200);
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function show(Masjid $masjid)
    {
        return response()->json($masjid, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masjid $masjid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masjid $masjid)
    {
        //
    }
}
