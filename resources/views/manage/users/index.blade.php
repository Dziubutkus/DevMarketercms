@extends('layouts.manage')

@section('content')
<div class="column is-10">
    <section class="section p-t-20 p-b-20">
        <div class="level">
            <div class="level-left">
                <h1 class="title">Manage Users</h1>
            </div>
            <div class="level-right">
                <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New User</a>
            </div>
        </div>
    </section>
    
    <hr>
    <section class="section p-t-20 p-b-20">
        <div class="columns">
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <table class="table is-narrow is-fullwidth">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th>{{$user->id}}</th>
                                        <th>{{$user->name}}</th>
                                        <th>{{$user->email}}</th>
                                        <th>{{$user->created_at->toFormattedDateString()}}</th>
                                        <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('users.show', $user->id)}}">View</a><a class="button is-light" href="{{route('users.edit', $user->id)}}">Edit</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- end of card -->
            </div>
        </div>
    </section>
    {{$users->links()}}
</div>

@endsection