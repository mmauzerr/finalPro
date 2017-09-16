@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="notification is-success">
        {{session('status')}}
    </div>
@endif

    <div class="columns">
        <div class="column is-one-third is-offset-one-third ">
            <div class="card m-t-50">
                <div class="card-content">
                    <h1 class="title">Reset Password</h1>

                    <form action="{{ route('password.email')}}" method="POST" role="form">

                        {{ csrf_field()}}

                        <div class="field">
                            <label for="email" class="label">Email Address</label>
                            <p class="control">
                                <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="enter your email" value="{{ old('email') }}">
                            </p>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif

                        </div>

                        <button class="button is-primary is-outlined is-fullwidth m-t-30">Get Reset Link</button>

                    </form>

                </div> <!-- end of .card-content -->
            </div>

            <h5 class="has-text-centered m-t-10">
                <a href="{{ route('login')}}" class="is-muted">
                  <i class="fa fa-caret-left"> Back to LogIn</i>
                </a>
            </h5>

        </div>
    </div>

@endsection
