<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        return view('myprofile.index');
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
        return view('myprofile.edit');
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
        // Proses Validasi input
        $validatedData = $request->validate([
            'nama'      => ['required', 'max:50', 'min:3'],
            'alamat'    => ['required', 'max:200', 'min:20'],
            'telepon'   => ['required', 'max:14', 'min:12'],
            'sim'       => ['required', 'max:16', 'min:14'],
            'password'  => ['required']
        ]);

        // Proses Update table users
        User::where('id', $id)->update([
            'nama'      => $validatedData['nama'],
            'alamat'    => $validatedData['alamat'],
            'telepon'   => $validatedData['telepon'],
            'sim'       => $validatedData['sim'],
            'password'  => $validatedData['password']
        ]);

        // Redirect dengan pesan
        return redirect('/myprofile')->with('edit_profile_success', 'Proses edit profile '.$validatedData['nama'].' berhasil!');
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
