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
        <h2 class="dashboard-title">Dashboard Product</h2>
        <p class="dashboard-subtitle">Data Product </p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="btn-cte mb-4">
                  <a href="{{ route('dashboard-products.create') }}" class="btn btn-primary">+ add Product</a>
                </div>
                <div class=" table-responsive">
                  <table class="table table-hover w-100" id="crudTable">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Pemilik</th>
                        <th>Category</th>
                        <th>Price</th>
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
      $(document).ready(function() {
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
            { data: 'user.name', name: 'user.name' },
            { data: 'category.name', name: 'category.name' },
            {
              data: 'price', name: 'price',
              render: $.fn.dataTable.render.number( ',', '.', 2, 'Rp ' )
            },
            {
              data: 'action',
              name: 'action',
              orderable: false,
              searcable: false,
            },
            ],
             dom: 'lBfrtip',
              buttons: [
                'excel', 'pdf', 'copy', 'print'
              ],
              "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
  
        });
      });
      
    </script>
@endpush