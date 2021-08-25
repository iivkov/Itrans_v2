@extends('vehicles.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Uređivanje podataka o vozilu</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehicles.index') }}"> Natrag</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Reg. oznaka:</strong>
                    <input type="text" name="name" value="{{ $vehicle->registration }}" class="form-control" placeholder="Unesite registracijsku oznaku">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tip:</strong>
                    <input type="text" name="type" value="{{ $vehicle->type }}" class="form-control" placeholder="Unesite tip">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nadogradnja:</strong>
                    <input type="text" name="set_up" value="{{ $vehicle->set_up }}" class="form-control" placeholder="Unesite nadogradnju">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Duljina [m]:</strong>
                    <input type="number" step ="0.01" name="length" value="{{ $vehicle->length }}" class="form-control" placeholder="Unesite duljinu (u metrima)">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Širina [m]:</strong>
                    <input type="number" step ="0.01" name="width" value="{{ $vehicle->width }}" class="form-control" placeholder="Unesite širinu (u metrima)">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Visina [m]:</strong>
                    <input type="number" step ="0.01" name="height" value="{{ $vehicle->height }}" class="form-control" placeholder="Unesite visinu (u metrima)">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nosivost [t]:</strong>
                    <input type="number" name="capacity" value="{{ $vehicle->capacity }}" class="form-control" placeholder="Unesite nosivost (u tonama)">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Spremi</button>
            </div>
        </div>
    </form>
@endsection