<div class="block py-5 bg-grey">
    <div class="container">
        <div class="title-main my-5">
            <h3 class="inherit">
                <span>BÀI VIẾT MỚI NHẤT</span>
            </h3>
        </div>
        <div class="block-content">
                <div class="slick slick-lastestNews">
                    <!-- Slides -->
                    @foreach($lastestNews as $item)
                        <div class="px-2">
                            <div class="news-item hover">
                                <div class="image mb-3">
                                    <a href="{{ $item->slugvi }}">
                                        <img class="img-fluid"
                                             src="thumbs/390x280x2/upload/news/{{ $item->photo }}"
                                             alt="{{ $item->namevi }}"
                                             onerror="src='thumbs/390x280x1/assets/images/noimage.png'"
                                        >
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="_title">
                                        <a href="{{ $item->slugvi }}" class="inherit text-decoration-none">
                                            <strong>{{ $item->namevi }}</strong>
                                        </a>
                                    </div>
                                    <div class="_desc">
                                        {{ $item->descvi }}
                                    </div>
                                    <div class="_more text-center">
                                        <a href="{{ $item->slugvi }}" class="btn btn-news-more btn-khoahoc-more">
                                            <span>ĐỌC NGAY</span>
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
