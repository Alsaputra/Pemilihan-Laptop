<?php

namespace App\Http\Controllers;

use App\detail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use  App\User;
use Illuminate\Support\Facades\Session;
use App\package;
use App\transaction;
use Illuminate\Support\Facades\DB;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        )->where('id_kriteria', '3')
        ->get();
        $data['subpros'] = $pros;

        $ram = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('id_kriteria', '2')
        ->get();
        $data['subram'] = $ram;

        $hdd = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('id_kriteria', '4')
        ->get();
        $data['subhdd'] = $hdd;

        $ssd = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('id_kriteria', '5')
        ->get();
        $data['subssd'] = $ssd;

        $monitor = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('id_kriteria', '6')
        ->get();
        $data['submonitor'] = $monitor;

        $vga = DB::table('subkriteria')
        ->select(
            'subkriteria.id_sub',
            'subkriteria.nama_sub',
            'subkriteria.bobot'
        )->where('id_Kriteria', '7')
        ->get();
        $data['subvga'] = $vga;
        return view('pages.form', $data);
    }

    public function kes()
    {
        return view('pages.kesimpulan');
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
        return view('pages.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carimax = DB::table('normal')
        ->select(
            DB::raw('max(normal.harga) as max1'),
            DB::raw('max(normal.processor) as max2'),
            DB::raw('max(normal.ram) as max3'),
            DB::raw('max(normal.hdd) as max4'),
            DB::raw('max(normal.ssd) as max5'),
            DB::raw('max(normal.monitor) as max6'),
            DB::raw('max(normal.vga) as max7')
        )->get();
        $data['max'] = $carimax;
        

        $carimin = DB::table('normal')
        ->select(
            DB::raw('min(normal.harga) as min1'),
            DB::raw('min(normal.processor) as min2'),
            DB::raw('min(normal.ram) as min3'),
            DB::raw('min(normal.hdd) as min4'),
            DB::raw('min(normal.ssd) as min5'),
            DB::raw('min(normal.monitor) as min6'),
            DB::raw('min(normal.vga) as min7')
        )->get();
        $data['min'] = $carimin;
     

        $bobot_harga = $request->get('bobot_harga');
        $bobot_pros = $request->get('bobot_pros');
        $bobot_ram = $request->get('bobot_ram');
        $bobot_hdd = $request->get('bobot_hdd');
        $bobot_ssd = $request->get('bobot_ssd');
        $bobot_monitor = $request->get('bobot_monitor');
        $bobot_vga = $request->get('bobot_vga');
          
            // $aa = $data['min'][0];
            
        $rank = DB::table('normal')->join('alternatif', 'normal.id_lp', '=', 'alternatif.id_lp')
        ->select(
            DB::raw('CONCAT(alternatif.merk_lp," ",alternatif.seri_lp) as full_name'),
            'alternatif.harga_lp',
            'alternatif.processor_lp',
            'alternatif.ram_lp',
            'alternatif.hdd_lp',
            'alternatif.ssd_lp',
            'alternatif.monitor_lp',
            'alternatif.vga_lp',
            DB::raw('round((('.$data['min'][0]->min1.'/normal.harga)*'.$bobot_harga.')+((normal.processor/'.$data['max'][0]->max2.')*'.$bobot_pros.')+((normal.ram/'.$data['max'][0]->max3.')*'.$bobot_ram.')+((normal.hdd/'.$data['max'][0]->max4.')*'.$bobot_hdd.')+((normal.ssd/'.$data['max'][0]->max5.')*'.$bobot_ssd.')+((normal.monitor/'.$data['max'][0]->max6.')*'.$bobot_monitor.')+((normal.vga/'.$data['max'][0]->max7.')*'.$bobot_vga.'),2) as ranks')
        )->orderBy('ranks', 'desc')
        ->get();
        $drank['ranking'] = $rank;
        return view('pages.kesimpulan', $data, $drank);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $beli = DB::table('packages')
        //     ->select(
        //         'packages.id',
        //         'packages.name_pack'
        //     )
        //     ->get();
        // $data2['packages'] = $beli;

        // $beli = DB::table('details')
        //     ->select(
        //         'details.id',
        //         'details.location'
        //     )
        //     ->get();
        // $data2['details'] = $beli;



        // return view("pages.form", $data2);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createdata()
    {
        // $paket = DB::table('packages')
        //     ->select(
        //         'packages.id',
        //         'packages.name_pack',
        //         'packages.price',
        //         'packages.qty_photos',
        //         'packages.qty_edit',
        //         'packages.duration',
        //         'packages.working_hours'
        //     )
        //     ->get();
        // $data['packages'] = $paket;
        // return view('pages.form', $data);
    }
}
