@extends('layouts.profile')

@section('content')

<div class="column is-10">
    <div class="container profile">

        <div class="section profile-heading">
        <div class="columns">
            <div class="column is-2">
            <div class="image is-128x128 avatar">
                <img src="https://placehold.it/256x256">
            </div>
            </div>
            <div class="column is-3 name">
            <p> 
                <span class="title is-bold">John Smith</span>
                <span class="button is-primary is-outlined follow">Follow</span>
            </p>
            <p class="tagline">The users profile bio would go here, of course. It could be two lines</p>
            </div>
            <div class="column is-2 followers has-text-centered">
            <p class="stat-val">129k</p>
            <p class="stat-key">followers</p>
            </div>
            <div class="column is-2 following has-text-centered">
            <p class="stat-val">2k</p>
            <p class="stat-key">following</p>
            </div>
            <div class="column is-2 likes has-text-centered">
            <p class="stat-val">29</p>
            <p class="stat-key">likes</p>
            </div>
        </div>
        </div>
        <div class="profile-options">
        <div class="tabs is-fullwidth">
            <ul>
            <li class="link is-active"><a><span class="icon"><i class="fa fa-list"></i></span> <span>My Lists</span></a></li>
            <li class="link"><a><span class="icon"><i class="fa fa-heart"></i></span> <span>My Likes</span></a></li>
            <li class="link"><a><span class="icon"><i class="fa fa-th"></i></span> <span>My Posts</span></a></li>
            <li class="link"><a><span class="icon"><i class="fa fa-bookmark"></i></span> <span>My Bookmarks</span></a></li>
            </ul>
        </div>
        </div>

    <section class="section">

        @if(count($posts) > 0)
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Posted on</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ substr(strip_tags($post->body), 0, 20)}}{{ strlen(strip_tags($post->body)) > 20 ? "..." : "" }}</td>
                        <td>{{ date('j M, Y', strtotime($post->created_at)) }}</td>
                        <th><a href="/devmarketercms/public/posts/{{$post->id}}" class="button">View</a></th>
                        <th><a href="/devmarketercms/public/posts/{{$post->id}}/edit" class="button is-light">Edit</a></th>
                        <th>
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'button is-dark'])}}
                            {!!Form::close()!!}
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p>You don't have any posts.</p>
        @endif
        </section>
        </div>
  </div>

@endsection