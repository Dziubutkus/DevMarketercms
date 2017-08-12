@extends('layouts.app')

@section('content')

<div class="columns">
  <div class="column is-one-third is-offset-one-third m-t-100">
    <div class="card">
      <div class="card-content">
        <h1 class="title">Log In</h1>

        <form action="{{route('login')}}" method="POST" role="form">
          {{csrf_field()}}
          <div class="field">
            <label for="email" class="label">Email Address</label>
            <p class="control">
              <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
            </p>
            @if ($errors->has('email'))
              <p class="help is-danger">{{$errors->first('email')}}</p>
            @endif
          </div>
          <div class="field">
            <label for="password" class="label">Password</label>
            <p class="control">
              <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password">
            </p>
            @if ($errors->has('password'))
              <p class="help is-danger">{{$errors->first('password')}}</p>
            @endif

          </div>

          <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>
          

          <div class="field">
          <div class="columns">
          <div class="column">
          <button class="button is-success is-outlined is-fullwidth m-t-30 one-third">Log In</button>
          </div>
          <div class="column">
          <a href="{{ url('/redirect/facebook') }}" class="button is-success is-outlined is-fullwidth m-t-30"><i class="fa fa-facebook"></i>&nbsp; Facebook</a>
          </div>
          <div class="column">
          <a href="{{ url('/redirect/google') }}" class="button is-success is-outlined is-fullwidth m-t-30"><i class="fa fa-google"></i>&nbsp; Google</a>
          </div>
          </div>
          </div>
        </form>
      </div> <!-- end of .card-content -->
    </div> <!-- end of .card -->
    <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">Forgot Your Password?</a></h5>
  </div>
</div>

@endsection