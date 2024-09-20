@extends('Frontend.Layouts')

@section('OgTags')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/2.1.8/venobox.min.css"  />
@endsection


@push('frontend_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/2.1.8/venobox.min.js" ></script>

<script>
    new VenoBox({
        selector: '.my-video-links',
        spinner: "circle",
        border: "1px",
    });
</script>
@endpush

@section('frontend_contains')
    <div class="grid-container my-5">
        <div class="row">
            
            @forelse ($allVideos as $video)
            <div class="col-xl-3 gy-3">
                <div class="p-3 shadow-sm ">
                    <div class="card-body">
                      @php
                          $video_id = explode("?v=", $video->video_link);
                          $video_id = $video_id[1];
                          $thumbnail="http://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
                      @endphp
                        <div class="img">

                            <a data-gall="myGallery" class="my-video-links" data-autoplay="true" data-vbtype="video" href="{{ $video->video_link }}">
                                <img src="{{ $thumbnail }}" alt="">
                            </a>
                            
                        </div>

                        <p style="text-transform: capitalize;">{{ Str::limit($video->video_title, 50, '...') }}</p>
                    </div>

                </div>
            </div>

            {{ $allVideos->links() }}
            @empty

            <h1>No video found!</h1>
                
            @endforelse
            
        </div>
    </div>
@endsection