@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="text-align:center; color:brown; font-size:28px; font-weight:bold;"> New Photo</h1>
@stop

@section('content')

<form class="form-horizontal" method="POST">
    <fieldset>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="photo_name">Photo Name</label>
            <div class="col-md-4">
                <input id="photo_name" name="photo_name" placeholder="photo NAME" class="form-control input-md"
                    required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="photo_name">Is Logo?</label>
            <div class="col-md-4">
                <input id="photo_name" name="photo_name" placeholder="photo NAME" class="form-control input-md"
                    required="" type="text">

            </div>
        </div>

        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">Upload Photo</label>
            <div class="col-md-4">
                <input id="filebutton" name="filebutton" class="input-file" type="file">
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
