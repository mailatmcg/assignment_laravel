@extends('layouts.app') 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center">
			<h1 class="display-one mt-5">Update a Product</h1>
			<div class="text-left"><a href="/products" class="btn btn-primary">List Products</a></div>

			<form id="edit-form" method="POST" action="/products/{{ $product->id }}" class="border p-3 mt-2">
				<div class="control-group col-6 text-left">
					<label for="name">Name</label>
					<div>
						<input type="text" id="name" class="form-control mb-4" name="name"
							placeholder="Enter Name" value="{{ $product->name }}"
							required>
					</div>
				</div>
				<div class="control-group col-6 mt-2 text-left">
					<label for="body">Description</label>
					<div>
						<textarea id="summary" class="form-control mb-4" name="summary"
							placeholder="Enter Description" rows="" required>{{ $product->summary }}</textarea>
					</div>
				</div>

				<div class="control-group col-6 mt-2 text-left">
					<label for="body">Price</label>
					<div>
						<input type="text" id="price" class="form-control mb-4" name="price"
							placeholder="Enter Price" value="{{ $product->price }}"
							required>
					</div>
				</div>

				@csrf
				@method('PUT')
				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Update</button></div>
			</form>
		</div>
	</div>
</div>
@endsection
