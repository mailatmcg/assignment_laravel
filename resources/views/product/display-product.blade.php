@extends('layouts.app') 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center">
			<h1>Product Details</h1>
			<div class="text-left"><a href="/products" class="btn btn-info">Product List</a></div>
			<br />
			<section class="text-left">
			  <p><b>Product Name :</b> {{ $product->name }}</h4>
			  <p><b>Product Decription :</b> {{ $product->summary }}</p>
			  <p><b>Product Price :</b> {{ $product->price }}
  			</section>
		</div>
	</div>
</div>
@endsection
