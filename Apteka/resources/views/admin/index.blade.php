@include('layouts.header_admin')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h3>Возможности</h3>
                <div class="panel-group operations">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <ul class="panel-title">
                                    <li><a href="/admin/product">Управление товарами</a></li>
                                    <li><a href="/admin/category">Управление категориями</a></li>
                                    <li><a href="/admin/order">Управление заказами</a></li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('layouts.footer_admin')