@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-30">
            <div class="column" >
                <h1 class="title">{{$role->display_name}}</h1>
                <hr class="m-t-0" style="margin-bottom:10px">
                <h5 class="is-muted" style="margin-bottom:-20px">Slug : ({{$role->name}})</h5>
            </div>
            <div class="column">
                <a href="{{route('roles.edit',$role->id)}}" class="button is-primary is-pulled-right">
                <i class="fa fa-user-plus m-r-10"></i>
                    Edit This Role
                </a>
            </div>

            <div class="noting">
                <a href="{{route('roles.index')}}" class="button is-primary  m-r-30">
                    <i class="fa fa-user-plus m-r-10"></i>
                    Roles
                </a>
            </div>

        </div>
        <h2 class="is-muted">{{$role->description}}</h2>
        <hr class="m-t-0" style="margin-top: 10px">
        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h1 class="title">Permissions :</h1>
                                <ul>
                                    @foreach($role->permissions as $r)
                                        <li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    {{--<script type="application/javascript">--}}
        {{--var perm = [];--}}
        {{--var rols = [];--}}
    {{--</script>--}}
@endsection