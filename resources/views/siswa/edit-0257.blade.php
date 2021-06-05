<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/style.css')}}">
</head>
<body>
    <div class="menu">
		<div id="heading">
            <a href="#">Praktikum PTW</a>
        </div>
		<ul id="navigasi">
			<li><a href="/">Home</a></li>
 			<li><a href="aboutme">Tentang Saya</a></li>
 			<li><a href="artikel">Artikel</a></li>
            <li><a href="{{ route('siswa.index') }}">Siswa</a></li>
		</ul>
	</div>
    <div class="container mt-3">
    <h2 class="mt-2">Form Siswa</h2>
<p class="lead">Form Siswa</p>
<form action="{{ route('siswa.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="jhon dhoe..." value="{{ $data->nama }}">
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Address..." value="{{ $data->alamat }}">
    </div>

    <div class="form-group">
        <input type="submit" value="Save" class="btn btn-success btn-md">
    </div>
</form>
    </div>
    <div class="footer">
		<center>Copyright &copy; 2021 - <a href="https://www.facebook.com/lavonte12">AchmadS</a></center>
	</div>
</body>

<script src="{{ URL::asset('js/app.js') }}"></script>
</html>