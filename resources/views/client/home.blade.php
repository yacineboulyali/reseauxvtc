@extends('client.layout.auth')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(session()->has('setClientProfile'))
                    <div class="alert alert-success">
                        {{session()->get('setClientProfile')}}
                    </div>
                @endif
            @foreach($List_client as $client)
                    <div class="text-center">
                    <img src="{{asset('uploads/profiles/'.$client->photo)}}" alt="..." class="img-circle"
                         style="width: 200px;height: 200px">
                    <h2></h2>
                        <h3>{{$client->prenom}}&nbsp;{{$client->nom}}</h3>
                    <span class="label label-default">{{$client->auth_type}}</span>
                </div>
                <br>
                <div class="text-center">
                    <div class="col-md-4">
                        <h4><span class="label label-default">Code Postal:</span>{{$client->code_postal}}</h4>
                    </div>

                    <div class="col-md-4">
                        <h4><span class="label label-default">N°:</span> &nbsp; &nbsp;{{$client->numero_tel}}</h4>
                    </div>
                    <div class="col-md-4">
                            <h4><span class="label label-default">langue:</span> &nbsp; &nbsp;{{$client->langue}}</h4>
                    </div>
                </div>
                    <br><br><br><br><br><br>
                    <div class="row">
                        <div class="text-center">
                            <a href="{{url('client/'.$client->id.'/edit')}}" class=" btn btn-primary">Modifer Mon Profile</a>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
