@extends('layouts.materialize.default')

	@section('breadcrumbs')
<h5 class="breadcrumbs-title">{!! trans('messages.template') !!}</h5>
<ol class="breadcrumbs">
    <li><a href="/home">{!! trans('messages.home') !!}</a></li>
    <li class=active"><a href="/template">{!! trans('messages.template') !!}</a></li>

</ol>

@stop

@section('content')

	<div class="row">
    <div class="col s4">
        <div class="card-panel">
            <div>
                <h4 class="header2"><strong>{!!trans('messages.add_new').'</strong> '.trans('messages.filter')!!}</h4>
            </div>

            	{!! Form::open(['route' => 'template.store','role' => 'form', 'class'=>'email-template-form','id' => 'email-template-form','data-form-table' => 'template_table']) !!}
				@include('template._form')

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
            <h4 class="header2"><strong>{!!trans('messages.list_all').'</strong> '.trans('messages.template')!!}</h4>

            <div>
                @include('common.datatable',['table' => $table_data['template-table']])
            </div>

            <div class="row">


            </div>
        </div>
    </div>

		</div>
	@stop

{{--	@section('content')
		<div class="row">
			<div class="col-sm-12 collapse" id="box-detail">
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<strong>{!! trans('messages.add_new') !!}</strong> {!! trans('messages.template') !!}
                    	<div class="additional-btn">
							<button class="btn btn-sm btn-primary" data-toggle="collapse" data-target="#box-detail"><i class="fa fa-minus icon"></i> {!! trans('messages.hide') !!}</button>
						</div>
                    </div>
                    <div class="panel-body">
                    	{!! Form::open(['route' => 'template.store','role' => 'form', 'class'=>'email-template-form','id' => 'email-template-form','data-form-table' => 'template_table']) !!}
							@include('template._form')
						{!! Form::close() !!}
                    </div>
                </div>
            </div>
			<div class="col-sm-12">
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<strong>{!! trans('messages.list_all') !!}</strong> {!! trans('messages.template') !!}
                    	<div class="additional-btn">
                    		<a href="/email" class="btn btn-sm btn-primary">{{trans('messages.email').' '.trans('messages.log')}}</a>
							<a href="#" data-toggle="collapse" data-target="#box-detail"><button class="btn btn-sm btn-primary"><i class="fa fa-plus icon"></i> {!! trans('messages.add_new') !!}</button></a>
						</div>
                    </div>
                    <div class="panel-body full">
						@include('common.datatable',['table' => $table_data['template-table']])
                    </div>
                </div>
            </div>
		</div>
	@stop--}}