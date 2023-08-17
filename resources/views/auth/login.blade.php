@extends('layouts.auth')

@section('content')
<div class="row h-100 w-100" style="justify-content:center; display:flex; " id="login-box">
    <div class="col-md-5">
        <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center; font-size: 24px; padding: 20px;">
    <span style="display: inline-block; margin: 0 auto;">
        <span style="text-transform: capitalize;">{{ config('app.name') }}</span>
        <span style="font-size: 24px;">@lang('quickadmin.qa_login')</span>
    </span>
</div>

            <div class="panel-body">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> @lang('quickadmin.qa_there_were_problems_with_input'):
                    <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form class="form-horizontal"
                      role="form"
                      method="POST"
                      action="{{ url('login') }}">
                    <input type="hidden"
                           name="_token"
                           value="{{ csrf_token() }}">

                    <div class="form-group" style="margin-bottom: 15px; font-weight: bold;">
                        <label class="col-md-4 control-label" 
                        style="font-weight: bold;"> @lang('quickadmin.qa_email')</label>

                        <div class="col-md-6">
                            <input type="email"
                                   class="form-control"
                                   style="width: 100%;
                                        padding: 10px;
                                        border: 1px solid #ccc;
                                        border-radius: 5px;"
                                   name="email"
                                   value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">@lang('quickadmin.qa_password')</label>

                        <div class="col-md-6">
                            <input type="password"
                                   class="form-control"
                                   name="password">
                        </div>
                    </div>

                    <div class="form-group">
    <div class="col-md-6 col-md-offset-4" style="display: flex; justify-content: space-between;">
        <a href="{{ route('auth.password.reset') }}">@lang('quickadmin.qa_forgot_password')</a>
        <a href="{{ route('auth.register') }}">@lang('quickadmin.qa_registration')</a>
    </div>
</div>



                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <label>
                                <input type="checkbox"
                                       name="remember"> @lang('quickadmin.qa_remember_me')
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit"
                class="btn btn-primary"
                style="width: 200px; margin-right: -10px; background-color: darkblue; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 16px;">
            @lang('quickadmin.qa_login')
        </button>
    </div>
</div>



                    

                </form>
            </div>
        </div>
    </div>
</div>
@endsection