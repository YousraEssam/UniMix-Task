@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="text-align:center; color:brown; font-size:28px; font-weight:bold;"> New Photo</h1>
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

<form class="form-horizontal" action="{{route('photos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

    <fieldset>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="photo_name">Photo Name</label>
            <div class="col-md-4">
                <input id="photo_name" name="photo_name" placeholder="Photo Name" class="form-control input-md"
                    required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="logo">Is Logo?</label>
            <div class="col-md-4">
                <input id="logo" name="logo" placeholder="Is it a logo?" class="form-control input-md" required=""
                    type="text">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Related Product</label>
            <div class="col-md-4">
                <select id="product_id" name="product_id" class="form-control">

                    @foreach ($products as $product)
                        <option value="{{$product->id}}">{{$product->product_name}}</option>
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
