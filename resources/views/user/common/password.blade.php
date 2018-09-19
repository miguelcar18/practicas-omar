<div class="col s12 m12 l12" >


    {!! Form::model($user,['method' => 'POST','route' => ['user.force-change-password',$user->id] ,'class' => 'user-force-change-password-form','id' => 'user-force-change-password-form']) !!}
    <div class="input-field col s12">
        <p>{!! Form::input('password','new_password','',['class'=>'form-control '.(config('config.enable_password_strength_meter') ? 'password-strength' : ''),'placeholder'=>trans('messages.new').' '.trans('messages.password')])!!}
            {!! Form::label('new_password',trans('messages.new').' '.trans('messages.password'),[])!!}</p>
    </div>
    <div class="input-field col s12">
        <p> {!! Form::input('password','new_password_confirmation','',['class'=>'form-control','placeholder'=>trans('messages.confirm').' '.trans('messages.password')])!!}
            {!! Form::label('new_password_confirmation',trans('messages.confirm').' '.trans('messages.password'),[])!!}</p>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}
                
            </button>
        </div>
    </div>
    {!! Form::close() !!}


</div>