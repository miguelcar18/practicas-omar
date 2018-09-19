<div class="col s12 m12 l12" >

    {!! Form::model($user,['method' => 'POST','route' => ['user.email',$user->id] ,'class' => 'user-email-form','id' => 'user-email-form','data-extra' => $user->id]) !!}
    <div class="input-field col s6">
        {!! Form::select('template_id', [null=>trans('messages.select_one')] + $templates,'',['id'=>'template_id','style' => 'width:100%;'])!!}
    </div>
    <div class="input-field col s6">
        {!! Form::input('text','subject','',['class'=>'form-control','placeholder'=>trans('messages.subject'),'id' => 'mail_subject']) !!}
    </div>
</div>
<div class="col s12 m12 l12" >    
    <div class="input-field col s12">
        {!! Form::textarea('body','',['size' => '30x3', 'class' => 'materialize-textarea', 'id' => 'mail_body', 'placeholder' => trans('messages.body')])!!}



    </div>

</div>

<div class="row">
    <div class="input-field col s12">
        <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.send')}}
        </button>
    </div>
</div>    {!! Form::close() !!}

@section('scripts')
<script>
    
  CKEDITOR.replace('mail_body');  
    

</script>
@stop