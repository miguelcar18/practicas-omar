@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">{!! trans('messages.permission') !!}</h5>
<ol class="breadcrumbs">
    <li><a href="permission">{!! trans('messages.permission') !!}</a></li>
    <li><a href="#">Index</a></li>
    <li class="active">{!! trans('messages.permission') !!}</li>
</ol>

@stop

@section('content')
<div class="row">
    <div class="col s4">
        <div class="card-panel">
            <div>
                <h4 class="header2"><strong>{!!trans('messages.add_new').'</strong> <strong>'.trans('messages.permission')!!}</strong></h4>
            </div>

            {!! Form::open(['route' => 'permission.store','role' => 'form', 'class'=>'permission-form','id' => 'permission-form']) !!}
            @include('permission._form')
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}
                    </button>
                </div>

            </div>
            {!! Form::close() !!}
        </div>
    </div>


    <div class="col s8">
        <div class="card-panel">
            <h4 class="header2"> <strong>{!!trans('messages.list_all').' '.trans('messages.permission')!!}</strong></h4>

            <div>
                @include('common.materialize.datatable',['table' => $table_data['permission-table']])
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <a href="/save-permission" class="btn waves-effect waves-light light-blue darken-4 right">{{trans('messages.save').' '.trans('messages.permission')}}</a>

                </div>

            </div>
        </div>
    </div>
</div>





@stop
