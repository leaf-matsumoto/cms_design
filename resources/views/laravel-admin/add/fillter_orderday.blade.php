<div class="box-header with-border  filter-box" id="filter-box">
    <form action="http://localhost/admin/order-mgts" class="form-horizontal" pjax-container="" method="get">

        <!-- 検索ボックス -->
        <div class="row">
            <div class="col-md-4" style="border-right:1px inset #c0c0c0;padding-right:50px;">
                <div class="box-body">
                    <div class="fields-group">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">劇場名</label>
                            <div class="col-sm-8">
                            <select class="form-control theater_name select2-hidden-accessible" name="theater_name" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option></option>
                                <option value="0">value00</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-theater_name-4p-container"><span class="select2-selection__rendered" id="select2-theater_name-4p-container"><span class="select2-selection__placeholder">選択</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>    </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">注文日</label>
                            <div class="col-sm-8">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="column_start" placeholder="注文日" name="column[start]" value="" autocomplete="off">

                                    <span class="input-group-addon" style="border-left: 0; border-right: 0;">-</span>

                                    <input type="text" class="form-control" id="column_end" placeholder="注文日" name="column[end]" value="" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">注文時間</label>
                            <div class="col-sm-8">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" id="column_start" placeholder="注文時間" name="column[start]" value="" autocomplete="off">

                                    <span class="input-group-addon" style="border-left: 0; border-right: 0;">-</span>

                                    <input type="text" class="form-control" id="column_end" placeholder="注文時間" name="column[end]" value="" autocomplete="off">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box-body">
                    <div class="fields-group">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> 決済ステータス</label>
                            <div class="col-sm-8">
                            <select class="form-control theater_name select2-hidden-accessible" name="theater_name" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option></option>
                                <option value="0">value00</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-theater_name-4p-container"><span class="select2-selection__rendered" id="select2-theater_name-4p-container"><span class="select2-selection__placeholder">選択</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>    </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> 注文ステータス</label>
                            <div class="col-sm-8">
                                <select class="form-control theater_name select2-hidden-accessible" name="theater_name" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option></option>
                                    <option value="0">value00</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-theater_name-0r-container"><span class="select2-selection__rendered" id="select2-theater_name-0r-container"><span class="select2-selection__placeholder">選択</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>    
                            </div>
                        </div>
                
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="box-body">
                    <div class="fields-group">

                        <div class="form-group">
                            <label class="col-sm-2 control-label"> 決済種別</label>
                            <div class="col-sm-8">
                                <select class="form-control theater_name select2-hidden-accessible" name="theater_name" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option></option>
                                    <option value="0">value00</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-theater_name-9n-container"><span class="select2-selection__rendered" id="select2-theater_name-9n-container"><span class="select2-selection__placeholder">選択</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>    
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> 商品名</label>
                            <div class="col-sm-8">
                                <div class="">
                                    <!-- <div class="input-group-addon">
                                        <i class="fa fa-pencil"></i>
                                    </div> -->
                                    <input type="text" class="form-control menu_name" placeholder="商品名を入力してください" name="menu_name" value="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>            
        </div>

        <!-- 検索/キャンセル ボタン -->
        <div class="box-footer" style="margin-top:15px;">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-1"></div>
                    <div class="col-md-8">
                        <div class="btn-group pull-left">
                            <a href="http://localhost/admin/order-mgts" class="btn btn-default btn-sm"><i class="fa fa-undo"></i>&nbsp;&nbsp;クリア</a>
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