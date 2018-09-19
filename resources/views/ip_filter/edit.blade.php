@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">IP{!! trans('messages.filter') !!}</h5>
<ol class="breadcrumbs">
	<li><a href="/home">{!! trans('messages.home') !!}</a></li>
    <li><a href="/ip-filter">IP{!! trans('messages.filter') !!}</a></li>
    <li class=active"><a href="#">IP{!! trans('messages.edit') !!}</a></li>

</ol>
@stop
@section('content')
@include('common.materialize.header-form-link',['icon' => 'mdi-notification-vpn-lock','url'=>'/ip-filter','buttonMessage'=>trans('messages.list_all'),'message'=>trans('messages.edit')])

<div class="row">
    <div class="col s3">&nbsp;</div>
    <div class="col s6">

        <div class="card-panel center">
            <h4 class="header2">{!! trans('messages.edit').' IP '.trans('messages.filter') !!}</h4>

            <div class="modal-body">
                {!! Form::model($ip_filter,['method' => 'PATCH','route' => ['ip-filter.update',$ip_filter->id] ,'class' => 'ip-filter-form','id' => 'ip-filter-form-edit']) !!}
				@include('ip_filter._form')
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

