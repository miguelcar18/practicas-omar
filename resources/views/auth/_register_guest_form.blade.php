
                                   <div class="row margin">
                                        <div class="input-field col s6">
                                             <input type="text" name="first_name" id="first_name"  placeholder="{!! trans('messages.first').' '.trans('messages.name') !!}">
                                             <label for="name">{{trans('messages.name')}}</label>
                                   
                                        </div>
                                        <div class="input-field col s6">
                                             <input type="text" name="last_name" id="last_name" class="form-control" placeholder="{!! trans('messages.last').' '.trans('messages.name') !!}">
                                        </div>
                                    </div>
                                    
                               
                                <div class="row">
                                <div class="input-field col s12">
                                    <input type="email" name="email" id="email">
                                    <label for="email">{{trans('messages.email')}}</label>
                                </div>
                                </div>
                                @if(!config('config.login'))
                                <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="username" id="username">
                                    <label for="username">{{trans('messages.username')}}</label>
                                </div>
                                </div>
                                @endif
                               <div class="row">
                                <div class="input-field col s12">
                                    <input type="password" name="password" id="password" class="{{(config('config.enable_password_strength_meter') ? 'password-strength' : '')}}">
                                     <label for="password">{{trans('messages.password')}}</label>
                                </div>
                                </div>
                                <div class="row">
                                <div class="input-field col s12">
                                    <input type="password" name="password_confirmation" id="password_confirmation" > 
                                     <label for="password_confirmation">{{trans('messages.confirm').' '.trans('messages.password')}}</label>

                                </div>
                                </div>
                                {{ getCustomFields('user-registration-form') }}
                                @if(Auth::check())
                                <div class="row">
                                <div class="input-field col s12">
                                    <input name="send_welcome_email" type="checkbox" class="switch-input" data-size="mini" data-on-text="Yes" data-off-text="No" value="1"> {{trans('messages.send')}} welcome email
                                </div>
                                </div>
                                @endif
                                @if(config('config.enable_tnc'))
                                <div class="row">
                                <div class="input-field col s12">
                                    <input name="tnc" type="checkbox" class="switch-input" data-size="mini" data-on-text="Yes" data-off-text="No" value="1"> I accept <a href="/terms-and-conditions">Terms & Conditions</a>.
                                </div>
                                </div>
                                @endif
                                @if(config('config.enable_recaptcha') && !Auth::check())
                                <div class="row">
                                <div class="g-recaptcha" data-sitekey="{{config('config.recaptcha_key')}}"></div>
                                </div>
                                <br />
                                @endif