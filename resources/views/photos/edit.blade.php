@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="text-align:center; color:brown; font-size:28px; font-weight:bold;">Edit Photo</h1>
@stop

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<a href="{{route('photos.index')}}" class="btn btn-danger">Back</a>

<form class="form-horizontal" action="{{route('photos.update',[$photo->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        
    <fieldset>

        <!-- Text input-->
        {{-- <div class="form-group">
            <label class="col-md-4 control-label" for="photo_name">Photo</label>
            <div class="col-md-4">
                <input id="product_name" name="photo_name" value="{{$photo->photo_name}}"
                    class="form-control input-md" required="" type="text" >
            </div>
        </div> --}}

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="logo">Is Logo?</label>
            <div class="col-md-4">
                <input id="product_name" name="logo" value="{{$photo->logo}}"
                    class="form-control input-md" required="" type="text">
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Related Product</label>
            <div class="col-md-4">
                <select id="product_id" name="product_id" class="form-control">

                    @foreach ($products as $product)
                <option value="{{$product->id}}" selected="{{$product->id}}">{{$product->product_name}}</option>
                    @endforeach

                </select>
            </div>
        </div>

        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">Upload Photo</label>
            <div class="col-md-4">
                <input id="filebutton" name="photo_name" class="input-file" type="file">
            </div>
        </div>


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </fieldset>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop
