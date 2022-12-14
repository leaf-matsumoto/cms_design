<!-- フィルタの中 -->
<div class="box-header with-border {{ $expand?'':'hide' }} filter-box" id="{{ $filterID }}">
    <form action="{!! $action !!}" class="form-horizontal" pjax-container method="get">

        <!-- 検索ボックス -->
        <div class="row">
            @foreach($layout->columns() as $column)
            <div class="col-md-{{ $column->width() }}">
                <div class="box-body">
                    <div class="fields-group">
                        @foreach($column->filters() as $filter)
                            {!! $filter->render() !!}
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /.box-body -->

        <!-- 検索/キャンセル ボタン -->
        <div class="box-footer">
            <div class="row">
                <div class="col-md-{{ $layout->columns()->first()->width() }}">
                    <div class="col-md-1"></div>
                    <div class="col-md-8">
                        <div class="btn-group pull-left">
                            <a href="{!! $action !!}" class="btn btn-default btn-sm"><i
                                        class="fa fa-undo"></i>&nbsp;&nbsp;{{ trans('admin.reset') }}</a>
                        </div>
                        <div class="btn-group pull-left" style="margin-left: 10px;">
                            <button class="btn btn-info submit btn-sm"><i
                                        class="fa fa-search"></i>&nbsp;&nbsp;{{ trans('admin.search') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
