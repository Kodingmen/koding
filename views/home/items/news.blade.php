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
            <a href="lien-he" class="btn btn-news-more btn-khoahoc-more">
                <span>LIÊN HỆ NGAY</span>
            </a>
        </div>
    </div>
</div>