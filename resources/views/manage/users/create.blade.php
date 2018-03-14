@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-30">
            <div class="column">
                <h1 class="title">Create New Users</h1>
            </div>
        </div>
        <hr class="m-t-0">
        <form action="{{route('users.store')}}" method="POST">
            {{csrf_field()}}
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label for="name" class="label">Name</label>
                        <p class="control">
                            <input type="text" class="input" name="name" id="name">
                        </p>
                    </div>

                    <div class="field">
                        <label for="email" class="label">Email:</label>
                        <p class="control">
                            <input type="text" class="input" name="email" id="email">
                        </p>
                    </div>

                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control">
                            <input type="text" class="input" name="password" id="password" v-if="!auto_password" placeholder="Manually give a password to this user">
                            <b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password">
                                Auto Generate Password
                            </b-checkbox>
                        </p>
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

            <button class="button is-primary m-r-10">Create User</button>
            <a href="{{route('users.index')}}" class="button is-primary">Back</a>

        </form>

        <hr class="m-t-0">

    </div>
@endsection
@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                auto_password: true,
                rolesSelected: [{!! old('roles') ? old('roles') : '' !!}]
            }
        });
    </script>
    @endsection
