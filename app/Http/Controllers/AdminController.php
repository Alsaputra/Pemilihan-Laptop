<?php

namespace App\Http\Controllers;
use App\Exports\OrderExport;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('email') == 'admin@gmail.com') {
            //Jmlah Pesanan
            $jumlah_produk = DB::table('alternatif')->select('merk_lp')->count('merk_lp');
            $data['jalternatif'] = $jumlah_produk;

            //Jumlah Paket 
            $jumlah_paket = DB::table('kriteria')->select('kategori')->count('kategori');
            $data['jkriteria'] = $jumlah_paket;


            // Menampilkan tabel pesanan
            $packages = DB::table('normal')->join('alternatif', 'normal.id_lp', '=', 'alternatif.id_lp')->get();
            $data['normalisasi'] = $packages;


            //Jumlah Paket 
            // $jumlah_paket = DB::table('transactions')
            //     ->select('package_id', DB::raw('count(*) as total'))->groupBy('package_id')->get();
            // $data['perpaket'] = $jumlah_paket;
            //raw = untuk kondisi diantara string dan int


            // laporan oi
            // $getDataReport = DB::table('transactions')->select(DB::raw('sum(total) as `data`'),  DB::raw('YEAR(date) year, MONTH(date) month'))
            //     ->groupby('year', 'month')
            //     ->get();

            // $data['report'] = $getDataReport;






            return view('admin.index', $data);
        }
        return redirect("/");
    }
    // public function export_excel()
	// {
	// 	return Excel::download(new OrderExport, 'pesanan.xlsx');
	// }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
