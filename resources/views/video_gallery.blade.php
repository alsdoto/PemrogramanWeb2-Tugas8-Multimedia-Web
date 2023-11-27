@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Video Gallery</h3>
            <a href="{{ route('video_insert') }}" class="btn btn-primary">Add Video</a>
            <hr>
        </div>

        @if(!empty($videos))
            @foreach($videos as $video)
                <div class="col-md-12" align="center">
                    <video width="400" controls>
                        <source src="{{ url('video/view/'.$video->video_src) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <br>
                    <b>{{ $video->video_title }}</b>
                    <p>{{ $video->video_desc }}</p>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
