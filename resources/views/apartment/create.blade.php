@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">Apartment</h5>
<ol class="breadcrumbs">
    <li><a href="/home">{!! trans('messages.home') !!}</a></li>
    <li><a href="/apartment">{!! trans('messages.apartment') !!}</a></li>
    <li class="active">{!! trans('messages.add_new').' '.trans('messages.apartment') !!}</li>
</ol>


@stop

@section('content')

@include('common.materialize.header-form-link',['icon' => 'mdi-communication-business','url'=>'/apartment','buttonMessage'=>trans('messages.list_all'),'message'=>trans('messages.add_new')])

{!! Form::open(['route' => 'apartment.store','role' => 'form', 'class' => 'apartment-form','id' => "apartment-form"]) !!}
@include('auth.register_apartment')

<div class="input-field col s6">
    <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}

    </button>
</div>
</div>

</div>

{!! Form::close() !!}

@stop


<!-- View Apartments Add-->