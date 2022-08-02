<div id="overlay" class="overlay"></div>

<div class="modal-window" data-id="modal1" style="width:350px;height:250px;padding-bottom:0;">
    <div class="container" style="width:250px;padding:0;">
       
        <div class="row" style="margin-bottom:30px;border-bottom:solid 1px #ddd;padding-bottom:10px">
            <div class="col-md-6">2022年7月13日</div>
            <div class="col-md-6 js-close" style="text-align:right;color:red;font-weight:bold;cursor:pointer;">×</div>
        </div>
        <div class="row" style="margin-bottom:10px;">
            <div class="col-md-5">販売開始時間</div>
            <div class="col-md-6" style="width:10px">{{Form::text('text', null, ['class'=>'dialog'])}}</div>
            <!-- <div class="col-md-1"></div> -->
            <!-- <div class="col-md-6">販売終了時間</div> -->
        </div>
        <div class="row" style="margin-bottom:20px;">
            <div class="col-md-5">販売終了時間</div>
            <div class="col-md-6">{{Form::text('text', null, ['class'=>'dialog'])}}</div>
            <!-- <div class="col-md-1"></div> -->
            <!-- <div class="col-md-6" style="width:10px">{{Form::text('text', null, ['class'=>'dialog'])}}</div> -->
        </div>
        <div class="row">
            <div class="col-md-12" style="font-size:11px;">※この画面は本登録画面ではありません。</div>
        </div>

        <div class="btn-group pull-right" style="margin-right:20px;margin-bottom:20px;margin-top:20px;margin-bottom:0;margin-right:0;">
            <button type="reset" class="btn btn-primary btn-submit">仮登録</button>
        </div>

        <div class="btn-group pull-right" style="margin-right:20px;margin-bottom:20px;margin-top:20px;margin-bottom:0;">
            <button type="reset" class="btn btn-warning btn-cancel">キャンセル</button>
        </div>
    </div>
</div>