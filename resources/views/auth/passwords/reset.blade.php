@extends('layouts.materialize.guest')

@section('content')
<form role="form" action="{!! URL::to('/password/reset') !!}" method="post" class="login-form" id="reset-password-form" data-submit="noAjax">
    <input type="hidden" name="token" value="{{ $token }}">
    {!! csrf_field() !!}
    <div class="row">
        <div class="input-field col s12 center">

            @if(config('config.logo') && File::exists(config('constant.upload_path.logo').config('config.logo')))
            <div class="logo text-center">
                <img src="/{!! config('constant.upload_path.logo').config('config.logo') !!}" class="circle responsive-img valign profile-image-login" alt="Logo">
            </div>
            @endif
            <p class="center login-form-text">Material Design Admin Template</p>



        </div>
    </div>
    <div class="row margin">
        <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input type="text" name="email" id="email">

            <label for="email" class="center-align">{!! trans('messages.email') !!}</label>
        </div>
    </div>
    <div class="row margin">
        <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input type="password" name="password" id="password" text-input {{(config('config.enable_password_strength_meter') ? 'password-strength' : '')}}" ') !!}">
                   <label for="password">{!! trans('messages.password') !!}</label>

        </div>
    </div>

    <div class="row margin">
        <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input type="password" name="password_confirmation" id="password_confirmation" >
            <label for="password">{!! trans('messages.password') !!}</label>

        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">

            <button type="submit" class="btn waves-effect waves-light light-blue darken-4 col s12">{!! trans('messages.reset').' '.trans('messages.password') !!}</button>
        </div>
    </div>


</div>

</form>



@stop

