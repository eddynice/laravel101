@extends('layouts.app')

@section('content')
    <h1>{{ $product->title }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: {{ $product->price }}</p>
@endsection
