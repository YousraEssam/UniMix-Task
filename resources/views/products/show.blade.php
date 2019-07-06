{{-- <h1>hello</h1>
<h1> {{ $product->product_name }}</h1> --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="text-align:center; color:brown; font-size:28px; font-weight:bold;">Products</h1>
@stop

@section('content')

<a href="{{route('products.index')}}" class="btn btn-danger">Back</a>
@csrf

<form class="form-horizontal" action="{{route('products.store')}}" method="POST">
    <fieldset>
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Product Name:</label>
            <div class="col-md-4">
                <h4 id="product_name" name="product_name" required="" type="text">
                    {{ $product->product_name}}
                </h4>

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Is Special?:</label>
            <div class="col-md-4">
                <h4 id="special" name="special" required="" type="text">
                    {{ $product->special}}
                </h4>

            </div>
        </div>

        @if(isset($product->photos))
            @for($i=0; $i<count($product->photos); $i++)
                @if($product->photos[$i]->logo == True)
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_name">Product Logo:</label>
                        <div class="col-md-4">
                            <img src="{{ asset('images/'.$product->photos[$i]->photo_name)}}" 
                                style="height:80px; width:80px;">
                        </div>
                    </div>
                @elseif($product->photos[$i]->logo == False)
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_name">Product Photo:</label>
                    <div class="col-md-4">
                        <img src="{{ asset('images/'.$product->photos[$i]->photo_name)}}" 
                            style="height:200px; width:200px;">
                    </div>
                </div>
                @endif
            @endfor
        @else
        <div class="form-group">
            <h4> no photos </h4>
        </div>
        @endif

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
