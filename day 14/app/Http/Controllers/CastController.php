<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = Cast::all();
        return view('Cast.tampil',['Cast'=> $cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Cast.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $cast = new Cast;
 
        $cast->name = $request->input('name');
        $cast->umur = $request->input('umur');
        $cast->bio = $request->input('bio');
 
        $cast->save();
 
        return redirect('/Cast');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = Cast::find($id);
        return view('Cast.detail',['Cast'=> $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = Cast::find($id);

        return view('Cast.edit',['Cast'=> $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'name' => 'required|min:2',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        Cast::where('id', $id)
            ->update(
                [
                    'name' => $request->input('name'),
                    'umur' => $request->input('umur'),
                    'bio' => $request->input('bio'),]);

        return redirect('/Cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cast::where('id', $id)->delete();

        return redirect('/Cast');
    }
}
