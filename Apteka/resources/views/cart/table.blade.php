@if ($products)
<table class="table-bordered table-striped table">
    <tr>
        <th class="text-center">Название</th>
        <th class="text-center">Стомость, руб</th>
        <th class="text-center">Количество, шт</th>
        <th class="text-center">Общая стомость, руб</th>
        <th class="text-center">Удалить</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td class="text-center">
                <a href="/product/{{$product['product']['id']}}">
                    {{$product['product']['title']}}
                </a>
            </td>
            <td class="text-center">{{$product['product']['price']}}</td>
            <td class="text-center">{{$product['count']}}</td>
            <td class="text-center">{{$product['count'] * $product['product']['price']}}</td>
            <td class="text-center">
                <a class="btn btn-default delete-product-to-cart" data-id="{{$product['product']['id']}}" href="/cart">
                    <i class="fa fa-times"></i>
                </a>
            </td>
        </tr>
    @endforeach
    <tr>
        <td colspan="4">Общая стоимость, Руб:</td>
        <td class="text-center">{{$totalPrice}}</td>
    </tr>

</table>
<div class="pull-left"><a class="btn btn-default checkout" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a></div>
<div class="pull-right"><a class="btn btn-default checkout" href="/cart/clear"> Очистить корзину</a></div>
@else
    <p>Корзина пуста</p>
    <a class="btn btn-default checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
@endif

<script>
    $(document).ready(function(){
        $(".delete-product-to-cart").click(function () {
            var id = $(this).data('id');
            $.post("/cart/delete/", {id:id, _token: '{{csrf_token()}}'},
                function (data) {
                    $("#cart-table").html(data);
                });
            $.post("/cart/items_in_cart/", {_token: '{{csrf_token()}}'}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>