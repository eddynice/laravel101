@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
@endif
                    <!-- {{ __('You are logged in!') }} -->


<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Tru</a>
        <form class="d-flex" action="/search" method="GET"> 
			@csrf
            <input class="form-control me-2" required type="text" id="term" name="term" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>




					<div class="row">
		<div class="col-12 text-center pt-5">
			
					<div class="text-left"><a href="product/create" class="btn btn-outline-primary">Add new
						product</a></div>

		

			<table class="table mt-3  text-left">
				<thead>
					<tr>
						<th scope="col">Product Title</th>
						<th scope="col" class="pr-5">Price (USD)</th>
						<th scope="col">Short Notes</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse($products as $product)
					<tr>
						<td>{!! $product->title !!}</td>
						<td class="pr-5 text-right">{!! $product->price !!}</td>
						<td>{!! $product->short_notes !!}</td>
						
						<td><a href="product/{!! $product->id !!}/edit"
							class="btn btn-outline-primary">Edit</a>
							<button type="button" class="btn btn-outline-danger ml-1"
								onClick='showModel({!! $product->id !!})'>Delete</button></td>
					</tr>
					@empty
					<tr>
						<td colspan="3">No products found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>



<div class="modal fade" id="deleteConfirmationModel" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">Are you sure to delete this record?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onClick="dismissModel()">Cancel</button>
				<form id="delete-frm" class="" action="/product/{{$product->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
			</div>
		</div>
	</div>
</div>
<script>
    

function showModel(id) {
	var frmDelete = document.getElementById("delete-frm");
	frmDelete.action = 'product/'+id;
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'block';
	confirmationModal.classList.remove('fade');
	confirmationModal.classList.add('show');
}

function dismissModel() {
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'none';
	confirmationModal.classList.remove('show');
	confirmationModal.classList.add('fade');
}
</script>
                </div>


                

	


            </div>
        </div>
    </div>
</div>
@endsection
