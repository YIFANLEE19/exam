@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Update Menu</h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <input type="hidden" name="foodId" value="{{ $menu->id }}">
                <div class="mb-3">
                    <label for="" class="form-label">Food Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="foodName" name="foodName" value="{{ $menu->foodName }}" placeholder="name@example.com">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Food Description <span class="text-danger">*</span></label>
                    <textarea class="form-control" value="{{ $menu->description }}" name="description" id="exampleFormControlTextarea1" rows="3">{{ $menu->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Price <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="foodPrice" value="{{ $menu->foodPrice }}" id="foodPrice">
                </div>
                <div class="mb-3">
                    <label for="foodImage">Food Image</label><br>
                    <img src="{{asset('images')}}/{{ $menu->foodImage }}" alt="" class="img-fluid" width="100">
                    <input type="file" class="form-control" id="foodImage" name="foodImage" >     
                </div>
                <div class="mb-3">
                    <label for="">Category Name</label>
                    <input type="text" name="categoryName" id="categoryName" class="form-control" value="{{ $menu->categoryName}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection
