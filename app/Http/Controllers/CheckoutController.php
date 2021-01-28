<?php

namespace App\Http\Controllers;

use App\transaction;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Storage;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login = session('email');
        $user = User::where('email', $login)
            ->first();
        $transaksi = DB::table('transactions')->join('packages', 'transactions.package_id', '=', 'packages.id')
            ->join('users', 'transactions.users_id', '=', 'users.id')
            ->join('details', 'transactions.details_id', '=', 'details.id')
            ->select(
                'transactions.id',
                'users.username',
                'users.name',
                'users.KTP',
                'users.no_phone',
                'users.location',
                'users.email',
                'packages.name_pack',
                'transactions.date',
                'transactions.status',
                'details.location',
                'details.price_transportation',
                'transactions.dp',
                'transactions.total'

            )
            ->where('users.id', $user->id)
            ->get();
            $arr = [];
            
            foreach ($transaksi as $key => $value) {
                if ($value->status!= 1) {
                    # code...
                    session(['status'=>0]);
                    array_push($arr,$value->name_pack);
                }
            }
           
        $data['users'] = $user;
        $data['transactions'] = $transaksi;
        $data['status'] = $arr;
        
        return view('pages.checkout', $data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        $update = transaction::find($id);

        if ($request->hasFile('bukti')) {
            $img = $request->file('bukti');
            $filename = time() . '.' . $img->getClientOriginalExtension();
            Storage::putFileAs("public/bukti/pesan", $img, $filename);
        }
        $update->pict=$filename;
        $update->save();
        return redirect('checkout');
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
