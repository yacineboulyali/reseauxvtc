@extends('layouts.app')
@section('content')
    <div class="container">
        {!! Breadcrumbs::render('addRendezVous') !!}

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ajouter un rendez vous </div>
                    <div class="panel-body">
                        <form  role="form" method="POST" action="{{ url('rendez_vous') }}"  >
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('nombre_passger') ? ' has-error' : '' }}">
                                <label for="nombre_passger" class="col-md-4 control-label">nombre des passger  : *</label>
                                <div class="col-md-6">
                                    <input id="nombre_passger" type="number" class="form-control" name="nombre_passger"
                                           value="{{old('nombre_passger')}}" placeholder="nombre des passger">
                                    @if ($errors->has('nombre_passger'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nombre_passger') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('address_depart') ? ' has-error' : '' }}">
                                <label for="matriculation" class="col-md-4 control-label">address de depart : *</label>
                                <div class="col-md-6">
                                    <input id="address_depart" type="text" class="form-control" name="address_depart"
                                           value="{{old('address_depart')}}"   placeholder="address de depart" >

                                    @if ($errors->has('address_depart'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address_depart') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('address_arrive') ? ' has-error' : '' }}">
                                <label for="address_arrive" class="col-md-4 control-label">address de arrive : *</label>
                                <div class="col-md-6">
                                    <input id="address_arrive" type="text" class="form-control" name="address_arrive"
                                           value="{{old('address_arrive')}}" placeholder="address d'arrive">
                                    @if ($errors->has('address_arrive'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address_arrive') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('commantaire') ? ' has-error' : '' }}">
                                <label for="commantaire" class="col-md-4 control-label">Commantaire :</label>
                                <div class="col-md-6">
                                    <input id="commantaire" type="text" class="form-control" name="commantaire"
                                           value="{{old('commantaire')}}"   placeholder="commantaire">
                                    @if ($errors->has('commantaire'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('commantaire') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4"><br>
                                    <button type="submit" class="btn btn-danger">
                                        Ajouter
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
