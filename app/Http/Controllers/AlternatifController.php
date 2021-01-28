<?php

namespace App\Http\Controllers;

use App\package;

use App\Exports\PackageExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alter = DB::table('alternatif')
            ->select(
                'alternatif.id_lp',
                'alternatif.merk_lp',
                'alternatif.seri_lp',
                'alternatif.harga_lp',
            'alternatif.processor_lp',
            'alternatif.ram_lp',
            'alternatif.hdd_lp',
            'alternatif.ssd_lp',
            'alternatif.monitor_lp',
            'alternatif.vga_lp'
            )
            ->get();
        $data['alternatif'] = $alter;
        return view("admin.alternatif.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sub = DB::table('subkriteria')
            ->select(
                'subkriteria.id_sub',
                'subkriteria.id_kriteria',
                'subkriteria.nama_sub',
                'subkriteria.bobot'
            )->where('subkriteria.id_kriteria', '1')
            ->get();
        $data['subharga'] = $sub;

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
        return view('admin.alternatif.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = DB::table('alternatif')
            ->insert([
                'merk_lp' => $request->get('merk'),
                'seri_lp' => $request->get('seri'),
                'harga_lp' => $request->get('harga'),
                'processor_lp' => $request->get('pros'),
                'ram_lp' => $request->get('ram'),
                'hdd_lp' => $request->get('hdd'),
                'ssd_lp' => $request->get('ssd'),
                'monitor_lp' => $request->get('monitor'),
                'vga_lp' => $request->get('vga')
            ]);
            return redirect('/alternatif');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $detail = DB::table('alternatif')
        ->select(
            'alternatif.id_lp',
            'alternatif.merk_lp',
            'alternatif.seri_lp',
            'alternatif.harga_lp',
            'alternatif.processor_lp',
            'alternatif.ram_lp',
            'alternatif.hdd_lp',
            'alternatif.ssd_lp',
            'alternatif.monitor_lp',
            'alternatif.vga_lp'
        )
        ->where('alternatif.id_lp', $id)
        ->first();
        return view('admin.alternatif.detail_alternatif', ['detail' => $detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sub = DB::table('subkriteria')
            ->select(
                'subkriteria.id_sub',
                'subkriteria.id_kriteria',
                'subkriteria.nama_sub',
                'subkriteria.bobot'
            )->where('id_kriteria', '1')
            ->get();
        $data['subharga'] = $sub;

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

        $edit = DB::table('alternatif')
        ->select(
            'alternatif.id_lp',
            'alternatif.merk_lp',
            'alternatif.seri_lp',
            'alternatif.harga_lp',
            'alternatif.processor_lp',
            'alternatif.ram_lp',
            'alternatif.hdd_lp',
            'alternatif.ssd_lp',
            'alternatif.monitor_lp',
            'alternatif.vga_lp'
        )
        ->where('alternatif.id_lp', $id)
        ->first();
        return view('admin.alternatif.edit', ['edit' => $edit], $data);
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
        $edit = DB::table('alternatif')
            ->where('id_lp', $id)
            ->update([
                'merk_lp' => $request->get('merk'),
                'seri_lp' => $request->get('seri'),
                'harga_lp' => $request->get('harga'),
                'processor_lp' => $request->get('pros'),
                'ram_lp' => $request->get('ram'),
                'hdd_lp' => $request->get('hdd'),
                'ssd_lp' => $request->get('ssd'),
                'monitor_lp' => $request->get('monitor'),
                'vga_lp' => $request->get('vga')
            ]);


        return redirect('/alternatif');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = package::findOrFail($id);
        $delete->delete();
        return redirect()->route('alternatif.index');
    }
}
