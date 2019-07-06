{{-- <h1>hello</h1>
<h1> {{ $product->product_name }}</h1> --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="text-align:center; color:brown; font-size:28px; font-weight:bold;">Information</h1>
@stop

@section('content')

<a href="{{route('information.index')}}" class="btn btn-danger">Back</a>
@csrf

<form class="form-horizontal" action="{{route('information.store')}}" method="POST" enctype="multipart/form-data">
    <fieldset>
        <div class="form-group">
            <label class="col-md-4 control-label" for="prod_profile">Product Profile</label>
            <div class="col-md-4">
                <h4 id="product_name" name="prod_profile" required="" type="text">
                    @foreach($prod_profiles as $profile)
                        {{ $profile }}
                    @endforeach
                </h4>

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="prod_benefits">Product Benefits:</label>
            <div class="col-md-4">
                <h4 id="special" name="prod_benefits" required="" type="text">
                    @foreach($prod_benefits as $benefit)
                        {{ $benefit }}
                    @endforeach                
                </h4>

            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="prod_applications">Product Applications:</label>
            <div class="col-md-4">
                <h4 id="special" name="prod_applications" required="" type="text">
                    @foreach($prod_applications as $application)
                        {{ $application }}
                    @endforeach             
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
