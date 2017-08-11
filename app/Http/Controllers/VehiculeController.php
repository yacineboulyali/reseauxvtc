<?php

namespace App\Http\Controllers;

use App\Http\Requests\vehiculeRequest;
use Illuminate\Http\Request;
use App\Vehicule;

class VehiculeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('conducteur');
    }
    public function index(){
       // $List_vehicules = Vehicule::where('conducteur_id',auth('conducteur')->user()->id)->get()
        //return view('conducteur.home',['List_vehicules'=>$List_vehicules]);

    }

    public function create(){
        return view('conducteur.createVehicule');
    }


    public function store(vehiculeRequest $request)
    {
        $List_vehicule = new Vehicule();
        $List_vehicule->modele = $request->input('modele');
        $List_vehicule->anne = $request->input('anne');
        $List_vehicule->matriculation = $request->input('matriculation');
        $List_vehicule->conducteur_id = auth('conducteur')->user()->id;
        $List_vehicule->save();
        return redirect('conducteur');
    }


    public function edit($id)
    {
        $vehicule = Vehicule::find($id);
        return view('conducteur.editVehicule',['vehicule'=>$vehicule]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(vehiculeRequest $request, $id)
    {

        $vehicule = Vehicule::find($id);

        $vehicule->modele =$request->input('modele');
        $vehicule->anne =$request->input('anne');
        $vehicule->matriculation =$request->input('matriculation');
        $vehicule->save();
        return redirect('conducteur');
    }

    public function destroy($id){
        Vehicule::destroy($id);
        return redirect('conducteur');
    }


    public function restore($id){
        $vihecule =  Vehicule::onlyTrashed()->find($id);
        $vihecule->restore();
        return redirect('conducteur');
    }

    public function DeleteForever($id)
    {
        $vihecule = Vehicule::onlyTrashed()->find($id);
        $vihecule->forceDelete();
        return redirect('conducteur');
    }
}
