@extends('layouts.materialize.default')

@section('breadcrumbs')

<h5 class="breadcrumbs-title">{{trans('messages.configuration')}}</h5>
<ol class="breadcrumbs">
    <li><a href="home">Home</a></li>
    <li class="active">{{trans('messages.configuration')}}</li>
</ol>
@stop

@section('content')


<div id="basic-tabs" class="section">

    <div class="col s12">

        <div class="row">
            <div class="col s12">
                <ul class="tabs tab-demo z-depth-1">
                    <li class="tab col s3"><a class="active" href="#general">{{trans('messages.general')}}</a>
                    </li>
                    <li class="tab col s3"><a href="#logo">{{trans('messages.logo')}}</a>
                    </li>
                    <li class="tab col s3"><a href="#system">{{trans('messages.system')}}</a>
                    </li>
                    <li class="tab col s3"><a href="#sms">{{'SMS'}}</a>
                    </li>
                    <li class="tab col s3"><a href="#mail">{{trans('messages.mail')}}</a>
                    </li>
                    <li class="tab col s3"><a href="#authentication"> {{trans('messages.authentication')}}</a>
                    </li>
                    <li class="tab col s3"><a href="#social">{{trans('messages.social').' '.trans('messages.login')}}</a>
                    </li>

                </ul>
            </div>
            <div class="col s12">
                <div id="general" class="col s12">
                    @include('configuration._general_form')
                </div>
                <div id="logo" class="col s12">

                    @include('configuration._logo_form')
                </div>
                <div id="system" class="col s12">
                    @include('configuration._system_form')


                </div>
                <div id="sms" class="col s12">
                    @include('configuration._sms_form')

                </div>

                <div id="mail" class="col s12">
                    @include('configuration._mail_form')

                </div>

                <div id="authentication" class="col s12">
                    @include('configuration._auth_form')

                </div>
                <div id="social" class="col s12">
                    @include('configuration._social_login_form')

                </div>




            </div>
        </div>

    </div>
</div>
</div>


@stop
