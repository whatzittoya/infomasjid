<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Masjid;
use App\MasjidFavorit;
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

    public function follow(Request $request)
    {
        $count_existing = count(MasjidFavorit::where('user_id', $request->user_id)->get());
        $selected = $count_existing == 0 ? 1 : 0;
        $masjid_favorit = new MasjidFavorit();

        $masjid_favorit->user_id = $request->user_id;
        $masjid_favorit->masjid_id = $request->masjid_id;
        $masjid_favorit->selected = $selected;
        $masjid_favorit->save();
        return response()->json("ok", 200);
    }

    public function unfollow(Request $request)
    {
        $masjid_favorit = MasjidFavorit::where('user_id', $request->user_id)->where('masjid_id', $request->masjid_id)->first();
        $masjid_favorit->delete();
        $count_selected = count(MasjidFavorit::where('user_id', $request->user_id)->where('selected', 1)->get());
        if ($count_selected == 0) {
            $masjid_favorit_selected = MasjidFavorit::where('user_id', $request->user_id)->first();
            $masjid_favorit_selected->selected = 1;
        }
        return response()->json("ok", 200);
    }

    public function select(Request $request)
    {
        MasjidFavorit::where('user_id', $request->user_id)->update(['selected' => 0]);
        $masjid_favorit = MasjidFavorit::where('user_id', $request->user_id)->where('masjid_id', $request->masjid_id)->first();
        $masjid_favorit->selected = 1;
        $masjid_favorit->save();
        return response()->json("ok", 200);
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
