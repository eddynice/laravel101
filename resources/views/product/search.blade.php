@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-body">
                    <h1>Search Results for "{{ $term }}"</h1>
                    <ul class="list-group ">
                    @forelse($products as $product)
                    <a href="{{ route('product.show', $product->id) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">{{ $product->title }}</div>
                            {{ $product->price }}
                          </div>
                       
                        </li>
                        @empty
                        <p>No products found</p>
                    @endforelse
                    </a>
                    </ul>

                     

       
    @endsection
    
                </div>
            </div>
        </div>