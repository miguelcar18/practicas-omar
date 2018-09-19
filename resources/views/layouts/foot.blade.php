   {{-- <div id="js-var" style="visibility:none;" 
        data-toastr-position="{{config('config.notification_position')}}"
        data-something-error-message="{{trans('messages.something_error_message')}}"
        data-character-remaining="{{trans('messages.character_remaining')}}"
        data-textarea-limit="{{config('config.textarea_limit')}}"
        data-calendar-language="{!! $calendar_language !!}" 
        data-datepicker-language="{!! $datepicker_language !!}" 
        data-datatable-language="/assets/vendor/datatables/locale/{!! config('lang.'.$default_language.'.datatable') !!}.json" 
    ></div>

    {!! Html::script('assets/vendor/jquery/jquery.min.js') !!}
    {!! Html::script('assets/vendor/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('assets/vendor/toastr/toastr.min.js') !!}
    @include('common.toastr_notification')
    {!! Html::script('assets/vendor/metisMenu/metisMenu.min.js') !!}
    {!! Html::script('assets/vendor/switch/bootstrap-switch.min.js') !!}
    {!! Html::script('assets/vendor/datepicker/js/bootstrap-datepicker.js') !!}
    {!! Html::script('assets/vendor/datatables/datatables.min.js') !!}
    {!! Html::script('assets/vendor/summernote/summernote.min.js') !!}
    {!! Html::script('assets/vendor/select2/select2.min.js') !!}
    {!! Html::script('assets/vendor/fileinput/fileinput.min.js') !!}
    {!! Html::script('assets/vendor/password/password.js') !!}
    @if(in_array('calendar',$assets))
        {!! Html::script('assets/vendor/calendar/moment.min.js') !!}
        {!! Html::script('assets/vendor/calendar/fullcalendar.min.js') !!}
        {!! Html::script('assets/vendor/calendar/locale-all.js') !!}
    @endif
    @if(in_array('recaptcha',$assets))
        <script src='https://www.google.com/recaptcha/api.js'></script>
    @endif
    {!! Html::script('assets/vendor/tags/tags.min.js') !!}
    {!! Html::script('assets/vendor/icheck/icheck.min.js') !!}
    {!! Html::script('assets/js/bootbox.js') !!}
    {!! Html::script('assets/js/textAvatar.js') !!}
    {!! Html::script('assets/js/script.min.js') !!}

    @if(config('lang.'.$default_language.'.datepicker') != 'en')
        {!! Html::script('assets/vendor/datepicker/locales/bootstrap-datepicker.'.config('lang.'.$default_language.'.datepicker').'.min.js') !!}
    @endif
    <script>
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
    });
    var calendar_events = {!! (isset($events)) ? json_encode($events) : '""' !!};
    </script>
    {!! Html::script('assets/js/wmlab.js') !!}
    {!! Html::script('assets/js/app.js') !!}
</body>
</html>--}}
