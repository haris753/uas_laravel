@extends('template')

@section('content')
<h2>Profil Saya</h2>

<table class="table table-bordered">
    <tr>
        <td>Nama</td>
        <td>{{ Auth::user()->name }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ Auth::user()->email }}</td>
    </tr>
</table>
@endsection