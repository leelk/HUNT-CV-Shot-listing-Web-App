@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>
                <a class="navbar-brand logo" href="{{url('/')}}"><img src="{{asset('assets')}}/assets/img/logo.PNG" alt="" style="height: 50px;"></a>

                <div class="panel-body">
{{--                    {{dd(auth::user()->id)}}--}}
                        {{dd(auth::user()->f_name)}}

{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                    @component('components.who')--}}
{{--                        @endcomponent--}}












                </div>
            </div>
        </div>
    </div>
</div>
@endsection
