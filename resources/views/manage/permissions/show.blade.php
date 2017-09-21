@extends('layouts.manage')

@section('content')
<div class="column is-10">
    <section class="section p-t-20 p-b-20">
        <div class="level">
            <div class="level-left">
                <h1 class="title">View Permission Details</h1>
            </div>
            <div class="level-right">
                <a href="{{route('permissions.edit', $permission->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Edit Permission</a>
            </div>
        </div>
    </section>

    <hr class="m-t-0">

    <div class="columns m-l-10 m-r-10">
    <div class="column">
        <div class="box">
        <article class="media">
            <div class="media-content">
            <div class="content">
                <p>
                <strong>{{$permission->display_name}}</strong> <small>{{$permission->name}}</small>
                <br>
                {{$permission->description}}
                </p>
            </div>
            </div>
        </article>
        </div>
    </div>
    </div>
</div>
@endsection