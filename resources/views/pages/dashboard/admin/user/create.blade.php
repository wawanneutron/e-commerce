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
      <p class="dashboard-subtitle">Cretae User</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="{{ route('account-user.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="">Name user</label>
                  <input type="text" class="form-control @error ('name') is-invalid @enderror" name="name" placeholder="your name" value="{{ old('name') }}">
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" name="email" class="form-control @error ('email') is-valid @enderror" value="{{ old('email') }}" placeholder="email">
                  @error('email')
                      <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" name="password" class="form-control @error ('password') is-valid @enderror" value="{{ old('password') }}">
                  @error('password')
                      <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="">Roles</label>
                  <select class=" custom-select" name="roles">
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
