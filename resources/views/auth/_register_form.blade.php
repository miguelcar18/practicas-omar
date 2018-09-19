
<div class="col s8 m8 l6">
<div class="card-panel">
<div class="row">
<div class="col-sm-6">
    <div class="input-field col s6">
        <i class="mdi-social-person-outline prefix"></i>

        <input type="text" name="first_name" id="first_name" placeholder="Joshep">
        <label class="center-align">{!! trans('messages.first').' '.trans('messages.name') !!}</label>
    </div>



    <div class="input-field col s6">
        <i class="mdi-social-person-outline prefix"></i>

        <input type="text" name="last_name" id="last_name " placeholder="Lang">
        <label  class="center-align">{!! trans('messages.last').' '.trans('messages.name') !!}</label>
    </div>



    <div class="input-field col s6">
        <i class="mdi-social-person-outline prefix"></i>

        <input type="text" name="email" id="email" placeholder="john@domainname.com">
        <label  class="center-align">{!! trans('messages.email')!!}</label>
    </div>




@if(!config('config.login'))

    <div class="input-field col s6">
        <i class="mdi-social-person-outline prefix"></i>

        <input type="text" name="username" id="username">
        <label  class="center-align">{!! trans('messages.username')!!}</label>
    </div>

@endif


    <div class="input-field col s6">
        <i class="mdi-action-lock-outline prefix"></i>

        <input type="password" name="password" id="password" class="{{(config('config.enable_password_strength_meter') ? 'password-strength' : '')}}" >
        <label  class="center-align">{!! trans('messages.password')!!}</label>
    </div>


    <div class="input-field col s6">
        <i class="mdi-action-lock-outline prefix"></i>

        <input type="password" name="password_confirmation" id="password_confirmation" >
        <label  class="center-align">{!! trans('messages.confirm').' '.trans('messages.password')!!}</label>
    </div>



          
<!--
{{ getCustomFields('user-registration-form') }}
@if(Auth::check())
<div class="form-group">
    <input name="send_welcome_email" type="checkbox" class="switch-input" data-size="mini" data-on-text="Yes" data-off-text="No" value="1"> {{trans('messages.send')}} welcome email
</div>
@endif
@if(config('config.enable_tnc'))
<div class="form-group">
    <input name="tnc" type="checkbox" class="switch-input" data-size="mini" data-on-text="Yes" data-off-text="No" value="1"> I accept <a href="/terms-and-conditions">Terms & Conditions</a>.
</div>
@endif
@if(config('config.enable_recaptcha') && !Auth::check())
<div class="g-recaptcha" data-sitekey="{{config('config.recaptcha_key')}}"></div>
<br />
@endif
-->

