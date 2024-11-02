<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>

<body>
    <h1 class="text-center mt-3">Welcome to my website</h1>

    <div class="text-center mt-5">
        <a href="{{ route('mahasiswa.tampil') }}" class="btn btn-primary">kelola mahasiswa</a>
    </div>


</body>

</html>
