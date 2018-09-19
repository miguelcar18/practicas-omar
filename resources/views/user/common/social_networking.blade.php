<div class="col s12" >
    
        {!! Form::model($user,['method' => 'POST','route' => ['user.social-update',$user->id] ,'class' => 'user-social-form','id' => 'user-social-form','data-no-form-clear' => 1]) !!}
        <div class="input-field col s6">
            <p>{!! Form::input('text','facebook',$user->Profile->facebook,['class'=>'form-control','placeholder'=>'Facebook'])!!}
                {!! Form::label('facebook','Facebook',[])!!}</p>
        </div>
        <div class="input-field col s6">
            <p> {!! Form::input('text','twitter',$user->Profile->twitter,['class'=>'form-control','placeholder'=>'Twitter'])!!}
                {!! Form::label('twitter','Twitter',[])!!}</p>
        </div>
        <div class="input-field col s6">
            <p>{!! Form::input('text','google_plus',$user->Profile->google_plus,['class'=>'form-control','placeholder'=>'Google Plus'])!!}
                {!! Form::label('google_plus','Google Plus',[])!!}</p>
        </div>
        {{ getCustomFields('user-social-form',$custom_social_field_values) }}

        <div class="row">
            <div class="input-field col s12">
                <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}
                    
                </button>
            </div>
        </div>

        {!! Form::close() !!}

  
</div>