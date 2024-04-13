<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    
    @extends('layouts.app')

    @section('content')
        <h1>Search Results for "{{ $term }}"</h1>
    
        @forelse($products as $product)
            <p>{{ $product->title }}</p>
        @empty
            <p>No products found</p>
        @endforelse
    @endsection
    
   
</body>
</html>
