@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">User</h5>
<ol class="breadcrumbs">
    <li><a href="/home">{!! trans('messages.home') !!}</a></li>
    <li><a href="/user">{!! trans('messages.user') !!}</a></li>
    <li class="active">{!! trans('messages.add_new').' '.trans('messages.user') !!}</li>
</ol>


@stop

@section('content')

@include('common.materialize.header-form-link',['icon' => 'mdi-image-timer-auto','url'=>'/user','buttonMessage'=>trans('messages.list_all'),'message'=>trans('messages.add_new')])

{!! Form::open(['route' => 'user.store','role' => 'form', 'class' => 'user-form','id' => "user-form"]) !!}
@include('auth._register_form')

<div class="input-field col s6">
    <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}

    </button>
</div>
</div>

</div>

{!! Form::close() !!}

@stop