@extends('layouts.app')

@section('content')

<section class="hero is-large is-light is-bold">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        Hero title
      </h1>
      <h2 class="subtitle">
        Hero subtitle
      </h2>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    
        <div class="tabs is-medium">
          <ul>
            <li class="is-active"><a>Food</a></li>
            <li><a>Activities</a></li>
            <li><a>Events</a></li>
          </ul>
        </div>
        <div class="columns">
          @for ($i = 0; $i < 4; $i++)
            <div class="column is-3">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-left">
                      <figure class="image is-48x48">
                        <img src="http://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
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
                    <a href="#">#css</a> <a href="#">#responsive</a>
                    <br>
                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                  </div>
                </div>
              </div>
            </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
</section>

<section class="hero is-light is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Newsletter
      </h1>
      <h2 class="subtitle">
        Sign Up
      </h2>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
  <h2 class="title">Blog</h2>
    <div class="columns">
      @foreach($posts as $post)
        <div class="column is-4">
          <div class="card">
            <div class="card-image">
              <figure class="image is-4by3">
              <img src="http://via.placeholder.com/350x300" alt="Placeholder image">
              <!--
                <img src="storage/cover_images/{{$post->cover_image}}" alt="Placeholder image">
                -->
              </figure>
            </div>
            <div class="card-content">
              <div class="media">
                <div class="media-left">
                  <figure class="image is-48x48">
                    <img src="http://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                  </figure>
                </div>
                <div class="media-content">
                  <p class="title is-4">{{ $post->title }}</p>
                  <p class="subtitle is-6">@johnsmith</p>
                </div>
              </div>
              <div class="content">
                {{ $post->body }}
                <br>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!--
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
-->
@endsection