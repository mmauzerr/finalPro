@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-30">
            <div class="column">
                <h1 class="title">Edit User: <i class="is-muted">{{ $user->name }}</i> </h1>
            </div>
        </div>
        <div class="columns" >
            <div class="column">

                <form action="{{route('users.update', $user->id)}}" method="POST">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    <div class="field">
                        <label for="name">Name</label>
                        <p class="control">
                            <input id="name" type="text" class="input" name="name" value="{{$user->name}}">
                        </p>
                    </div>

                    <div class="field">
                        <label for="email">Email</label>
                        <p class="control">
                            <input id="email" type="text" class="input" name="email" value="{{$user->email}}">
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
                                <p class="control">
                                    <input type="text" class="input" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually give a password to this user">
                                </p>
                            </div>
                        </b-radio-group>

                    </div>

                    <button class="button is-primary m-t-10">Edit User</button>

                </form>
            </div>
        </div>
        <hr class="m-t-0">
    </div>
@endsection
