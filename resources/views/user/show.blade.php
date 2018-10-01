@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">Show</h5>
<ul class="breadcrumbs">
    <li><a href="/home">{!! trans('messages.home') !!}</a></li>
    <li><a href="/user">{!! trans('messages.user') !!}</a></li>
    <li class="active">{!! $user->full_name !!}</li>
</ul>
@stop

@section('content')
@include('common.materialize.header-form-link',['icon' => 'mdi-image-timer-auto','url'=>'/user','buttonMessage'=>trans('messages.list_all'),'message'=>''])
<div class="row">
    <div class="col s5 ">
        <div class="card-panel col s12">
            <h4 class="header2"><strong>{!!trans('messages.user').'</strong> '.trans('messages.profile')!!}</h4>
            <div class="row">
                <form >
                    <div class="row col s12">
                        <div class="input-field col s12 center">
                            <div style="margin-top:20px;margin-bottom:20px;">{!! getAvatar($user->id,150) !!}</div>
                        </div>
                        <table class="bordered responsive-table" >
                            <tbody>
                                <tr>
                                    <th>{{trans('messages.name')}}</th>
                                    <td>{{$user->full_name}}</td>
                                </tr>
                                <tr>
                                    <th>{{trans('messages.status')}}</th>
                                    <td>{{toWord($user->status)}}</td>
                                </tr>
                                <tr>
                                    <th>{{trans('messages.role')}}</th>
                                    <td>
                                        @foreach($user->Roles as $role)
                                        {{ucfirst($role->name)}}<br />
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{trans('messages.email')}}</th>
                                    <td>{{$user->email}}</td>
                                </tr>
                                @if(!config('config.login'))
                                <tr>
                                    <th>{{trans('messages.username')}}</th>
                                    <td>{{$user->username}}</td>
                                </tr>
                                @endif
                                <tr>
                                    <th>{{trans('messages.signup').' '.trans('messages.date')}}</th>
                                    <td>{{showDate($user->created_at)}}</td>
                                </tr>
                                <tr>
                                    <th>{{trans('messages.last').' '.trans('messages.login')}}</th>
                                    <td>{{showDateTime($user->last_login)}}</td>
                                </tr>
                            </tbody>
                        </table>


                        <div class="row">
                            <div class="input-field col s8">
                                @if($user->id== Auth::user()->id)
                                <a href="#modal1" class=" btn modal-trigger  waves-effect waves-light light-blue darken-4 left">{{trans('messages.change').' '.trans('messages.password')}}</a>
                                @endif
                            </div>



                            <div class="input-field col 4">
                                <a href="#" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="btn red waves-effect waves-light right">{{trans('messages.logout')}}</a>
                            </div>

                        </div>
                        <p></p>
                    </div>
                </form>



            </div>
        </div>
    </div>


    <!--tab-->
    <div class="col s7  left">
        <div class="card-panel">
            <div class="row">
                <div class="col s12">
                    <ul class="tabs tab-demo z-depth-1">
                        <li class="tab col s3"><a class="active" href="#general">{{trans('messages.general')}}</a>
                        </li>
                        <li class="tab col s3"><a href="#avatar-tab">{{trans('messages.avatar')}}</a>
                        </li>
                        <li class="tab col s3"><a href="#social_tab">{{trans('messages.social').' '.trans('messages.networking')}}</a>
                        </li>
                        @if($user->id != Auth::user()->id)
                        <li class="tab col s3"><a href="#password">{{trans('messages.password')}}</a>
                        </li>
                        @endif
                        @if(config('config.enable_email_template'))
                        <li class="tab col s3"><a href="#mail">{{trans('messages.mail')}}</a>
                        </li>
                        @endif

                    </ul>
                </div>
                <div class="col s12">
                    <div id="general" class="col s12">

                        <div class="panel-body">
                            {!! Form::model($user,['method' => 'POST','route' => ['user.profile-update',$user->id] ,'class' => 'user-profile-form','id' => 'user-profile-form','data-no-form-clear' => 1]) !!}
                            <div class="row">

                                @include('user.common.general')

                            </div>
                            <!-- avatar-->
                            <div id="avatar-tab" class="col s12">

                                @include('user.common.avatar')

                            </div>
                            <!-- avatar-->
                            <div id="social_tab" class="col s12">
                                @include('user.common.social_networking')

                            </div>

                            @if($user->id != Auth::user()->id)
                            <div id="password" class="col s12">
                                @include('user.common.password')
                            </div>
                            @endif

                            @if(config('config.enable_email_template'))
                            <div id="mail" class="col s12">
                                @include('user.common.mail')

                            </div>
                            @endif

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    @include('auth.change_password')
    @stop

  