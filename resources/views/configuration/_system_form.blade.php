
<div class="row">
    <div class="col s12 m12 l12">
        <div class="card-panel">
            <h4 class="header2">{{trans('messages.system')}} {{trans('messages.configuration')}}</h4>
            {!! Form::open(['route' => 'configuration.store','role' => 'form', 'class'=>'config-system-form','id' => 'config-system-form','data-disable-enter-submission' => '1','data-no-form-clear' => 1]) !!}

            <div class="row">
                <div class="col s12">
                    <div class="input-field col s6">
                        {!! Form::input('text','application_name',(config('config.application_name')) ? : '',[])!!}
                        {!! Form::label('application_name',trans('messages.application').' '.trans('messages.name'),[])!!}
                    </div>
                    <div class="input-field col s6">
                        {!! Form::select('timezone_id', [null=>trans('messages.select_one')] + config('timezone'),(config('config.timezone_id')) ? : '',[])!!}
                        {!! Form::label('timezone_id',trans('messages.timezone'),[])!!}
                    </div>
                </div>
                </div>


                <div class="row">
                    <div class="col s12">
                        <div class="input-field col s6">
                            {!! Form::select('default_language', $languages,(config('config.default_language')) ? : '',[])!!}
                            {!! Form::label('default_language',trans('messages.default').' '.trans('messages.language'),[])!!}
                        </div>
                        <div class="input-field col s6">
                            {!! Form::select('direction', [
                            'ltr' => trans('messages.ltr'),
                            'rtl' => trans('messages.rtl'),
                            ],(config('config.direction')) ? : 'ltr',[])!!}
                            {!! Form::label('direction',trans('messages.direction'),[])!!}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col s12">   


                        <div class="input-field col s6">
                            {!! Form::select('date_format', [
                            'd-m-Y' => date('d-m-Y'),
                            'm-d-Y' => date('m-d-Y'),
                            'M-d-Y' => date('M-d-Y'),
                            'd-M-Y' => date('d-M-Y'),
                            ],(config('config.date_format')) ? : 'd-m-Y',[])!!}
                            {!! Form::label('date_format','Date Format',[])!!}
                        </div>

                        <div class="input-field col s6">
                            {!! Form::input('text','allowed_upload_file',(config('config.allowed_upload_file')) ? : '',[])!!}
                            {!! Form::label('allowed_upload_file',trans('messages.allowed_upload_file_type'),[])!!}
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col s12">
                        <div class="input-field col s6">
                            {!! Form::select('notification_position', [
                            'toast-top-right'=>trans('messages.top_right'),
                            'toast-top-left' => trans('messages.top_left'),
                            'toast-bottom-right' => trans('messages.bottom_right'),
                            'toast-bottom-left' => trans('messages.bottom_left')
                            ],(config('config.notification_position')) ? : '',[])!!}
                            {!! Form::label('notification_position',trans('messages.notification_position'),[])!!}
                        </div>

                        <div class="input-field col s6">
                            {!! Form::select('time_format', [
                            '1'=>'12 Hours',
                            '0'=>'24 Hours'
                            ],(config('config.time_format')) ? : '',[])!!}
                            {!! Form::label('time_format','Time Format',[])!!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">

                        <div class="input-field col s6">
                            <input name="error_display" type="checkbox" class="checkbox-input filled-in" id="error_display" value="1" {{ (config('config.error_display') == 1) ? 'checked' : '' }} data-off-value="0">
                            {!! Form::label('error_display',trans('messages.error').' '.trans('messages.display'),[])!!}

                        </div>

                        <div class="input-field col s6">
                            <input name="multilingual" type="checkbox" class="checkbox-input filled-in" id="multilingual" value="1" {{ (config('config.multilingual') == 1) ? 'checked' : '' }} data-off-value="0">
                            {!! Form::label('multilingual',trans('messages.multilingual'),[])!!}

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <div class="input-field col s6">
                            <input name="enable_ip_filter" type="checkbox" class="checkbox-input filled-in" id="enable_ip_filter" value="1" {{ (config('config.enable_ip_filter') == 1) ? 'checked' : '' }} data-off-value="0">
                            {!! Form::label('enable_ip_filter',trans('messages.enable').' IP '.trans('messages.filter'),[])!!}

                        </div>

                    <div class="input-field col s6">
                        <input name="enable_activity_log" type="checkbox" class="checkbox-input filled-in" id="enable_activity_log" value="1" {{ (config('config.enable_activity_log') == 1) ? 'checked' : '' }} data-off-value="0">
                        {!! Form::label('enable_activity_log',trans('messages.enable').' IP '.trans('messages.activity').''.trans('messages.log'),[])!!}

                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <div class="input-field col s6">
                            <input name="enable_email_template" type="checkbox" class="checkbox-input filled-in" id="enable_email_template" value="1" {{ (config('config.enable_email_template') == 1) ? 'checked' : '' }} data-off-value="0">
                            {!! Form::label('enable_email_template',trans('messages.enable').' IP '.trans('messages.email').''.trans('messages.template'),[])!!}
                        </div>

                    {{--<div class="input-field col s6">
                        <input name="enable_to_do" type="checkbox" class="checkbox-input filled-in" id="enable_to_do" value="1" {{ (config('config.enable_to_do') == 1) ? 'checked' : '' }} data-off-value="0">
                        {!! Form::label('enable_to_do',trans('messages.enable').' '.trans('messages.to_do'),[])!!}
                    </div>--}}
                    </div>
                </div>
            
            {{--
                <div class="row">
                    <div class="col s12">
                        <div class="input-field col s6">
                            <input name="enable_message" type="checkbox" class="checkbox-input filled-in" id="enable_message" value="1" {{ (config('config.enable_message') == 1) ? 'checked' : '' }} data-off-value="0">
                            {!! Form::label('enable_message',trans('messages.enable').' '.trans('messages.message'),[])!!}
                        </div>
                    <div class="input-field col s6">
                        <input name="enable_backup" type="checkbox" class="checkbox-input filled-in" id="enable_backup" value="1" {{ (config('config.enable_backup') == 1) ? 'checked' : '' }} data-off-value="0">
                        {!! Form::label('enable_backup',trans('messages.enable').' '.trans('messages.backup'),[])!!}
                    </div>
                    </div>
                </div>
--}}


                <div class="row">
                    <div class="col s12">
                        <div class="input-field col s6">
                            <input name="enable_group_chat" type="checkbox" class="checkbox-input enable-show-hide filled-in " id="enable_group_chat" value="1" {{ (config('config.enable_group_chat') == 1) ? 'checked' : '' }} data-off-value="0">
                            {!! Form::label('enable_group_chat',trans('messages.enable').' '.trans('messages.group').' '.trans('messages.chat'),[])!!}

                        <div id="enable_group_chat_field">
                            <div class="input-field col s6">
                                <input name="enable_chat_refresh" type="checkbox" class="checkbox-input enable-show-hide filled-in " id="enable_chat_refresh" value="1" {{ (config('config.enable_chat_refresh') == 1) ? 'checked' : '' }} data-off-value="0">
                                {!! Form::label('enable_chat_refresh',trans('messages.enable').' '.trans('messages.chat').' '.trans('messages.refresh'),[])!!}
                            </div>

                            <div id="enable_chat_refresh_field">
                                <div class="input-field col s3">
                                    {!! Form::input('text','chat_refresh_duration',(config('config.chat_refresh_duration')) ? : '',[])!!}
                                    {!! Form::label('chat_refresh_duration',trans('messages.chat').' Refresh Duration (In Second)',[])!!}
                                </div>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>



                <div class="row">
                    <div class="col s12">
                        <div class="input-field col s6">

                            <input name="maintenance_mode" type="checkbox" class="checkbox-input enable-show-hide filled-in " id="maintenance_mode" value="1" {{ (config('config.maintenance_mode') == 1) ? 'checked' : '' }} data-off-value="0">
                            {!! Form::label('maintenance_mode',trans('messages.maintenance').' '.trans('messages.mode'),[])!!}
                        </div>
                        <div class="input-field col s6">
                            <div id="maintenance_mode_field">

                                {!! Form::input('text','under_maintenance_message',(config('config.under_maintenance_message')) ? : '',[])!!}
                                {!! Form::label('under_maintenance_message',trans('messages.under_maintenance_message'),[])!!}
                                <span class="countdown"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}

                        </button>
                    </div>
                </div>
           

            {!! Form::close() !!}
        </div>
    </div>
</div>
