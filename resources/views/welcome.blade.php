@extends('layouts.app')
@section('content')
    @if (auth('conducteur')->check() or auth('client')->check())
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    @foreach($list_rendes_vous as $rendes_vous)
                    <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="{{asset('uploads/profiles/'.$rendes_vous->client->photo)}}"
                                     style="width: 280px;height: 280px">
                                <div class="caption">
                                    <h3>Thumbnail label</h3><span> client :<a href="{{url('client/'.$rendes_vous->client->id)}}">{{$rendes_vous->client->username}}</a></span><br>
                                    <span>nombre des passager : </span><span>{{$rendes_vous->nombre_passger}}</span><br>
                                    <span>date : </span><span>{{$rendes_vous->date}}</span><br>
                                    <span>address de depart : </span><span>{{$rendes_vous->address_depart}}</span>
                                    <span>address de arrive : </span><span>{{$rendes_vous->address_arrive}}</span>
                                    <p>
                                        <a href="#" class="btn btn-primary" role="button">Button</a>
                                        <a href="#" class="btn btn-default" role="button">Button</a>
                                    </p>
                                </div>
                            </div>
                    </div>
                    @endforeach
                    <div class="col-md-12 text-center">
                    {!! $list_rendes_vous->render() !!}
                    </div>
                </div>

                <div class="col-md-2">
                    <a href="/rendez_vous/create" class="btn btn-default pull-right">
                        <span class=" glyphicon glyphicon-plus"></span> Rendez Vous</a>
                </div>
            </div>
        </div>
    @else
        <div class="row" style="margin-top: 10px;">
            <h1 class="text-center text-uppercase" style="color: #7da8c3">bienvenue a vous ReseauxVtc</h1>
            <br>
            <div class="col-md-7 col-md-offset-3">
                <div class="col-sm-6 col-md-5">
                    <div class="thumbnail">
                        <img src="https://www.aminz.org.nz/themes/portal/uploads/profile-default-large.jpg" alt="...">
                        <div class="caption">
                            <h3 class="text-center ">je suis conducteur</h3>
                            <p></p><br>
                            <p class="text-center">
                                <a href="{{url('/conducteur/login')}}" class="btn btn-primary" role="button">Entrer</a>
                                <a href="{{url('/conducteur/register')}}" class="btn btn-default"
                                   role="button">Inscrire</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5">
                    <div class="thumbnail">
                        <img src="https://www.aminz.org.nz/themes/portal/uploads/profile-default-large.jpg" alt="...">
                        <div class="caption">
                            <h3 class="text-center">Je suis Client</h3>
                            <p></p><br>
                            <p class="text-center">
                                <a href="{{url('/client/login')}}" class="btn btn-primary" role="button">Entrer</a>
                                <a href="{{url('/client/register')}}" class="btn btn-default" role="button">Inscrire</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection




