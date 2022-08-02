<!-- オーバーレイ -->
<div id="overlay" class="overlay"></div>

<!-- モーダルウィンドウ（商品選択） -->
<div class="modal-window" data-id="modal1">

    <!-- 閉じるボタン -->
    <div style="text-align:right;margin-bottom:20px;color:red;font-weight:bold;"><button class="js-close button-close">×</button></div>

        <!-- 小分類 -->
        <!-- <div class="box-header with-border filter-box" id="filter-box"> -->
        <!-- <form action="http://localhost/admin/single-menu" class="form-horizontal" pjax-container="" method="get"> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box-body">
                        <div class="fields-group">
                            <div class="form-group">
                                <label class="col-sm-1 control-label">小分類</label>
                                <div class="col-sm-2">
                                    <div class="input-group-sm">
                                        <!-- <div class="input-group-addon">
                                            <i class="fa fa-pencil"></i>
                                        </div> -->
                                    {{Form::select('yaer', ['1' => '00', '2' => '01', '3' => '02', '4' => '03'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}
                                    </div>
                                </div>
                                <label class="col-sm-1 control-label">キーワード</label>
                                <div class="col-sm-7">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-addon">
                                            <i class="fa fa-pencil"></i>
                                        </div>
                                        <input type="text" class="form-control id" placeholder="" name="id" value="">
                                    </div>
                                </div> 
                                <div class="col-sm-1">
                                    <div class="input-group input-group-sm">
                                        <button class="btn btn-info submit btn-sm"><i class="fa fa-search"></i>&nbsp;&nbsp;検索</button>                                                                </div>
                                    </div>                                                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- </form> -->
    <!-- </div> -->

    <br>

    <table class="table table-hover grid-table" id="grid-table62cb85ed4552e">
        <!-- カラム名 -->
        <thead>
            <tr>
                <th class="column-__row_selector__">
                    <div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                        <input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                    </div>&nbsp;
                </th>
                <!-- <th class="column-id">Id</th> -->
                <th class="column-menu_code">商品コード</th>
                <th class="column-menu_name">商品名</th>
                <th class="column-menu_price">価格</th>
                <th class="column-self">セルフレジ</th>
                <th class="column-mobile">モバイルオーダー</th>
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
                <td class="column-self">販売中</td>
                <td class="column-mobile">販売中</td>
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
                <td class="column-self">販売中</td>
                <td class="column-mobile">販売中</td>
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
                <td class="column-self">販売中</td>
                <td class="column-mobile">販売中</td>
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
                <td class="column-self">販売中</td>
                <td class="column-mobile">販売中</td>
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
                <td class="column-self">販売中</td>
                <td class="column-mobile">販売中</td>
            </tr>
        </tbody>
    </table>


    <!-- ページネーション -->
    <div class="box-footer clearfix">
        {!! $grid->paginator() !!}
    </div>

    <div class="pull-right">
        <button type="" class="btn btn btn-success"style="margin-bottom: 50px;">追加</button>
    </div>

</div>









<!-- モーダルウィンドウ（プレビュー） -->
<div class="modal-window-02" data-id="modal2" style="width:500px;">
    <!-- <p>モーダルNo.2</p>
    <button class="js-close button-close">Close</button> -->
    <!-- 閉じるボタン -->
    <div style="text-align:right;margin-bottom:20px;color:red;font-weight:bold;"><button class="js-close button-close">×</button></div>

        <div class="row">
            <div class="col-md-12">
                                
                <div class="col-sm-6">
                    <div class="input-group input-group-sm p-img">
                        <img src="{{ asset('sample-img/a.jpg') }}" alt="画像1" style="width:180px">
                    </div>
                    <div style="margin-top:5px;">ポップコーンセット（塩）</div>
                    <div style="margin-bottom:20px;">¥800</div>
                </div>

                <div class="col-sm-6">
                    <div class="input-group input-group-sm p-img">
                        <img src="{{ asset('sample-img/b.jpg') }}" alt="画像2" style="width:180px">
                    </div>
                    <div style="margin-top:5px;">メガポテトセット</div>
                    <div style="margin-bottom:20px;">¥1,500</div>
                </div>
            </div>
 
            <div class="col-md-12">                               
                <div class="col-sm-6">
                    <div class="input-group input-group-sm p-img">
                        <img src="{{ asset('sample-img/c.jpg') }}" alt="画像1" style="width:180px">
                    </div>
                    <div style="margin-top:5px;">ナゲット生ビールセット</div>
                    <div style="margin-bottom:20px;">¥900</div>
                </div>

                <div class="col-sm-6">
                    <div class="input-group input-group-sm p-img">
                        <img src="{{ asset('sample-img/d.jpg') }}" alt="画像2" style="width:180px">
                    </div>
                    <div style="margin-top:5px;">ポップコーンペアセット（塩）</div>
                    <div style="margin-bottom:20px;">¥1,250</div>
                </div>
            </div>

            <div class="col-md-12">                               
                <div class="col-sm-6">
                    <div class="input-group input-group-sm p-img">
                        <img src="{{ asset('sample-img/e.jpg') }}" alt="画像1" style="width:180px">
                    </div>
                    <div style="margin-top:5px;">ポテトセット</div>
                    <div style="margin-bottom:20px;">¥700</div>
                </div>

                <div class="col-sm-6">
                    <div class="input-group input-group-sm p-img">
                        <img src="{{ asset('sample-img/f.jpg') }}" alt="画像2" style="width:180px">
                    </div>
                    <div style="margin-top:5px;">アイスクレープ</div>
                    <div style="margin-bottom:20px;">¥360</div>
                </div>
            </div>



                
        </div>
    </div>
</div> <!-- ? -->