@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-offset-2 col-md-6">
            <h3>Add new book</h3>
            <hr>



            @if($errors->count()>0)
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li style="list-style: none" class="list-group-item-danger">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">

                {{csrf_field()}}
                {{method_field('PUT')}}

                <div class="form-group">

                    <label for="name">Name: </label>
                    <input id="name" type="text" name="name" value="{{$product->name}}" class="form-control">
                </div>

                <div class="form-group">

                    <label for="price">Price: </label>
                    <input id="price" type="number" name="price" value="{{$product->price}}" class="form-control">
                </div>

                <div class="form-group">

                    <label for="image">Upload image: </label>
                    <input id="image" type="file" name="image" class="form-control">
                </div>

                <div class="form-group">

                    <label for="description">Description: </label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$product->description}}</textarea>
                </div>

                <div class="form-group">


                    <button type="submit" class="btn btn-info">Update book</button>
                </div>


            </form>
        </div>
    </div>

@endsection