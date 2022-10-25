<!-- モーダルウィンドウ呼出(おすすめ商品選択ダイアログに使用) -->
@include('admin::add.modal_01')

<div class="box grid-box">
    
    @if(isset($title))
    <div class="box-header with-border">
        <h3 class="box-title"> {{ $title }}</h3>
    </div>
    @endif


    <!-- おすすめ商品/クーポン管理の時 -->
    @if(!\Request::is('admin/pickups'))

        @if ( $grid->showTools() || $grid->showExportBtn() || $grid->showCreateBtn() )
        <div class="box-header with-border">

        
  
                <!-- 単品/セット商品管理の条件分岐 -->
                @if(\Request::is('admin/single-menus') || \Request::is('admin/set-menus'))

                    <div class="row" style="border-bottom: 1px solid #d2d6de;;">
                        <div class="col-md-12">
                            <div class="box-header with-border">
                            </div>
                            <form action="" method="post" class="form-horizontal model-form-62f2103dd4444" accept-charset="UTF-8" pjax-container="">
                                <div class="fields-group">
                                    <div class="col-md-12" style="padding-left:0;">
                                        <label for="menu_class" class="col-sm-2 control-label" style="padding-left:0;">劇場選択</label>
                                        <div class="col-sm-3" style="padding-left:0;margin-bottom:40px;">                
                                            <input type="hidden" name="menu_class">
                                            <select class="form-control menu_class select2-hidden-accessible" style="width: 100%;" name="menu_class" data-value="" tabindex="-1" aria-hidden="true">
                                                <option value=""></option>
                                                <option value="0" selected=""></option>
                                                <option value="1">フード</option>
                                                <option value="2">ドリンク</option>
                                                <option value="3">その他</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-menu_class-5k-container"><span class="select2-selection__rendered" id="select2-menu_class-5k-container" title=""><span class="select2-selection__clear"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>  
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif


            <div class="pull-right">
                {!! $grid->renderColumnSelector() !!}
                {!! $grid->renderExportButton() !!}
                {!! $grid->renderCreateButton() !!}
            </div>
            
            @if ( $grid->showTools() )
            <div class="pull-left">
                <!-- 検索フィルタ表示切替部分 -->
                {!! $grid->renderHeaderTools() !!}



                <!-- 未設定項目の表示切替 -->
                @if(\Request::is('admin/single-menus') || \Request::is('admin/set-menus'))
                    <div class="ItemBox pull-right" style="margin-top:14px;margin-left:15px;">
                        <!-- 1アイテム -->
                        <div class="ItemBox-CheckBox">
                            <!-- 項目の名前 -->
                            <div class="ItemBox-CheckBox-Title">未設定のみを表示</div>
                            <!-- 任意のidを指定する -->
                            <input type="checkbox" id="FollowNoticeSetting" class="ItemBox-CheckBox-Input">
                            <!-- inputで指定したidをfor属性値に指定する -->
                            <label for="FollowNoticeSetting" class="ItemBox-CheckBox-Label"></label>
                        </div>
                    </div>
                @endif




                @if(\Request::is('admin/order-mgts'))
                    <span class="radio-g">
                        <input id="radio1" class="radiobutton" name="hoge" type="radio" value="ラジオボタン1" checked="checked">
                        <label class="radio-l radio-01" for="radio1">本オーダー日時 で検索</label>
                        <input id="radio2" class="radiobutton" name="hoge" type="radio" value="ラジオボタン2">
                        <label class="radio-l radio-02" for="radio2">レシートNo. で検索</label> 
                        <input id="radio3" class="radiobutton" name="hoge" type="radio" value="ラジオボタン3">
                        <label class="radio-l radio-03" for="radio3">会員ID で検索</label>
                    </span>
                @endif

                @if(\Request::is('admin/coupons'))
                <div class="ItemBox">
                    <!-- 1アイテム -->
                    <div class="ItemBox-CheckBox">
                        <!-- 項目の名前 -->
                        <div class="ItemBox-CheckBox-Title">未設定のみを表示</div>
                        <!-- 任意のidを指定する -->
                        <input type="checkbox" id="FollowNoticeSetting" class="ItemBox-CheckBox-Input">
                        <!-- inputで指定したidをfor属性値に指定する -->
                        <label for="FollowNoticeSetting" class="ItemBox-CheckBox-Label"></label>
                    </div>
                </div>
                @endif

            </div>
            @endif
        </div>
        @endif

        @if(\Request::is('admin/order-mgts'))
            @include('admin::add.fillter_orderday')
        @else
            <!-- フィルタ内部情報 -->
            {!! $grid->renderFilter() !!}
        @endif

        {!! $grid->renderHeader() !!}

    <!-- おすすめ商品管理で表示 -->
    @elseif(\Request::is('admin/pickups'))
        @include('admin::add.pickup_add_upbutton')
    @endif

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">

        <table class="table table-hover grid-table" id="{{ $grid->tableID }}">
            <thead>
                <tr>
                    @foreach($grid->visibleColumns() as $column)
                    <th {!! $column->formatHtmlAttributes() !!}>{!! $column->getLabel() !!}{!! $column->renderHeader() !!}</th>
                    @endforeach
                </tr>
            </thead>

            @if ($grid->hasQuickCreate())
                {!! $grid->renderQuickCreate() !!}
            @endif

            <tbody>

                @if($grid->rows()->isEmpty() && $grid->showDefineEmptyPage())
                    @include('admin::grid.empty-grid')
                @endif

                @foreach($grid->rows() as $row)
                <tr {!! $row->getRowAttributes() !!}>
                    @foreach($grid->visibleColumnNames() as $name)
                    <td {!! $row->getColumnAttributes($name) !!}>
                        {!! $row->column($name) !!}
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>

            {!! $grid->renderTotalRow() !!}

        </table>

    <!-- </div> -->

    {!! $grid->renderFooter() !!}

    <div class="box-footer clearfix">
        {!! $grid->paginator() !!}
    </div>


    <!-- /.box-body -->
    <!-- おすすめ商品選択ダイアログの時 -->
    @if(\Request::is('admin/pickups'))
        @include('admin::add.pickup_add_downbutton')
    @endif
    </div>
    
</div>

<!-- アラート -->
<script src="{{ asset('/js/aleart.js') }}"></script>

<!-- モーダル -->
<script src="{{ asset('/js/modal_table.js') }}"></script>




