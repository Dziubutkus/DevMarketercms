@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Create a New Post</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">

        <div class="field">
          <div class="control">
            <label class="radio">
              <input type="radio" name="answer">
              Yes
            </label>
            <label class="radio">
              <input type="radio" name="answer">
              No
            </label>
          </div>
        </div>

        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

          <div class="field">
            {{ Form::label('title', 'Title') }}
            {!! Form::text('title', '', ['class' => 'input', 'required' => '' ]) !!}
          </div>

          <div class="field">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', '', ['class' => 'textarea', 'required' => '' ]) }}
          </div>

          <div class="field">
            {{Form::file('cover_image')}}
        </div>
        
        {{Form::submit('Create', ['class' => 'button is-success'])}}
    {!! Form::close() !!}

      </div>
    </div>

  </div> <!-- end of .container -->

@endsection
