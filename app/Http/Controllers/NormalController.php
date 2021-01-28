<?php

namespace App\Http\Controllers;

use App\User;
use App\package;
use App\Exports\UserExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
class NormalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nor = DB::table('normal')->join('alternatif', 'normal.id_lp', '=', 'alternatif.id_lp')
            ->select(
                'normal.id_normal',
                'normal.id_lp',
                DB::raw('CONCAT(alternatif.merk_lp," ",alternatif.seri_lp) as full_name')
                ,
                'normal.processor',
                'normal.harga',
                'normal.ram',
                'normal.hdd',
                'normal.ssd',
                'normal.monitor',
                'normal.vga'
            )
            ->get();
        $data['normal'] = $nor;
        return view("admin.normal.index", $data);
    }
    public function export_excel()
	{
		return Excel::download(new UserExport, 'users.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alter = DB::table('alternatif')
        ->select(
            'alternatif.id_lp',
            DB::raw('CONCAT(alternatif.merk_lp," ",alternatif.seri_lp) as full_name')

        )->get();
        $data['alternatif'] = $alter;

        $harga = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('Id_kriteria', '1')
        ->get();
        $data['subharga'] = $harga;

        $pros = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('Id_kriteria', '3')
        ->get();
        $data['subpros'] = $pros;

        $ram = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('Id_kriteria', '2')
        ->get();
        $data['subram'] = $ram;

        $hdd = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('Id_kriteria', '4')
        ->get();
        $data['subhdd'] = $hdd;

        $ssd = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('Id_kriteria', '5')
        ->get();
        $data['subssd'] = $ssd;

        $monitor = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('Id_kriteria', '6')
        ->get();
        $data['submonitor'] = $monitor;

        $vga = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('Id_Kriteria', '7')
        ->get();
        $data['subvga'] = $vga;

        return view('admin.normal.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $create = DB::table('normal')
            ->insert([
                'id_lp' => $request->get('merk'),
                'harga' => $request->get('harga'),
                'processor' => $request->get('processor'),
                'ram' => $request->get('ram'),
                'hdd' => $request->get('hdd'),
                'ssd' => $request->get('ssd'),
                'monitor' => $request->get('monitor'),
                'vga' => $request->get('vga')
            ]);
            return redirect('/normal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = DB::table('normal')->join('alternatif', 'normal.id_lp', '=', 'alternatif.id_lp')
            ->select(
                'normal.id_normal',
                'normal.id_lp',
                'alternatif.merk_lp',
                'normal.processor',
                'normal.harga',
                'normal.ram',
                'normal.hdd',
                'normal.ssd',
                'normal.monitor',
                'normal.vga'
            )
            ->where('normal.id_normal', $id)
            ->first();
        return view("admin.normal.detail", ['detail' => $detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alter = DB::table('alternatif')
        ->select(
            'alternatif.id_lp',
            DB::raw('CONCAT(alternatif.merk_lp," ",alternatif.seri_lp) as full_name')

        )->get();
        $data['alternatif'] = $alter;

        $harga = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('Id_kriteria', '1')
        ->get();
        $data['subharga'] = $harga;

        $pros = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('Id_kriteria', '3')
        ->get();
        $data['subpros'] = $pros;

        $ram = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('Id_kriteria', '2')
        ->get();
        $data['subram'] = $ram;

        $hdd = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('Id_kriteria', '4')
        ->get();
        $data['subhdd'] = $hdd;

        $ssd = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('Id_kriteria', '5')
        ->get();
        $data['subssd'] = $ssd;

        $monitor = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('Id_kriteria', '6')
        ->get();
        $data['submonitor'] = $monitor;

        $vga = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('Id_Kriteria', '7')
        ->get();
        $data['subvga'] = $vga;

        $edit = DB::table('normal')
        ->select(
            'normal.id_normal',
            'normal.id_lp',
            'normal.harga',
            'normal.ram',
            'normal.processor',
            'normal.hdd',
            'normal.ssd',
            'normal.monitor',
            'normal.vga'
        )
        ->where( 'normal.id_normal', $id)
        ->first();
    return view('admin.normal.edit', ['edit' => $edit], $data);
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
        $har = package::find($request->get('harga'));
        $pros = package::find($request->get('processor'));
        $ram = package::find($request->get('ram'));
        $hd = package::find($request->get('hdd'));
        $sd = package::find($request->get('ssd'));
        $mon = package::find($request->get('monitor'));
        $vga = package::find($request->get('vga'));
        $al = package::find($request->get('merk'));
        $update = DB::table('normal')
            ->update([
                'id_lp' => $request->get('merk'),
                'harga' => $request->get('harga'),
                'processor' => $request->get('processor'),
                'ram' => $request->get('ram'),
                'hdd' => $request->get('hdd'),
                'ssd' => $request->get('ssd'),
                'monitor' => $request->get('monitor'),
                'vga' => $request->get('vga')
            ]);
            return redirect('/normal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('normal')
            ->select(
                'normal.id_normal',
                'normal.id_lp',
                'normal.processor',
                'normal.harga',
                'normal.ram',
                'normal.hdd',
                'normal.ssd',
                'normal.monitor',
                'normal.vga'
            )
            ->where('normal.id_normal', $id);
        $delete->delete();
        return redirect()->route('normal.index');
    }
}
