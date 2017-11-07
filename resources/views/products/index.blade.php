@extends('layouts.app')

@section('content')

    <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>Name</th>
          <th>Price</th>
          <th>Image</th>
          <th>Description</th>
            <th>Editing</th>
            <th>Deleting</th>
        </tr>
      </thead>
      <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{$product->name}}</td>
          <td>{{$product->price}}</td>
          <td><img  height="30" src="{{asset($product->image)}}" alt="{{$product->name}}"></td>
          <td>{{str_limit($product->description,20)}}</td>
            <td><a class="btn btn-warning btn-xs" href="{{route('products.edit',$product->id)}}">Edit</a></td>
          <td>
            <form action="{{route('products.destroy',$product->id)}}" method="post">
              {{csrf_field()}}
              {{method_field('DELETE')}}

              <button class="btn btn-danger btn-xs" type="submit">Delete</button>

            </form>
            
            
          </td>
          
          
        </tr>
        @endforeach
      </tbody>
    </table>

@stop