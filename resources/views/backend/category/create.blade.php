@extends('admin-layouts/master')

@section('title')
    Create Category
@endsection

@section('content')

          <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Add Category</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Add Category</li>
                            </ol>
                        </div>
                    </div>
            </div>
                 
            <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase font-bold">Add Category</h5>
                                <form class="form-material m-t-40" action="{{route('categories.create.post')}}" method="post">
                                @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Category Name</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="name" class="form-control" placeholder="">
                                                <small class="text-danger">{{$errors->first('name')}}</small>

                                            </div>

                                        </div>
                                    </div>
                                   
                                  
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12">Description</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control" rows="3" name="desc"></textarea>
                                                <small class="text-danger">{{$errors->first('desc')}}</small>

                                            </div>

                                        </div>
                                    </div>
                                
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
             
                
@endsection