@extends('layouts.main')
@section('container')
    
<h1 class="mb-5">Post Category : {{ $category }}</h1>

@foreach ($posts as $item)    

<article >
 <h2>
  <a href="/posts/{{ $item->slug }}">{{ $item->title }}</a>
 </h2> 
 <p>{{ $item->excerpt }}</p>
</article>
 
@endforeach

@endsection
 