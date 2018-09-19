<div class="row">
    <div class="col s12 m12 l12">
        <div class="card-panel">
            <h4 class="header2">{{trans('messages.mail')}} {{trans('messages.configuration')}}</h4>
            {!! Form::open(['route' => 'configuration.mail','role' => 'form', 'class'=>'config-mail-form','id' => 'config-mail-form','data-no-form-clear' => 1]) !!}

            <div class="row">			
                <div class="col-sm-6">
                    <div class="input-field col s6">
                        {!! Form::select('driver', [
                        null=>'Please Select',
                        'mail' => 'mail',
                        'sendmail' => 'sendmail',
                        'smtp' => 'smtp',
                        'mailgun' => 'mailgun',
                        'mandrill' => 'mandrill',
                        'log' => 'log'
                        ],(config('mail.driver')) ? : '',['id' => 'mail_driver'])!!}
                        {!! Form::label('driver','Driver',[])!!}
                    </div>
                    <div class="input-field col s6">
                        {!! Form::input('email','from_address',config('mail.from.address') ? : '',[])!!}
                        {!! Form::label('from_address','From Address',[])!!}
                    </div>
                    <div class="input-field col s6">
                        {!! Form::input('text','from_name',config('mail.from.name') ? : '',[])!!}
                        {!! Form::label('from_name','From Name',[])!!}
                    </div>
                    {!! Form::hidden('config_type','mail')!!}
                </div>
                <div class="col-sm-6">
                    <div id="smtp_configuration" class="mail_config">
                        <div class="input-field col s6">
                            {!! Form::input('text','host',(config('mail.host')) ? : '',[])!!}
                            {!! Form::label('host','SMTP Host',[])!!}
                        </div>
                        <div class="input-field col s6">
                            {!! Form::input('text','port',(config('mail.port')) ? : '',[])!!}
                            {!! Form::label('port','SMTP Port',[])!!}
                        </div>
                        <div class="input-field col s6">
                            {!! Form::input('text','username',(config('mail.username')) ? : '',[])!!}
                            {!! Form::label('username','SMTP Username',[])!!}
                        </div>
                        <div class="input-field col s6">
                            {!! Form::input('password','password',(config('mail.password')) ? config('config.hidden_value') : '',[])!!}
                            {!! Form::label('password','SMTP Password',[])!!}
                        </div>
                        <div class="input-field col s6">
                            {!! Form::select('encryption', ['ssl'=>'SSL',
                            'tls' => 'TLS'],(config('config.encryption')) ? : 'tls',[])!!}
                            {!! Form::label('encryption','Encryption',[])!!}
                        </div>
                    </div>
                    <div id="mandrill_configuration" class="mail_config">
                        <div class="input-field col s6">
                            {!! Form::input('text','mandrill_secret',(config('services.mandrill.secret')) ? : '',[])!!}
                            {!! Form::label('mandrill_secret','Secret Key',[])!!}
                        </div>
                    </div>
                    <div id="mailgun_configuration" class="mail_config">
                        <div class="input-field col s6">
                            {!! Form::input('text','mailgun_domain',(config('services.mailgun.domain')) ? : '',[])!!}
                            {!! Form::label('mailgun_domain','Domain',[])!!}
                        </div>
                        <div class="input-field col s6">
                            {!! Form::input('text','mailgun_secret',(config('services.mailgun.secret')) ? : '',[])!!}
                            {!! Form::label('mailgun_secret','Secret Key',[])!!}
                        </div>
                        <div class="input-field col s6">
                            {!! Form::input('text','mailgun_host',(config('mail.host')) ? : '',[])!!}
                            {!! Form::label('mailgun_host','SMTP Host',[])!!}
                        </div>
                        <div class="input-field col s6">
                            {!! Form::input('text','mailgun_port',(config('mail.port')) ? : '',[])!!}
                            {!! Form::label('mailgun_port','SMTP Port',[])!!}
                        </div>
                        <div class="input-field col s6">
                            {!! Form::input('text','mailgun_username',(config('mail.username')) ? : '',[])!!}
                            {!! Form::label('mailgun_username','STMP Username',[])!!}
                        </div>
                        <div class="input-field col s6">
                            {!! Form::label('mailgun_password','STMP Password',[])!!}
                            {!! Form::input('password','mailgun_password',(config('mail.password')) ? : '',[])!!}




                        </div>
                        
                    </div>
                    <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}
                                    
                                </button>
                            </div>
                        </div>
                </div>
                <div class="clear"></div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>