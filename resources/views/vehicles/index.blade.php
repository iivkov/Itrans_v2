@extends('vehicles.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vozila</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('vehicles.create') }}"> Dodavanje novog vozila</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>RB</th>
            <th>Reg. oznaka</th>
            <th>Tip</th>
            <th>Nadogradnja</th>
            <th>Duljina [m]</th>
            <th>Širina [m]</th>
            <th>Visina [m]</th>
            <th>Nosivost [t]</th>
            <th width="280px">Radnje</th>
        </tr>
        @foreach ($vehicles as $vehicle)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $vehicle->registration }}</td>
            <td>{{ $vehicle->type }}</td>
            <td>{{ $vehicle->set_up }}</td>
            <td>{{ $vehicle->length }}</td>
            <td>{{ $vehicle->width }}</td>
            <td>{{ $vehicle->height }}</td>
            <td>{{ $vehicle->capacity }}</td>
            <td>
                <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('vehicles.show', $vehicle->id) }}">Naruči</a>
    
                    <a class="btn btn-primary" href="{{ route('vehicles.edit', $vehicle->id) }}">Uredi</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Obriši</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $vehicles->links() !!}
      
@endsection