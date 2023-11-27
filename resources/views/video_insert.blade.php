@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12"><h3>Insert Video</h3></div>
        <div class="col-md-12">
            <form action="{{ route('video_save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Video Title</label>
                    <input type="text" class="form-control" name="video_title">
                </div>
                <div class="form-group">
                    <label>Video Desc</label>
                    <textarea name="video_desc" id="ckview"></textarea>
                </div>
                <div class="form-group">
                    <label>Upload</label>
                    <input type="file" class="form-control" name="video_src">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save Video</button>
                </div>
            </form>
        </div> 
    </div>
</div>
@endsection

<script src="{{url('plugins/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{url('plugins/tinymce/tinymce.min.js')}}"></script>
<script>tinymce.init({ selector:'#ckview' });</script>

