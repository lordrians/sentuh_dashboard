<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Stuff;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transaction = Transaction::paginate(5);
        $total = Transaction::all()->count();

        foreach ($transaction as $itemTransaction) {
            $itemTransaction->mahasiswa;
            $itemTransaction->stuff->category;
            $itemTransaction->stuff;
        }
        // return response()->json([
        //     'success' => true,
        //     'stuff' => $transaction
        //  ]);
        return view('transaction.index', compact('transaction','total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $stuff = Stuff::all();
        $mahasiswa = Mahasiswa::all();
        return view('transaction.create', compact('stuff','mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_mahasiswa' => 'required',
            'id_stuff' => 'required',
            'total_stuff' => 'required'
        ]);
        $stuff = Stuff::find($request->id_stuff);

        $transaction = new Transaction();
        $transaction->id_mahasiswa = $request->id_mahasiswa;
        $transaction->id_category = $stuff->category->id;
        $transaction->id_stuff = $request->id_stuff;
        $transaction->total_stuff = $request->total_stuff;
        $transaction->save();
        // transaction::create([
        //     'name' => $request->name,
        //     'id_category' => $request->id_category,
        //     'photo' => $rand
        // ]);
        return redirect('/transaction')->with('status','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
        return view('transaction.show' , compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
        $stuff = Stuff::all();
        $mahasiswa = Mahasiswa::all();
        return view('transaction.edit', compact('transaction','stuff','mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'id_mahasiswa' => 'required',
            'id_stuff' => 'required',
            'total_stuff' => 'required'
        ]);
        $itemTransaction = Transaction::find($transaction->id);
        $imageName = null;
        
        $itemTransaction->id_stuff = $request->id_stuff;
        $itemTransaction->id_category = $request->id_category;
        $itemTransaction->id_mahasiswa = $request->id_mahasiswa;
        $itemTransaction->total_stuff = $request->total_stuff;
        $itemTransaction->update();
        //
                return redirect('/transaction')->with('status','Data Berhasil DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
        Transaction::destroy($transaction->id);
        return redirect('/transaction')->with('status','Data Berhasil Dihapus!');
    }
}
