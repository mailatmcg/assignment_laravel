@extends('layouts.app') 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center">
			<h1>Products</h1>
			<div class="text-right"><a href="products/create" class="btn btn-primary">Add a 	
				product</a></div>
			<br />
			<table class="table">
				<thead>
					<tr>
						<th>Product Id</th>
						<th>Product Name</th>
						<th>Description</th>
						<th>Price (USD)</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@if(!count($products))
						<tr>
							<td colspan="4">No products found</td>
						</tr>
					@endif
					@foreach($products as $product)
					<tr>	
						<td>{{ $product->id }}</td>
						<td>{{ $product->name }}</td>
						<td>{{ $product->summary }}</td>
						<td>{{ $product->price }}</td>
						<td>
							<a href="products/{{ $product->id }}/edit" class="btn btn-outline-primary">Edit</a>
							<button type="button" class="btn btn-outline-danger" onClick='onDelete({{ $product->id }})'>Delete</button></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>


<div class="modal fade" id="deleteConfirmation" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmation">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">Are you sure to delete this product?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onClick="dismissDelete()">Cancel</button>
				<form id="delete-form" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
			</div>
		</div>
	</div>
</div>

<script>

function onDelete(id) {
	var deleteForm = document.getElementById("delete-form");
	deleteForm.action = 'products/'+id;
	var deleteConfirmation = document.getElementById("deleteConfirmation");
	deleteConfirmation.style.display = 'block';
	deleteConfirmation.classList.remove('fade');
	deleteConfirmation.classList.add('show');
}

function dismissDelete() {
	var deleteConfirmation = document.getElementById("deleteConfirmation");
	deleteConfirmation.style.display = 'none';
	deleteConfirmation.classList.remove('show');
	deleteConfirmation.classList.add('fade');
}
</script>
@endsection