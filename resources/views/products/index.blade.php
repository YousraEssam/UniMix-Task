@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="text-align:center; color:brown; font-size:28px; font-weight:bold;">Products</h1>
@stop

@section('content')

    <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                {{-- <th scope="col">Product Logo</th>
                <th scope="col">Product Photo</th> --}}
                <th scope="col">Is Special ?</th>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->product_name }}</td>
                    {{-- <td></td>
                    <td></td> --}}
                    <td>
                        @if($product->special == 0)
                            <h5> NO </h5>
                        @elseif($product->special == 1)
                            <h5> YES </h5>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('products.show', [$product->id])}}" class="btn btn-success">View</a>
                        <a href="{{route('products.edit', [$product->id])}}" class="btn btn-success">Edit</a>
                        <form action="{{route('products.destroy', [$product->id])}}" method="post">
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
