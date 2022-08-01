<div class="box box-info">
    <div class="box-header with-border">
        <!-- <h3 class="box-title">{{ $form->title() }}</h3> -->

        <div class="box-tools">
            {!! $form->renderTools() !!}
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    {!! $form->open() !!}

    <div class="box-body">

        @if(!$tabObj->isEmpty())
            @include('admin::form.tab', compact('tabObj'))
        @else
            <div class="fields-group">

                @if($form->hasRows())
                    @foreach($form->getRows() as $row)
                        {!! $row->render() !!}
                    @endforeach
                @else
                    @foreach($layout->columns() as $column)
                        <div class="col-md-{{ $column->width() }}">
                            @foreach($column->fields() as $field)
                                {!! $field->render() !!}
                            @endforeach
                        </div>
                    @endforeach

                        <!-- マスター同期画面の条件分岐 -->
                        @if(\Request::is('admin/masters/create'))
                            @include('admin::add.master_connect')
                        @endif

                        <!-- マスター同期画面の条件分岐 -->
                        @if(\Request::is('admin/master2s/create'))
                            @include('admin::add.master2_connect')
                        @endif

                @endif
            </div>
        @endif

    </div>

    <!-- /.box-body -->
    <!-- マスター同期画面の条件分岐(非表示) -->
    @if(!\Request::is('admin/masters/create') && !\Request::is('admin/master2s/create'))

        {!! $form->renderFooter() !!}

        @foreach($form->getHiddenFields() as $field)
            {!! $field->render() !!}
        @endforeach

    @endif

<!-- /.box-footer -->
    {!! $form->close() !!}
</div>

