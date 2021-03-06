@extends('layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

<body class="hold-transition register-page style="background-image:url({{url('resources/assets/img/registerbackground.jpg')}})">
    <div id="app" v-cloak>
        <div class="register-box">
            <div class="register-logo">
                <a href="{{ url('/home') }}"><b>Prosarc S.A EPS</b></a>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="register-box-body">
                <p class="login-box-msg">{{ trans('adminlte_lang::message.registermember') }}</p>

                <register-form></register-form>

                {{-- @include('adminlte::auth.partials.social_login') --}}

                <a href="{{ url('/login') }}" class="btn btn-info btn-sm"><i class="fas fa-sign-in-alt"></i></a><a href="{{ url('/login') }}">¿Ya estas registrado?</a>
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </div>

    @include('adminlte::layouts.partials.scripts_auth')

    @include('adminlte::auth.terms')

</body>

@endsection
