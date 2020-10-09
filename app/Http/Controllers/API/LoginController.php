<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Masjid;
use App\MasjidFavorit;
use App\User;
use App\UserDevice;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $device_id = $request->device_id;
        if (!$device_id) {
            return response('invalid_request', 400)
                ->header('Content-Type', 'text/plain');
        }
        $found = UserDevice::where('device_id', $request->device_id)->first();
        if ($found) {
            $user_id = $found->user_id;
            // $masjid = Masjid::select('masjid_id', 'nama', 'alamat', 'foto')->with('Users:MASJID_FAVORIT.selected')->whereHas('Users', function ($query) use ($user_id) {
            //     $query->where('user_id', $user_id);
            // })->get();
            $masjid = Masjid::select('masjid_id', 'nama', 'alamat', 'foto')->with(['Users' => function ($query) use ($user_id) {
                $query->select('MASJID_FAVORIT.selected')->where('user_id', $user_id);
            }])->whereHas('Users', function ($query) use ($user_id) {
                $query->where('user_id', $user_id);
            })->get();
            $masjid = $masjid->map(function ($item) {

                $item->selected = $item->Users[0]->selected;
                unset($item->Users);
                return $item;
            });
            $user = User::find($user_id);
            if (count($masjid) == 0) {
                return response()->json(array('result' => 'choose_mesjid_exists', 'user' => $user), 200);
            } else {
                return response()->json(array('result' => 'exists', 'user' => $user, 'masjid' => $masjid), 200);
            }
        } else {
            $user = new User();
            $user->name = $device_id;
            $user->email = $device_id . "@test.com";
            $user->password = bcrypt('123');
            $user->save();

            $user_device = new UserDevice();
            $user_device->user_id = $user->id;
            $user_device->device_id = $device_id;
            $user_device->save();
            return response()->json(array('result' => 'choose_mesjid'), 200);
        }
    }
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
     * @param  \App\UserDevice  $userDevice
     * @return \Illuminate\Http\Response
     */
    public function show(UserDevice $userDevice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserDevice  $userDevice
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDevice $userDevice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserDevice  $userDevice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDevice $userDevice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserDevice  $userDevice
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDevice $userDevice)
    {
        //
    }
}
