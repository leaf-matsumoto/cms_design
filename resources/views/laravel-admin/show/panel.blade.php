<div class="box box-{{ $style }}">
    <div class="box-header with-border">
        <h3 class="box-title">{{ $title }}</h3>
        <a href="" style="float:right;margin-right:20px">◀&nbsp;戻る</a>

        <!-- 管理編集削除ボタン -->
        @if(!\Request::is('admin/ordermanagements/*'))

        @endif
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <div class="form-horizontal">

        <div class="box-body">

            <div class="fields-group">

                <!-- <div>この画面で詳細を編集する</div> -->

                @foreach($fields as $field)
                    {!! $field->render() !!}
                @endforeach
            </div>
        </div>
        <!-- <a href="" style="float:right;margin-right:50px">◀&nbsp;戻る</a> -->
        <!-- /.box-body -->
    </div>
</div>