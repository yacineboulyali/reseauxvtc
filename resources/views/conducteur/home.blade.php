@extends('conducteur.layout.auth')
@section('content')
    <div class="container">
        {!! Breadcrumbs::render('conducteur') !!}

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(session()->has('setConducteurProfile'))
                    <div class="alert alert-success">
                        {{session()->get('setConducteurProfile')}}
                    </div>
                @endif
                @foreach($List_conducteur as $conducteur)
                    <div class="text-center">
                        <img src="{{asset('uploads/profiles/'.$conducteur->photo)}}" alt="..." class="img-circle"
                             style="width: 200px;height: 200px">
                        <h2></h2>
                        <h3>{{$conducteur->prenom}}&nbsp;{{$conducteur->nom}}</h3>
                        <span class="label label-default">{{$conducteur->auth_type}}</span>
                        <br><br>
                        <div class="row">
                            <div class="text-center">
                                <a href="{{url('conducteur/'.$conducteur->id.'/edit')}}" class=" btn btn-primary">Modifer
                                    Mon Profile</a>
                                <a href="{{url('vehicule/create')}}" class=" btn btn-primary">Ajouter Une Vehicule</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <div class="col-md-4">
                            <h4><span class="label label-default">Code Postal:</span>{{$conducteur->code_postal}}</h4>
                        </div>

                        <div class="col-md-4">
                            <h4><span class="label label-default">N°:</span> &nbsp; &nbsp;{{$conducteur->numero_tel}}
                            </h4>
                        </div>
                        <div class="col-md-4">
                            <h4><span class="label label-default">langue:</span> &nbsp; &nbsp;{{$conducteur->langue}}
                            </h4>
                        </div>
                    </div>
                    <br><br><br><br><br>

                     <table class="table table-striped">
                            <th>site web</th>
                            <th>permis_conduire</th>
                            <th>casier_judiciare</th>
                            <th>piece_identite</th>

                         <tr>
                             <td>
                                 <img src="{{asset('uploads/profiles/'.$conducteur->permis_conduire)}}"
                                     style="width: 60px;height: 60px;" alt="">
                             </td>
                             <td>
                                 <h5>{{$conducteur->url_site}}</h5>
                             </td>
                             <td>
                                 <img src="{{asset('uploads/profiles/'.$conducteur->casier_judiciare)}}"
                                      style="width: 60px;height: 60px;"  alt="">
                             </td>
                             <td>
                                 <img src="{{asset('uploads/profiles/'.$conducteur->piece_identite)}}"
                                      style="width: 60px;height: 60px;"  alt="">
                             </td>
                         </tr>
                     </table>


                    <br><br><br><br><br><br>

                        <h2 class="text-center">List des vehicule</h2><br>
                        <div class="row">
                            @foreach($List_vehicule as $vehicule)

                            <table class="table table-striped">
                                <th>modele</th>
                                <th>anne</th>
                                <th>matriculation</th>
                                <th>restore</th>
                                <th colspan="3">Action</th>
                                <br>

                                @if($vehicule->trashed())
                                    <tr style="background-color:#CA3C3C">
                                @else
                                    <tr>
                                        @endif
                                        <td>{{$vehicule->modele}}</td>
                                        <td>{{$vehicule->anne}}</td>
                                        <td>{{$vehicule->matriculation}}</td>
                                        @if($vehicule->trashed())
                                            <td>
                                                <form action="{{url('vehicule/delete-forever/'.$vehicule->id)}}"
                                                      method="post">
                                                    {{csrf_field()}}
                                                    <button type="submit" class="btn btn-danger">Supprimer
                                                        définitivement
                                                    </button>
                                                </form>
                                            </td>
                                        @else
                                            <td>
                                                <form action="{{url('vehicule/'.$vehicule->id)}}" method="post">
                                                    <a href="{{url('vehicule/'.$vehicule->id.'/edit')}}"
                                                       class="btn btn-primary">Editer</a>
                                                    {{csrf_field()}}
                                                    {{method_field('delete')}}
                                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                                </form>
                                            </td>
                                        @endif

                                        @if($vehicule->trashed())
                                            <td>
                                                <form action="{{url('vehicule/restore/'.$vehicule->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    <button type="submit" class="btn btn-default">restore</button>
                                                </form>
                                            </td>
                                            @endif
                                            </td>
                                    </tr>
                            </table>
                            @endforeach
                        </div>
            </div>
            @endforeach


        </div>
    </div>
@endsection
