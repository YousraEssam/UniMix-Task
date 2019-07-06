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
                <th scope="col">Product Photo</th>
                <th scope="col">Product Logo</th>
                <th scope="col">Is Special ?</th>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->product_name }}</td>

                    @if(count($product->photos) > 0)
                        @foreach($product->photos as $photo)
                            @if(count($product->photos) == 1)
                                @if($photo->logo == 0)
                                    <td>
                                        <img src="{{ asset('images/'.$photo->photo_name)}}" 
                                        style="height:100px; width:100px;">
                                    </td>
                                @elseif($photo->logo == 1)
                                    <td>
                                        <img src="{{ asset('images/'.$photo->photo_name)}}" 
                                        style="height:60px; width:60px;">
                                    </td> 
                                @else
                                    <td> NOT Avaliable  </td>                         
                                @endif
                            @elseif(count($product->photos) > 1)
                                @if($photo->logo == 0)
                                    <td>
                                        <img src="{{ asset('images/'.$photo->photo_name)}}" 
                                        style="height:100px; width:100px;">
                                    </td>
                                @elseif($photo->logo == 1)
                                    <td>
                                        <img src="{{ asset('images/'.$photo->photo_name)}}" 
                                        style="height:60px; width:60px;">
                                    </td>                        
                                @endif
                            @endif
                        @endforeach
                                       
                    @elseif(count($product->photos) == 0)
                        <td> NO LOGO </td>
                        <td> NO PHOTO </td>
                    
                    @endif

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
