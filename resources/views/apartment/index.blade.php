@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">Apartment</h5>
<ol class="breadcrumbs">
    <li><a href="apartment">Apartment</a></li>
    <li><a href="#">Index</a></li>
    <li class="active">Apartment</li>
</ol>

@stop

@section('content')

{{-- dd($table_data['apartment-table']) --}}

@include('common.materialize.header-form-link',['icon' => 'mdi-communication-business','url'=>'apartment/create','buttonMessage'=>trans('messages.add_new'),'message'=>'Apartment'])

@include('common.materialize.datatable',['table' => $table_data['apartment-table']])




@stop

<!-- Apartment View In Development -->