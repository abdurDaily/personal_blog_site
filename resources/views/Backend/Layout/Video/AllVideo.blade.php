@extends('Backend.Layout.Layout')
@section('backend_contains')
@push('search')
    <div class="header-search d-none d-md-flex">
        <form action="" method="post">
            @csrf
            <input type="text" placeholder="Search..." />
            <button type="submit"><i class="lni lni-search-alt"></i></button>
        </form>
    </div>
@endpush
   <div class="row bg-light p-3 shadow">
     <div class="col table-responsive">
        <div class="blog_header mb-3">
            <h4 style="color: #888">All video list</h4>
        </div>
        <table class="table table-hover table-striped text-center">
            <tr>
                <th style="border: 1px solid #ccc">#</th>
                <th style="border: 1px solid #ccc">Title</th>
                <th style="border: 1px solid #ccc">Status</th>
            </tr>

            @forelse ($allVideoRecords as $key => $video)
                <tr>
                    <td style="border: 1px solid #ccc">{{ ++$key }}</td>
                    <td style="border: 1px solid #ccc">{{ $video->video_title }}</td>
                    <td style="border: 1px solid #ccc">
                        <div class="btn-group">
                            <a href="{{ route('video.edit', $video->id) }}" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{ route('video.delete', $video->id) }}" class="btn btn-sm btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                          </div>
                    </td>
                </tr>
            @empty
                
            @endforelse

        </table>

     </div>
   </div>
@endsection
