@extends('Backend.Layout.Layout')
@section('backend_contains')
    <div class="row">


        <div class="col-xl-4 ">
            <div class="rounded shadow-sm p-3" style="background: #fff;">
                <div class="card-header bg-light ps-3 py-3 mb-3">
                    <h4>{{ $editedCategory ? "Edit" : "Add" }} Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ $editedCategory ? route('category.update', $editedCategory->id) : route('category.add') }}" method="post" enctype="multipart/form-data">
                     @csrf
                
                     @if ($editedCategory)
                         @method('PUT')
                     @endif

                     <label for="name">Categoty Name</label>
                     <input type="text" value="{{ $editedCategory ? $editedCategory->category_name : '' }}" name="category_name" id="name" class="form-control py-3 mb-3" placeholder="insert category name">
                     @error('category_name')
                         <strong class="text-danger mb-2">{{ $message }}</strong>
                     @enderror
                     
                     
                     <label for="image">Categoty Image</label>
                     <input type="file" name="category_img" id="im,age" class="form-control p-3 mb-3">

                     <button class="main-btn primary-btn btn-hover w-50 text-center" type="submit">
                        Add Categoty
                      </button>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-xl-8">
            <div class="rounded shadow-sm p-3 table-responsive" style="background: #fff;">
                <table class="table table-hover table-striped text-center category">
                    <tr>
                        <td style="border: 1px solid #cccccc4a">Sn.</td>
                        <td style="border: 1px solid #cccccc4a">C.Name</td>
                        <td style="border: 1px solid #cccccc4a">image</td>
                        <td style="border: 1px solid #cccccc4a">Active</td>
                        <td style="border: 1px solid #cccccc4a">Status</td>
                    </tr>

                    @forelse ($categorys as $key=>$category)
                    <tr>
                        <td style="border: 1px solid #cccccc4a">{{ $key + $categorys->firstItem() }}</td>
                        <td style="border: 1px solid #cccccc4a">{{ $category->category_name }}</td>
                        <td style="border: 1px solid #cccccc4a">
                            <img style="height: 30px" src="{{ $category->category_img }}" alt="">
                        </td>
                        <td style="border: 1px solid #cccccc4a">
                            <a style="font-size:20px; color: {{ $category->category_status == 0 ? 'red' : 'green' }};" href="{{ route('category.active',$category->id) }}"><i class="fa-{{ $category->category_status == 0 ? 'regular' : 'solid' }} fa-eye"></i></a>
                        </td>
                        <td style="border: 1px solid #cccccc4a">
                            <div class="btn-group">
                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('category.delete',$category->id) }}" class="btn btn-sm btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                              </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="border: 1px solid #cccccc4a;">No data found!</td>
                    </tr>
                    @endforelse
                    
                </table>
                {{ $categorys->links() }}
            </div>
        </div>

    </div>
@endsection


@push('js_contains')
@include('sweetalert::alert')
@endpush

@push('backend_css')
    <style>
      .category tr:last-child > * { 
            border-bottom: 1px solid #cccccc4a !important;
            padding-bottom: 15px !important;
    }
</style>
@endpush