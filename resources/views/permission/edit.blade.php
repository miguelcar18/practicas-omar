@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">{!! trans('messages.permission') !!}</h5>
<ol class="breadcrumbs">
    <li><a href="permission">{!! trans('messages.permission') !!}</a></li>
    <li><a href="#">Edit</a></li>
    <li class="active">{!! trans('messages.permission') !!}</li>
</ol>

@stop
@section('content')
@include('common.materialize.header-form-link',['icon' => 'mdi-notification-vpn-lock','url'=>'/permission','buttonMessage'=>trans('messages.list_all'),'message'=>trans('messages.edit')])

<div class="row">
    <div class="col s3">&nbsp;</div>
    <div class="col s6">

        <div class="card-panel center">
            <h4 class="header2">{!! trans('messages.edit').' '.trans('messages.permission') !!}</h4>

            <div class="modal-body">
                {!! Form::model($permission,['method' => 'PATCH','route' => ['permission.update',$permission->id] ,'class' => 'permission-form','data-submit'=>'noAjax','id' => 'permission-form-edit']) !!}
                @include('permission._form', ['buttonText' => trans('messages.update')])
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
    <div class="col s3">&nbsp;</div>
</div>
@stop