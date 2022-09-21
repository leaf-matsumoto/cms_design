<!-- オーダー管理 -->
@if(\Request::is('admin/order-mgts/*'))
    @include('admin::add.order_list')
@endif