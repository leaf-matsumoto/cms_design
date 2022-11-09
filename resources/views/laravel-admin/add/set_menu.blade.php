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
                                    <th rowspan="2" style="padding:5px 10px;text-align:center;">連番</th>
                                    <th rowspan="2" style="padding:5px 10px;text-align:center;">商品コード</th>
                                    <th rowspan="2" style="padding:5px 10px;text-align:center;">商品名</th>
                                    <th rowspan="2" style="padding:5px 10px;text-align:center;">➡</th>
                                    <th colspan="3" style="padding:5px 10px;text-align:center;">セット内追加オプション</th>
                                    <!-- <th style="padding:5px 10px;">セット内追加オプション</th> -->
                                    <!-- <th rowspan="2" style="padding:5px 10px;"></th> -->
                                </tr>
                                <tr style="background-color:#3c8dbc2a;">
                                    <!-- <th style="padding:5px 10px;text-align:center;">連番</th> -->
                                    <!-- <th style="padding:5px 10px;">商品コード</th> -->
                                    <!-- <th style="padding:5px 10px;">商品名</th> -->
                                    <!-- <th style="padding:5px 10px;"></th> -->
                                    <th style="padding:5px 10px;text-align:center;">商品コード</th>
                                    <th colspan="3" style="padding:5px 10px;text-align:center;">商品名</th>
                                    <!-- <th style="padding:5px 10px;">セット内追加オプション</th> -->
                                    <!-- <th style="padding:5px 10px;"></th> -->
                                </tr>

                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">1</td>
                                    <td style="padding:5px 10px;">A000000110</td>
                                    <td style="padding:5px 10px;">ペプシ R</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">2</td>
                                    <td style="padding:5px 10px;">A000000210</td>
                                    <td style="padding:5px 10px;">ペプシゼロ R</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">3</td>
                                    <td style="padding:5px 10px;">A000000310</td>
                                    <td style="padding:5px 10px;">メロンソーダ R</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">4</td>
                                    <td style="padding:5px 10px;">A000000410</td>
                                    <td style="padding:5px 10px;">セブンアップ R</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">5</td>
                                    <td style="padding:5px 10px;">A000000510</td>
                                    <td style="padding:5px 10px;">なっちゃんオレンジ R</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">6</td>
                                    <td style="padding:5px 10px;">A000000910</td>
                                    <td style="padding:5px 10px;">ホワイトウォーター R</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">7</td>
                                    <td style="padding:5px 10px;">A000000610</td>
                                    <td style="padding:5px 10px;padding:5px 10px;">ウーロン茶 R</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">8</td>
                                    <td style="padding:5px 10px;">A000000710</td>
                                    <td style="padding:5px 10px;padding:5px 10px;">リプトンアイスティー R</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">9</td>
                                    <td style="padding:5px 10px;">A000000810</td>
                                    <td style="padding:5px 10px;padding:5px 10px;">緑茶 R</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">10</td>
                                    <td style="padding:5px 10px;">A000002800</td>
                                    <td style="padding:5px 10px;padding:5px 10px;">ホットコーヒー</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">11</td>
                                    <td style="padding:5px 10px;">A000002810</td>
                                    <td style="padding:5px 10px;padding:5px 10px;">アイスコーヒー</td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>

                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">12</td>
                                    <td style="padding:5px 10px;">A290000110</td>
                                    <td style="padding:5px 10px;padding:5px 10px;">ドリンクサイズアップ</td>
                                    <td style="padding:5px 10px;text-align:center;">➡</td>
                                    <td style="padding:5px 10px;">A290000100</td>
                                    <td style="padding:5px 10px;">ドリンクサイズアップ</td>
                                    <td style="padding:5px 10px;text-align:center;"><i class="fa fa-chevron-down"></i></td>
                                </tr>
                                <!-- <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">12</td>
                                    <td style="padding:5px 10px;">A290000110</td>
                                    <td style="padding:5px 10px;padding:5px 10px;">ドリンクサイズアップ</td>
                                    <td style="padding:5px 10px;">➡</td>
                                    <td style="padding:5px 10px;">A290000100</td>
                                    <td style="padding:5px 10px;">ドリンクサイズアップ</td>
                                    <td style="padding:5px 10px;"><i class="fa fa-chevron-up"></i></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A000000120</td>
                                    <td style="padding:5px 10px;">ペルシ L</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A000000220</td>
                                    <td style="padding:5px 10px;">ペプシゼロ L</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A000000320</td>
                                    <td style="padding:5px 10px;">メロンソーダ L</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A000000420</td>
                                    <td style="padding:5px 10px;">セブンアップ L</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A000000520</td>
                                    <td style="padding:5px 10px;">なっちゃんオレンジ L</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A000000920</td>
                                    <td style="padding:5px 10px;">ホワイトウォーター L</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A000000620</td>
                                    <td style="padding:5px 10px;">ウーロン茶 L</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A000000720</td>
                                    <td style="padding:5px 10px;">リプトンアイスティー L</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A000000820</td>
                                    <td style="padding:5px 10px;">緑茶 L</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr> -->




                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;">13</td>
                                    <td style="padding:5px 10px;">A290000210</td>
                                    <td style="padding:5px 10px;padding:5px 10px;">カフェ変更</td>
                                    <td style="padding:5px 10px;text-align:center;">➡</td>
                                    <td style="padding:5px 10px;">A290000200</td>
                                    <td style="padding:5px 10px;">カフェ変更</td>
                                    <td style="padding:5px 10px;text-align:center;"><i class="fa fa-chevron-up"></i></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A000002900</td>
                                    <td style="padding:5px 10px;">ホットミルクココア</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;text-align:center;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A000002910</td>
                                    <td style="padding:5px 10px;">アイスミルクココア</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A020000100</td>
                                    <td style="padding:5px 10px;">ホットカフェラテ</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A020000100</td>
                                    <td style="padding:5px 10px;">アイスカフェラテ</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A020000500</td>
                                    <td style="padding:5px 10px;">ホット抹茶ラテ</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A020000500</td>
                                    <td style="padding:5px 10px;">抹茶アイスラテ</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A020000200</td>
                                    <td style="padding:5px 10px;">ホットキャラメルラテ</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px 10px;padding:5px 0;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;"></td>
                                    <td style="padding:5px 10px;">A000003000</td>
                                    <td style="padding:5px 10px;">ホットロイヤルミルクティー</td>
                                    <td style="padding:5px 10px;"></td>
                                </tr>
                            </table>
                        </div>
                    </div>


                    
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
                <div class="form-group">
                    <label for="basic_menu_name" class="col-sm-2 down"></label>
                    <div class="col-sm-5">
                        <div class="red-plus">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                            &nbsp;&nbsp;商品表示名の入力内容に誤りがあります。
                        </div>
                    </div>
                </div>



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
                <div class="form-group">
                    <label for="basic_menu_name" class="col-sm-2 down"></label>

                    <div class="col-sm-5">
                        <div class="red-plus">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                            &nbsp;&nbsp;商品表示名は入力必須項目です。
                        </div>
                    </div>
                </div>


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
        /* height:250px; */
        width:70%;
        overflow-y:scroll;
    }


    table {
        width:100%;
    }

    table,th, td {
        border:1px solid #dcdcdc;
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




 	


<script type="text/javascript"><!--
function hideCell()
{
	document.getElementById("tbl403").style.visibility = "hidden";
}
</script>












<!-- <script language="JavaScript">
<!-- //javascript123
 window.onload = putId;
    function putId(){
      // テーブルの行にID名を付ける
     var Tbe = document.getElementById("tbl");
      Tr = Tbe.getElementsByTagName("tr");
       for(i=0; i<Tr.length; i++){
        Tr[i].id='trID'+i;
            }
         }

function hideRow(){
  //セレクトメニューの　option value値(ID名)の取得
 var List = document.getElementById("list");
  index_nub = List.selectedIndex;
   optVal=List.options[index_nub].value;
    var Row = document.getElementById(optVal);
     //行の表示、非表示
     Row.style.display=(Row.style.display == 'none')?"":"none";
   }
// -->
</script> -->