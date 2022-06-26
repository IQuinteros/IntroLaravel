
@extends('clients.layout')

@section('contenido')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Add Client Data
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

      <form method="post" action="{{ route('clients.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">Nombre:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="cases">Email:</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
            <label for="cases">Número:</label>
            <input type="number" class="form-control" name="phone"/>
        </div>
          <button type="submit" class="btn btn-primary">Add client</button>
      </form>
  </div>
</div>
@endsection
