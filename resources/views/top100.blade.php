@extends('layouts.app')

@section('content')
<div class="container col-sm-12 ">
	<div class="row">
		<div class="col-sm-2">
			<div>
				<a href="shop"><img src="files/bag.png"></a>
			</div>
			<div>
				<a href="top"><img src="files/top.png"></a>
			</div>
		</div>
		<div class="col-sm-8">
			<div>
				<table class="table table-stripedt">
				  <thead class="panel-heading">
				    <tr>
				      <th>#</th>
				      <th>Player Name</th>
				      <th>Likes</th>
				    </tr>
				  </thead>
				  <tbody class="panel-body">
				   @foreach($users as $user)
				    <tr>
				      <td>{{$counter++}}</td>
				      <td>{{$user->name}}</td>
				      <td>{{$user->likes}}</td>
				    </tr>
				    @endforeach
				  </tbody>
				</table> 
			</div>
		</div>
		
		<div class="col-sm-2 ">
			<div>
				<img class="money" src="files/coins.png">
				<h2>Money <span class="badge">{{$auth->money}}</span></h2>
			</div>
			<div>
				<img class="likes" src="files/like.png">
				<h2>Likes <span class="badge">{{$auth->likes}}</span></h2>
			</div>
		</div>
	</div>
</div>
			
@endsection	
