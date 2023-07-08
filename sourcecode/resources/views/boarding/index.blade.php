<!DOCTYPE html>
<html>
<head>
    <title>Data Penitipan Hewan Peliharaan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            padding: 20px;
            text-align : center;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .btn {
            margin-bottom: 10px;
        }

        nav {
            background-color: #28b2c7;
        }

        .navbar-header{
            color: #ffffff;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                        Luxurious Pet Hotel Purupu
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <h1>Data Penitipan Hewan Peliharaan</h1>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <a href="{{ route('boarding.create') }}" class="btn btn-success">Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Hewan</th>
                    <th>Pemilik</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($boardings as $boarding)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $boarding->pet_name }}</td>
                    <td>{{ $boarding->owner_name }}</td>
                    <td>{{ $boarding->entry_date }}</td>
                    <td>{{ $boarding->exit_date }}</td>
                    <td>
                        <a href="{{ route('boarding.edit', $boarding->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('boarding.destroy', $boarding->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="{{ route('home') }}" button type="button" class="btn btn-outline-dark">Kembali</a>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>