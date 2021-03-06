@extends('admin.signuplogin.layout')

@section('boxmsg')
    Register
@endsection

@section('content')


      <form action="{{ route('admin.register') }}" class="login-form" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" placeholder="Name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>


      <div class="social-auth-links text-center mb-3">
          <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
      </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <a class="btn btn-success btn-block" href="{{route('admin.index')}}">Login</a>
    </div>

      @endsection

