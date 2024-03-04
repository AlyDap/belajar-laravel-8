@extends('layouts.main')

@section('container')
    

<h1>Halaman About</h1>
{{-- <h3><?= $name?></h3> --}}
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">

@endsection

{{-- 
 run program cmd: php artisan serve 

 run dengan valet
 tp sebelumnya diluar direktori : valet park
 http://example-app.test/
 atau nama project .test
 
 --}}