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
			<table class="table table-striped">
				  <thead class="panel-heading">  
				    <tr>
				      <th>Item</th>
				      <th>Price</th>
				      <th>Description</th>
				      <th> </th>
				    </tr>
				  </thead>
							  
				 <tbody class="panel-body">
                  @foreach($items as $item)
                    <tr>
                        <td>
                            
                                <img class="media-object" src="{{$item->img_address}}" style="width: 100px; height: 72px;">
                                <p class="navbar-brand">{{$item->name}}</p>
                               
                         </td>
                        <td><strong>{{$item->price}} $</strong></td>
                        <td><strong>{{$item->description}} </strong></td>
                        <td >
                           
                           <a class="btn icon-btn btn-success" href="/buyItem/{{$item->id}}">
							<span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
								Add
						   </a>
                            
                          <a class="btn icon-btn btn-warning" href="/removeItem/{{$item->id}}">
							<span class="glyphicon btn-glyphicon glyphicon-minus img-circle text-warning"></span>
								Remove
						 </a>

                          
                        </td>
                    </tr>
                @endforeach
 
              
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td>
                        <a href="/"> <button type="button" class="btn btn-default">
                                <span class="fa fa-shopping-cart"></span> Continue Shopping
                            </button>
                        </a></td>
                   
                </tr>
                </tbody>
            </table>
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
