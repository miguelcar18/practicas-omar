@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">User</h5>
<ol class="breadcrumbs">
    <li><a href="user">User</a></li>
    <li><a href="#">Index</a></li>
    <li class="active">User</li>
</ol>

@stop

@section('content')

@include('common.materialize.header-form-link',['icon' => 'mdi-image-timer-auto','url'=>'user/create','buttonMessage'=>trans('messages.add_new'),'message'=>'User'])

@include('common.materialize.datatable',['table' => $table_data['user-table']])




@stop
