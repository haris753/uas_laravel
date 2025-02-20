@extends('template')

@section('content')
<form action="/proses-ganti-password" method="post" style="padding: 20px">

    @csrf

    @if(Session::has('pesan'))
        <p>
            {{ Session::get('pesan') }}
        </p>
    @endif

    <table>
        <tr>
            <td>Password Lama</td>
            <td><input type="password" name="password_lama" id="password_lama"></td>
        </tr>
        <tr>
            <td>Password Baru</td>
            <td><input type="password" name="password_baru" id="password_baru"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Ubah Password</button>
            </td>
        </tr>
    </table>

</form>
@endsection