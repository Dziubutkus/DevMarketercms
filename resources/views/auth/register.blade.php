@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <form action="{{route('register')}}" method="POST" role="form">
                    {{csrf_field()}}
                    <h1 class="title">Sign Up</h1>

                    <div class="field">
                        <label for="name" class="label">Name</label>
                        <p class="control">
                            <input class="input {{$errors->has('name') ? 'is-danger' : ''}}" type="text" name="name" id="name" required>
                        </p>
                        @if ($errors->has('name'))
                            <p class="help is-danger">{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email Address</label>
                        <p class="control">
                            <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" value="{{old('email')}}" required>
                        </p>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label for="password" class="label">Password</label>
                                <p class="control">
                                    <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" required>
                                </p>
                                @if ($errors->has('password'))
                                    <p class="help is-danger">{{$errors->first('password')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label for="password_confirmation" class="label">Confirm Password</label>
                                <p class="control">
                                    <input class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" type="password" name="password_confirmation" id="password_confirmation" required>
                                </p>
                                @if ($errors->has('password_confirmation'))
                                    <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>

                    <div class="field">
                        <div class="columns">
                            <div class="column">
                                <button class="button is-success is-outlined is-fullwidth m-t-30 one-third">Sign up</button>
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
            </div><!-- end of .card-content -->
        </div><!-- end of .card -->

        <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already have an Account?</a></h5>

    </div>
</div>

@endsection
