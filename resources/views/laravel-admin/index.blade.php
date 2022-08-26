<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ Admin::title() }} @if($header) | {{ $header }}@endif</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @if(!is_null($favicon = Admin::favicon()))
    <link rel="shortcut icon" href="{{$favicon}}">
    @endif

    {!! Admin::css() !!}

    <script src="{{ Admin::jQuery() }}"></script>
    {!! Admin::headerJs() !!}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- CSS追加 -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body class="hold-transition {{config('admin.skin')}} {{join(' ', config('admin.layout'))}}">

@if($alert = config('admin.top_alert'))
    <div style="text-align: center;padding: 5px;font-size: 12px;background-color: #ffffd5;color: #ff0000;">
        {!! $alert !!}
    </div>
@endif

<div class="wrapper">

    @include('admin::partials.header')

    @include('admin::partials.sidebar')

    <div class="content-wrapper" id="pjax-container">
        {!! Admin::style() !!}
        <div id="app">

            <!-- TOPページにカレンダーを表示するための条件分岐 -->
            @if(!\Request::is('admin'))
                @yield('content')
            @elseif(\Request::is('admin'))
                @include('admin::add.calender')
            @endif

        </div>
        {!! Admin::script() !!}
        {!! Admin::html() !!}
    </div>

    @include('admin::partials.footer')

</div>

<button id="totop" title="Go to top" style="display: none;"><i class="fa fa-chevron-up"></i></button>

<script>
    function LA() {}
    LA.token = "{{ csrf_token() }}";
    LA.user = @json($_user_);
</script>

<!-- REQUIRED JS SCRIPTS -->
{!! Admin::js() !!}

</body>
</html>


<!-- 単品商品管理/セット商品管理/食物アレルギー/オーダー管理/モバイル販売管理/TOP/オーダー管理に適応 -->
@if(\Request::is('admin/single-menus') || \Request::is('admin/set-menus') || \Request::is('admin/order-mgts') || \Request::is('admin/order-mgts'))
    <style>
        .col-sm-8 {
            width: 100%;
        }

        .col-md-8 {
            width: 100%;
            margin-left:5%;
        }

        table {
            margin-top:15px;
        }

        .form-horizontal .control-label {
            padding-top: 7px;
            margin-bottom: 0;
            text-align: right;
            width: 100%;
            text-align: left;
        }
    </style>
@endif

<!-- 食物アレルギー/TOP/モバイル販売管理に適応 -->
@if(Request::is('admin/allergies/create') || \Request::is('admin') || \Request::is('admin/mobiles/create'))
    <style>
        .col-sm-8 {
            width: 100%;
        }

        .allergy-style {
            width: 100%;
            margin-left:5%;
        }

        .form-horizontal .control-label {
            padding-top: 7px;
            margin-bottom: 0;
            text-align: right;
            width: 100%;
            text-align: left;
        }
    </style>
@endif


<!-- エラー/ -->
@if(Request::is('admin/m-errors') || Request::is('admin/s-errors')  || Request::is('admin/coupons'))
    <style>

        /* クイック検索 */

        .input-group {
            width:1000px!important;
            margin-top:20px;
            margin-bottom:10px;
        }

        .grid-quick-search{
            width:500px!important;
        }

        /* <div class="input-group input-group-sm" style="display: inline-block;">
            <input type="text" name="__search__" class="form-control grid-quick-search" style="width: 200px;" value="12" placeholder="">
            <div class="input-group-btn" style="display: inline-block;">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
        </div> */

    </style>
@endif



<!-- マスター同期画面/おすすめ商品設定の条件分岐 -->
@if(\Request::is('admin/masters/create') || \Request::is('admin/master2s/create') || \Request::is('admin/master3s/create') || \Request::is('admin/pickups'))

<style>

    .form-group {
        margin-bottom: 50px!important;
    }


    /* 検索ボックス */
    /* @media (min-width: 768px){ */
        .form-horizontal .control-label {
            padding-top: 7px;
            margin-bottom: 0;
            text-align: right;
            width: 10000px;
            text-align: left;
        }
    /* } */

    /* @media (max-width: 1690px){ */
        .form-horizontal .control-label {
            text-align: left;
        }
    /* } */

</style>

@endif



<!-- おすすめ商品設定の条件分岐 -->
@if(\Request::is('admin/pickups'))

    <style>

    .form-group, .col-sm-3, .col-md-12 {
        /* margin: 0; */
        margin: 0!important;
        padding-left:0!important;
    }

    .col-sm-2 {
        margin-bottom: 5px!important;
        padding-left:5px!important;
    }

    .col-md-12 {
        padding-left:2px!important;
    }

    .fields-group-02 {
        /* margin: 0; */
        margin-left: 17%!important;
        padding-left:0!important;
    }

    .form-group-02 {
        margin-top:5px!important;
    }

    .col-sm-9 {
        padding-left:0!important;
    }


    </style>

@endif


<!-- オーダー管理 -->
@if(\Request::is('admin/order-mgts/*'))

    <style>

    .form-horizontal {
        padding-bottom: 50px!important;
    }

    </style>

@endif

<!-- オーダー管理 -->
@if(\Request::is('admin/order-mgts'))

    <style>

    .btn-group {
        margin-top:0px;
    }

    .pull-left, .pull-right{
        /* margin-top:20px; */
    }

    span.radio-g {
        margin-left:20px;
        font-size:0;
        font-weight:normal;
    }

    /* ラジオボタン */
    .radiobutton {
        display: none;
        /* margin-top:100px; */
    }
    label.radio-l {
        /* background-color: skyblue; */
        padding: 5px 10px 6px 10px;
        border: 1px solid #c0c0c0;
        margin:0;
        font-size:12px;
    }
    .radiobutton:checked + label.radio-l {
        background-color: #4682b4;
        color:#fff;
    }

    #text {
        font-size:0;
    }

    label.radio-01 {
        border-radius:5px 0px 0px 5px;
        margin:0;
    }

    label.radio-03 {
        border-radius:0 5px 5px 0;
    }

    .box-header {
        margin-top:15px;
    }


    </style>

@endif

<style>
    th.column-status{
        color:#111!important;
    }

    .column-status{
        text-align:center;
    }

</style>