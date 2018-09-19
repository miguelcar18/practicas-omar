<div class="row">
    <div class="col s12 m12 l12">
        <div class="card-panel">
            <h4 class="header2">Sms</h4>
            {!! Form::open(['route' => 'configuration.sms','role' => 'form', 'class'=>'config-sms-form','id' => 'config-sms-form','data-no-form-clear' => 1]) !!}
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s6">
                        {!! Form::input('text','nexmo_api_key',config('config.nexmo_api_key') ? config('config.hidden_value') : '',[])!!}
                        {!! Form::label('nexmo_api_key','Nexmo API Key',[])!!}
                    </div>
                    <div class="input-field col s6">
                        {!! Form::input('text','nexmo_api_secret',config('config.nexmo_api_secret') ? config('config.hidden_value') : '',[])!!}
                        {!! Form::label('nexmo_api_secret','Nexmo API Secret',[])!!}
                    </div>
                    </div>
                    <div class="col s12">
                        <div class="input-field col s6">
                            {!! Form::input('text','nexmo_from_number',config('config.nexmo_from_number') ? : '',[])!!}
                            {!! Form::label('nexmo_from_number','Nexmo From Number',[])!!}
                        </div>
                        {!! Form::hidden('config_type','sms')!!}
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}

                            </button>
                        </div>
                        {!! Form::hidden('config_type','sms')!!}
                    </div>
                    {!! Form::close() !!}
                </div>                
            </div>

        </div>

    </div>