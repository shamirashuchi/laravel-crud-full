@extends('master')

@section('title','Add Product')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Add Product Page</div>
                        <div class="card-body">
                            <p class="text-success text-danger">{{session('message')}}</p>
                            <form action="{{route("product.store")}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                <label class="col_md_3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name"/>
                                </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col_md_3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="price"/>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col_md_3">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col_md_3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image"/>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col_md_3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Create New Product"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
