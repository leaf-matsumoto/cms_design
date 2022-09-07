<div id="app">
            <!-- TOPページにカレンダーを表示するための条件分岐 -->
    <section class="content-header">
        <h1>TOP</h1>
    </section>

    <!-- 一覧情報等を表示 -->
    <section class="content">
        <div class="row"><div class="col-md-12"><!-- カレンダー -->
            <div class="box box-info" style="margin-bottom:0;">
                <div class="box-header with-border" style="border:none;">
                    @include('admin::add.calender_search')
                </div>


                <form action="http://localhost/admin/mobile-calendar" method="post" class="form-horizontal model-form-62d0ff2060be7" accept-charset="UTF-8" pjax-container="">

                    <div class="box-body">
                            
                        <!-- HTML形式でのカレンダー -->                                
                        <div class="container calender" style="float:left;margin-left:5%;width:80%;">
                            <h3 class="mb-5" style="margin-bottom:20px;">
                                <a href="#" style="pointer-events:none;background-color:#111;padding:3px 10px;color:#fff;border-top-left-radius:5px;border-bottom-left-radius:5px;font-size:15px;">&lt;</a>
                                <a href="#" style="background-color:#111;padding:3px 10px;color:#fff;border-top-right-radius:5px;border-bottom-right-radius:5px;font-size:15px;">&gt;</a>
                                <a href="" class="btn-alert" style="background-color:#808080;padding:3px 10px;color:#fff;border-radius:5px;font-size:15px;">today</a>
                                <span style="margin-left:20px;">&nbsp;2022年 7月&nbsp;</span>
                            </h3>
                            <table class="table table-bordered calender">
                                <tbody><tr>
                                    <th class="sun">Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th class="sat">Sat</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>1<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td>2<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td>3<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td>4<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td class="sat">5<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                </tr>
                                <tr>
                                    <td class="sun">6<div style="color:#111;text-align:center;margin:20px auto;">9:00 - 24:30</div></td>
                                    <td>7<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td>8<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td>9<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td>10<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td>11<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td class="sat">12<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                </tr>
                                <tr>
                                    <td class="sun">13<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td>14<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td>15<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td class="today">16<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td style="background-color:#ffffe0;">17<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td>18<div style="color:#111;text-align:center;margin:20px auto;">10:00 - 24:30</div></td>
                                    <td class="sat">19<div style="color:red;text-align:center;margin:20px auto;">未登録</div></td>
                                </tr>
                                <tr>
                                    <td class="sun">20<div style="color:red;text-align:center;margin:20px auto;">未登録</div></td>
                                    <td>21<div style="color:red;text-align:center;margin:20px auto;">未登録</div></td>
                                    <td>22<div style="color:red;text-align:center;margin:20px auto;">未登録</div></td>
                                    <td>23<div style="color:red;text-align:center;margin:20px auto;">未登録</div></td>
                                    <td>24<div style="color:red;text-align:center;margin:20px auto;">未登録</div></td>
                                    <td>25<div style="color:red;text-align:center;margin:20px auto;">未登録</div></td>
                                    <td class="sat">26<div style="color:red;text-align:center;margin:20px auto;">未登録</div></td>
                                </tr>
                                <tr>
                                    <td class="sun">27<div style="color:red;text-align:center;margin:20px auto;">未登録</div></td>
                                    <td>28<div style="color:red;text-align:center;margin:20px auto;">未登録</div></td>
                                    <td>29<div style="color:red;text-align:center;margin:20px auto;">未登録</div></td>
                                    <td>30<div style="color:red;text-align:center;margin:20px auto;">未登録</div></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody></table>
                        </div>
                    
                    </div>
                </form>



                <!-- TOP画面登録ボタン --------------------------- -->

                <div class="box-footer">

                    <input type="hidden" name="_token" value="qlEA9YHtSTYJvTDg4pCO3zT9cx57VPz8NbfM4KZq">

                    <div class="col-md-2">
                    </div>

                    <div class="col-md-8" style="padding-bottom:10px;">
                        <!-- 登録ボタン -->
                        <!-- おすすめ商品選択ダイアログの時 -->
                            <div class="btn-group pull-right" style="margin-top:15px;">
                                <button type="submit" class="btn btn-primary">登録</button>
                            </div>
                            <!-- 表示/作成を続行する/編集を続ける -->                                                                                                                            
                            <!-- キャンセルボタン -->
                            <!-- おすすめ商品選択ダイアログ時 -->
                            <div class="btn-group pull-right" style="margin-right:20px;margin-top:15px;">
                                <button type="reset" class="btn btn-warning">キャンセル</button>
                            </div>
                        <!-- 追加ボタン -->
                        <!-- おすすめ商品選択ダイアログの時 -->
                    </div>
                </div>

                <!-- --------------------------- -->     

<!-- 
    <style>
            h3 {
                /* text-align:center; */
            }

            .container {
                font-family: 'Noto Sans JP', sans-serif;
                margin-top: 0px;
            }
            .calender a {
                text-decoration: none;
            }
            .calender th {
                height: 30px;
                text-align: center;
                background-color:#f5f5f5;
            }
            .calender td {
                height: 100px;
            }
            .today {
                background: #ffffe0 !important;
            }
            .calender th:nth-of-type(1),  .calender td:nth-of-type(1) {
                color: red;
            }
            .calender th:nth-of-type(7), .calender td:nth-of-type(7) {
                color: blue;
            }
    </style> -->


<!-- アラート -->
<script>
$(function (){
    $(".btn-submit").click(function(){
        if(confirm("登録を実行しますか？")){
            // そのままsubmit処理を実行（※削除）
        }else{
            // キャンセル
            return false;
        }
    });
});

$(function (){
    $(".btn-delete").click(function(){
        if(confirm("削除を実行しますか？")){
            // そのままsubmit処理を実行（※削除）
        }else{
            // キャンセル
            return false;
        }
    });
});

$(function (){
    $(".btn-warning").click(function(){
        if(confirm("変更内容を取り消しますか？")){
            // そのままsubmit処理を実行（※削除）
        }else{
            // キャンセル
            return false;
        }
    });
});

$(function (){
    $(".btn-alert").click(function(){
        alert("10日以内の営業時間が登録がされていません。");
        location.href = "admin/mobile-calendar/create/";
    });
});

</script>

</div>
</div>
</div>
</section>
</div>