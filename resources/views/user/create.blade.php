@extends("layouts")

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Tambah Data User</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <form role="form" class="text-start">
                        <div class="input-group input-group-outline my-3">
                          <label class="form-label">Nama</label>
                          <input type="email" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control">
                        </div>
                        <div class="form-check form-switch d-flex align-items-center mb-3">
                          <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                          <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                        </div>
                        <div class="text-center">
                          <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                        </div>
                        <p class="mt-4 text-sm text-center">
                          Don't have an account?
                          <a href="{{ url('/') }}/pages/sign-up.html" class="text-primary text-gradient font-weight-bold">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
