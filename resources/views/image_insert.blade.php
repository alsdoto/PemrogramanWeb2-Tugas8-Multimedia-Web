@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12"><h3>Insert Image</h3></div>
            <form action="{{ route('image_save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Image Title</label>
                    <input type="text" class="form-control" name="image_title">
                </div>
                <div class="form-group">
                    <label>Image Desc</label>
                    <textarea id="ckview" name="image_desc"></textarea>
                </div>
                <div class="form-group">
                    <label>Upload</label>
                    <input type="file" class="form-control" name="image_src">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save Image</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<script src="{{url('plugins/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{url('plugins/tinymce/tinymce.min.js')}}"></script>
<script>tinymce.init({ selector:'#ckview' });</script>

