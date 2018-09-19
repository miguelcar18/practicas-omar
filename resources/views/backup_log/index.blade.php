@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">{!! trans('messages.backup') !!}</h5>
<ol class="breadcrumbs">
	<li><a href="/home">{!! trans('messages.home') !!}</a></li>
    <li class=active"><a href="#">{!! trans('messages.backup') !!}</a></li>

</ol>

@section('content')

	<div class="row">
    <div class="col s4">
        <div class="card-panel">
            <div>
                <h4 class="header2"><strong>{!!trans('messages.add_new').'</strong> IP '.trans('messages.filter')!!}</h4>
            </div>

            {!! Form::open(['route' => 'backup.store','role' => 'form', 'class'=>'backup-form','id' => 'backup-form']) !!}
			{{--<span style="font-size:12px;">{{trans('messages.delete').' '.trans('messages.old')}}</span> <input name="delete_old_backup" type="checkbox" class="checkbox-input" data-size="mini" data-on-text="Yes" data-off-text="No" value="1">--}}
			<div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.generate').' '.trans('messages.backup')}}
                    </button>
                </div>

            </div>
            {!! Form::close() !!}
        </div>
    </div>


    <div class="col s8">
        <div class="card-panel">
            <h4 class="header2"><strong>{!!trans('messages.list_all').'</strong>'.trans('messages.backup')!!}</h4>

            <div>
               @include('common.datatable',['table' => $table_data['backup-table']])
            </div>

            <div class="row">
            </div>
        </div>
    </div>

		</div>
	@stop


@stop
