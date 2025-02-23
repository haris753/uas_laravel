<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    #form-daftar {
        background: rgb(0, 0, 0);
        color: white;
        padding: 25px;
        width: 500px;
        margin: 100px auto;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    table {
        width: 100%;
        color:white;
    }

    table td {
        padding: 5px;
    }

    table input[type=text], table input[type=email], table input[type=password] {
        width: 100%;
        padding: 8px;
    }
</style>

<form action="/proses-daftar" method="post" id="form-daftar">
    <h2>Pendaftaran</h2>

    @if (!empty(Session::has('pesan'))) 
        <p style="color:red">{{ Session::get('pesan') }}</p>
    @endif
    
    @csrf
    <table class="">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Daftar" class="btn btn-success">
                <a href="/login">Kembali</a>
            </td>
        </tr>
    </table>
    
</form>