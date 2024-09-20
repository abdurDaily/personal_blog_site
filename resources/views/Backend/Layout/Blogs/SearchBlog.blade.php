@extends('Backend.Layout.Layout')
@section('backend_contains')
@push('search')
    <div class="header-search d-none d-md-flex">
        <form action="{{ route('blog.search') }}" method="post">
            @csrf
            <input name="search_blog" type="text" placeholder="Search..." />
            <button type="submit"><i class="lni lni-search-alt"></i></button>
        </form>
    </div>
@endpush
   <div class="row bg-light p-3 shadow">
     <div class="col table-responsive">
        <div class="blog_header mb-3">
            <h4 style="color: #888">search data</h4>
        </div>
        <table class="table table-hover table-striped text-center">
            <tr>
                <th style="border: 1px solid #ccc">#</th>
                <th style="border: 1px solid #ccc">Title</th>
                <th style="border: 1px solid #ccc">Author</th>
                <th style="border: 1px solid #ccc">Details</th>
                <th style="border: 1px solid #ccc">Image</th>
                <th style="border: 1px solid #ccc">Active</th>
                <th style="border: 1px solid #ccc">Status</th>
            </tr>

            @forelse ($blogs as $key=>$blog)
                <tr>
                    <td style="border: 1px solid #ccc">{{ $key + $blogs->firstItem() }}</td>
                    <td style="border: 1px solid #ccc">{{ $blog->blog_title }}</td>
                    <td style="border: 1px solid #ccc">{{ $blog->user->name }}</td>
                    <td style="border: 1px solid #ccc">{!! Str::limit($blog->blog_details, 100, '....') !!}</td>
                    <td style="border: 1px solid #ccc">
                        <img style="width: 100px" src="{{ $blog->blog_image == null ? env('APP_URL'). '/assets/images/default/code.svg' : $blog->blog_image }}" alt="">
                    </td>
                    <td style="border: 1px solid #ccc">
                        <a style="font-size:25px; color: {{ $blog->active_status == 1 ? 'green' : 'red'  }};" href="{{ route('blog.active', $blog->id) }}"><i class="fa-{{ $blog->active_status == 1 ? 'solid' : 'regular'  }} fa-eye"></i></a>
                    </td>
                    <td style="border: 1px solid #ccc">
                        <div class="btn-group">
                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{ route('blog.delete', $blog->id) }}" class="btn btn-sm btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                          </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No data found!</td>
                </tr>
            @endforelse
        </table>

        {{ $blogs->links() }}

     </div>
   </div>
@endsection
