@extends('layouts.materialize.login')

	@section('content')

        <div class="row">
            <div class="input-field col s12 center">

	                    {!! getAvatar(Auth::user()->id,150) !!}
                        <h3><strong>{!! trans('messages.lock_screen') !!}</strong></h3>
                        <h4><strong>{!!(config('config.login')) ? Auth::user()->email : Auth::user()->username!!}</strong></h4>
			</div>
		</div>

						{!! Form::open(['route' => 'unlock','role' => 'form', 'class'=>'unlock-form','id' => 'unlock-form','data-submit' => 'noAjax']) !!}
		<div class="row center">

				<div class="input-field col s12 center">
					{!! Form::input('password','password','',['class'=>'center'])!!}
					{!! Form::label('login',trans('messages.password'),['class'=>'center'])!!}
				</div>
		</div>
		<div class="row center">
				<div class="input-field col s12 center">
					{!! Form::submit(trans('messages.unlock'),['class' => 'btn waves-effect waves-ligth blue']) !!}
					<a href="#" class="btn waves-effect waves-ligth red" onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">Not {{Auth::user()->full_name}}? Logout?</a>
				</div>
		</div>
		{!! Form::close() !!}
@include('common.materialize.form-logout')

@stop