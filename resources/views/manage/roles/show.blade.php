@extends('layouts.manage')

@section('content')
<div class="column is-10">
    <section class="section p-t-20 p-b-20">
        <div class="level">
            <div class="level-left">
                <h1 class="title">{{$role->display_name}}<small class="m-l-25"><em>({{$role->name}})</em></small></h1>
            </div>
            <div class="level-right">
                <a href="{{route('roles.edit', $role->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Edit this Role</a>
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
                <h2 class="title">Permissions:</h1>
                <ul>
                @foreach ($role->permissions as $r)
                    <li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
                @endforeach
                </ul>
            </div>
            </div>
        </article>
        </div>
    </div>
    </div>
</div>
@endsection