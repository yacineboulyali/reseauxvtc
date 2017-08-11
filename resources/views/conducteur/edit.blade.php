@extends('conducteur.layout.auth')

@section('content')
    <div class="container">

        {!! Breadcrumbs::render('editConducteur', $List_conducteur->id) !!}

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Modification de profile</div>
                    <div class="panel-body">
                        <form  role="form" method="POST" action="{{ url('/conducteur/'.$List_conducteur->id) }}"  enctype="multipart/form-data">
                            <input type="hidden" value="PUT" name="_method">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="col-md-4 control-label">Votre Username : *</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username"
                                           value="{{ $List_conducteur->username }}"   autofocus>

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Votre Address E-Mail  : *</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ $List_conducteur->email   }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                                <label for="nom" class="col-md-4 control-label">Votre  Nom : *</label>

                                <div class="col-md-6">
                                    <input id="nom" type="text" class="form-control" name="nom"
                                           placeholder="Nom"  value="{{ $List_conducteur->nom  }}">

                                    @if ($errors->has('nom'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                                <label for="nom" class="col-md-4 control-label">Votre  Prenom: *</label>

                                <div class="col-md-6">
                                    <input id="prenom" type="text" class="form-control" name="prenom"
                                           placeholder="Prénom" value="{{ $List_conducteur->prenom  }}">

                                    @if ($errors->has('prenom'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('langue') ? ' has-error' : '' }}" >
                                <label for="langue" class="col-md-4 control-label"> Selectioner Votre Llangue : *</label>

                                <div class="col-md-6">
                                    <input id="langue" type="text" class="form-control" name="langue"
                                           placeholder="Choisir une langue" value="{{ $List_conducteur->langue  }}">

                                    @if ($errors->has('langue'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('langue') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('numero_tel') ? ' has-error' : '' }}" >
                                <label for="nom" class="col-md-4 control-label">Votre Numero de telephone : *</label >

                                <div class="col-md-6">
                                    <input id="numero_tel" type="text" class="form-control" name="numero_tel"
                                           placeholder="Votre Numero de telephone" value="{{$List_conducteur->numero_tel  }}">

                                    @if ($errors->has('numero_tel'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('numero_tel') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">Votre Adress  : *</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address"
                                           placeholder="Votre Adress " value="{{ $List_conducteur->address  }}">

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('code_postal') ? ' has-error' : '' }}">
                                <label for="code_postal" class="col-md-4 control-label">Votre Code Postal : *</label>

                                <div class="col-md-6">
                                    <input id="code_postal" type="text" class="form-control" name="code_postal"
                                           placeholder="Votre Code Postal " value="{{ $List_conducteur->code_postal  }}">

                                    @if ($errors->has('code_postal'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('code_postal') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                                <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                    <label for="photo" class="col-md-4 control-label">Photo de profile :
                                    </label>

                                    <div class="col-md-6">
                                        <input id="photo" type="file" class="form-control" name="photo"
                                               value="{{$List_conducteur->photo}}">

                                        @if ($errors->has('photo'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('photo')}}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                            <div class="form-group{{ $errors->has('url_site') ? ' has-error' : '' }}">
                                <label for="url_site" class="col-md-4 control-label">site web url : *</label>

                                <div class="col-md-6">
                                    <input id="url_site" type="url" class="form-control" name="url_site"
                                           placeholder="http://  " value="{{ $List_conducteur->url_site  }}">

                                    @if ($errors->has('url_site'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('url_site') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('permis_conduire') ? ' has-error' : '' }}">
                                <label for="permis_conduire" class="col-md-4 control-label">Permis de conduire : *</label>

                                <div class="col-md-6">
                                    <input id="permis_conduire" type="file" class="form-control" name="permis_conduire"
                                           placeholder="Permis de conduire  " value="{{ $List_conducteur->permis_conduire  }}">

                                    @if ($errors->has('permis_conduire'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('permis_conduire') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('casier_judiciare') ? ' has-error' : '' }}">
                                <label for="casier_judiciare" class="col-md-4 control-label">Casier Judiciare :
                                    *</label>

                                <div class="col-md-6">
                                    <input id="casier_judiciare" type="file" class="form-control" name="casier_judiciare"
                                           placeholder="casier_judiciare  "
                                           value="{{ $List_conducteur->casier_judiciare  }}">

                                    @if ($errors->has('casier_judiciare'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('casier_judiciare') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('piece_identite') ? ' has-error' : '' }}">
                                <label for="piece_identite" class="col-md-4 control-label">Casier Judiciare :
                                    *</label>

                                <div class="col-md-6">
                                    <input id="piece_identite" type="file" class="form-control" name="piece_identite"
                                           placeholder="Piece Identite"
                                           value="{{ $List_conducteur->piece_identite  }}">

                                    @if ($errors->has('piece_identite'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('piece_identite') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4"><br>
                                        <button type="submit" class="btn btn-danger">
                                            Valider
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
