<div class="block py-5">
    <div class="container">
        <div class="title-main my-5">
            <h3 class="inherit">
                <span>CHIA SẺ SỰ NGHIỆP</span>
            </h3>
        </div>
        <div class="block-content">
            <div class="slick slick-sunghiep">
                    @foreach($sunghiep as $item)
                        <div class="px-2 item-sunghiep">
                            <div class="news-item hover">
                                <div class="_image image mb-3">
                                    <a href="{{ $item->slugvi }}">
                                        <img class="img-fluid"
                                             src="thumbs/370x280x1/upload/news/{{ $item->photo }}"
                                             alt="{{ $item->namevi }}"
                                             onerror="src='thumbs/370x280x1/assets/images/noimage.png'"
                                        >
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="_title">
                                        <a href="{{ $item->slugvi }}" class="inherit text-decoration-none">
                                            <strong>{{ $item->namevi }}</strong>
                                        </a>
                                    </div>
                                    <div class="_desc text-truncate text-truncate-3">
                                        {{ $item->descvi }}
                                    </div>
                                    <div class="_more">
                                        <a href="{{ $item->slugvi }}" class="link-more">
                                            <span>Xem thêm</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
