@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h1>{{$pet->name}}</h1>
        <p class="mt-4">{{$pet->notes}}</p>
    </div>
    

@endsection