<div class="box-header with-border filter-box" id="filter-box">
    <form action="http://localhost/admin/single-menu" class="form-horizontal" pjax-container="" method="get">
        <div class="row">
            <div class="col-md-12">
                <div class="box-body" style="border-bottom:solid 1px #f5f5f5;margin-bottom:20px;">
                    <div class="fields-group" style="border-bottom: 1px solid #d2d6de;padding-bottom:50px;">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">劇場選択</label>
                            <div class="col-sm-8">
                                <div class="">
                                    <div class="">
                                    <i class=""></i>
                                </div>
                                {{Form::select('yaer', ['1' => 'T・ジョイ新潟万代', '2' => 'T・ジョイ長岡', '3' => '新宿バルト9', '4' => 'T・ジョイ SEIBU 大泉'], 'current', ['placeholder' => '', 'class' => 'form-control theater-search'])}}
                            </div>
                        </div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>



