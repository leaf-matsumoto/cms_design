



<!-- メール送信フォーム -->                                
<div class="form-group">
        <label for="main_mail" class="col-sm-2 control-label">メール編集</label>

        <div class="col-sm-8" style="border:1px solid #a9a9a9;">
            <div style="margin:30px 15px;">
                <img src="{{ asset('sample-img/tjoy.jpg') }}" alt="画像1" style="width:150px;margin-bottom:10px">
                <!-- <div>固定文言①</div> -->
                <!-- <hr> -->
                <textarea name="main_mail" class="form-control main_mail" rows="7" placeholder="ここに差込文章を入力してください。"></textarea>            
                <hr>
                <div>購入日時&nbsp;:&nbsp;2022年**月**日（＊）</div>
                <div>購入劇場&nbsp;:&nbsp;梅田ブルク７</div>
                <br>
                <div>購入商品</div>
                <table>
                    <tr><th style="width:200px;"></th><th  class="position" style="width:0px;"></th><th class="position" style="width:100px;"></th></tr>
                    <tr><td>XXXXXXXXXXXXセット</td><td class="position">1</td><td class="position">￥700</td></tr>
                    <tr><td>&emsp;XXXXXXXXXXXXXXXX</td><td class="position">1</td><td class="position">*</td></tr>
                    <tr><td>&emsp;XXXXXXXXXXXXXX</td><td class="position">1</td><td class="position">*</td></tr>
                    <tr><td>XXXXXXXXXXXXセット</td><td class="position">1</td><td class="position">￥1.000</td></tr>
                    <tr><td>&emsp;XXXXXXXXXXXXXXXX</td><td class="position">1</td><td class="position">*</td></tr>
                    <tr><td>&emsp;XXXXXXXXXXXXXX</td><td class="position">1</td><td class="position">*</td></tr>
                </table><br>
                <!-- <hr class="dot_line"> -->
                <div>合計金額&nbsp;:&nbsp;￥1,700（税込）</div>
                <div>決済方法&nbsp;:&nbsp;クレジットカード</div>

                <hr>
                <textarea name="main_mail" class="form-control main_mail" rows="7" placeholder="ここに差込文章を入力してください。"></textarea>
                <!-- <hr> -->
                <br>
                <div>
                    ご不明の点がありましたら、お問い合わせ先(XXXXXXXX)まで問い合わせください。<br>

                    オンライン予約システム XXXXXXXX<br>

                    <hr class="dashed_line">
                    【XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX】<br>

                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX<br>
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX<br>

                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX<br>
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX<br><br>

                    https://www.**********/*****/*****/<br>
                    <hr class="dashed_line">
                </div>
            </div>    
</div>
                             
<style>

    table, th,tr,td {
        border:none;
        background-color:#fff!important;
    }

    th {
        color:black!important;
        font-weight:normal;
    }

    th.position {
        text-align:center;
    }

    td.position {
        text-align:right;
    }
  
    hr.dot_line {
        border-top: 1px dotted #111;
    }


    hr.dashed_line {
        border-top: 1px dashed #111;
    }

</style>