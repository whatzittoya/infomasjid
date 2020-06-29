<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::get();
        $breadcrumb = 'kategori';
        return view('kategori.kategori', ['kategori' => $kategori, 'breadcrumb' => $breadcrumb]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumb = 'add_kategori';
        return view('kategori.new_kategori', ['breadcrumb' => $breadcrumb]);
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

            'nama_kategori'       => 'required',
        );
        $messages = [
            'nama_kategori.required' => 'Nama Kategori harus diisi',

        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $kategori = new Kategori;
            $kategori->nama = $request->nama_kategori;
            $kategori->save();
            return redirect()->route('kategori.index')->with('message', 'Data kategori berhasil disimpan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::find($id);
        $breadcrumb = 'add_kategori';

        return view('kategori.new_kategori', ['kategori' => $kategori, 'breadcrumb' => $breadcrumb]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $rules = array(

            'nama_kategori'       => 'required',
        );
        $messages = [
            'nama_kategori.required' => 'Nama Kategori harus diisi',

        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $kategori = Kategori::find($id);
            $kategori->nama = $request->nama_kategori;
            $kategori->update();
            return redirect()->route('kategori.index')->with('message', 'Data kategori berhasil diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($id);

        $kategori->delete();
        return redirect()->back()->with('message', "Data berhasil dihapus!");
    }
}
