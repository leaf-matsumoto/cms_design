<!-- オーバーレイ -->
<div id="overlay" class="overlay"></div>

<!-- モーダルウィンドウ（商品選択） -->
<div class="modal-window" data-id="modal1">

    <!-- 閉じるボタン -->
    <!-- <div style="text-align:right;margin-bottom:0px;color:red;font-weight:bold;">
        <button class="js-close button-close">×</button>
    </div> -->

    <div class="box-header with-border">
        <div class="pull-left" style="margin-left:7%;>
                <div class="btn-group" style="margin-right: 5px" data-toggle="buttons">
            <label class="btn btn-sm btn-dropbox 62e888e05414c-filter-btn active" title="検索条件">
            <input type="checkbox"><i class="fa fa-chevron-up"></i><span class="hidden-xs">&nbsp;&nbsp;検索条件</span>
            </label>
        </div>
    </div>


    <div class="box-header with-border filter-box" id="">
        <form action="http://localhost/admin/single-menus" class="form-horizontal" pjax-container="" method="get">
            
            <div class="row">
                <div class="col-md-4">
                    <div class="box-body">
                        <div class="fields-group fields-group-02">                
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> 商品分類</label>
                                <div class="col-sm-9" style="width:100%;">
                                    <select class="form-control theater_name select2-hidden-accessible" name="theater_name" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option></option>
                                        <option value="0">value00</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-theater_name-vr-container"><span class="select2-selection__rendered" id="select2-theater_name-vr-container"><span class="select2-selection__placeholder">選択</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-body">
                        <div class="fields-group">                
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> キーワード</label>
                                <div class="col-sm-9" style="width:100%;">
                                    <input type="text" class="form-control menu_name" placeholder="商品コードまたは商品名を入力" name="menu_name" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <div class="btn-group pull-left">
                                <a href="http://localhost/admin/single-menus" class="btn btn-default btn-sm"><i class="fa fa-undo"></i>&nbsp;&nbsp;クリア</a>
                            </div>
                            <div class="btn-group pull-left" style="margin-left: 10px;">
                                <button class="btn btn-info submit btn-sm"><i class="fa fa-search"></i>&nbsp;&nbsp;検索</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    



    <table class="table table-hover grid-table" id="grid-table62cb85ed4552e" style="width:1100px;margin-left:100px;">
        <!-- カラム名 -->
        <thead>
            <tr>
                <th class="column-__row_selector__">
                    <div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                        <input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; w%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                    </div>
                </th>
                <!-- <th class="column-id">Id</th> -->
                <th class="column-menu_code">商品コード</th>
                <th class="column-menu_name">商品名</th>
                <th class="column-menu_price">価格</th>
                <th class="column-self">セルフレジ</th>
                <th class="column-mobile">モバイルオーダー</th>
                <th class="column-mobile">エリアセット</th>
            </tr>
        </thead>
        <tbody>
            <!-- 入力情報表示 -->
            <tr data-key="1">
                <td class="column-__row_selector__">
                    <div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                    <input type="checkbox" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                </div>
                </td>
                <!-- <td class="column-id">1</td> -->
                <td class="column-menu_code">A200000100</td>
                <td class="column-menu_name">POPセット塩</td>
                <td class="column-menu_price">700</td>
                <td class="column-self">販売可</td>
                <td class="column-mobile">販売可</td>
                <td class="column-mobile">8階</td>
            </tr>
            <tr data-key="2">
                <td class="column-__row_selector__">
                    <div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                        <input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                    </div>
                </td>
                <!-- <td class="column-id">2</td> -->
                <td class="column-menu_code">A200000110</td>
                <td class="column-menu_name">POPセット塩 L</td>
                <td class="column-menu_price">800</td>
                <td class="column-self">販売可</td>
                <td class="column-mobile">販売可</td>
                <td class="column-mobile">8階</td>
            </tr>
            <tr data-key="3">
                <td class="column-__row_selector__">
                    <div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                        <input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                    </div>
                </td>
                <!-- <td class="column-id">3</td> -->
                <td class="column-menu_code">A200000200</td>
                <td class="column-menu_name">POPセットキャラメル</td>
                <td class="column-menu_price">800</td>
                <td class="column-self">販売可</td>
                <td class="column-mobile">販売可</td>
                <td class="column-mobile">8階</td>
            </tr>
            <tr data-key="4">
                <td class="column-__row_selector__">
                    <div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                        <input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                    </div>
                </td>
                <!-- <td class="column-id">4</td> -->
                <td class="column-menu_code">A200000201</td>
                <td class="column-menu_name">POPセットキャラメル L</td>
                <td class="column-menu_price">900</td>
                <td class="column-self">販売可</td>
                <td class="column-mobile">販売可</td>
                <td class="column-mobile">8階</td>
            </tr>
            <tr data-key="5">
                <td class="column-__row_selector__">
                    <div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                        <input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                    </div>
                </td>
                <!-- <td class="column-id">5</td> -->
                <td class="column-menu_code">A200000210</td>
                <td class="column-menu_name">POPセット ハーフ&amp;ハーフ</td>
                <td class="column-menu_price">900</td>
                <td class="column-self">販売可</td>
                <td class="column-mobile">販売可</td>
                <td class="column-mobile">8階</td>
            </tr>
        </tbody>
    </table>


    <!-- ページネーション -->
    <div class="box-footer clearfix" style="width:1100px;margin-left:100px;">
        {!! $grid->paginator() !!}
    </div>


    <div class="pull-right" style="margin-right:120px;padding-top:20px;">
        <button type="" class="btn btn btn-success"style="">追加</button>
    </div>
    <div class="pull-right" style="margin-right:10px;padding-top:20px;">
        <button type="" class="btn btn btn-warning"style="">キャンセル</button>
    </div>

</div>






<!-- モーダルウィンドウ（プレビュー） -->
<div class="modal-window-02" data-id="modal2" style="width:500px;padding:0;">





    <div class="" style="width:100%;height:50px;background-color:#123;text-align:right;color:#fff;font-weight:bold;padding-top:10px;padding-right:10px;">
        <div class="form-group" style="font-size:14px;">
            <label for="column" class="col-sm-2  control-label" style="margin-top:9px;margin-left:9px;">販売エリア</label>
            <div class="col-sm-8" id="column" style="margin-top:6.5px;text-align:left; ">
                    <span class="icheck">
                        <label class="checkbox-inline">
                            <input type="radio" name="mobile" value="" style="margin-left:5px;margin-right:4px;transform: scale(1.2);" checked="">8階
                            <input type="radio" name="mobile" value="" style="margin-left:20px;margin-right:4px;transform: scale(1.2);">9階
                        </label>
                    </span>
                <input type="hidden" name="column[]">
            </div>
        </div>    
        <button class="js-close button-close">×</button>
    </div>






    <div class="area">
        <input type="radio" name="tab_name" id="tab1" checked>
        <label class="tab_class" for="tab1">モバイル端末</label>
        <div class="content_class">
            <!-- <p>タブ1のコンテンツを表示します</p> -->

            <!-- モバイルプレビュー -->
            <div class="row" style="margin:30px;">
                <div class="row">
                    <div class="col-md-12">
                                        
                        <div class="col-sm-6" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/a.jpg') }}" alt="画像1" style="width:190px;">
                                </div>
                                <div class="preview-info">
                                    <div style="margin-top:5px;">ポップコーンセット（塩）</div>
                                    <div>¥800</div>
                                </div>
                            </div>
                        </div>

                                       
                        <div class="col-sm-6" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/b.jpg') }}" alt="画像1" style="width:190px;">
                                </div>
                                <div class="preview-info">
                                    <div style="margin-top:5px;">メガポテトセット</div>
                                    <div>¥1,500</div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-12">                               
                                        
                    <div class="col-sm-6" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/c.jpg') }}" alt="画像1" style="width:190px;">
                                </div>
                                <div class="preview-info">
                                    <div style="margin-top:5px;">ナゲット生ビールセット</div>
                                    <div>¥900</div>
                                </div>
                            </div>
                        </div>

                                        
                        <div class="col-sm-6" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/d.jpg') }}" alt="画像1" style="width:190px;">
                                </div>
                                <div class="preview-info">
                                    <div style="margin-top:5px;">ポップコーンペアセット（塩）</div>
                                    <div>¥1,250</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">                               
                                        
                                        
                        <div class="col-sm-6" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/e.jpg') }}" alt="画像1" style="width:190px;">
                                </div>
                                <div class="preview-info">
                                    <div style="margin-top:5px;">ポテトセット</div>
                                    <div>¥700</div>
                                </div>
                            </div>
                        </div>

                                        
                        <div class="col-sm-6" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/f.jpg') }}" alt="画像1" style="width:190px;">
                                </div>
                                <div class="preview-info">
                                    <div style="margin-top:5px;">アイスクレープ</div>
                                    <div>¥360</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>             
                </div>
            </div>
        </div> <!-- モバイル端末ここまで -->


        <input type="radio" name="tab_name" id="tab2" >
        <label class="tab_class" for="tab2">セルフ端末</label>
        <div class="content_class">
            <!-- <p>タブ2のコンテンツを表示します</p> -->

            <!-- セルフプレビュー -->
            <div class="row" style="margin:25px;">
                <div class="row">
                    <div class="col-md-12" style="padding:0;">
                        <div class="col-sm-4" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/a.jpg') }}" alt="画像1" style="width:130px;">
                                </div>
                                <div class="preview-info-self">
                                    <div style="margin-top:5px;">アイスクレープ</div>
                                    <div>¥360</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/b.jpg') }}" alt="画像1" style="width:130px;">
                                </div>
                                <div class="preview-info-self">
                                    <div style="margin-top:5px;">メガポテトセット</div>
                                    <div>¥1,500</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/c.jpg') }}" alt="画像1" style="width:130px;">
                                </div>
                                <div class="preview-info-self">
                                    <div style="margin-top:5px;">ナゲット生ビールセット</div>
                                    <div>¥900</div>
                                </div>
                            </div>
                        </div>                     
                    </div>

                    <div class="col-md-12" style="padding:0;">
                        <div class="col-sm-4" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/a.jpg') }}" alt="画像1" style="width:130px;">
                                </div>
                                <div class="preview-info-self">
                                    <div style="margin-top:5px;">アイスクレープ</div>
                                    <div>¥360</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/b.jpg') }}" alt="画像1" style="width:130px;">
                                </div>
                                <div class="preview-info-self">
                                    <div style="margin-top:5px;">メガポテトセット</div>
                                    <div>¥1,500</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/c.jpg') }}" alt="画像1" style="width:130px;">
                                </div>
                                <div class="preview-info-self">
                                    <div style="margin-top:5px;">ナゲット生ビールセット</div>
                                    <div>¥900</div>
                                </div>
                            </div>
                        </div>                     
                    </div>

                    <div class="col-md-12" style="padding:0;">
                        <div class="col-sm-4" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/a.jpg') }}" alt="画像1" style="width:130px;">
                                </div>
                                <div class="preview-info-self">
                                    <div style="margin-top:5px;">アイスクレープ</div>
                                    <div>¥360</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/b.jpg') }}" alt="画像1" style="width:130px;">
                                </div>
                                <div class="preview-info-self">
                                    <div style="margin-top:5px;">メガポテトセット</div>
                                    <div>¥1,500</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4" style="padding:5px;">
                            <div class="preview-box">
                                <div class="input-group input-group-sm p-img preview">
                                    <img src="{{ asset('sample-img/c.jpg') }}" alt="画像1" style="width:130px;">
                                </div>
                                <div class="preview-info-self">
                                    <div style="margin-top:5px;">ナゲット生ビールセット</div>
                                    <div>¥900</div>
                                </div>
                            </div>
                        </div>                     
                    </div>
        
            
  
                </div>
            </div>
        </div>
        
    </div>
</div>