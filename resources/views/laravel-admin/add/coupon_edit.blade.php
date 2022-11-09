    <div class="form-group" style="margin-top:30px;">
        <label for="K_coupon_id" class="col-sm-1  control-label">クーポンID</label>
        <div class="col-sm-2">
            <div class="">
                <input disabled="" type="text" id="K_coupon_id" name="K_coupon_id" value="K123456789" class="form-control K_coupon_id" placeholder="入力 クーポンID">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="coupon_code" class="col-sm-1  control-label">クーポン名</label>
        <div class="col-sm-6">
            <div class="">
                <input disabled="" type="text" id="coupon_code" name="coupon_code" value="春のクーポン" class="form-control coupon_code" placeholder="入力 クーポン名">
        </div>
        </div>
    </div>

    <div class="form-group">
        <label for="coupon_discount" class="col-sm-1  control-label">割引金額</label>
        <div class="col-sm-2">
            <div class="input-group">
                <input disabled="" type="text" id="coupon_discount" name="coupon_discount" value="50" class="form-control coupon_discount" placeholder="入力 割引金額">
            </div>
        </div>
    </div>

    <hr>

    <div class="form-group">
        <label for="coupon_line" class="col-sm-1  control-label">閾値</label>
        <div class="col-sm-2">
            <div class="input-group">
                <input type="text" id="coupon_line" name="coupon_line" value="500" class="form-control coupon_line" placeholder="金額を整数で入力">
            </div>
        </div>
    </div>


    <!-- 商品追加 -->
    <div class="form-group" style="margin-top:25px;">
        <label for="self" class="col-sm-1  control-label">対象商品</label>
        <div class="col-sm-8">
            <button class="btn js-open button-open" data-id="1" style="color:#ffffff;background-color:#111111;">商品追加</button>                                   
        </div>
    </div>

    <!-- 一覧部品 -->
    <div class="form-group">
        <div class="col-sm-1"></div>
        <div class="col-md-9" style="padding-right:0;">
            <!-- <div class="box-body table-responsive no-padding" style="margin-left:50px;width:100%;margin-top:15px;"> -->
            <table class="table table-hover grid-table" id="grid-table62cb85ed4552e">
                <!-- カラム名 -->
                <thead>
                    <tr>
                        <!-- <th class="column-id">Id</th> -->
                        <th class="column-menu_code">商品コード</th>
                        <th class="column-menu_name">商品名</th>
                        <th class="column-menu_price">価格</th>
                        <th class="column-self">セルフレジ</th>
                        <th class="column-mobile">モバイルオーダー</th>
                        <th class="column-mobile">削除</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 入力情報表示 -->
                    <tr data-key="1">
                            <!-- <td class="column-id">1</td> -->
                            <td class="column-menu_code">A200000100</td>
                            <td class="column-menu_name">POPセット塩</td>
                            <td class="column-menu_price">700</td>
                            <td class="column-self">販売中</td>
                            <td class="column-mobile">販売中</td>
                            <td class="column-mobile">
                                <button type="button" class="btn btn-danger btn-xs" style="font-weight:bold;padding:1px 7px;">×</button>
                            </td>
                        </tr>
                    <tr data-key="2">
                        <!-- <td class="column-id">2</td> -->
                        <td class="column-menu_code">A200000110</td>
                        <td class="column-menu_name">POPセット塩 L</td>
                        <td class="column-menu_price">800</td>
                        <td class="column-self">販売中</td>
                        <td class="column-mobile">販売中</td>
                        <td class="column-mobile">
                            <button type="button" class="btn btn-danger btn-xs" style="font-weight:bold;padding:1px 7px;">×</button>
                        </td>

                    <tr data-key="3">
                        <!-- <td class="column-id">3</td> -->
                        <td class="column-menu_code">A200000200</td>
                        <td class="column-menu_name">POPセットキャラメル</td>
                        <td class="column-menu_price">800</td>
                        <td class="column-self">販売中</td>
                        <td class="column-mobile">販売中</td>
                        <td class="column-mobile">
                            <button type="button" class="btn btn-danger btn-xs" style="font-weight:bold;padding:1px 7px;">×</button>
                        </td>
                    </tr>
                    
                    <tr data-key="4">
                        <!-- <td class="column-id">4</td> -->
                        <td class="column-menu_code">A200000201</td>
                        <td class="column-menu_name">POPセットキャラメル L</td>
                        <td class="column-menu_price">900</td>
                        <td class="column-self">販売中</td>
                        <td class="column-mobile">販売中</td>
                        <td class="column-mobile">
                            <button type="button" class="btn btn-danger btn-xs" style="font-weight:bold;padding:1px 7px;">×</button>
                        </td>
                    </tr>
                    <tr data-key="5">
                        <!-- <td class="column-id">5</td> -->
                        <td class="column-menu_code">A200000210</td>
                        <td class="column-menu_name">POPセット ハーフ&amp;ハーフ</td>
                        <td class="column-menu_price">900</td>
                        <td class="column-self">販売中</td>
                        <td class="column-mobile">販売中</td>
                        <td class="column-mobile">
                            <button type="button" class="btn btn-danger btn-xs" style="font-weight:bold;padding:1px 7px;">×</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- ページネーション -->
            <div class="box-footer clearfix">
                全 <b>5</b> 件中 <b>1</b> - <b>5</b> 件目
                <ul class="pagination pagination-sm no-margin pull-right">
                    <!-- Previous Page Link -->
                    <li class="page-item disabled"><span class="page-link">«</span></li>
                
                    <!-- Array Of Links -->
                    <li class="page-item active"><span class="page-link">1</span></li>
                            
                    <!-- Next Page Link -->
                    <li class="page-item disabled"><span class="page-link">»</span></li>
                </ul>
                <label class="control-label pull-right" style="margin-right: 10px; font-weight: 100; padding-top: 0;">
                    <small>表示</small>&nbsp;
                    <select class="input-sm grid-per-pager" name="per-page">
                        <option value="http://localhost/admin/pickup?_pjax=%23pjax-container&amp;per_page=10">10</option>
                        <option value="http://localhost/admin/pickup?_pjax=%23pjax-container&amp;per_page=20" selected="">20</option>
                        <option value="http://localhost/admin/pickup?_pjax=%23pjax-container&amp;per_page=30">30</option>
                        <option value="http://localhost/admin/pickup?_pjax=%23pjax-container&amp;per_page=50">50</option>
                        <option value="http://localhost/admin/pickup?_pjax=%23pjax-container&amp;per_page=100">100</option>
                    </select>
                    &nbsp;<small>件</small>
                </label>
            </div>
        </div>
    </div>


    <div class="box-footer">
        <input type="hidden" name="_token" value="qeXvF0gMveJ9iIBkGz0cOUrHaAqlou3T9YOjxoG1">
            <div class="col-md-3">
            </div>

            <div class="col-md-8" style="margin-bottom:20px;">

            <!-- フォーム送信（登録）ボタン -->
            <div class="btn-group pull-right">
                <button type="submit" class="btn btn-primary btn-submit">登録</button>
            </div>

            <!-- フォームリセット（キャンセル）ボタン -->
            <div class="btn-group pull-right reset-btn">
                <button type="reset" class="btn btn-warning">キャンセル</button>
            </div>
        </div>
    </div>







<style>
    .col-sm-1 {
        width:95px!important;
    }

    .col-sm-2 {
        width:200px!important;
    }

    .box-footer {
        padding:0;
    }
</style>