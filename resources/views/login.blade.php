@extends('layout.main')
@section('container')
<div class="pt-5" style="height: 81vh">
    <h1 class="text-center">Login Page</h1>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-6">
          @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>{{ session('loginError') }}</strong> You should check in on some of those fields below.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          <div class="border border-dark border-end-0 border-opacity-10 rounded-4 p-4 shadow">
            <form method="post" action="/login">
              @csrf
              <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="Email wajib diisi" value="{{ old('email')}}"autofocus required>
                {{-- <div id="emailHelp" class="form-text">Username wajib diisi.</div> --}}
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputpassword" name="password" placeholder="Password wajib diisi" required>
                {{-- <div id="passwordHelp" class="form-text">Password wajib diisi.</div> --}}
              </div>
              <button type="login" class="w-100 btn btn-primary">Login</a></button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection