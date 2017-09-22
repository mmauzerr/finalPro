@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-30">
            <div class="column">
                <h1 class="title m-l-20 m-t-5">View Details: <br /><i class="is-muted">{{$user->name}}</i> </h1>
            </div>

            <div class="column">
                <a href="{{ route('users.edit',$user->id)}}" class="button is-primary is-pulled-right">
                    <i class="fa fa-user m-r-10"></i>Edit User
                </a>
            </div>
        </div>

        <hr class="m-t-0">

        <div class="columns">
            <div class="column">
                <div class="field ">
                    <label for="name" class="m-l-15">Name</label>
                    <pre>{{$user->name}}</pre>
                </div>

                <div class="field">
                    <label for="email" class="m-l-15">Email</label>
                    <pre>{{$user->email}}</pre>
                </div>

                <div class="field">
                    <label for="created_at" class="m-l-15">Created At</label>
                    <pre>{{$user->created_at->toFormattedDateString()}}</pre>
                </div>
            </div>
        </div>
    </div>
@endsection