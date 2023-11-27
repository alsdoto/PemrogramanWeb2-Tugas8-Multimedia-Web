@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Image Gallery</h3>
            <a href="{{ route('image_insert') }}" class="btn btn-primary">Add Image</a>
            <hr>
        </div>

        @if(!empty($images))
            @foreach($images as $val)
            <div class="col-md-12" align="center">
                <img src="{{ url('image/view/'.$val->image_src) }}" class="img-thumbnail" width="300">
                <b>{{ $val->image_title }}</b>
            </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
