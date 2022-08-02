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
    $(".btn-cancel").click(function(){
        if(confirm("キャンセルを実行しますか？")){
            // そのままsubmit処理を実行（※削除）
        }else{
            // キャンセル
            return false;
        }
    });
});

$(function (){
    $(".btn-alert").click(function(){
        if(alert("10日以内の営業時間が登録がされていません。")){
            // そのままsubmit処理を実行（※削除）
        }else{
            // キャンセル
            return false;
        }
    });
});