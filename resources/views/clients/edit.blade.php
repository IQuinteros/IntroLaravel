@extends('clients.layout')

@section('contenido')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar cliente
  </div>
  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('clients.update', $client->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $client->name }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Email:</label>
              <input type="email" class="form-control" name="email" value="{{ $client->email }}"/>
          </div>
          <div class="form-group">
                <label for="cases">Email:</label>
                <input type="number" class="form-control" name="phone" value="{{ $client->phone }}"/>
           </div>

          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>

  </div>
</div>
@endsection
