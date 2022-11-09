<div id="overlay" class="overlay"></div>

<div class="modal-window" data-id="modal1" style="width:360px;height:360px;padding-bottom:0;">
    <div class="container" style="width:290px;padding:0;">
       
        <div class="row" style="margin-bottom:30px;border-bottom:solid 1px #ddd;padding-bottom:10px">
            <div class=""><span style="font-size:20px!important;">2022</span>&thinsp;年<span style="font-size:20px!important;">&thinsp;7</span>&thinsp;月<span style="font-size:20px!important;">&thinsp;13</span>&thinsp;日</div>
            <!-- <div class="col-md-6 js-close" style="text-align:right;color:red;font-weight:bold;cursor:pointer;">×</div> -->
        </div>
        
        <div class="row" style="margin-bottom:10px;">
            <div class="col-md-5">販売開始時間</div>
            <div class="col-md-6">
                <input required="1" style="width:100%;" type="text" id="" name="" value="" class="fullwidth-halfwidth" placeholder="半角4桁" maxlength="4">
            </div>
        </div>
        
        <div class="row" style="margin-bottom:20px;">
            <div class="col-md-5">販売終了時間</div>
            <div class="col-md-6">
                <input required="1" style="width:100%;" type="" id="" name="" value="" class="" placeholder="半角4桁" maxlength="4">
            </div>
        </div>

        <div class="hidden_box">
            <label for="label1">入力例&nbsp;▽</label>
            <input type="checkbox" id="label1"/>
            <div class="hidden_show">
            <!--非表示ここから-->     
            
                <div class="row" style="color:#696969;">
                    <div class="col-md-12" style="font-size:11px;line-height:20px;">&nbsp;午前&nbsp;9&nbsp;時&nbsp;30&nbsp;分から翌日午前&nbsp;2&nbsp;時まで営業の場合、</div>
                    <div class="col-md-12" style="font-size:11px;">&nbsp;9&nbsp;時&nbsp;30&nbsp;分から&nbsp;26&nbsp;時までと考え以下のように入力する。</div>
                </div>

                <div class="row" style="margin-bottom:3px;margin-top:10px;font-size:11px;color:#696969;">
                    <div class="col-md-4" style="padding-left:25px;padding-right:0;">販売開始時間</div>
                    <div class="col-md-2" style="width:40px;border:1px solid #c0c0c0;padding-left:5px;font-size:12px;">0930</div>
                    <div class="col-md-4" style="padding-right:0;">販売終了時間</div>
                    <div class="col-md-2" style="width:40px;border:1px solid #c0c0c0;padding-left:5px;font-size:12px;">2600</div>
                </div>

            <!--ここまで-->
            </div>
        </div>


        <div class="row">
            <div class="col-md-12" style="font-size:11px;margin-top:10px;color:#ff6347;">※この画面は本登録画面ではありません。</div>
        </div>

        <div class="btn-group pull-right" style="margin-right:20px;margin-bottom:20px;margin-top:20px;margin-bottom:0;margin-right:0;">
            <button type="reset" class="btn btn-primary btn-submit">仮登録</button>
        </div>

        <div class="btn-group pull-right" style="margin-right:20px;margin-bottom:20px;margin-top:20px;margin-bottom:0;">
            <button type="reset" class="btn btn-warning btn-cancel">キャンセル</button>
        </div>
    </div>
</div>





<style>

/*全体*/
.hidden_box {
    /* margin: 2em 0; */
    /* padding: 0; */
}

/*ボタン装飾*/
.hidden_box label {
    cursor :pointer;
    font-size:11px;
}

/*チェックは見えなくする*/
.hidden_box input {
    display: none;
}

/*中身を非表示にしておく*/
.hidden_box .hidden_show {
    height: 0;
    padding: 0;
    overflow: hidden;
    opacity: 0;
    transition: 0.8s;
}

/*クリックで中身表示*/
.hidden_box input:checked ~ .hidden_show {
    padding: 0;
    height: auto;
    opacity: 1;
}

</style>

<script>

    (function($){
    //半角を全角に置換
        $('.halfwidth-fullwidth').change(function(){
        var text = $(this).val();
        var str = text.replace(/[A-Za-z0-9]/g, function(s) {
            return String.fromCharCode(s.charCodeAt(0) + 65248);
        });
        $(this).val(str);
        });
    //全角を半角に置換
        $('.fullwidth-halfwidth').change(function(){
        var text = $(this).val();
        var str = text.replace(/[Ａ-Ｚａ-ｚ０-９]/g, function(s) {
            return String.fromCharCode(s.charCodeAt(0) - 65248);
        });
        $(this).val(str);
        });
    })(jQuery);

</script>