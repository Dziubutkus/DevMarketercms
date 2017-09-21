@extends('layouts.manage')

@section('content')
<div class="column is-10">
    <section class="section p-t-20 p-b-20">
        <div class="level">
            <div class="level-left">
                <h1 class="title">Edit Permission Details</h1>
            </div>
        </div>
    </section>

    <hr class="m-t-0">
    <div class="columns m-l-10 m-r-10">
        <div class="column">
            <form action="{{route('permissions.update', $permission->id)}}" method="POST">
            {{csrf_field()}}
            {{method_field('PUT')}}

            <div class="field">
                <label for="display_name" class="label">Name (Display Name)</label>
                <p class="control">
                <input type="text" class="input" name="display_name" id="display_name" value="{{$permission->display_name}}">
                </p>
            </div>

            <div class="field">
                <label for="name" class="label">Slug <small>(Cannot be changed)</small></label>
                <p class="control">
                <input type="text" class="input" name="name" id="name" value="{{$permission->name}}" disabled>
                </p>
            </div>

            <div class="field">
                <label for="description" class="label">Description</label>
                <p class="control">
                <input type="text" class="input" name="description" id="description" placeholder="Describe what this permission does" value="{{$permission->description}}">
                </p>
            </div>

            <button class="button is-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>
@endsection