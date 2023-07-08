<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="home-style.css">
    <title>Penitipan Hewan Peliharaan</title>
</head>
<body>
    <header>
        <nav class="navbar fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    Luxurious Pet Hotel Purupu
                </div>
                <ul class="nav navbar-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="{{ route('boarding.index') }}">Data</a></li>
                </ul>
            </div>
        </nav>
        <div class="head-content">
            <h1>Welcome to Luxurious Pet Hotel Purupu</h1>
            <p>ADMIN PAGE</p>
        </div>
    </header>    
</body>
</html>