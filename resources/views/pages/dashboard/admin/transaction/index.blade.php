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
        <h2 class="dashboard-title">Dashboard Transactions</h2>
        <p class="dashboard-subtitle">Data Transactions </p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class=" table-responsive">
                  <table class="table table-hover w-100" id="crudTable">
                    <thead>
                      <tr>
                        <th>Code</th>
                        <th>Product Name</th>
                        <th>Store Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Resi</th>
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
            { data: 'code', name: 'code' },
            { data: 'product.name', name: 'product.name' },
            { data: 'product.user.store_name', name: 'product.user.store_name' },
            {
              data: 'product.price', name: 'product.price',
              render: $.fn.dataTable.render.number( ',', '.', 2, 'Rp ' )
            },
            { data: 'shipping_status', name: 'shipping_status' },
            { data: 'resi', name: 'resi' },
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