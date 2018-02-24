<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Devis;
use DB;
use App\Quotation;
use App\Contact;

class AdminControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbrDevis = devis::all()->count();
        $nbrContact = contact::all()->count();

        $nbrUsers = user::all()->count();
        $nbrAdmin = user::all()->where('admin', 1)->count();

        $devis = devis::all();
    
        return view('Administration.dashboard',compact('nbrDevis', 'nbrContact', 'nbrAdmin', 'nbrUsers', 'devis'));
    }

    public function Util()
    {
        $nbrDevis = devis::all()->count();
        $nbrContact = contact::all()->count();

        $utils = user::all();
        return view('Administration.utilisateurs' , compact('utils', 'nbrDevis', 'nbrContact'));
    }
    public function UtilSelect($id)
    {
        $nbrDevis = devis::all()->count();
        $nbrContact = contact::all()->count();

        $user = user::findorFail($id);
        return view('Administration.utilisateursModifs' , compact('user', 'nbrDevis', 'nbrContact'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function devis()
    {
        $nbrDevis = devis::all()->count();
        $nbrContact = contact::all()->count();

        $devis = devis::all();
        return view('Administration.devisA',compact('devis', 'nbrDevis', 'nbrContact'));
    }

    public function DevisSelect($id)
    {
        $nbrDevis = devis::all()->count();
        $nbrContact = contact::all()->count();

        $devis = devis::findorFail($id);
        return view('Administration.devisDetails' , compact('devis', 'nbrDevis', 'nbrContact'));
    }

    public function demande()
    {
        $nbrDevis = devis::all()->count();
        $nbrContact = contact::all()->count();

        $demandes = DB::table('contact')
            ->select('*')
            ->get();

        return view('Administration.demande',compact('demandes', 'nbrDevis', 'nbrContact'));
    }
    public function demandeSelect($id)
    {
        $nbrDevis = devis::all()->count();
        $nbrContact = contact::all()->count();

        $demande = contact::findOrFail($id);

        return view('Administration.demandeDetails' , compact('demande', 'nbrDevis', 'nbrContact'));
    }

    public function store(Request $request ,$id)
    {
            $this->validate($request, [
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:100',
            'email' => 'required|string|email|max:255',
            'tel' => 'required|numeric|phone', 
            'password' => 'required|string|min:6|confirmed',
            'admin' => 'required|boolean',

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
            'admin' => $request->admin,
            
            'adresse' => $request->adresse,
            'cp' => $request->cp,
            'ville' => $request->ville,
    ]);
        return redirect()->route('adminUtilisateurs')
            ->with('status', 'Le profil à été mis à jour !');
    }

    public function Suppresion($id)
    {
        $MembSup = user::findOrFail($id);
        $MembSup->delete();

        return redirect()->route('adminUtilisateurs')
        ->with('status', 'Suppresion éffectuée avec succès');
    }   

    public function SuppresionDevis($id)
    {
        $DevisSup = devis::findOrFail($id);
        $DevisSup->delete();

        return redirect()->route('adminDevis')
        ->with('status', 'Suppresion éffectuée avec succès');
    }
    public function SuppresionDemande($id)
    {
        $DemandeSup = contact::findOrFail($id);
        $DemandeSup->delete();

        return redirect()->route('adminContact')
        ->with('status', 'Suppresion éffectuée avec succès');
    }

}
