@extends('layouts.admin-dashboard')
@section('title', 'Dashboard')
@section('alert')
@section('content')
  <!-- section content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Dashboard Category</h2>
        <p class="dashboard-subtitle">List of categories</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="btn-cte mb-4">
                  <a href="{{ route('dashboard-category.create') }}" class="btn btn-primary">+ add category</a>
                </div>
                <div class=" table-responsive">
                  <table class="table table-hover w-100" id="crudTable">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Slug</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('addon-script')
    <script>
      $('#crudTable').DataTable({
        processing: true,
        serverSide: true,
        ordering: true,
        ajax: {
          url: '{!! url()->current() !!}',
        },
        columns: [
          { data: 'id', name: 'id' },
          { data: 'name', name: 'name' },
          { data: 'photo', name: 'photo' },
          { data: 'slug', name: 'slug' },
          {
            data: 'action',
            name: 'action',
            orderable: false,
            searcable: false,
          },
        ]
      });
    </script>
@endpush