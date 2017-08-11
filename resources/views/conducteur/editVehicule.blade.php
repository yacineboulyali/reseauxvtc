@extends('conducteur.layout.auth')

@section('content')
    <div class="container">
        {!! Breadcrumbs::render('editVehicule', $vehicule->id) !!}

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Vehicule</div>
                    <div class="panel-body">
                        <form  role="form" method="POST" action="{{ url('vehicule/'.$vehicule->id) }}"  >
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('modele') ? ' has-error' : '' }}">
                                <label for="modele" class="col-md-4 control-label">Modele : *</label>

                                <div class="col-md-6">
                                    <input id="modele" type="text" class="form-control" name="modele" placeholder="Modele"
                                              value="{{$vehicule->modele}}" >

                                    @if ($errors->has('modele'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('modele') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('anne') ? ' has-error' : '' }}">
                                <label for="anne" class="col-md-4 control-label">Annee  : *</label>

                                <div class="col-md-6">
                                    <input id="anne"  class="form-control" name="anne" placeholder="Annee"
                                           placeholder="anne" value="{{$vehicule->anne}}">

                                    @if ($errors->has('anne'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('anne') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('matriculation') ? ' has-error' : '' }}">
                                <label for="matriculation" class="col-md-4 control-label">Imatriculation : *</label>

                                <div class="col-md-6">
                                    <input id="matriculation" type="text" class="form-control" name="matriculation"
                                           value="{{$vehicule->matriculation}}" placeholder="matriculation" >

                                    @if ($errors->has('matriculation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('matriculation') }}</strong>
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
