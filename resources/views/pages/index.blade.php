@extends('layouts.app')

@section('content')

<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        WYD?
      </h1>
      <h2 class="subtitle">
        Primary subtitle
      </h2>
    </div>
  </div>
</section>

<div class="container m-t-30">
  <div class="columns">
  @if(count($posts) > 0)
    @foreach($posts as $post)
      <div class="column is-half">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                <img src="storage/cover_images/{{$post->cover_image}" alt="Image">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                    <img src="http://bulma.io/images/placeholders/96x96.png" alt="Image">
                    </figure>
                </div>
                <div class="media-content">
                    <p class="title is-4">John Smith</p>
                    <p class="subtitle is-6">@johnsmith</p>
                </div>
                </div>

                <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                <a>#css</a> <a>#responsive</a>
                <br>
                <small>11:09 PM - 1 Jan 2016</small>
                </div>
            </div>
        </div>
      </div>
    @endforeach
  @else
    <p>There are no posts to show</p>
  @endif
  </div>
</div>

@endsection