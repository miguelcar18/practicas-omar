<div class="row">
    <div class="col s12 m12 l12 ">
        <div class="card-panel">
            <h4 class="header2">{{trans('messages.logo')}}</h4>
                {!! Form::open(['files' => true, 'route' => 'configuration.logo','role' => 'form' ,'id' => 'config-logo-form','data-submit' => 'noAjax']) !!}
            <div class="row">

                <div class="input-field col s7">
                    @if(config('config.logo') && File::exists(config('constant.upload_path.logo').config('config.logo')))

                    <img src="{{ URL::to(config('constant.upload_path.logo').config('config.logo')) }}" width="250px" style="margin-left:40%;">
                    <!--<div class="checkbox">
                        <label>
                            <input name="remove_logo" type="checkbox"  data-size="mini" data-on-text="Yes" data-off-text="No" value="1" data-off-value="0"> {!! trans('messages.remove').' '.trans('messages.logo') !!}
                        </label>
                    </div>-->
                    @endif

                    <div class="file-field input-field ">
                        <div class="btn">
                            <span>File</span>
                            <input type="file"  name="logo" id="logo" data-buttonText="{!! trans('messages.select').' '.trans('messages.logo') !!}">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>

                    </div>

                </div>
                {!! Form::hidden('config_type','logo')!!}
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

