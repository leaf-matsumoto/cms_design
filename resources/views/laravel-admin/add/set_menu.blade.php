<div class="box-body">
    <div class="fields-group">
        <div class="col-md-12">

            <!-- 大項目 -->
            <div class="form-group label-all">
                <i class="fa fa-chevron-up"></i>&nbsp;&nbsp;劇場情報
            </div>

                <div class="form-group">
                    <label for="theater_name" class="col-sm-2 down">劇場名</label>
                    <div class="col-sm-5">
                        <div>
                            <input disabled="" type="text" id="theater_name" name="theater_name" value="梅田ブルク7" class="form-control theater_name" placeholder="入力 劇場名">
                        </div>
                    </div>
                </div>

            <!-- 大項目 -->
            <div class="form-group label-all">
                <i class="fa fa-chevron-up"></i>&nbsp;&nbsp;T-SYS&nbsp;登録内容
            </div>
                <div class="form-group">
                    <label for="menu_code" class="col-sm-2 down">商品コード</label>
                    <div class="col-sm-2">
                        <div>
                            <input disabled="" type="text" id="menu_code" name="menu_code" value="A200000100" class="form-control menu_code" placeholder="入力 商品コード">
                        </div>
                    </div>
                </div>

                <div class="form-group  ">
                    <label for="basic_menu_name" class="col-sm-2 down">基本商品名</label>
                    <div class="col-sm-5">
                        <div>
                            <input disabled="" type="text" id="basic_menu_name" name="basic_menu_name" value="POPセット塩" class="form-control basic_menu_name" placeholder="入力 基本商品名">
                        </div>
                    </div>
                </div>

                <div class="form-group  ">
                    <label for="receipt_menu_name" class="col-sm-2 down">レシート名</label>
                    <div class="col-sm-5">
                        <div>
                            <input disabled="" type="text" id="receipt_menu_name" name="receipt_menu_name" value="POPセット塩" class="form-control receipt_menu_name" placeholder="入力 商品レシート名">
                        </div>
                    </div>
                </div>

                <div class="form-group  ">
                    <label for="shouhinbunrui" class="col-sm-2 down">商品分類</label>
                    <div class="col-sm-5">
                        <div>
                            <input disabled="" type="text" id="shouhinbunrui" name="shouhinbunrui" value="セット" class="form-control shouhinbunrui" placeholder="入力 商品分類">
                        </div>                 </div>
                </div>

                <div class="form-group  ">
                    <label for="menu_code" class="col-sm-2 down">商品単価</label>
                    <div class="col-sm-2">
                        <div>
                            <input disabled="" type="text" id="menu_code" name="menu_code" value="800" class="form-control menu_code" placeholder="入力 商品単価">
                        </div>
                    </div>
                </div>

                <div class="form-group  1">
                    <label for="menu_type" class="col-sm-2">在庫管理対象</label>
                    <div class="col-sm-8" id="menu_type">
                        <input class="" type="checkbox" name="" value="" style="transform: scale(1.3);margin-left:5px" checked disabled>
                    </div>
                </div>


                <!-- 中項目 -->
                <div class="form-group" style="border-bottom:1px solid #d3d3d3;padding:10px;padding-top:30px;">
                    子商品選択項目①
                </div>
                            
                    <div class="form-group">
                        <label for="setunnyoukategori" class="col-sm-2 down" style="font-size:12px;font-weight:100;">子商品カテゴリー</label>
                        <div class="col-sm-3">    
                            <input type="hidden" name="setunnyoukategori">
                            <select class="form-control setunnyoukategori" style="width: 100%;" name="setunnyoukategori" data-value="" tabindex="-1" aria-hidden="true">
                                <option value="" disabled selected style="display:none;"></option>
                                <option value="0" selected=""></option>
                                <option value="1">ドリンク</option>
                                <option value="2">サイズ変更/商品変更</option>
                                <option value="3">フレーバー</option>
                                <option value="4">オプション</option>
                                <option value="5">特典</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom:20px">
                        <label for="c_menu_name" class="col-sm-2">子商品情報</label>
                        <div class="col-sm-8 table-zone">
                            <table>
                                <tr style="background-color:#3c8dbc2a;">
                                    <th style="padding:5px 10px;text-align:center;">連番</th>
                                    <th style="padding:5px 10px;text-align:center;">商品コード</th>
                                    <th style="padding:5px 10px;">商品名</th>
                                    <th style="padding:5px 10px;">⇔</th>
                                    <th style="padding:5px 10px;text-align:center;">セット内追加オプション</th>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">1</td>
                                    <td style="padding:5px 10px;text-align:center;">A000000110</td>
                                    <td style="padding:5px 10px;">ペプシ R</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;text-align:center;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">2</td>
                                    <td style="padding:5px 10px;text-align:center;">A000000310</td>
                                    <td style="padding:5px 10px;">メロンソーダ R</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;text-align:center;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">3</td>
                                    <td style="padding:5px 10px;text-align:center;">A290000100</td>
                                    <td >ドリンクサイズアップ</td>
                                    <td style="padding:5px 10px;">▶</td>
                                    <td style="padding:5px 10px;text-align:center;">A999999999</td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">4</td>
                                    <td style="padding:5px 10px;text-align:center;">A290000110</td>
                                    <td >ドリンクサイズアップ</td>
                                    <td style="padding:5px 10px;">▶</td>
                                    <td style="padding:5px 10px;text-align:center;">A888888888</td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">5</td>
                                    <td style="padding:5px 10px;text-align:center;">A290000200</td>
                                    <td >カフェ変更</td>
                                    <td style="padding:5px 10px;">▶</td>
                                    <td style="padding:5px 10px;text-align:center;">A777777777</td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">6</td>
                                    <td style="padding:5px 10px;text-align:center;">A000000120</td>
                                    <td style="padding:5px 10px;">ペプシ L</td>
                                    <td style="padding:5px 10px;">◀</td>
                                    <td style="padding:5px 10px;text-align:center;">A999999999</td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">7</td>
                                    <td style="padding:5px 10px;text-align:center;">A000000320</td>
                                    <td style="padding:5px 10px;padding:5px 10px;">メロンソーダ L</td>
                                    <td style="padding:5px 10px;">◀</td>
                                    <td style="padding:5px 10px;text-align:center;">A888888888</td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">8</td>
                                    <td style="padding:5px 10px;text-align:center;">A020000100</td>
                                    <td style="padding:5px 10px;padding:5px 10px;">ホットカフェラテ</td>
                                    <td style="padding:5px 10px;">◀</td>
                                    <td style="padding:5px 10px;text-align:center;">A777777777</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                <!-- 中項目 -->
                <!-- <div class="form-group" style="border-bottom:1px solid #d3d3d3;padding:10px;padding-top:30px;">
                    子商品選択項目②
                </div>
                    
                    <div class="form-group">
                        <label for="setunnyoukategori" class="col-sm-2 down" style="font-size:12px;font-weight:100;">子商品カテゴリー</label>
                        <div class="col-sm-3">    
                            <input type="hidden" name="setunnyoukategori">
                            <select class="form-control setunnyoukategori" style="width: 100%;" name="setunnyoukategori" data-value="" tabindex="-1" aria-hidden="true">
                                <option value="" disabled selected style="display:none;"></option>
                                <option value="0" selected=""></option>
                                <option value="1">ドリンク</option>
                                <option value="2">サイズ変更/商品変更</option>
                                <option value="3">フレーバー</option>
                                <option value="4">オプション</option>
                                <option value="5">特典</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom:20px">
                        <label for="c_menu_name" class="col-sm-2">子商品情報</label>
                        <div class="col-sm-8 table-zone;">
                        <table>
                                <tr style="background-color:#3c8dbc2a;">
                                    <th style="padding:5px 10px;text-align:center;">連番</th>
                                    <th style="padding:5px 10px;text-align:center;">商品コード</th>
                                    <th style="padding:5px 10px;">商品名</th>
                                    <th style="padding:5px 10px;">⇔</th>
                                    <th style="padding:5px 10px;text-align:center;">セット内追加オプション</th>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">1</td>
                                    <td style="padding:5px 10px;text-align:center;">A000000110</td>
                                    <td style="padding:5px 10px;">ペプシ R</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;text-align:center;"></td>

                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">2</td>
                                    <td style="padding:5px 10px;text-align:center;">A290000100</td>
                                    <td >ドリンクサイズアップ</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;text-align:center;"></td>

                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">4</td>
                                    <td style="padding:5px 10px;text-align:center;">A000000100</td>
                                    <td style="padding:5px 10px;padding:5px 10px;">ペプシ K</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;text-align:center;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">5</td>
                                    <td style="padding:5px 10px;text-align:center;">A000000120</td>
                                    <td style="padding:5px 10px;">ペプシ L</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;text-align:center;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">6</td>
                                    <td style="padding:5px 10px;text-align:center;">A000000310</td>
                                    <td style="padding:5px 10px;">メロンソーダ R</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;text-align:center;"></td>
                                </tr>
                            </table>
                        </div>
                    </div> -->

            <!-- 大項目 -->
            <div class="form-group label-all">
                <i class="fa fa-chevron-up"></i>&nbsp;&nbsp;商品基本設定
            </div>
                <div class="form-group">
                    <label for="shouhingazou" class="down col-sm-2">商品画像</label>
                    <div class="col-sm-3">
                        <div class="file-input file-input-new">
                            <div class="file-preview ">
                                <button type="button" class="close fileinput-remove" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <div class="file-drop-disabled">
                                    <div class="file-preview-thumbnails"></div>
                                    <div class="clearfix"></div>    
                                    <div class="file-preview-status text-center text-success"></div>
                                    <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
                                </div>
                            </div>
                            <div class="kv-upload-progress kv-hidden" style="display: none;">
                                <div class="progress">
                                    <div class="progress-bar bg-success progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                                        0%
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>    
                            <div class="input-group file-caption-main">
                                <div class="file-caption form-control  kv-fileinput-caption" tabindex="500">
                                    <span class="file-caption-icon"></span>
                                    <input class="file-caption-name" onkeydown="return false;" onpaste="return false;" placeholder="ファイルを選択">
                                </div>
                                <div class="input-group-btn input-group-append">
                                    <div tabindex="500" class="btn btn-primary btn-file">
                                        <i class="glyphicon glyphicon-folder-open">
                                        </i>&nbsp;  <span class="hidden-xs">参照</span>
                                        <input type="file" class="shouhingazou" name="shouhingazou" id="1663208554932_49">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="c_menu_name" class="col-sm-2">商品説明</label>
                    <div class="col-sm-5">
                        <textarea name="c_menu_name" class="form-control c_menu_name" rows="5" placeholder="商品の説明を入力">
                        </textarea>    
                    </div>
                </div>         

                <div class="form-group  1">
                    <label for="kikanngenntei" class="col-sm-2">限定商品アイコン表示</label>
                    <div class="col-sm-8" id="menu_type">
                        <input class="" type="checkbox" name="" value="" style="transform: scale(1.3);margin-left:5px;">
                    </div>
                </div>

                <div class="form-group  1">
                    <label for="aruko-ru" class="col-sm-2  ">アルコール商品</label>
                    <div class="col-sm-8" id="aruko-ru">
                        <input class="" type="checkbox" name="" value="" style="transform: scale(1.3);margin-left:5px">
                        <span class="sub-msg">&nbsp;&nbsp;&nbsp;&nbsp;※アルコールの場合チェック、商品購入時に確認メッセージを出します。</span>
                    </div>
                </div>



            <!-- 大項目 -->
            <div class="form-group label-all">
                <i class="fa fa-chevron-up"></i>&nbsp;&nbsp;お客様画面用&nbsp;表示内容
            </div>


                <div class="form-group">
                    <label for="basic_menu_name" class="col-sm-2 down">商品表示名<span class="red">&nbsp;＊</span></label>
                    <div class="col-sm-5">
                        <div>
                            <input required="1" type="text" id="basic_menu_name" name="basic_menu_name" value="" class="form-control basic_menu_name" placeholder="商品表示名">
                        </div>
                    </div>
                </div>
                <!-- エラー表示 -->
                <!-- <div class="form-group">
                    <label for="basic_menu_name" class="col-sm-2 down"></label>
                    <div class="col-sm-5">
                        <div class="red-plus">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                            &nbsp;&nbsp;商品表示名の入力内容に誤りがあります。
                        </div>
                    </div>
                </div> -->



            <!-- 大項目 -->
            <div class="form-group label-all">
                <i class="fa fa-chevron-up"></i>&nbsp;&nbsp;オーダー管理アプリ用&nbsp;表示内容
            </div>
                
                <div class="form-group">
                    <label for="basic_menu_name" class="col-sm-2 down">商品表示名<span class="red">&nbsp;＊</span></label>
                    <div class="col-sm-5">
                        <div>
                            <input required="1" type="text" id="basic_menu_name" name="basic_menu_name" value="" class="form-control basic_menu_name" placeholder="商品表示名">
                        </div>
                    </div>
                </div>
                <!-- エラー表示 -->
                <!-- <div class="form-group">
                    <label for="basic_menu_name" class="col-sm-2 down"></label>

                    <div class="col-sm-5">
                        <div class="red-plus">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                            &nbsp;&nbsp;商品表示名は入力必須項目です。
                        </div>
                    </div>
                </div> -->


            <!-- 大項目 -->
            <div class="form-group label-all">
                <i class="fa fa-chevron-up"></i>&nbsp;&nbsp;詳細設定
            </div>


                <div class="form-group">
                    <label for="mobileorder" class="col-sm-2">モバイルオーダー<span class="red">&nbsp;＊</span></label>
                    <div class="col-sm-8">
                        <input type="radio" name="mobile" value="" style="margin-left:5px;margin-right:4px;transform: scale(1.2);">販売可
                        <input type="radio" name="mobile" value="" style="margin-left:10px;margin-right:4px;transform: scale(1.2);">販売不可
                        <input type="radio" name="mobile" value="" style="margin-left:10px;margin-right:4px;transform: scale(1.2);">販売停止
                        <input type="radio" name="mobile" value="" style="margin-left:10px;margin-right:4px;transform: scale(1.2);">売り切れ
                    </div>
                </div>

                <div class="form-group">
                    <label for="selforder" class="col-sm-2">セルフオーダー<span class="red">&nbsp;＊</span></label>
                    <div class="col-sm-8">
                        <input type="radio" name="self" value="" style="margin-left:5px;margin-right:4px;transform: scale(1.2);">販売可
                        <input type="radio" name="self" value="" style="margin-left:10px;margin-right:4px;transform: scale(1.2);">販売不可
                        <input type="radio" name="self" value="" style="margin-left:10px;margin-right:4px;transform: scale(1.2);">販売停止
                        <input type="radio" name="self" value="" style="margin-left:10px;margin-right:4px;transform: scale(1.2);">売り切れ
                    </div>
                </div>


            <div class="form-group">
                <label for="menu_type" class="col-sm-2">販売エリア</label>
                <div class="col-sm-8" id="menu_type">
                    <input class="" type="checkbox" name="" value="" style="margin-left:5px;margin-right:4px;transform: scale(1.2);">８階
                    <input class="" type="checkbox" name="" value="" style="margin-left:10px;margin-right:4px;transform: scale(1.2);">９階
                </div>
            </div>

            <div class="form-group">
                <label for="kaisibi" class="col-sm-2 down">購入制限</label>
                <label for="kaisibi" class="col-sm-1 down">
                    <input class="" type="checkbox" name="" value="" style="transform: scale(1.3);margin-left:5px">
                </label>
                <div class="col-sm-2">
                    <div>
                        <input required="1" type="text" id="kounyuuseigennsuu" name="kounyuuseigennsuu" value="" class="form-control kounyuuseigennsuu" placeholder="購入制限数を入力する">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <!-- <label for="kaisibi" class="col-sm-1 down">販売期間を指定する<br><span class="red">※営業日単位で設定</span></label> -->
                <label for="kaisibi" class="col-sm-2 down">販売期間を指定する</label>

                <label for="kaisibi" class="col-sm-1 down">
                    <input class="" type="checkbox" name="" value="" style="transform: scale(1.3);margin-left:5px">
                </label>
                <div class="col-sm-2">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                        <input required="1" style="width:100%;" type="date" id="kaisibi" name="kaisibi" value="" class="form-control kaisibi" placeholder="開始日">
                    </div>
                </div>

                <div class="col-sm-1" style="text-align:center;margin-top:8px;">~</div>
                
                <div class="col-sm-2">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                        <input required="1" style="width:100%;" type="date" id="kaisibi" name="kaisibi" value="" class="form-control kaisibi" placeholder="終了日">
                    </div>
                </div>
                <div class="sub-msg">
                    <span class="red">&nbsp;&nbsp;&nbsp;&nbsp;※営業日単位で設定</span>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- /.box-body -->
<!-- マスター同期画面の条件分岐(非表示) -->

    <div class="box-footer">
        <input type="hidden" name="_token" value="X5pRVrQnzUWWLlLiRutaat25AtBUkbt2usoVsVIA">
        <div class="col-md-2"></div>
        <div class="col-md-9">
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
    .form-control {
        font-size:12px;
    }

    .form-group {
        margin-bottom:25px;
    }

    th {
        color:#fff;
        background-color:#4682b4;
    }

    /* テーブル色変更 */
    table td {
        background: #eee;
    }
    
    table tr:nth-child(odd) td {
        background: #fff;
    }


    .label-all{
        background-color:#696969;
        color:#fff;
        font-weight:bold;
        padding:10px 10px;
        margin-top:50px;
        width:90%;

    }



    .table-zone {
        height:250px;
        width:70%;
        overflow-y:scroll;
    }


    table {
        width:100%;
    }



    /* 項目名 */
    label.col-sm-2 {
        width: 12%;
    }

    .col-sm-1 {
        width: 3%;
    }

    
    /* レスポンシブ */
    @media screen and (max-width: 1300px) {
    /* 959px以下に適用されるCSS（タブレット用） */

        label.col-sm-2 {
            width: 20%;
        }

        div.col-sm-2 {
            width: 30%;
        }

        div.col-sm-3 {
            width: 50%;
        }

        div.col-sm-5 {
            width: 70%;
        }

    
    }


</style>