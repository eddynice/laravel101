@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
@endif
                    <!-- {{ __('You are logged in!') }} -->


					<nav class="navbar navbar-light bg-light">
						<div class="container-fluid">
						  <a class="navbar-brand">Navbar</a>
						  <form class="d-flex input-group w-auto">
							<input
							  type="search"
							  class="form-control rounded"
							  placeholder="Search"
							  aria-label="Search"
							  aria-describedby="search-addon"
							/>
							<span class="input-group-text border-0" id="search-addon">
							  <i class="fas fa-search"></i>
							</span>
						  </form>
						</div>
					  </nav>



{{-- 
					  <div>
						<div class="mx-auto pull-right">
							<div class="">
								<form action="{{ route('projects.index') }}" method="GET" role="search">
				
									<div class="input-group">
										<span class="input-group-btn mr-5 mt-1">
											<button class="btn btn-info" type="submit" title="Search projects">
												<span class="fas fa-search"></span>
											</button>
										</span>
										<input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term">
										<a href="{{ route('projects.index') }}" class=" mt-1">
											<span class="input-group-btn">
												<button class="btn btn-danger" type="button" title="Refresh page">
													<span class="fas fa-sync-alt"></span>
												</button>
											</span>
										</a>
									</div>
								</form>
							</div>
						</div>
					</div>
 --}}


					<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one m-2"> <spam style="color:red">TRU</spam> - CRUD</h1>
			
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
