@extends('layouts.app')

@section('content')
<div class="container col-sm-12 ">
	<div class="row">
		<div class="col-sm-2">
			<div>
				<a href="shop.html"><img src="files/bag.png"></a>
			</div>
			<div>
				<a href="top100.html"><img src="files/top.png"></a>
			</div>
		</div>
		<div class="col-sm-8">
			<div>
				<table class="table table-striped table-hover ">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Player Name</th>
				      <th>Likes</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>1</td>
				      <td>Ivan</td>
				      <td>1210</td>
				    </tr>
				  </tbody>
				</table> 
			</div>
		</div>
		
		<div class="col-sm-2 ">
			<h2>Money <span class="badge">100</span></h2>
			<h2>Likes <span class="badge">0</span></h2>
		</div>
	</div>
</div>
			
@endsection	