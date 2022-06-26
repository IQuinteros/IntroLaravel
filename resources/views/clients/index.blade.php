<!-- index.blade.php -->

@extends('clients.layout')

@section('head')
<title>Index de clientes</title>
@endsection

@section('contenido')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('resultado'))
    <div class="alert alert-success">
      {{ session()->get('resultado') }}
    </div><br />
  @endif

  <a href="{{ route('clients.create')}}">IR A CREAR CLIENTE</a>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Phone number</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->phone}}</td>
            <td><a href="{{ route('clients.edit', $client->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('clients.destroy', $client->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
