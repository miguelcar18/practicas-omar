        
<div class="row">
    <div class="col s12 m12 l12">
        <div class="card-panel">
            <h4 class="header2">{{trans('messages.social')}} {{trans('messages.login')}}</h4>           

            {!! Form::open(['route' => 'configuration.store','role' => 'form', 'class'=>'config-social-login-form','id' => 'config-social-login-form','data-no-form-clear' => 1]) !!}

            <div class="row">
                <div class="col-md-4">
                    <div class="input-field col s6">


                        <p>
                            <input name="enable_oauth" type="checkbox" class="checkbox-input filled-in " id="enable_oauth" value="1" {{ (config('config.enable_oauth') == 1) ? 'checked' : '' }} data-off-value="0">
                            {!! Form::label('enable_oauth',trans('messages.enable').' oAuth',[])!!}
                        </p>


                    </div>

                    <div class="input-field col s6">
                        
                        <p>
                            <input name="enable_social_login" type="checkbox" class="checkbox-input enable-show-hide filled-in " id="enable_social_login" value="1" {{ (config('config.social_login') == 1) ? 'checked' : '' }} data-off-value="0">
                            {!! Form::label('enable_social_login',trans('messages.enable').' Social Login',[])!!}
                        </p>
                    </div>
                </div>
                <div id="enable_social_login_field">
                    @foreach(config('constant.social_login_provider') as $provider)
                    <div class="col-md-4">
                        <div class="input-field col s6">

                            <p>
                                <input name="enable_{{$provider}}_login" type="checkbox" class="checkbox-input enable-show-hide filled-in " id="enable_{{$provider}}_login" value="1" {{ (config('config.enable_'.$provider.'_login') == 1) ? 'checked' : '' }} data-off-value="0">
                                {!! Form::label('enable_'.$provider.'_login',trans('messages.enable').' '.toWord($provider).' Login',[])!!}

                            </p>



                        </div>
                        <div id="enable_{{$provider}}_login_field">
                            <div class="input-field col s6">
                                {!! Form::input('text',$provider.'_client_id',(config('config.'.$provider.'_client_id')) ? config('config.hidden_value') : '',[])!!}
                                {!! Form::label($provider.'_client_id',toWord($provider).' Client Id',[])!!}
                            </div>
                            <div class="input-field col s6">
                                {!! Form::input('text',$provider.'_client_secret',(config('config.'.$provider.'_client_secret')) ? config('config.hidden_value') : '',[])!!}
                                {!! Form::label($provider.'_client_secret',toWord($provider).' Client Secret',[])!!}
                            </div>
                            <div class="input-field col s6">
                                {!! Form::input('text',$provider.'_redirect',(config('config.'.$provider.'_redirect')) ? config('config.hidden_value') : '',[])!!}
                                {!! Form::label($provider.'_redirect',toWord($provider).' App Redirect URL',[])!!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}

                    </button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

</div>

</div>
