<div class="input-group input-group-sm" style="display: inline-block;">
        <input type="text" name="__search__" class="form-control grid-quick-search" style="width: 200px;" value="" placeholder="キーワードを入力">

        <div class="input-group-btn" style="display: inline-block;">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </div>
    </div>

<!-- アレルギー管理ビュー -->
<!-- <div class="box-header with-border">
    <div class="pull-left" style="margin-left:9%;>
            <div class="btn-group" style="margin-right: 5px" data-toggle="buttons">
        <label class="btn btn-sm btn-dropbox 62e888e05414c-filter-btn active" title="検索条件">
        <input type="checkbox"><i class="fa fa-chevron-up"></i><span class="hidden-xs">&nbsp;&nbsp;検索条件</span>
        </label>
    </div>
</div> -->
    
<!-- フィルタの中 -->
<div class="box-header with-border filter-box" id="" style="margin-left:10%">
    <form action="http://localhost/admin/single-menus" class="form-horizontal" pjax-container="" method="get">

        <!-- 検索ボックス -->
        <div class="row">
            <div class="col-md-4">
                <div class="box-body">
                    <div class="fields-group">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> 劇場選択</label>
                            <div class="col-sm-8">
                            <select class="form-control theater_name select2-hidden-accessible" name="theater_name" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option></option>
                                <option value="0">value00</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-theater_name-w2-container"><span class="select2-selection__rendered" id="select2-theater_name-w2-container"><span class="select2-selection__placeholder">選択</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="box-body">
                <div class="fields-group">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"> キーワード</label>
                        <div class="col-sm-8">
                        <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control menu_name" placeholder="キーワードを入力してください" name="menu_name" value="">
                    </div>    
                </div>
            </div>
        </div>
                </div>
            </div>
                    </div>
        <!-- /.box-body -->

        <!-- 検索/キャンセル ボタン -->
        <div class="box-footer">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-2"></div>
                    <div class="allergy-style col-md-8">
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


    

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding" style="margin:30px 16% 30px 10%;">
        <table class="allergy" id="grid-table62e888e0515a6">

            <thead class="allergy-title">
                <tr>
                    <th></th>
                    <th>商品名</th>
                    <th>卵</th>
                    <th>乳</th>
                    <th>小麦</th>
                    <th>えび</th>
                    <th>かに</th>
                    <th>落花生</th>
                    <th>そば</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <td class="column-mobile"><button type="button" class="btn btn-primary btn-xs change-num">〓</button></td>
                    <th>チュリトス チョコミント</th>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td class="column-mobile"><button type="button" class="btn btn-danger btn-xs btn-delete" style="font-weight:bold;padding:1px 7px;">×</button></td>
                </tr>
                <tr>
                    <td class="column-mobile"><button type="button" class="btn btn-primary btn-xs change-num">〓</button></td>
                    <th>ひとくち大学いも</th>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td class="column-mobile"><button type="button" class="btn btn-danger btn-xs" style="font-weight:bold;padding:1px 7px;">×</button></td>
                </tr>
                <tr>
                    <td class="column-mobile"><button type="button" class="btn btn-primary btn-xs change-num">〓</button></td>
                    <th>チュリトス　ストロベリー</th>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td class="column-mobile"><button type="button" class="btn btn-danger btn-xs" style="font-weight:bold;padding:1px 7px;">×</button></td>
                </tr>
                <tr>                   
                    <td class="column-mobile"><button type="button" class="btn btn-primary btn-xs change-num">〓</button></td>
                    <th>ポップコーン　キャラメル</th>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td>{{Form::select('yaer', ['●' => '●', '△' => '△', '-' => '-'], 'current', ['placeholder' => '', 'class' => 'form-control'])}}</td>
                    <td class="column-mobile"><button type="button" class="btn btn-danger btn-xs" style="font-weight:bold;padding:1px 7px;">×</button></td>
                </tr>
            </tbody>





        </table>
    </div>
</div>


<div class="row" style="margin-left:7%;">
    <div class="col-md-4">
        <div class="box-body">
            <div class="fields-group">
                <div class="form-group">
                    <label class="col-sm-1 control-label">商品追加</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control id" placeholder="" name="id" value="">
                    </div>
                </div>

                <div class="col-md-1" style="margin:0;padding:0;">
                    <button class="btn btn btn-success"><i class="fa fa-plus-circle fa-lg"></i>&nbsp;&nbsp;追加</button>
                </div>


                <div class="col-md-12 explain" style="">
                    <div>&nbsp;●&nbsp;：原材料に使用している</div>
                    <div>▲：製造工程で調理器具または揚げ物などを共有している</div>
                    <div>&nbsp;&nbsp;-&nbsp;：原材料に使用していない</div>
                </div>


            </div>
        </div>
    </div>
</div>


