@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-30">
            <div class="column">
                <h1 class="title">View Permission Details</h1>
            </div>

            <div class="column">
                <a href="{{route('permissions.edit', $permission    ->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-edit m-r-10"></i>Edit Permission</a>
            </div>

            <div class="noting">
                <a href="{{route('permissions.index')}}" class="button is-primary  m-r-30">
                    <i class="fa fa-user-plus m-r-10"></i>
                    Back
                </a>
            </div>
        </div>
        <hr class="m-r-0"/>

        <div class="colunns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>
                                        {{ $permission->display_name }}
                                    </strong>
                                    <small>
                                        {{ $permission->name }}
                                    </small>
                                    <br />
                                    {{ $permission->description }}
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection