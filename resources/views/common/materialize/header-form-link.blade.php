<?php
/* @var $url */
/* @var $label */
?>
<div class="col s12 m8 l9">
    {{--<div class="card-panel">--}}
        <div class="row">
            <div class="col s2">
                <div class="center promo promo-example">
                    <div class="{{$icon}}" style="font-size:55px;"></div>
                    <div class="light center">{{$message}}</div>
                </div>
            </div>

    <div class="col s10">
        <div class="right-align promo promo-example">
            @if(Entrust::can('create-user'))
                <div class="additional-btn">
                    <p><a href="{{$url}}" class="btn waves-effect waves-light  cyan darken-2">{{$buttonMessage}}</a></p>
                </div>
            @endif
        </div>
    </div>
    </div>
   {{--</div>--}}
</div>
