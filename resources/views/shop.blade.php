@extends('layouts.app')

@section('content')
 
    <div class="row">
        <div class="col-sm-8">
						<div>
							<table class="table table-striped table-hover ">
							  <thead>
							    <tr>
							      <th>#</th>
							      <th>Item</th>
							      <th>Price</th>
							      <th>Description</th>
							    </tr>
							  </thead>
							  <tbody>
                @foreach($items as $item)
                    <tr>
                        <td >
                            <div >
                                <a href="#"> <img class="media-object" src="{{$item->img_address}}" style="width: 100px; height: 72px;"> </a>
                                <div>
                                    <h4 ><a href="#">{{$item->name}}</a></h4>
                                </div>
                            </div></td>
                        <td  style="text-align: center">
                        </td>
                        <td ></td>
                        <td ><strong>{{$item->price}}</strong></td>
                        <td >
                            <a href="/removeItem/{{$item->id}}"> <button type="button" class="btn btn-danger">
                                    <span class="fa fa-remove"></span> Remove
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
 
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
             
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td>
                        <a href="/"> <button type="button" class="btn btn-default">
                                <span class="fa fa-shopping-cart"></span> Continue Shopping
                            </button>
                        </a></td>
                    <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="fa fa-play"></span>
                        </button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection