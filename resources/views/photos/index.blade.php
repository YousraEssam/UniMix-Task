@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="text-align:center; color:brown; font-size:28px; font-weight:bold;">Photos</h1>
@stop

@section('content')

    <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Photo Name</th>
                <th scope="col">Is Logo ?</th>
                <th scope="col">to Product</th>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($photos as $photo)
                <tr>
                    <th scope="row">{{ $photo->id }}</th>
                    <td><img src="{{asset('images/'.$photo->photo_name)}}"  style="height:80px; width:80px;"></td>
                    <td>
                        @if($photo->logo == 0)
                            <h5> NO </h5>
                        @elseif($photo->logo == 1)
                            <h5> YES </h5>
                        @endif
                    </td>
                    <td>{{ $photo->product->product_name }}</td>
                    <td>
                        <a href="{{route('photos.show', [$photo->id])}}" class="btn btn-success">View</a>
                        <a href="{{route('photos.edit', [$photo->id])}}" class="btn btn-success">Edit</a>
                        <form action="{{route('photos.destroy', [$photo->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"> Delete </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
