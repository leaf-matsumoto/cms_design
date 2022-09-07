<!-- 劇場選択されていないときのキャプチャ用画面 -->

<div id="app">
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
                                    <td>1<div style=";text-align:center;margin:20px auto;">-</div></td>
                                    <td>2<div style=";text-align:center;margin:20px auto;">-</div></td>
                                    <td>3<div style=";text-align:center;margin:20px auto;">-</div></td>
                                    <td>4<div style=";text-align:center;margin:20px auto;">-</div></td>
                                    <td class="sat">5<div style=";text-align:center;margin:20px auto;">-</div></td>
                                </tr>
                                <tr>
                                    <td class="sun">6<div style="color:#111;text-align:center;margin:20px auto;">-</div></td>
                                    <td>7<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td>8<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td>9<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td>10<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td>11<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td class="sat">12<div style="text-align:center;margin:20px auto;">-</div></td>
                                </tr>
                                <tr>
                                    <td class="sun">13<div style="color:#111;text-align:center;margin:20px auto;">-</div></td>
                                    <td>14<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td>15<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td class="today">16<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td style="background-color:#ffffe0;">17<div style="text-align:center;margin:20px auto;border-width:5px;">-</div></td>
                                    <td>18<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td class="sat">19<div style="color:red;text-align:center;margin:20px auto;">-</div></td>
                                </tr>
                                <tr>
                                    <td class="sun">20<div style="color:red;text-align:center;margin:20px auto;">-</div></td>
                                    <td>21<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td>22<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td>23<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td>24<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td>25<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td class="sat">26<div style="text-align:center;margin:20px auto;">-</div></td>
                                </tr>
                                <tr>
                                    <td class="sun">27<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td>28<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td>29<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td>30<div style="text-align:center;margin:20px auto;">-</div></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody></table>
                        </div>
                    
                    </div>
                </form>


</div>
</div>
</div>
</section>
</div>