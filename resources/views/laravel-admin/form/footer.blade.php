<div class="box-footer">

    {{ csrf_field() }}

    <div class="col-md-{{$width['label']}}">
    </div>

    <div class="col-md-{{$width['field']}}">

        <!-- フォーム送信（登録）ボタン -->
        @if(in_array('submit', $buttons))
        <div class="btn-group pull-right">
            <button type="submit" class="btn btn-primary btn-submit">{{ trans('admin.submit') }}</button>
        </div>

        @foreach($submit_redirects as $value => $redirect)
            @if(in_array($redirect, $checkboxes))
            <label class="pull-right" style="margin: 5px 10px 0 0;">
                <input type="checkbox" class="after-submit" name="after-save" value="{{ $value }}" {{ ($default_check == $redirect) ? 'checked' : '' }}> {{ trans("admin.{$redirect}") }}
            </label>
            @endif
        @endforeach

        @endif

        <!-- フォームリセット（キャンセル）ボタン -->
        @if(in_array('reset', $buttons))
        <div class="btn-group pull-right reset-btn">
            <button type="reset" class="btn btn-warning">{{ trans('admin.cancel_under') }}</button>
        </div>
        @endif


        <!-- QRコード設定画面 -->
        @if(\Request::is('admin/qrcodes/create'))
            @if(in_array('reset', $buttons))
                <div class="btn-group pull-left" style="margin-right:20px;margin-top:15px;">
                    <button type="reset" class="btn" style="color:#fff;background-color:#696969;">印刷</button>
                </div>
            @endif
        @endif

    </div>
</div>


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