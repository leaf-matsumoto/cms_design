@extends('admin::index', ['header' => strip_tags($header)])

@section('content')
    <section class="content-header">
        <!-- 各ページのタイトルを表示 -->
        <h1>
        @if(\Request::is('admin/masters/create') || \Request::is('admin/master2s/create') || \Request::is('admin/master3s/create'))
            マスタ同期管理                            
        @endif
        @if(\Request::is('admin/single-menus'))
            単品商品管理                            
        @endif
        @if(\Request::is('admin/single-menus/*/edit'))
            単品商品編集                            
        @endif
        @if(\Request::is('admin/set-menus'))
            セット商品管理                            
        @endif
        @if(\Request::is('admin/set-menus/*/edit'))
            セット商品編集                            
        @endif
        @if(\Request::is('admin/allergies/create'))
            食物アレルギー設定                            
        @endif
        @if(\Request::is('admin/new-contents/create'))
            お知らせ管理                           
        @endif
        @if(\Request::is('admin/purchase-papers/create'))
            オーダー用紙管理                           
        @endif
        @if(\Request::is('admin/mails/create'))
            コンセ完了メール管理                           
        @endif
        @if(\Request::is('admin/qrcodes/create'))
            メンテナンス用QR設定                           
        @endif
        @if(\Request::is('admin/mobiles/create'))
            モバイル販売管理                           
        @endif
        @if(\Request::is('admin/order-mgts'))
            オーダー管理                           
        @endif
        @if(\Request::is('admin/order-mgts/*/edit'))
            オーダー詳細                           
        @endif
        @if(\Request::is('admin/coupons'))
            クーポン管理                           
        @endif
        @if(\Request::is('admin/coupons/*/edit'))
            クーポン編集                           
        @endif
        @if(\Request::is('admin/s-errors'))
            セルフ端末エラー一覧                          
        @endif
        @if(\Request::is('admin/m-errors'))
            モバイルエラー一覧                           
        @endif
        @if(\Request::is('admin/pickups'))
            おすすめ商品設定                           
        @endif





        <!-- {!! $header ?: trans('admin.title') !!} -->
            <!-- <small>{!! $description ?: trans('admin.description') !!}</small> -->
        </h1>

        <!-- パンくずリスト非表示 -->
        <!-- breadcrumb start -->
        <!-- @if ($breadcrumb)
        <ol class="breadcrumb" style="margin-right: 30px;">
            <li><a href="{{ admin_url('/') }}"><i class="fa fa-dashboard"></i> {{__('Home')}}</a></li>
            @foreach($breadcrumb as $item)
                @if($loop->last)
                    <li class="active">
                        @if (\Illuminate\Support\Arr::has($item, 'icon'))
                            <i class="fa fa-{{ $item['icon'] }}"></i>
                        @endif
                        {{ $item['text'] }}
                    </li>
                @else
                <li>
                    @if (\Illuminate\Support\Arr::has($item, 'url'))
                        <a href="{{ admin_url(\Illuminate\Support\Arr::get($item, 'url')) }}">
                            @if (\Illuminate\Support\Arr::has($item, 'icon'))
                                <i class="fa fa-{{ $item['icon'] }}"></i>
                            @endif
                            {{ $item['text'] }}
                        </a>
                    @else
                        @if (\Illuminate\Support\Arr::has($item, 'icon'))
                            <i class="fa fa-{{ $item['icon'] }}"></i>
                        @endif
                        {{ $item['text'] }}
                    @endif
                </li>
                @endif
            @endforeach
        </ol>
        @elseif(config('admin.enable_default_breadcrumb'))
        <ol class="breadcrumb" style="margin-right: 30px;">
            <li><a href="{{ admin_url('/') }}"><i class="fa fa-dashboard"></i> {{__('Home')}}</a></li>
            @for($i = 2; $i <= count(Request::segments()); $i++)
                <li>
                {{ucfirst(Request::segment($i))}}
                </li>
            @endfor
        </ol>
        @endif -->

        <!-- breadcrumb end -->

    </section>

    <section class="content">

        @include('admin::partials.alerts')
        @include('admin::partials.exception')
        @include('admin::partials.toastr')

        @if($_view_)
            @include($_view_['view'], $_view_['data'])
        @else
            {!! $_content_ !!}
        @endif

    </section>
@endsection




