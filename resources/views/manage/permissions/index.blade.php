@extends('layouts.manage')

@section('content')

<div class="column is-10">
    <section class="section p-t-20 p-b-20">
        <div class="level">
            <div class="level-left">
                <h1 class="title">Manage Permissions</h1>
            </div>
            <div class="level-right">
                <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Permission</a>
            </div>
        </div>
    </section>
    
    <hr class="m-t-0">
    <section class="section p-t-20 p-b-20">

        <div class="columns">
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <table class="table is-narrow is-fullwidth">
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th></th> 
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($permissions as $permission)
                            <tr>
                                <th>{{$permission->display_name}}</th>
                                <td>{{$permission->name}}</td>
                                <td>{{$permission->description}}</td>
                                <td class="has-text-right"><a class="button is-outlined is-small m-r-5" href="{{route('permissions.show', $permission->id)}}">View</a>
                                <a class="button is-light is-small" href="{{route('permissions.edit', $permission->id)}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection