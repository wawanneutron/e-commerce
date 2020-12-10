@extends('layouts.admin-dashboard')
@section('title', 'Dashboard')
@section('content')
  <!-- section content -->
  <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Dashboard User</h2>
        <p class="dashboard-subtitle">Edit User</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form action="{{ route('account-user.update', $item->id) }}" method="POST">
                  @method('PUT')
                  @csrf
                  <div class="form-group">
                    <label for="">Name User</label>
                    <input type="text" class="form-control @error ('name') is-invalid @enderror" name="name" placeholder="User product.." value="{{ $item->name }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <div class="label">Email</div>
                    <input type="text" class="form-control @error ('email') is-invalid @enderror" name="email" placeholder="your email" value="{{ ($item->email) }}">
                    @error('email')
                        <span class=" invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control @error ('password') is-valid @enderror">
                    <small class=" text-muted">Kosongkan bila tidak merubah password</small>
                    @error('password')
                        <div class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="">Roles</label>
                    <select class="custom-select" name="roles">
                      <option value="{{ $item->roles }}" selected>don't change</option>
                      <option value="ADMIN">Admin</option>
                      <option value="USER">User</option>
                    </select>
                  </div>
                  <div class="form-group mt-4 text-right">
                    <button type="submit" class="btn btn-success px-5">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
