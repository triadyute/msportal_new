@extends('layouts.login')
@section('content')
<form class="form-signin" method="POST" action="{{ route('login') }}">
    @csrf
    <img class="mb-3" src="{{asset('/img/logo.png')}}" alt="" width="290" height="70">
    @include('inc.messages')
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control mb-2" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email" autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="float-left mb-2">
      <label>
        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember me
      </label>
    </div>
    @if (Route::has('password.request'))
    <a class="float-right" href="{{ route('password.request') }}">
        {{ __('Forgot your password?') }}
    </a>
@endif
    <button class="btn btn-primary btn-block" type="submit">SIGN IN</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2020 Hypersync Technologies Ltd.</p>
</form>
@endsection
@section('scripts')
@endsection