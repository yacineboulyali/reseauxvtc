<?php

namespace App\Http\Controllers;

use App\Http\Requests\rendez_vous_request;
use App\Http\Requests\RendezVousRequest;
use App\Rendez_vou;
use Illuminate\Http\Request;

class RenderVousController extends Controller
{





    public function index()
    {
        $list_rendes_vous = Rendez_vou::paginate(6,null,'p');
        return view('welcome', ['list_rendes_vous' => $list_rendes_vous]);
    }

    public function create()
    {
        return view('rendez_vous.create_rendez_vous');
    }

    public function store(RendezVousRequest $request)
    {
        $rendes_vous = new Rendez_vou();
        /** @noinspection PhpUndefinedFunctionInspection */
        $rendes_vous->nombre_passger = $request->input('nombre_passger');
        $rendes_vous->address_depart = $request->input('address_depart');
        $rendes_vous->address_arrive = $request->input('address_arrive');
        $rendes_vous->commantaire = $request->input('commantaire')  ;
        $rendes_vous->client_id = auth('client')->user()->id;
        $rendes_vous->save();
        return redirect('/');

    }

}
