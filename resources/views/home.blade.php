@extends('layouts.materialize.default')

@section('breadcrumbs')

<h5 class="breadcrumbs-title">Home</h5>
<ol class="breadcrumbs">
    <li class="active">Home</li>
</ol>
@stop
@section('content')

<!--card stats start-->
<div id="card-stats">
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content  green white-text">
                    <p class="card-stats-title"><i class="mdi-social-group-add"></i>{{trans('messages.active').' '.trans('messages.user')}}</p>
                    <h4 class="card-stats-number">{{\App\User::whereStatus('active')->count()}}</h4>

                </div>
                <div class="card-action  green darken-2">
                    <div id="clients-bar" class="center-align"></div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content pink lighten-1 white-text">
                    <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i>{{trans('messages.banned').' '.trans('messages.user')}}</p>
                    <h4 class="card-stats-number">{{\App\User::whereStatus('banned')->count()}}</h4>

                </div>
                <div class="card-action  pink darken-2">
                    <div id="invoice-line" class="center-align"></div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content blue-grey white-text">
                    <p class="card-stats-title"><i class="mdi-action-trending-up"></i>{{trans('messages.pending').' '.trans('messages.activation')}}</p>
                    <h4 class="card-stats-number">{{\App\User::whereStatus('pending_activation')->count()}}</h4>
                </div>
                <div class="card-action blue-grey darken-2">
                    <div id="profit-tristate" class="center-align"></div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content  green white-text">
                    <p class="card-stats-title"><i class="mdi-social-group-add"></i>{{trans('messages.active').' '.trans('messages.pending').' Approval'}}</p>
                    <h4 class="card-stats-number">{{\App\User::whereStatus('pending_approval')->count()}}</h4>

                </div>
                <div class="card-action  green darken-2">
                    <div id="clients-bar" class="center-align"></div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--card stats end-->

<div>

@if(config('config.enable_group_chat'))
    <div class="row">

        <div class="col s4">
            <div id="Layer1" style="width:350px; height:350px; overflow: scroll;">

                <div class="card-panel  chat-panel ">
                    <strong>{{trans('messages.group')}}</strong> {{trans('messages.chat')}}
                    <div class="col s12 " id="chat-box">
                        <div id="chat-messages" class="left" data-chat-refresh="{{config('config.enable_chat_refresh')}}" data-chat-refresh-duration="{{ config('config.chat_refresh_duration') }}"></div>
                    </div>
                    <div class="">
                        {!! Form::open(['route' => 'chat.store','role' => 'form', 'class'=>'chat-form','id' => 'chat-form','data-refresh' => 'chat-messages']) !!}
                        {!! Form::input('text','message','',['class'=>'form-control','data-autoresize' => 1,'placeholder' => 'Type your message here..'])!!}
                        {!! Form::close() !!}
                    </div>
                </div>
                
            </div>
        </div>


    </div>

@endif

</div>




@stop

