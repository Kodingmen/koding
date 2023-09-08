@extends("base")

@section("content")
    <div class="block py-4">
        <div class="container">
            <div class="title-main">
                <h3 class="inherit">
                    <span>{{ $item->namevi }}</span>
                </h3>
            </div>
            @if($item->link_video)
            <div id="video-youtube-frame" class="mb-4">
                <div class="ratio ratio-16x9">
                    <iframe src="{{ $item->link_video }}" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
            @endif
            <div class="block-content mb-4">
                {!! html_entity_decode($item->contentvi) !!}
            </div>
            <div class="block-other-content">
                <div class="title-main">
                    <h3 class="inherit">
                        <span>CÁC VIDEO KHÁC</span>
                    </h3>
                </div>
                <div class="otherNewsItems row">
                    @foreach($otherItems as $item)
                        <div class="col-md-4 col-6">
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
                                    <div class="_desc text-split">
                                        {{ $item->descvi }}
                                    </div>
                                    <div class="_more text-center">
                                        <a href="lien-he" class="btn btn-news-more btn-khoahoc-more">
                                            <span>XEM NGAY</span>
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
@endsection