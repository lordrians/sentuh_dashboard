<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mahasiswa = Mahasiswa::paginate(5);
        $jml_mahasiswa = Mahasiswa::all()->count();
        // return view('mahasiswa.index', compact('mahasiswa','jml_mahasiswa'));
        return view('mahasiswa.blanks', compact('mahasiswa','jml_mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mahasiswa.create');
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
            'nama' => 'required',
            'nim' => 'required|size:10',
            'alamat' => 'required',
            'jk' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required',
            'kelas' => 'required',
            'angkatan' => 'required'
        ]);
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
            'kelas' => $request->kelas,
            'angkatan' => $request->angkatan
        ]);

        

        //kalo pake diawah ini, ga usah di masukin 1 1 lagi
        //karna bakal ngisi sesuai sama filable atau selain guarded
        // Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('status','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
        
        return view('mahasiswa.show' , compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //

        Mahasiswa::where('id', $mahasiswa->id)
                ->update([
                    'nim' => $request->nim,
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'jk' => $request->jk,
                    'jurusan' => $request->jurusan,
                    'prodi' => $request->prodi,
                    'kelas' => $request->kelas,
                    'angkatan' => $request->angkatan
                ]);
                return redirect('/mahasiswa')->with('status','Data Berhasil DiUpdate!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
        Mahasiswa::destroy($mahasiswa->id);
        return redirect('/mahasiswa')->with('status','Data Berhasil Dihapus!');
    }

    public function Collection(){
        $mahasiswaToArray = Mahasiswa::select('nim','nama')->take(3)->get();
        $ArrayMahasiswa = $mahasiswaToArray->toArray();
        foreach ($ArrayMahasiswa as $result){
            echo $result['nim'] . '-' . $result['nama'] . '<br>';
        }
        return $ArrayMahasiswa;
    }


    public function percobaan()
    {
        //
        $mahasiswa = Mahasiswa::paginate(5);
        $jml_mahasiswa = Mahasiswa::all()->count();
        // return view('mahasiswa.index', compact('mahasiswa','jml_mahasiswa'));
        return view('mahasiswa.blanks', compact('mahasiswa','jml_mahasiswa'));
    }
}



// $orang = [
//     'Ferrian redhia pratama',
//     'Zulian Zam Zam',
//     'Ilham Saiful Azis'
// ];
// $collection = collect($orang)->map(function($nama){
//     return ucwords($nama);
// });

// $mahasiswaFirst = Mahasiswa::all()->first();
        // $mahasiswaLast = Mahasiswa::all()->last();
//         $mahasiswaCount = Mahasiswa::all()->count();
//         $mahasiswaTake2 = Mahasiswa::all()->take(2);
//         $mahasiswaPluck = Mahasiswa::all()->pluck("nama");
//         $mahasiswaWhere = Mahasiswa::all()->where('nim', '321144203');
//         $mahasiswaWhereIn = Mahasiswa::all()->whereIn('nim', [
//             '321144203',
//             '321144208'
//         ]);
//         $mahasiswaToArray = Mahasiswa::select('nim','nama')->take(3)->get();
//         $ArrayMahasiswa = $mahasiswaToArray->toArray();
        // foreach ($ArrayMahasiswa as $result){
        //     echo $result['nim'] . '-' . $result['nama'] . '<br>';
        // }