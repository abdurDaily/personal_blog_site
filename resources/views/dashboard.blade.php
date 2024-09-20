@extends('Backend.Layout.Layout')
@section('backend_contains')
<div class="container">
    <div class="row gy-3">
        <div class="col-lg-4">
            <div class="shadow py-5 bg-light">
                <div class="card-body text-center">
                    <h5 class="card-title">Available Category's</h5>
                    <h3 class="mt-3">{{ $activeVideo < 10 ? '0'.$activeVideo : $activeVideo }}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="shadow py-5 bg-light">
                <div class="card-body text-center">
                    <h5 class="card-title">Active Blog's</h5>
                    <h3 class="mt-3">{{ $activeVideo < 10 ? '0'.$activeVideo : $activeVideo }}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="shadow py-5 bg-light">
                <div class="card-body text-center">
                    <h5 class="card-title">Published Video's</h5>
                    <h3 class="mt-3">{{ $activeVideo < 10 ? '0'.$activeVideo : $activeVideo }}</h3>
          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection                                                     
