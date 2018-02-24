<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Auth;

class UserControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Utilisateur.monProfil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function oublieMdp()
    {
        return view('Utilisateur.oublieMdp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
            $this->validate($request, [
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:100',
            'email' => 'required|string|email|max:255',
            'tel' => 'required|numeric|phone',
            'password' => 'required|string|min:6|confirmed',

            'adresse' => 'max:255',
            'cp' => 'numeric|max:99999',
            'ville' => 'regex:/^[\pL\s\-]+$/u|max:255',
        ]);
        $user = User::findorFail($id);
        $user -> update([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'tel' => $request->tel,
            'password' => bcrypt($request->password),

            'adresse' => $request->adresse,
            'cp' => $request->cp,
            'ville' => $request->ville,
    ]);
        return redirect()->route('monProfil')
            ->with('status', 'Votre profil à été mis à jour !');
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
