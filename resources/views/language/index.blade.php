@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">{!! trans('messages.language') !!}</h5>
<ul class="breadcrumbs">
    <li><a href="/home">{!! trans('messages.home') !!}</a></li>
    <li class="active">{!! trans('messages.language') !!}</a></li>
</ul>
@stop


@section('content')
<div class="row">
    <div class="row col s4">
        <div class="card-panel col s12">
            <h4 class="header2"><strong>{!! trans('messages.add_new') !!}</strong> {!! trans('messages.word') !!}</h4>

            {!! Form::open(['route' => 'language.add-words','role' => 'form', 'class'=>'language-entry-form','id' => 'language-entry-form','data-submit' => 'noAjax']) !!}

            <div class="input-field col s12">
                {!! Form::label('text',trans('messages.key'),[])!!}
                {!! Form::input('text','key','',['class'=>'form-control','placeholder'=>trans('messages.key')])!!}
            </div>
            <div class="input-field col s12">
                {!! Form::label('text',trans('messages.word_or_sentence'),[])!!}
                {!! Form::input('text','text','',['class'=>'form-control','placeholder'=>trans('messages.word_or_sentence')])!!}
            </div>
            <div class="input-field col s12">
                {!! Form::label('module',trans('messages.module'),[])!!}
                {!! Form::input('text','module','',['class'=>'form-control','placeholder'=>trans('messages.module')])!!}
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}
                    </button>
                </div>
            </div>

            <p></p>
            {!! Form::close() !!}

        </div>

        <div class="card-panel col s12">
            <h4 class="header2"><strong>{!! trans('messages.add_new') !!}</strong> {!! trans('messages.language') !!}</h4>

            {!! Form::open(['route' => 'language.store','role' => 'form', 'class'=>'language-form','id' => 'language-form' ,'data-submit' => 'noAjax']) !!}
            @include('language._form')
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}
                    </button>
                </div>
            </div>
            <p></p>
            {!! Form::close() !!}
        </div>


    </div>    
    <div class="row col s8">    

        <div class="card-panel col s12">

            <h4 class="header2"><strong>{!! trans('messages.list_all') !!}</strong> {!! trans('messages.language') !!}</h4>

      
            <div>
                @include('common.materialize.datatable',['table' => $table_data['language-table']])
            </div>
        </div>

    </div>
</div>





@stop