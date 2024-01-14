@extends('master')

@section('title','Manage Product')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">All Product info</div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product Description</th>
                                    <th>Product Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->description}}</td>
                                    <td><img src="{{$product->image}}" alt="" height="58" width="78"/></td>
                                    <td>
                                        <a href=" " class="btn btn-success btn-sm">Edit</a>
                                        <a href=" " class="btn btn-success btn-sm">DELETE</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
