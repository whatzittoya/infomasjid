<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about='<p>Aplikasi InfoMasjid dikembangkan dan dinaungi oleh:</p>

        <p><strong>YAYASAN INFOMASJID SYIAR ISLAM (YAYASAN INFOMASJID)</strong></p>

        <p>Alamat : Perumahan Pandau Permai, Jl Mahang Raya Blok C 25 No.6, RT.002, RW.006, Desa Pandau Jaya Kecamatan Siak Hulu, Kabupaten Kampar, Provinsi Riau</p>

        <p>email: cs.infomasjid@gmail.com</p>

        <p>Website: <a href="http://infomasjid.my.id/">infomasjid.my.id</a></p>

        <p>Jika ada masukan, saran, atau kritik bisa menghubungi kami via Whatsapp dibawah</p>
        
        <a href="whatsapp://send?phone=6285264612989&text=Assalamu%27alaikum%2C%20perkenalkan%20nama%20saya"><img src="http://infomasjid.my.id/img/Chat-via-whatsapp.png" width="180"></img></a>
        ';
        return response()->json(array("about"=>$about), 200);
    }
}
