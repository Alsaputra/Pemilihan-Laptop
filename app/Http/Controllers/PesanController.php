<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\package;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub = DB::table('subkriteria')->join('kriteria', 'subkriteria.id_kriteria', '=', 'kriteria.id_kriteria')
            ->select(
                'subkriteria.id_sub',
                'subkriteria.id_kriteria',
                'kriteria.kategori',
                'subkriteria.nama_sub',
                'subkriteria.bobot',
                'subkriteria.keterangan'
            )
            ->get();
        $data['subkriteria'] = $sub;
        return view("admin.contact.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriteria = DB::table('kriteria')
            ->select(
                'kriteria.id_kriteria',
                'kriteria.kategori',
                'kriteria.atribut'
            )->get();
        $data['kriteria'] = $kriteria;
        return view('admin.contact.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idk = $request->get('kriteria');
        $krite = DB::table('kriteria')->select('kriteria.id_kriteria')->where('kriteria.kategori', $idk)->get();
        $create = DB::table('subkriteria')
            ->insert([
                'id_kriteria' => $request->get('kriteria'),
                'nama_sub' => $request->get('sub'),
                'bobot' => $request->get('bobot'),
                'keterangan' => $request->get('keterangan')
            ]);
        return redirect('/kritik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = DB::table('subkriteria')->join('kriteria', 'subkriteria.id_kriteria', '=', 'kriteria.id_kriteria')
            ->select(
                'subkriteria.id_sub',
                'subkriteria.id_kriteria',
                'kriteria.kategori',
                'subkriteria.nama_sub',
                'subkriteria.bobot',
                'subkriteria.keterangan'
            )
            ->where('subkriteria.id_sub', $id)
            ->first();
        return view("admin.contact.detail", ['detail' => $detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kriteria = DB::table('kriteria')
            ->select(
                'kriteria.id_kriteria',
                'kriteria.kategori'
            )->get();
        $data2['kriteria'] = $kriteria;
    

        $edit = DB::table('subkriteria')
            ->select(
                'subkriteria.id_sub',
                'subkriteria.id_kriteria',
                'subkriteria.nama_sub',
                'subkriteria.bobot',
                'subkriteria.keterangan'
            )
            ->where('subkriteria.id_sub', $id)
            ->first();
        return view('admin.contact.edit', ['edit' => $edit], $data2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $edit = DB::table('subkriteria')
            ->where('id_sub', $id)
            ->update([
                'id_kriteria' => $request->get('kriteria'),
                'nama_sub' => $request->get('nama'),
                'bobot' => $request->get('bobot'),
                'keterangan' => $request->get('keterangan')
            ]);
        return redirect('/kritik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('subkriteria')
            ->select('subkriteria.*')
            ->where('subkriteria.id_sub', $id);
        $delete->delete();
        return redirect()->route('contact.index');
    }
}
