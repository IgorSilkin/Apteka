</body>
<div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Developed by Silkin Igor</p>
                <p class="pull-right">Minimed Corporation</p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->





<script src="../slider/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".lazy").slick({
            lazyLoad: 'ondemand',
            infinite: true,
            speed: 600,
            fade: true,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 10000,
            pauseOnHover: true,
            pauseOnDotsHover: true,
            responsive: true,
            arrows: true,
            centerMode: true,
            dots: true
        });
        $(".regular").slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000
        });
        $(".regular_new").slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000
        });
    });
</script>

<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).data('id');
            $.post("/cart/addAjax/", {id:id, _token: '{{csrf_token()}}'}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>




</body>
</html>