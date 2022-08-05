@extends('layouts.app') 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center">
			<h1>Add a new Product</h1>
			<div class="text-left"><a href="/products" class="btn btn-info">Product List</a></div>

			<form id="add-form" method="POST" action="" class="border p-3 mt-2">
				<div class="col-6 text-left">
					<label for="title">Name</label>
					<div>
						<input type="text" id="name" class="form-control mb-4" name="name"
							placeholder="Enter Name" required>
					</div>
				</div>
				<div class="control-group col-6 text-left mt-2">
					<label for="body">Description</label>
					<div>
						<textarea id="summary" class="form-control mb-4" name="summary"
							placeholder="Enter Description" rows="" required></textarea>
					</div>
				</div>
				<div class="control-group col-6 text-left mt-2">
					<label for="body">Price</label>
					<div>
						<input type="number" step="0.1" id="price" class="form-control mb-4" name="price"
							placeholder="Enter Price" required>
					</div>
				</div>

				@csrf

				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Save</button></div>
			</form>
		</div>
	</div>
</div>
@endsection
