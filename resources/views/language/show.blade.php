@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">{!! trans('messages.language') !!}</h5>
<ul class="breadcrumbs">
    <li><a href="/home">{!! trans('messages.home') !!}</a></li>
    <li class="active">{!! config('lang.'.$locale.'.language') !!}</li>
</ul>
@stop


@section('content')
@include('common.materialize.header-form-link',['icon' => 'mdi-action-language','url'=>'/language','buttonMessage'=>trans('messages.list_all'),'message'=>trans('messages.language')])

<div class="col s12 m8 l9">
    <div class="row">
        <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
            <li> <div class="collapsible-header ">{{trans('messages.plugin')}}</div>
                <div class="collapsible-body">

                    <div class="row col s12" >
                        {!! Form::model($language,['method' => 'PATCH','route' => ['language.plugin',$locale] ,'class' => 'language-plugin-form','id'=>'language-plugin-form','data-no-form-clear' => 1]) !!}
                        <div class="row">
                            <div class="input-field col s6">
                                {!! Form::select('datatable', config('lang_datatable'),isset($locale) ? config('lang.'.$locale.'.datatable') : '',['title'=>trans('messages.select_one')])!!}
                                {!! Form::label('datatable',trans('messages.table').' '.trans('messages.language'),[])!!}
                            </div>
                            <div class="input-field col s6">
                                {!! Form::select('calendar', config('lang_calendar'),isset($locale) ? config('lang.'.$locale.'.calendar') : '',['title'=>trans('messages.select_one')])!!}
                                {!! Form::label('calendar',trans('messages.calendar').' '.trans('messages.language'),[])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                {!! Form::select('datepicker', config('lang_datepicker'),isset($locale) ? config('lang.'.$locale.'.datepicker') : '',['title'=>trans('messages.select_one')])!!}
                                {!! Form::label('datepicker',trans('messages.datepicker').' '.trans('messages.language'),[])!!}
                            </div>
                            <div class="input-field col s6">
                                {!! Form::select('datetimepicker', config('lang_datetimepicker'),isset($locale) ? config('lang.'.$locale.'.datetimepicker') : '',['title'=>trans('messages.select_one')])!!}
                                {!! Form::label('datetimepicker',trans('messages.datetimepicker').' '.trans('messages.language'),[])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                {!! Form::select('validation', config('lang_validation'),isset($locale) ? config('lang.'.$locale.'.validation') : '',['title'=>trans('messages.select_one')])!!}
                                {!! Form::label('validation',trans('messages.validation').' '.trans('messages.language'),[])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}

                                </button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </li>

            @foreach($modules as $module)
            <li>
                <div class="collapsible-header ">{!! trans('messages.'.$module) !!} ({{ $word_count[$module] }})</div>
                <div class="collapsible-body">
                    <div class="row col s12">

                        <strong>{{ trans('messages.'.$module) }}</strong> {{ trans('messages.translation') }}

                        {!! Form::model($language,['method' => 'PATCH','route' => ['language.update-translation',$locale] ,'class' => 'form-horizontal','id'=>'language_translation_'.$module, 'data-no-form-clear' => 1]) !!}
                        @foreach($words as $key => $word)
                        @if($word['module'] == $module)
                        <div class="input-field col s6">
                            {!! Form::label($key,$word['value'],['class'=>'col-sm-6 control-label pull-left'])!!}
                           
                                @if($locale == 'en')
                                {!! Form::input('text',$key,(array_key_exists($key, $translation)) ? $translation[$key] : $word['value'],['class'=>'form-control','placeholder'=>trans('messages.translation')])!!}
                                @else
                                {!! Form::input('text',$key,(array_key_exists($key, $translation)) ? $translation[$key] : '',['class'=>'form-control','placeholder'=>trans('messages.translation')])!!}
                                @endif
                             {!! Form::label($key,$word['value'],[])!!}
                        </div>
                        @endif
                        @endforeach
                        {!! Form::hidden('module',$module) !!}
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}

                                </button>
                            </div>
                        </div>

                        {!! Form::close() !!}


                    </div>


                </div>
            </li>
            @endforeach

        </ul>
    </div>
</div>











@stop