<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $krit = DB::table('kriteria')
            ->select(
                'kriteria.id_kriteria',
                'kriteria.kategori',
                'kriteria.atribut'

            )
            ->get();
        $data['kriteria'] = $krit;
        return view("admin.order.index", $data);
    }
    public function export_excel()
    {
        return Excel::download(new OrderExport, 'order.xlsx');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_sts(Request $request, $id)
    {
        if ($request->get('status') == 1) {
            $status = 1;
            Alert::success('Status', 'Diterima');
        } else {
            Alert::success('Status', 'Ditolak');
            $status = 2;
        }
        DB::table('transactions')
            ->where('transactions.id', $id)
            ->update([
                'transactions.status' => $status
            ]);

        return back();
        // return redirect('/order');
    }
    public function create()
    {
        return view('admin.order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = DB::table('kriteria')
            ->insert([
                'kategori' => $request->get('kategori'),
                'atribut' => $request->get('atribut')
            ]);
        return redirect('/order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // ini buat form
    public function show($id)
    {

        $detail = DB::table('kriteria')
            ->select(
                'kriteria.id_kriteria',
                'kriteria.kategori',
                'kriteria.atribut'
            )
            ->where('kriteria.id_kriteria', $id)
            ->first();
        return view('admin.order.detail_order', ['detail' => $detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = DB::table('kriteria')
            ->select(
                'kriteria.id_kriteria',
                'kriteria.kategori',
                'kriteria.atribut'
            )
            ->where('kriteria.id_kriteria', $id)
            ->first();
        return view('admin.order.edit', ['edit' => $edit]);
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

        $getTable = DB::table('kriteria')
            ->where('kriteria.id_kriteria', $id);




        // HALOOOO






        $update = $getTable
            ->update([
                'kriteria.kategori' => $request->get('kategori'),
                'kriteria.atribut' => $request->get('atribut')
            ]);

        return redirect('/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('kriteria')
            ->select(
                'kriteria.id_kriteria',
                'kriteria.kategori',
                'kriteria.atribut'
            )
            ->where('kriteria.id_kriteria', $id);

        $delete->delete();
        return redirect()->route('order.index');
    }
}
