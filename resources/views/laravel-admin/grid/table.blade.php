<!-- モーダルウィンドウ呼出し(おすすめ商品選択ダイアログに使用) -->
@include('admin::add.modal_01')

<div class="box grid-box">
    @if(isset($title))
    <div class="box-header with-border">
        <h3 class="box-title"> {{ $title }}</h3>
    </div>
    @endif

    <!-- おすすめ商品/クーポン管理の時 -->
    @if(!\Request::is('admin/pickups'))

        @if ( $grid->showTools() || $grid->showExportBtn() || $grid->showCreateBtn() )
        <div class="box-header with-border">
            <div class="pull-right">
                {!! $grid->renderColumnSelector() !!}
                {!! $grid->renderExportButton() !!}
                {!! $grid->renderCreateButton() !!}
            </div>
            
            @if ( $grid->showTools() )
            <div class="pull-left">
                {!! $grid->renderHeaderTools() !!}
            </div>
            @endif
        </div>
        @endif

        {!! $grid->renderFilter() !!}

        {!! $grid->renderHeader() !!}

    <!-- おすすめ商品管理で表示 -->
    @elseif(\Request::is('admin/pickups'))
        @include('admin::add.pickup_add_upbutton')
    @endif

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover grid-table" id="{{ $grid->tableID }}">
            <thead>
                <tr>
                    @foreach($grid->visibleColumns() as $column)
                    <th {!! $column->formatHtmlAttributes() !!}>{!! $column->getLabel() !!}{!! $column->renderHeader() !!}</th>
                    @endforeach
                </tr>
            </thead>

            @if ($grid->hasQuickCreate())
                {!! $grid->renderQuickCreate() !!}
            @endif

            <tbody>

                @if($grid->rows()->isEmpty() && $grid->showDefineEmptyPage())
                    @include('admin::grid.empty-grid')
                @endif

                @foreach($grid->rows() as $row)
                <tr {!! $row->getRowAttributes() !!}>
                    @foreach($grid->visibleColumnNames() as $name)
                    <td {!! $row->getColumnAttributes($name) !!}>
                        {!! $row->column($name) !!}
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>

            {!! $grid->renderTotalRow() !!}

        </table>

    <!-- </div> -->

    {!! $grid->renderFooter() !!}

    <div class="box-footer clearfix">
        {!! $grid->paginator() !!}
    </div>
    <!-- /.box-body -->
    <!-- おすすめ商品選択ダイアログの時 -->
    @if(\Request::is('admin/pickups'))
        @include('admin::add.pickup_add_downbutton')
    @endif
    </div>
</div>

<!-- アラート -->
<script src="{{ asset('/js/aleart.js') }}"></script>

<!-- モーダル -->
<script src="{{ asset('/js/modal_table.js') }}"></script>