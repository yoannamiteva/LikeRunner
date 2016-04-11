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
		<div class="col-sm-2 col-sm-offset-8">
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
	<div class="row">
			<div class="col-sm-3 col-sm-offset-2">
				<div class="alert alert-dismissible alert-info">
				 
					<h3>Run for more Likes! You must be the first in top100</h3>
					
				</div>
				<a href="game" class="btn btn-danger btn-lg">Start Game</a>
		
			</div>
	
	
			<div class="col-sm-3 col-sm-offset-2">
				<img  src="http://2.bp.blogspot.com/-Wr-keslHbL0/TlTpgRrAZcI/AAAAAAAAAGA/gzoiUQ3S1rE/s1600/confused-person.png">
			</div>	
	</div>
</div>
@endsection
