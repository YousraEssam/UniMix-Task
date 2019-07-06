@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="text-align:center; color:brown; font-size:28px; font-weight:bold;">Photo</h1>
@stop

@section('content')

<a href="{{route('photos.index')}}" class="btn btn-danger">Back</a>
@csrf

<form class="form-horizontal" action="{{route('photos.store')}}" method="POST" enctype="multipart/form-data">
    <fieldset>
        <div class="form-group">
            <label class="col-md-4 control-label" for="photo_name">Photo Name:</label>
            <div class="col-md-4">
                <h4 id="product_name" name="photo_name" required="" type="text">
                        {{ $photo->photo_name }}
                </h4>

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="prod_benefits">Is Logo?</label>
            <div class="col-md-4">
                <h4 id="special" name="prod_benefits" required="" type="text">
                    @if($photo->logo == 0)
                        <h4>No</h4>
                    @elseif($photo->logo == 1)
                        <h4>Yes</h4>
                    @endif
                </h4>

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Product Name:</label>
            <div class="col-md-4">
                    <h4 id="special" name="product_name" required="" type="text">
                        {{ $product->product_name }}
                    </h4>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name"></label>
            <div class="col-md-4">
                <img src="{{asset('images/'.$photo->photo_name)}}" style="height:200px; width:200px;">
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
