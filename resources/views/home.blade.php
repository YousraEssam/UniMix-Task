@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>You are logged in!</p>
    <p>Welcome {{Auth::User()->name}} to this beautiful admin panel.</p>  
    <div style="display:flex;align:center;">  
        <div class="card" style="border-radius:20px; width: 28rem; background-color:grey; margin-right:40px;text-align:center;">
            <div class="card-body" style="color:white;">
                <h5 class="card-title" style="font-size:30px;">Products</h5>
                <a href="{{route('products.index')}}" class="btn btn-primary" style="font-size:20px;">View</a>
            </div>
        </div>   
        <div class="card" style="border-radius:20px;width: 28rem; background-color:grey;margin-right:40px;text-align:center;">
            <div class="card-body" style="color:white;">
                <h5 class="card-title" style="font-size:30px;">Photos</h5>
                <a href="{{route('photos.index')}}" class="btn btn-primary"  style="font-size:20px;">View</a>
            </div>
        </div>
        <div class="card" style="border-radius:20px;width: 28rem; background-color:grey;margin-right:40px;text-align:center;">
            <div class="card-body" style="color:white;">
                <h5 class="card-title"  style="font-size:30px;">Information</h5>
                <a href="{{route('information.index')}}" class="btn btn-primary"  style="font-size:20px;">View</a>
            </div>
        </div>
    </div>  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
