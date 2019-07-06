@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="text-align:center; color:brown; font-size:28px; font-weight:bold;">New Information</h1>
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
<a href="{{route('information.index')}}" class="btn btn-danger">Back</a>

<form class="form-horizontal" action="{{route('information.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

    <fieldset>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_profile">Product Profile</label>
            <div class="col-md-4">
                <textarea id="product_profile" name="prod_profile" placeholder="Product Profile"
                    class="form-control input-md" required="" type="text"></textarea>
                <small>Please Start Every Point with a ($).</small>

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_benefits">Product Benefits</label>
            <div class="col-md-4">
                <textarea id="product_benefits" name="prod_benefits" placeholder="Product Benefits"
                    class="form-control input-md" required="" type="text"></textarea>
                <small>Please Start Every Point with a ($).</small>

            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Product Applications</label>
            <div class="col-md-4">
                <textarea id="product_applications" name="prod_applications" placeholder="Product Applications"
                    class="form-control input-md" required="" type="text"></textarea>
                <small>Please Start Every Point with a ($).</small>

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_id">Related Product</label>
            <div class="col-md-4">
                <select id="product_id" name="product_id" class="form-control">

                    @foreach($products as $product)
                        <option value="{{$product->id}}"> {{$product->product_name}} </option>
                    @endforeach

                </select>
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
