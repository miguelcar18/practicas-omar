<div class="col s12 m12 l12 ">
    <div class="card-panel">
        <h4 class="header2">{{trans('messages.avatar')}}</h4>
        {!! Form::model($user,['files' => true, 'method' => 'POST','route' => ['user.avatar',$user->id] ,'class' => 'user-avatar-form','id' => 'user-avatar-form','data-submit' => 'noAjax']) !!}
        <div class="row">
            @if($user->Profile->avatar && File::exists(config('constant.upload_path.avatar').$user->Profile->avatar))
            <div class="input-field col s7">
                <img src="{!! URL::to(config('constant.upload_path.avatar').$user->Profile->avatar) !!}" width="150px" style="margin-left:20px;">
                {{-- <div class="checkbox">
                <label>
                    <input name="remove_avatar" type="checkbox" class="switch-input" data-size="mini" data-on-text="Yes" data-off-text="No" value="1" data-off-value="0"> {!! trans('messages.remove').' '.trans('messages.avatar') !!}
                </label>
            </div>
        --}}

                @endif


                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="avatar" id="avatar" title="{!! trans('messages.select').' '.trans('messages.avatar') !!}" >
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
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