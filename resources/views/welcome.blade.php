<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>

    <h1 class="text-center mt-3">Sistem Pengelolaan Data Siswa/Siswi</h1>

    <div class="text-center">
        <a href="{{ route('siswa.tampil') }}" class="btn btn-primary" style="margin-top: 50px">Kelola Data</a>
    </div>
    
</body>
</html>