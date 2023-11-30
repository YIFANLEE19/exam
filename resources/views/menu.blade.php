@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Menu</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                    <tr>
                        <th scope="row">
                            <img src="{{ asset('images/') }}/{{ $menu->foodImage }}" class="img-thumbnail" style="width: 100px" alt="">
                        </th>
                        <td>{{ $menu->foodName }}</td>
                        <td>$ {{ $menu->foodPrice }}</td>
                        <td>{{ $menu->categoryName }}</td>
                        <td>
                            <a href="{{ route('edit', ['id' => $menu->id ]) }}" class="btn btn-primary">Edit</a>
                        </td>
                      </tr>   
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
