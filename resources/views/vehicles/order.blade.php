@extends('vehicles.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Naručivanje vozila {{ $vehicle->registration }}</h2>
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
   
<form action="{{ route('vehicles.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nadnevak polaska:</strong>
                <input type="date" name="departure_date" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mjesto polaska:</strong>
                <input type="text" name="departure_location" class="form-control" placeholder="Unesite mjesto polaska">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nadnevak dolaska:</strong>
                <input type="date" name="arrival_date" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mjesto dolaska:</strong>
                <input type="text" name="arrival_location" class="form-control" placeholder="Unesite mjesto dolaska">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dodatne informacije:</strong>
                <textarea class="form-control" style="height:150px" name="order_info" placeholder="Unesite dodatne informacije"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Spremi</button>
        </div>
    </div>
   
</form>
@endsection