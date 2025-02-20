@extends('template')

@section('content')
    <h1>Welcome</h1>
    <p>
        Selamat Datang <b>{{ Auth::user()->name }}</b>
    </p>
    
@endsection
