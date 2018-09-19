@extends('layouts.materialize.login')
@section('content')
<div class='container'>
    
        <div class="col s12">
            <div class="row">
                <h4 class="header center"><strong>Two Factor Auth</strong></h4>
                <h5 class="header center"><strong>{!! (config('config.login') ? Auth::user()->email : Auth::user()->username) !!}</strong></h5>

                {!! Form::open(['route' => 'user.verify-security','role' => 'form', 'class'=>'two-factor-auth-form','id' => 'two-factor-auth-form','data-submit' => 'noAjax']) !!}

                <div class="col s2">
                    {!! getAvatar(Auth::user()->id,180) !!}
                </div>

                <div class="input-field col s8">
                    {!! Form::label('login',trans('messages.verify').' Code',[])!!}
                    {!! Form::input('text','two_factor_auth',(!getMode()) ? session('two_factor_auth') : '',['placeholder'=>'Two Factor Auth'])!!}

                </div>
            </div>
        </div>
    
     
            <div class="row">
                <div class="input-field col s5">
                    {!! Form::submit(trans('messages.verify'),['class' => 'btn blue  darken-4 aling-left']) !!}
                </div>
        {!! Form::close() !!}

                <div class="input-field col s7 aling-rigth ">

                    <a href="#" class="btn red waves-effect waves-light " onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Not {{Auth::user()->full_name}}? Logout?</a>

                </div>
            </div>
       

    </div>

@stop