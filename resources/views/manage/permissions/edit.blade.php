@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-30">

            <h1 class="title m-t-20">Edit Permission: <em class="is-muted">{{$permission->display_name}}</em></h1>

            <div class="column">
                <a href="{{ route('permissions.edit', $permission->id) }}" class="button is-primary is-pulled-right"><i class="fa fa-edit m-r-10"></i>Edit Permission</a>
            </div>
        </div>
        <hr class="m-t-0"/>

        <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
            {{csrf_field()}}
            {{method_field('PUT')}}

            <div class="field">
                <label for="display_name" class="label">
                    Name (Display Name)
                </label>
                <p class="control">
                    <input type="text" class="input" name="display_name" id="display_name" value="{{ $permission->display_name }}">
                </p>
            </div>

            <div class="field">
                <label for="name" class="label">
                    Slug <small>(Cannot be change)</small>
                </label>
                <p class="control">
                    <input type="text" class="input" name="name" id="name" value="{{$permission->name}}" disabled>
                </p>
            </div>

            <div class="field">
                <label for="description" class="label">Description</label>
                <p class="control">
                    <input type="text" class="input" name="description" id="description" placeholder="{{$permission->description}}">
                </p>
            </div>
            <button class="button is-primary">Save Changes</button>
        </form>
    </div>
    <script type="application/javascript">
        var perm = [];
        var autopass = false;
        var rols = [];
    </script>
@endsection