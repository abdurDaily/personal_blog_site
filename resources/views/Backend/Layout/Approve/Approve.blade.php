@extends('Backend.Layout.Layout')
@section('backend_contains')
<div class="profile_header text-end p-2">
  <span>{{ getCurrentPath() }}</span>
</div>
<div class="row approve">
    <div class="col-lg-12">
      <div class="card-style mb-30">
        <h4 class="mb-4">Approve User Request.</h4>
        <div class="row">
          <div class="col table-responsive">
            <table class="table table-hover table-striped">
              <tr>
                <th>Sn.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Status</th>
              </tr>
    
              @forelse ($userInfo as $key => $user)
    
              <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('d-M-Y') }}</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('approve.is.approve', $user->id) }}" class="btn btn-sm btn-{{ $user->status == 1 ? 'success' : 'outline-danger'  }}" ><i class="fa-regular fa-circle-check"></i></a>
                    <a href="{{ route('approve.is.delete', $user->id) }}" class="btn btn-sm btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                  </div>
                </td>
              </tr>
              @empty
                <tr>
                  <td colspan="4">no data found!</td>
                </tr>
              @endforelse
            </table>
          </div>
        </div>
      </div>
      <!-- end card -->
    </div>
    <!-- end col -->
  </div>
@endsection

@push('js_contains')
@include('sweetalert::alert')
@endpush