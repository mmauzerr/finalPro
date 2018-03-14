@extends('layouts.app')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-100 is-centered">
            <div class="col-md-6 col-md-offset-4">
                <div class="panel panel-default is-success m-t-100">
                    <h1 class="panel-heading">Dashboard</h1>

                    <div class="panel-body">
                        {{-- You are logged in! --}}
                        <pre>{{-- {{ dd(json_encode(LaraFlash::allByPriority())) }} --}}</pre>
                    </div>
                </div>
            </div>
        </div>

        <div align="center" id="test-flash">

            <hr />

            <code>Laravel toaster Notification</code>

            <br /><br />

            <form action="submitdata" method="post">

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <span>Name :</span>
                <input id="name_id" name="name"><br />
                <button type="submit">Submit</button>

            </form>

        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if( Session::has('message') )
            var type = "{{ Session::get('alert-type', 'info') }}";

            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>
@endsection
