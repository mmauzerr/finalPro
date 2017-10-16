@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Edit User: <em class="is-muted">{{ $user->name}}</em></h1>
            </div>
        </div>
        <hr class="m-t-0">

        <form action="{{route('users.update', $user->id)}}" method="POST">

            {{ method_field('PUT') }}
            {{ csrf_field() }}

            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label for="name" class="label">Name:</label>
                        <p class="control">
                            <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
                        </p>
                    </div>

                    <div class="field">
                        <label for="email" class="label">Email:</label>
                        <p class="control">
                            <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
                        </p>
                    </div>

                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <b-radio-group v-model="password_options">
                            <div class="field">
                                <b-radio name="password_options" value="keep">Do Not Change Password</b-radio>
                            </div>
                            <div class="field">
                                <b-radio name="password_options" value="auto">Auto-Generate New Password</b-radio>
                            </div>
                            <div class="field">
                                <b-radio name="password_options" value="manual">Manually Set New Password</b-radio>
                            </div>
                            <p class="control">
                                <input type="text" class="input" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually give a password to this user">
                            </p>
                        </b-radio-group>
                    </div>
                </div> <!-- end of .column -->

                <div class="column">
                    <label for="roles" class="label">Roles:</label>
                    <input type="hidden" name="roles" :value="rolesSelected" />

                    <b-checkbox-group v-model="rolesSelected">
                        @foreach ($roles as $role)
                            <div class="field">
                                <b-checkbox :custom-value="{{$role->id}}">
                                    {{$role->display_name}}
                                </b-checkbox>
                            </div>
                        @endforeach
                    </b-checkbox-group>
                </div>
            </div>
            <div class="m-t-50 m-r-100" align="left">
                <button class="button is-primary m-r-5" style="width: 200px;">Save Changes</button>
                <a href="{{route('users.index')}}" class="button is-primary">Back</a>
            </div>

        </form>
    </div> <!-- end of .flex-container -->
@endsection

@section('checkbox')
    <script type="application/javascript">
        var rols = {{$user->roles->pluck('id')}};
        var perm = [];
        var autopass = false;
    </script>
    @yield('checkbox')
