@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="text-align:center; color:brown; font-size:28px; font-weight:bold;">Information</h1>
@stop

@section('content')
    <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Profile</th>
                <th scope="col">Product Benefits</th>
                <th scope="col">Product Applications</th>
                <th scope="col">to Product</th>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($information as $info)
                    
                <tr>
                    <th scope="row">{{ $info->id }}</th>
                    <td>{{ $info->prod_profile }}</td>
                    <td>{{ $info->prod_benefits }}</td>
                    <td>{{ $info->prod_applications }}</td>
                    <td>{{ $info->product['product_name'] }}</td>
                    <td>
                        <a href="{{route('information.show', [$info->id])}}" class="btn btn-success">View</a>
                        <a href="{{route('information.edit', [$info->id])}}" class="btn btn-success">Edit</a>
                        <form action="{{route('information.destroy', [$info->id])}}" method="post">
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
