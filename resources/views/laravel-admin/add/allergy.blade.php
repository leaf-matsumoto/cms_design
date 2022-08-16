<div class="col-md-12">
    <form action="" method="post" class="form-horizontal model-form-62f2103dd4444" accept-charset="UTF-8" pjax-container="">
        <div class="box-body">
            <div class="fields-group">
                <div class="col-md-12" style="border-bottom: 1px solid #d2d6de;padding-bottom:50px;">
                    <div class="form-group">
                        <label for="menu_class" class="col-sm-2  control-label">劇場選択</label>
                        <div class="col-sm-3">                
                            <input type="hidden" name="menu_class">
                            <select class="form-control menu_class select2-hidden-accessible" style="width: 100%;" name="menu_class" data-value="" tabindex="-1" aria-hidden="true">
                                <option value=""></option>
                                <option value="0" selected="">選択してください</option>
                                <option value="1">フード</option>
                                <option value="2">ドリンク</option>
                                <option value="3">その他</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-menu_class-5k-container"><span class="select2-selection__rendered" id="select2-menu_class-5k-container" title=""><span class="select2-selection__clear"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>  
                        </div>
                    </div>
                </div>
            </div>

            <div class="fields-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-sm-4">
                            <div class="input-group" style="display: inline-block; margin-top:35px;width: 100%">
                                <input type="text" name="__search__" class="form-control grid-quick-search" style="width: 80%;" placeholder="商品名を入力">
                                <div class="input-group-btn" style="display: inline-block;">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>


<div class="input-group" style="display: inline-block; margin-left:10%;">

</div>
  

<!-- /.box-header -->
<div class="box-body table-responsive no-padding" style="margin:5px 16% 30px 7%;">
    <table class="allergy" id="grid-table62e888e0515a6">

        <thead class="allergy-title">
            <tr>
                <th></th>
                <th>品名</th>
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
<!-- </div> -->


<div class="row" style="margin-left:4%;">
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
                        <input type="text" class="form-control id" placeholder="追加する行の名称を入力" name="id" value="">
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


