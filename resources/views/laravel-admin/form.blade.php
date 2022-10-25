<!-- モーダルウィンドウ（商品選択） -->
@include('admin::add.modal_02')

<div class="box box-info">
    <div class="box-header with-border">
        <!-- <h3 class="box-title">{{ $form->title() }}</h3> -->

        <div class="box-tools">
            {!! $form->renderTools() !!}
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    {!! $form->open() !!}



    <!-- モバイル販売管理の検索入力項目 -->
    @if(\Request::is('admin/mobiles/create'))
        @include('admin::add.calender_search')
    @endif


    <div class="box-body">

        @if(!$tabObj->isEmpty())
            @include('admin::form.tab', compact('tabObj'))
        @else
            <div class="fields-group">

                <!-- コンセ完了メール管理/モバイルお知らせ -->
                @if(\Request::is('admin/mails/create') || \Request::is('admin/new-contents/create'))
                        <div class="col-md-12"  style="border-bottom: 1px solid #d2d6de;padding-top:30px;padding-bottom:50px;margin-bottom:50px;">
                            <div class="form-group  ">
                                <label for="theater_name" class="col-sm-2  control-label">劇場選択</label>
                                <div class="col-sm-8">
                                    <input type="hidden" name="theater_name">
                                    <select class="form-control theater_name select2-hidden-accessible" style="width: 100%;" name="theater_name" data-value="" tabindex="-1" aria-hidden="true">
                                    <option value=""></option>
                                        <option value="T・ジョイ新潟万代">T・ジョイ新潟万代</option>
                                        <option value="T・ジョイ長岡">T・ジョイ長岡</option>
                                        <option value="新宿バルト9">新宿バルト9</option>
                                        <option value="T・ジョイSEIBU大泉">T・ジョイSEIBU大泉</option>
                                        <option value="T・ジョイPRINCE品川">T・ジョイPRINCE品川</option>
                                    </select><span class="select2 select2-container select2-container--default select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-theater_name-9u-container"><span class="select2-selection__rendered" id="select2-theater_name-9u-container"><span class="select2-selection__placeholder">劇場選択</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>        
                                </div>
                            </div>
                        </div>
                @endif

                <!-- メンテナンスQR -->
                @if(\Request::is('admin/qrcodes/create'))
                    <div class="col-md-12"  style="border-bottom: 1px solid #d2d6de;padding-top:30px;padding-bottom:50px;margin-bottom:50px;">
                        
                        <div class="col-sm-3"></div>
                    
                        <div class="form-grop col-sm-6" style="padding:0;">
                            <label for="theater_name" class="col control-label" style="font-weight:normal;">劇場選択</label>
                            <div class="w-100"></div>
                            <div class="col">
                                <input type="hidden" name="theater_name">
                                <select class="form-control theater_name select2-hidden-accessible" style="width: 100%;" name="theater_name" data-value="" tabindex="-1" aria-hidden="true">
                                <option value=""></option>
                                    <option value="T・ジョイ新潟万代">T・ジョイ新潟万代</option>
                                    <option value="T・ジョイ長岡">T・ジョイ長岡</option>
                                    <option value="新宿バルト9">新宿バルト9</option>
                                    <option value="T・ジョイSEIBU大泉">T・ジョイSEIBU大泉</option>
                                    <option value="T・ジョイPRINCE品川">T・ジョイPRINCE品川</option>
                                </select><span class="select2 select2-container select2-container--default select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-theater_name-9u-container"><span class="select2-selection__rendered" id="select2-theater_name-9u-container"><span class="select2-selection__placeholder">劇場選択</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>        
                            </div>
                        </div>
                    </div>
                @endif

                <!-- モバイルお知らせ管理 -->
                @if(\Request::is('admin/new-contents/create'))
                    <div class="col-md-12"  style="margin-bottom:20px;">
                
                        <div class="form-group">
                            <label for="kaisibi" class="col-sm-2 down">掲載期間</label>

                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    <input required="1" style="width:100%;" type="date" id="kaisibi" name="kaisibi" value="" class="form-control kaisibi" placeholder="開始日">
                                </div>
                            </div>

                            <div class="col-sm-1" style="text-align:center;margin-top:8px;">~</div>
                            
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    <input required="1" style="width:100%;" type="date" id="kaisibi" name="kaisibi" value="" class="form-control kaisibi" placeholder="終了日">
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="kaisibi" class="col-sm-2 down">掲載時間帯</label>

                            <div class="col-sm-3">
                                <div class="">
                                    <input required="1" style="width:100%;" type="time" id="kaisibi" name="kaisibi" value="" class="form-control kaisibi" placeholder="開始日">
                                </div>
                            </div>

                            <div class="col-sm-1" style="text-align:center;margin-top:8px;">~</div>
                            
                            <div class="col-sm-3">
                                <div class="">
                                    <input required="1" style="width:100%;" type="time" id="kaisibi" name="kaisibi" value="" class="form-control kaisibi" placeholder="終了日">
                                </div>
                            </div>

                        </div>
                    </div>
                @endif


                <!-- コンセ完了メール管理/オーダー用紙管理の条件分岐 -->
                @if(\Request::is('admin/purchase-papers/create'))
                    <div class="col-md-12"  style="margin-bottom:10px;padding-top:30px;">
                        <div class="form-group  ">
                            <label for="theater_name" class="col-sm-2  control-label">劇場選択</label>
                            <div class="col-sm-8">
                                <input type="hidden" name="theater_name">
                                <select class="form-control theater_name select2-hidden-accessible" style="width: 100%;" name="theater_name" data-value="" tabindex="-1" aria-hidden="true">
                                <option value=""></option>
                                    <option value="T・ジョイ新潟万代">T・ジョイ新潟万代</option>
                                    <option value="T・ジョイ長岡">T・ジョイ長岡</option>
                                    <option value="新宿バルト9">新宿バルト9</option>
                                    <option value="T・ジョイSEIBU大泉">T・ジョイSEIBU大泉</option>
                                    <option value="T・ジョイPRINCE品川">T・ジョイPRINCE品川</option>
                                </select><span class="select2 select2-container select2-container--default select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-theater_name-9u-container"><span class="select2-selection__rendered" id="select2-theater_name-9u-container"><span class="select2-selection__placeholder">劇場選択</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>        
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12"  style="border-bottom: 1px solid #d2d6de;padding-bottom:50px;margin-bottom:50px;padding-top:30px;">
                        <div class="form-group">
                            <label for="column" class="col-sm-2  control-label">販売エリア</label>
                            <div class="col-sm-8" id="column">
                                    <span class="icheck">
                                        <label class="checkbox-inline">
                                            <input type="radio" name="mobile" value="" style="margin-left:5px;margin-right:4px;transform: scale(1.2);" checked>8階
                                            <input type="radio" name="mobile" value="" style="margin-left:20px;margin-right:4px;transform: scale(1.2);">9階
                                        </label>
                                    </span>
                                <input type="hidden" name="column[]">
                            </div>
                        </div>
                    </div>
                @endif

                


                @if($form->hasRows())
                    @foreach($form->getRows() as $row)
                        {!! $row->render() !!}
                    @endforeach
                @else
                    @foreach($layout->columns() as $column)
                        <div class="col-md-{{ $column->width() }}">
                            @foreach($column->fields() as $field)
                                {!! $field->render() !!}
                            @endforeach
                        <!-- </div> -->
                    @endforeach

                        <!-- 単品商品編集の条件分岐 -->
                        @if(\Request::is('admin/single-menus/create'))
                            @include('admin::add.single_menu')
                        @endif

                        <!-- セット構成編集の条件分岐 -->
                        @if(\Request::is('admin/set-menus/create'))
                            @include('admin::add.set_menu')
                        @endif

                        <!-- マスター同期画面の条件分岐 -->
                        @if(\Request::is('admin/masters/create'))
                            @include('admin::add.master_connect')
                        @endif

                        <!-- マスター同期画面の条件分岐 -->
                        @if(\Request::is('admin/master2s/create'))
                            @include('admin::add.master2_connect')
                        @endif

                        <!-- マスター同期画面の条件分岐 -->
                        @if(\Request::is('admin/master3s/create'))
                            @include('admin::add.master3_connect')
                        @endif

                        <!-- アレルギー一覧の条件分岐 -->
                        @if(\Request::is('admin/allergies/create'))
                            @include('admin::add.allergy')                           
                        @endif

                        <!-- おすすめ商品選択ダイアログの条件分岐 -->
                        @if(\Request::is('admin/pickup/create'))
                            @include('admin::add.pickup_table')
                        @endif

                        <!-- QRコードの条件分岐 -->
                        @if(\Request::is('admin/qrcodes/create'))
                            @include('admin::add.qrcode')
                        @endif

                        <!-- クーポン編集 -->
                        @if(\Request::is('admin/coupons/*/edit'))
                            @include('admin::add.coupon_edit')
                        @endif

                        <!-- モバイル販売管理の条件分岐 -->
                        @if(\Request::is('admin/mobiles/create'))
                            @include('admin::add.calender_html')
                        @endif

                        </div>

                @endif
            </div>
        @endif

    </div>

    <!-- /.box-body -->
    <!-- マスター同期画面の条件分岐(非表示) -->
    @if(!\Request::is('admin/masters/create') && !\Request::is('admin/master2s/create') && !\Request::is('admin/master3s/create') && !\Request::is('admin/set-menus/create') && !\Request::is('admin/single-menus/create'))

        {!! $form->renderFooter() !!}

        @foreach($form->getHiddenFields() as $field)
            {!! $field->render() !!}
        @endforeach

    @endif

<!-- /.box-footer -->
    {!! $form->close() !!}
</div>

<!-- アラート -->
<script src="{{ asset('/js/aleart.js') }}"></script>

<!-- モーダル -->
<script src="{{ asset('/js/modal_form.js') }}"></script>



