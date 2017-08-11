@extends('conducteur.layout.auth')
@section('content')
    <div class="container">

        {!! Breadcrumbs::render('showClient', $List_client->id) !!}

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(session()->has('setConducteurProfile'))
                    <div class="alert alert-success">
                        {{session()->get('setConducteurProfile')}}
                    </div>
                @endif
                    <div class="text-center">
                        <img src="{{asset('uploads/profiles/'.$List_client->photo)}}" alt="..." class="img-circle"
                             style="width: 200px;height: 200px">
                        <h2></h2>
                        <h3>{{$List_client->prenom}}&nbsp;{{$List_client->nom}}</h3>
                        <span class="label label-default">{{$List_client->auth_type}}</span>
                        <br><br>
                    </div>
                    <br>
                    <div class="text-center">
                        <div class="col-md-4">
                            <h4><span class="label label-default">Code Postal:</span>{{$List_client->code_postal}}</h4>
                        </div>

                        <div class="col-md-4">
                            <h4><span class="label label-default">N°:</span> &nbsp; &nbsp;{{$List_client->numero_tel}}
                            </h4>
                        </div>
                        <div class="col-md-4">
                            <h4><span class="label label-default">langue:</span> &nbsp; &nbsp;{{$List_client->langue}}
                            </h4>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
