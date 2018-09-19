@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">{!! trans('messages.template') !!}</h5>
<ol class="breadcrumbs">
    <li><a href="/home">{!! trans('messages.home') !!}</a></li>
    <li><a href="/template">IP{!! trans('messages.template') !!}</a></li>
    <li class=active"><a href="#">IP{!! trans('messages.edit') !!}</a></li>

</ol>
@stop
@section('content')
@include('common.materialize.header-form-link',['icon' => 'mdi-communication-email','url'=>'/template','buttonMessage'=>trans('messages.list_all'),'message'=>trans('messages.edit')])
<div class="row">
    <div class="col s3">&nbsp;</div>
    <div class="col s12">

        <div class="card-panel center">
            <h4 class="header2">{!! trans('messages.edit').'  '.trans('messages.template') !!}</h4>

            {!! Form::model($template,['method' => 'PATCH','route' => ['template.update',$template] ,'class' => 'email-template-form','id' => 'email-template-form-edit','data-form-table' => 'template_table','data-submit' => 'noAjax']) !!}
            <div class="input-field col s12">
                {!! Form::label('subject',trans('messages.subject'),[])!!}
                {!! Form::input('text','subject',isset($template->subject) ? $template->subject : '',['class'=>'form-control','placeholder'=>trans('messages.subject')])!!}
            </div>

            <div class="input-field col s12">
                {!! Form::label('body',trans('messages.body'),[])!!}
                {!! Form::textarea('body',isset($template->body) ? $template->body : '',['size' => '30x3', 'id'=>'editor1','class' => 'materialize-textarea', 'placeholder' => trans('messages.body')])!!}
                

                {{--<textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
                </textarea>--}}



                <div class="help-block"><strong>{!! trans('messages.available').' '.trans('messages.field') !!}</strong> : {!! ($template->is_default) ? config('template.'.$template->category.'.fields') : config('template-field.'.$template->category) !!} <br /> {{ trans('messages.template_field_instruction') }}</div>
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
@stop

@section('scripts')

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
</script>

@stop