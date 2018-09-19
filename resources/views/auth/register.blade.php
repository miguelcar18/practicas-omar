@extends('layouts.materialize.login')

@section('content')
<form role="form" method="POST" action="{{ url('/user') }}" id="user-registration-form" >
    {{ csrf_field() }}

    
        <div class="row">
        <div class="input-field col s12 center">


            @if(config('config.logo') && File::exists(config('constant.upload_path.logo').config('config.logo')))
            <div class="logo text-center">
                <img src="/{!! config('constant.upload_path.logo').config('config.logo') !!}" class="circle responsive-img valign profile-image-login" alt="Logo">
            </div>
            @endif
            <p class="center login-form-text">Material Design Admin Template</p>
</div></div>


       

    @include('auth._register_guest_form')



<div class="row">
        <div class="input-field col s12">

            <button type="submit" class="btn waves-effect waves-light light-blue darken-4 col s12">{!! trans('messages.register') !!}</button>
        </div>
    </div>

     
 
    


</div>

</form>
@stop