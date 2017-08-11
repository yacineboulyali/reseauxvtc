@extends('client.layout.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Inscription</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/client/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="username" class="col-md-4 control-label">Votre Username : *</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username"
                                           value="{{ old('username') }}" autofocus>

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
                                           value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Mot de pass : *</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">Confirmer le mot de pass :*</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                                <label for="nom" class="col-md-4 control-label">Votre  Nom : *</label>

                                <div class="col-md-6">
                                    <input id="nom" type="text" class="form-control" name="nom"
                                         placeholder="Nom"  value="{{ old('nom') }}">

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
                                           placeholder="Prénom" value="{{ old('prenom') }}">

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
                                           placeholder="Choisir une langue" value="{{ old('langue') }}">

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
                                           placeholder="Votre Numero de telephone" value="{{ old('numero_tel') }}">

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
                                           placeholder="Votre Adress " value="{{ old('address') }}">

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
                                           placeholder="Votre Code Postal " value="{{ old('code_postal') }}">

                                    @if ($errors->has('code_postal'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('code_postal') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
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
