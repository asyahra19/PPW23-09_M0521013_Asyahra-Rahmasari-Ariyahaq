<!DOCTYPE html>
<html>
<head>
    <title>Edit Penitipan Hewan Peliharaan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            padding: 20px;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            padding-left: 300px;
            padding-right: 300px;
        }
        
        .btn {
            margin-left: 300px;
            margin-right: 300px;
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
        <h1>Edit Penitipan Hewan Peliharaan</h1>
        <form action="{{ route('boarding.update', $boarding->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_hewan">Nama Hewan:</label>
                <input type="text" class="form-control" id="nama_hewan" name="pet_name" value="{{ $boarding->pet_name }}">
            </div>
            <div class="form-group">
                <label for="pemilik">Pemilik:</label>
                <input type="text" class="form-control" id="pemilik" name="owner_name" value="{{ $boarding->owner_name }}">
            </div>
            <div class="form-group">
                <label for="tanggal_masuk">Tanggal Masuk:</label>
                <input type="date" class="form-control" id="tanggal_masuk" name="entry_date" value="{{ $boarding->entry_date }}">
            </div>
            <div class="form-group">
                <label for="tanggal_masuk">Tanggal Keluar:</label>
                <input type="date" class="form-control" id="tanggal_keluar" name="exit_date" value="{{ $boarding->exit_date }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br>
        <a href="{{ route('boarding.index') }}" class="btn btn-outline-dark">Kembali</a>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>