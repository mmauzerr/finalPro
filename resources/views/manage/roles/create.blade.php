@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-20">
            <div class="column">
                <h1 class="title">Create New Role</h1>
            </div>
        </div>


    <hr class="m-t-0">
    
    <form action="{{route('roles.store')}}" method="POST">

        {{csrf_field()}}

        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h2 class="title">Role Details:</h2>
                                <div class="field">
                                    <p class="control">
                                        <label for="display_name" class="label">
                                            Name (Human Readable)
                                        </label>
                                        <input type="text" class="input" name="display_name" value="{{old('display_name')}}" id="display_name">
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control">
                                        <label for="name" class="label">
                                            Slug ( Can not be changed )
                                        </label>
                                        <input type="text" class="input" name="name" value="{{old('name')}}" id="name">
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control">
                                        <label for="description" class="label">
                                            Description
                                        </label>
                                        <input type="text" class="input" name="description" value="{{old('description')}}" id="description">
                                    </p>
                                </div>
                                <input type="hidden" :value="permissionsSelected" name="permissions">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h2 class="title">Permissions: </h2>
                                <b-checkbox-group v-model="permissionsSelected">
                                    @foreach($permissions as $permission)
                                        <div class="field">
                                            <b-checkbox :custom-value="{{$permission->id}}">
                                                {{$permission->display_name}}
                                                <em>{{$permission->description}}</em>
                                            </b-checkbox>
                                        </div>
                                    @endforeach
                                </b-checkbox-group>
                            </div>
                        </div>
                    </article>
                </div>
                <button class="button is-primary">Create New Role</button>
            </div>
        </div>
        
    </form>
    </div>
    <script type="application/javascript">
        var perm = [];
        var rols = [];
        var autopass = false;
        var api_component = '';
        var slug = '';
    </script>
@endsection