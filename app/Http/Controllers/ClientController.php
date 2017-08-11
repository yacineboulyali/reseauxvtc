<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;

use Image;

class ClientController extends Controller
{
    public function __construct()
    {

        $this->middleware('client', ['except' => 'show']);
    }

    public function index()
    {
        $List_client = Client::where('id', auth('client')->user()->id)->get();
        return view('client.home', ['List_client' => $List_client]);
    }

    public function edit($id)
    {
        $List_client = Client::find($id);
        return view('client.edit', ['List_client' => $List_client]);

    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ClientRequest $request, $id)
    {

        $List_client = Client::find($id);

        $List_client->username = $request->input('username');
        $List_client->email = $request->input('email');
        $List_client->nom = $request->input('nom');
        $List_client->prenom = $request->input('prenom');
        $List_client->langue = $request->input('langue');

        if ($request->hasFile('photo')) {

            $photo = $request->file('photo');

            $filename = time() . '.' . $photo->getClientOriginalName();
            Image::make($photo)->resize(200, 200)->save(public_path('uploads/profiles/' . $filename));
            $List_client->photo = $filename;
        } else {
            $List_client->photo = 'profile/profile.jpg';
        }
        $List_client->numero_tel = $request->input('numero_tel');
        $List_client->address = $request->input('address');
        $List_client->code_postal = $request->input('code_postal');
        $List_client->save();

        //session()->flsah('setClientProfile', ' votre profile a été bien modifié!');

        return redirect('client');
    }

    public function show($id){
        $List_client = Client::find($id);
        return view('client.showProfile',['List_client'=>$List_client,]);

    }

}
