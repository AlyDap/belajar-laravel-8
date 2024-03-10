@extends('layouts.main')
@section('container')
    
<h1 class="mb-5">Halaman Blog Posts</h1>

@foreach ($posts as $item)    

<article class="mb-3 p-3 shadow">
 <h2>
  <a href="/posts/{{ $item->slug }}" class="text-decoration-none">{{ $item->title }}</a>
 </h2> 
 <p>By. 
  <a href="#" class="text-decoration-none">{{ $item->user->name }}</a> 
  <a href="/categories/{{ $item->category->slug }}" class="text-decoration-none">
   {{ $item->category->name }}
  </a>
 </p>

 <p>{{ $item->excerpt }}</p>

 <a href="/posts/{{ $item->slug }}" class="text-decoration-none">Read more...</a>
</article>
 
@endforeach

@endsection
 