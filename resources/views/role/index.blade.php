@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">{!! trans('messages.permission') !!}</h5>
<ol class="breadcrumbs">
    <li><a href="home">{!! trans('messages.home') !!}</a></li>
    <li><a href="role">{!! trans('messages.role') !!}</a></li>
    <li class="active"><a href="#">Index</a></li>

</ol>

@stop

@section('content')
<div class="row">
    <div class="col s4">
        <div class="card-panel">
            <div>
                <h4 class="header2"><strong>{!!trans('messages.add_new').'</strong> <strong>'.trans('messages.role')!!}</strong></h4>
            </div>

            {!! Form::open(['route' => 'role.store','role' => 'form', 'class'=>'role-form','id' => 'role-form' ]) !!}
                @include('role._form')
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
            <h4 class="header2"><strong>{!!trans('messages.list_all').'</strong> '.trans('messages.role')!!}</h4>

            <div>
                @include('common.materialize.datatable',['table' => $table_data['role-table']])
            </div>

            <div class="row">


            </div>
        </div>
    </div>



</div>
@stop