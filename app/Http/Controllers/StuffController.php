<?php

namespace App\Http\Controllers;

use App\Category;
use App\Stuff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StuffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stuff = Stuff::paginate(5);
        $total_stuff = Stuff::all()->count();

        foreach ($stuff as $itemAdoption) {
            $itemAdoption->category;
        }
        // return response()->json([
        //     'success' => true,
        //     'stuff' => $stuff
        //  ]);
        return view('stuff.index', compact('stuff','total_stuff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('stuff.create', compact('category'));
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
        $stuff = new Stuff();
        $request->validate([
            'name' => 'required',
            'id_category' => 'required',
            'photo' => 'required'
        ]);
        if($request->hasFile('photo')){
            $imageName = time().'.'.$request->photo->extension();  
   
            $request->photo->move(public_path('storage/photo'), $imageName);
            $stuff->photo = $imageName;
        }
        
   
        // return back()
        //     ->with('success','You have successfully upload image.')
        //     ->with('image',$imageName);
        
        
        
        $stuff->name = $request->name;
        $stuff->id_category = $request->id_category;
        $stuff->save();
        // Stuff::create([
        //     'name' => $request->name,
        //     'id_category' => $request->id_category,
        //     'photo' => $rand
        // ]);
        return redirect('/stuff')->with('status','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function show(Stuff $stuff)
    {
        //
        return view('stuff.show' , compact('stuff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function edit(Stuff $stuff)
    {
        //
        $category = Category::all();
        return view('stuff.edit', compact('stuff','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stuff $stuff)
    {
        $request->validate([
            'name' => 'required',
            'id_category' => 'required'
        ]);
        $itemStuff = Stuff::find($stuff->id);
        $imageName = null;
        if($itemStuff->photo != ''){
            if($request->hasFile('photo')){
                Storage::delete('storage/photo/' . $request->photo);
                $imageName = time().'.'.$request->photo->extension();  
       
                $request->photo->move(public_path('storage/photo/'), $imageName);
                $itemStuff->photo = $imageName;
            }
        }
       
        
        $itemStuff->name = $request->name;
        $itemStuff->id_category = $request->id_category;
        $itemStuff->update();
        //
                return redirect('/stuff')->with('status','Data Berhasil DiUpdate!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stuff $stuff)
    {
        //
        Stuff::destroy($stuff->id);
        return redirect('/stuff')->with('status','Data Berhasil Dihapus!');
    }
}
