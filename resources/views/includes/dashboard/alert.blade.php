@if (session('status-success'))
    <div class="alert alert-success">
      {{ session('status-success') }}
    </div>
@elseif(session('status-update'))
    <div class="alert alert-info">
      {{ session('status-update') }}
    </div>
@elseif(session('status-destroy'))
    <div class="alert alert-danger">
      {{ session('status-destroy') }}
    </div>
@endif