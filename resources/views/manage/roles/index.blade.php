@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-20">
            <div class="column">
                <h1 class="title">Manage Roles</h1>
            </div>
            <div class="column">
                <a href="{{route('roles.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Role</a>
            </div>
        </div>
        <hr class="m-t-5" style="margin-top:-20px">

        <div class="columns is-multiline">
            @foreach ($roles as $role)
                <div class="column is-one-quarter">
                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <h3 class="title" style="color: rgba(0, 251, 255, 0.87);text-shadow: -2px -1px 4px black">{{$role->display_name}}</h3>
                                    <hr style="margin: 7px;">
                                    <h4 class="subtitle"><em>{{$role->description}}</em></h4>
                                    <p>
                                        {{$role->description}}
                                    </p>
                                </div>

                                <div class="columns is-mobile">
                                    <div class="column is-one-half">
                                        <a href="{{route('roles.show', $role->id)}}" class="button is-primary is-fullwidth">Details</a>
                                    </div>
                                    <div class="column is-one-half">
                                        <a href="{{route('roles.edit', $role->id)}}" class="button is-light is-fullwidth">Edit</a>
                                    </div>
                                </div>
                                
                            </div>
                        </article>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- Uncomment if use orderBy()->pagination() in RoleController --}}
        {{--{{ $roles->render()}}--}}
    </div>
    <script type="application/javascript">
        var perm = [];
        var rols = [];
        var autopass = false;
    </script>
@endsection
