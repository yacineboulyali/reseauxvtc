<?php

namespace App\Http\Controllers;

use App\Client;
use App\Conducteur;
use App\Http\Requests\ClientRequest;
use App\Vehicule;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;


use Image;

class ConducteurController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('conducteur',['except' => 'show']);
    }

    public function index()
    {
        $List_conducteur = Conducteur::where('id', auth('conducteur')->user()->id)->get();
        $List_vehicule = Vehicule::where('conducteur_id', auth('conducteur')->user()->id)->withTrashed()->get();
        return view('conducteur.home', ['List_conducteur' => $List_conducteur, 'List_vehicule' => $List_vehicule]);
    }

    public function edit($id)
    {
        $List_conducteur = Conducteur::find($id);
        return view('conducteur.edit', ['List_conducteur' => $List_conducteur]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ClientRequest $request, $id)
    {

        $List_conducteur = Conducteur::find($id);

        $List_conducteur->username = $request->input('username');
        $List_conducteur->email = $request->input('email');
        $List_conducteur->nom = $request->input('nom');
        $List_conducteur->prenom = $request->input('prenom');
        $List_conducteur->langue = $request->input('langue');

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalName();
            Image::make($photo)->resize(200, 200)->save(public_path('uploads/profiles/' . $filename));
            $List_conducteur->photo = $filename;
        } else {
            $List_conducteur->photo = 'profile/profile.jpg';
        }

        if ($request->hasFile('permis_conduire')) {
            $permis_conduire = $request->file('permis_conduire');
            $filename = time() . '.' . $permis_conduire->getClientOriginalName();
            Image::make($permis_conduire)->resize(200, 200)->save(public_path('uploads/profiles/' . $filename));
            $List_conducteur->permis_conduire = $filename;
        }
        if ($request->hasFile('casier_judiciare')) {
            $casier_judiciare = $request->file('casier_judiciare');
            $filename = time() . '.' . $casier_judiciare->getClientOriginalName();
            Image::make($casier_judiciare)->resize(200, 200)->save(public_path('uploads/profiles/' . $filename));
            $List_conducteur->casier_judiciare = $filename;
        }
        if ($request->hasFile('piece_identite')) {
            $piece_identite = $request->file('piece_identite');
            $filename = time() . '.' . $piece_identite->getClientOriginalName();
            Image::make($piece_identite)->resize(200, 200)->save(public_path('uploads/profiles/' . $filename));
            $List_conducteur->piece_identite = $filename;
        }
        if ($request->hasFile('casier_judiciare')) {
            $casier_judiciare = $request->file('casier_judiciare');
            $filename = time() . '.' . $casier_judiciare->getClientOriginalName();
            Image::make($casier_judiciare)->resize(200, 200)->save(public_path('uploads/profiles/' . $filename));
            $List_conducteur->casier_judiciare = $filename;
        }


        $List_conducteur->url_site = $request->input('url_site');
        $List_conducteur->numero_tel = $request->input('numero_tel');
        $List_conducteur->address = $request->input('address');
        $List_conducteur->code_postal = $request->input('code_postal');
        $List_conducteur->save();
        //session()->flsah('setConducteurProfile', ' votre profile a été bien modifié!');

        return redirect('conducteur');
    }


    public function show($id){
        $conducteur = Conducteur::find($id);
        $List_vehicule = Vehicule::where('conducteur_id',$id)->get();
        return view('conducteur.showProfile',['conducteur'=>$conducteur,'List_vehicule'=>$List_vehicule]);

    }




}
