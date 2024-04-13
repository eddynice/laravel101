@extends('layouts.app') @section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center pt-5">
            <div class="card">
                <div class="card-body">


 
		
			<div class="row">
				<div class="col"><h2 class="display-one mt-2">Tru</h2></div>
				<div class="col"><a href="/product" class="btn btn-outline-primary">Product List</a></div>
			</div>

			<form id="add-frm" method="POST" action="/product" class=" p-3 mt-2">
				<div class="mb-4">
					<label  class="form-label" for="title">Title</label>
					
						<input type="text" id="title" class="form-control" name="title" placeholder="Enter Title" required>
					
				</div>
				<!-- <div class="mb-4">
					<label for="title">Description</label>
					
						<input type="text" id="description" class="form-control mb-4" name="description"
							placeholder="description" required>
				</div> -->

				<!-- <div class="control-group col-6 text-left">
					<label for="title">Description</label>
					<div>
						<input type="text" id="description" class="form-control mb-4" name="image"
							placeholder="description" required>
					</div>
				</div> -->
				<!-- <div class="control-group col-6 text-left">
					<label for="title">Description</label>
					<div>
						<input type="text" id="description" class="form-control mb-4" name="slug"
							placeholder="description" required>
					</div>
				</div> -->

				<div class="mb-4 mt-2">
					<label for="body">Short Notes</label>
				
						<textarea id="short_notes" class="form-control " name="short_notes"
							placeholder="Enter Short Notes" rows="" required></textarea>
		
				</div>
				<div class="mb-4">
					<label class="form-label" for="body">Price</label>
				
						<input type="number" id="price" class="form-control" name="price"
							placeholder="Enter Price" required>
				</div>

				@csrf

				<div class="control-group  text-left mt-2"><button class="btn btn-primary p-3">Add New</button></div>
			</form>
		</div>
</div>
</div>
	</div>
</div>
@endsection

