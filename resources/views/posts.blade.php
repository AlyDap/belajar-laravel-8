@extends('layouts.main')
@section('container')
    
<h1>Halaman Blog Posts</h1>

@foreach ($posts as $item)    

<article class="mb-5">
 <h2>
  <a href="/posts/{{ $item->id }}">{{ $item->title }}</a>
 </h2> 
 <p>{{ $item->excerpt }}</p>
</article>
 
@endforeach

@endsection
 