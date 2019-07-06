@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="text-align:center; color:brown; font-size:28px; font-weight:bold;">New Information</h1>
@stop

@section('content')

<form class="form-horizontal" method="POST">
    <fieldset>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Product Profile</label>
            {{-- <small>Please Start Every Point with a ($).</small> --}}
            <div class="col-md-4">
                <textarea id="product_name" name="product_name" placeholder="Product Profile"
                    class="form-control input-md" required="" type="text"></textarea>
                <small>Please Start Every Point with a ($).</small>

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Product Benefits</label>
            <div class="col-md-4">
                <textarea id="product_name" name="product_name" placeholder="Product Benefits"
                    class="form-control input-md" required="" type="text"></textarea>
                <small>Please Start Every Point with a ($).</small>

            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Product Applications</label>
            <div class="col-md-4">
                <textarea id="product_name" name="product_name" placeholder="Product Applications"
                    class="form-control input-md" required="" type="text"></textarea>
                <small>Please Start Every Point with a ($).</small>

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Product Name</label>
            <div class="col-md-4">
                <select id="product_name" name="product_name" class="form-control">
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
