<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Devis;
use Illuminate\Http\Request;
use DB;
use App\Quotation;
use Auth;
use App\User;
use App\Contact;

class SideBarControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Sidebar.accueil');
    }

    public function services()
    {
        return view('Sidebar.services');
    }

    public function devis()
    {
        $user = DB::table('users')
            ->select('*')
            ->get();
            
        return view('Sidebar.devis', compact('user'));
    }

    public function apropos()
    {
        return view('Sidebar.àpropos');
    }

    public function contacter()
    {
        $user = DB::table('users')
            ->select('*')
            ->get();

        return view('Sidebar.contacter', compact('user'));
    }

    public function store(Request $request)
    {
        // $dateDuJour = date("Y-m-d H:i:s");

            $this->validate($request, [
            'nom' => 'required|alpha|max:255',
            'prenom' => 'required|alpha|max:100',
            'email' => 'required|string|email|max:255|unique:devis,email',
            'tel' => 'required|numeric|digits:10',

            'adresse' => 'required|string|max:255',
            'cp' => 'required|numeric|digits:5',
            'ville' => 'required|alpha|max:255',

            'installation' => 'boolean',
            'entretien' => 'boolean',
            'depannage' => 'boolean',

            'dateVoulu' => 'required|date|after:tomorrow',
            'desc' => 'required|string|max:2000',
        ]);

        DB::table('devis')->insert([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'tel' => $request->tel,
            
            'adresse' => $request->adresse,
            'cp' => $request->cp,
            'ville' => $request->ville,

            'installation' => $request->installation,
            'entretien' => $request->entretien,
            'depannage' => $request->depannage,

            'dateVoulu' => $request->dateVoulu,
            'desc' => $request->desc,
    ]);
        return redirect()->route('accueil');
        //     //->with('status', 'Le profil à été mis à jour !');
    }

    public function store2(Request $request)
    {
            $this->validate($request, [
            'nom' => 'required|alpha|max:255',
            'email' => 'required|string|email|max:255|unique:contact,email',
            'telephone' => 'required|numeric|digits:10',

            'objet' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        DB::table('contact')->insert([
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,

            'objet' => $request->objet,
            'message' => $request->message,
    ]);
        return redirect()->route('accueil');
        //     //->with('status', 'Le profil à été mis à jour !');
    }
}
