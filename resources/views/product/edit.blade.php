
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
               
                <div class="card-body">


	
		<div class="text-center pt-5">
			<h1 class="display-one mt-2"><spam style="color:red">TRU</spam> - Edit</h1>
			<div class="text-left"><a href="/product" class="btn btn-outline-primary">Product List</a></div>

			<form id="edit-frm" method="POST" action="{{ url('update/' .$product->id)}}" class="p-3 mt-2">
				<div class="mb-3">
					<label  class="form-label" for="title">Title</label>
					
						<input type="text" id="title" class="form-control mb-4" name="title"
							placeholder="Enter Title" value="{{ $product->title }}"
							required>
					
				</div>
				<div class="mb-3">
					<label  class="form-label"  for="body">Short Notes</label>
				
						<textarea id="short_notes" class="form-control mb-4" name="short_notes"
							placeholder="Enter Short Notes" rows="" required>{!! $product->short_notes !!}</textarea>
					
				</div>

				<div class="mb-3">
					<label  class="form-label" for="body">Price</label>
				
						<input type="text" id="price" class="form-control mb-4" name="price"
							placeholder="Enter Price" value="{!! $product->price !!}"
							required>
					
				</div>
                @csrf 
				@method('PUT')
				<div class=" mt-4">
					<button class="btn btn-primary p-3">Saves Update</button>
				</div>
			</form>
		
		</div>
</div>
	</div>
	</div>
</div>
	</div>
</div>
@endsection
