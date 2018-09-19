@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">{!! trans('messages.home') !!}</h5>
<ol class="breadcrumbs">
	<li><a href="/home">{!! trans('messages.home') !!}</a></li>
    <li class=active"><a href="#">{!! trans('messages.activity').' '.trans('messages.log') !!}</a></li>

</ol>

@stop
@section('content')

	<div class="row">
    <div class="col s12">
        <div class="card-panel">
            <h4 class="header2"><strong>{!!trans('messages.list_all').'</strong> '.trans('messages.activity').' '.trans('messages.log')!!}</h4>

            <div>
                @include('common.datatable',['table' => $table_data['activity-log-table']])
            </div>

            <div class="row">


            </div>
        </div>
    </div>

		</div>
	@stop
