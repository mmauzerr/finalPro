@extends('layouts.manage')
@section('content')
    <div class="flex-container">
        <div class="columns m-t-20">
            <div class="column">
                <h1 class="title">Post Page</h1>
            </div>
            <div class="column">
                <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right">
                    <i class="fa fa-user-plus m-r-10"></i>
                    Create New Post
                </a>
            </div>
        </div>
        <hr class="m-t-0">


    </div><!-- end of flex-container div-->
    <script type="application/javascript">
        var perm = [];
        var autopass = false;
        var rols = [];
    </script>
@endsection