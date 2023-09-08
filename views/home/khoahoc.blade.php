<div class="block py-5">
    <div class="container">
        <div class="title-main position-relative">
            <h3 class="inherit">
                <span>KHÓA HỌC</span>
            </h3>
            <a href="khoa-hoc" class="title-more">Xem tất cả</a>
        </div>
        <div class="block-content">
            <div class="slick slick-khoahoc">
                    @foreach($khoahoc as $item)
                        <div class="px-2">
                            @include("home.items.news", ['item' => $item])
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
