@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-20">
            <div class="column">
                <h1 class="title">View User Details</h1>
            </div> <!-- end of column -->

            <div class="column">
                <a href="{{route('users.index')}}" class="button is-primary is-pulled-right m-l-10" style="margin-right: 30px">Back</a>
                <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right" ><i class="fa fa-user m-r-10"></i> Edit User</a>

            </div>
        </div>
        <hr class="m-t-0">

        <div class="columns">
            <div class="column">
                <div class="field">
                    <label for="name" class="label">Name</label>
                    <pre>{{$user->name}}</pre>
                </div>

                <div class="field">
                    <div class="field">
                        <label for="email" class="label">Email</label>
                        <pre>{{$user->email}}</pre>
                    </div>
                </div>

                <div class="field">
                    <div class="field">
                        <label for="email" class="label">Roles</label>
                        <ul>
                            {{$user->roles->count() == 0 ? 'This user has not been assigned any roles yet' : ''}}
                            @foreach ($user->roles as $role)
                                <li>{{$role->display_name}} ({{$role->description}})</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="application/javascript">
        var perm = [];
        var rols = [];
        var autopass = false;
        var api_component = '';
        var slug = '';
    </script>
@endsection