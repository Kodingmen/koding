@php
    /** @var \Illuminate\Support\Collection $kienthuc */
    $item = $kienthuc->pop(1);


@endphp
<div class="block py-4">
    <div class="container">
        <div class="title-main position-relative">
            <h3 class="inherit">
                <span>CHIA SẺ KIẾN THỨC</span>
            </h3>
            <a href="kien-thuc" class="title-more">Xem tất cả</a>
        </div>
        <div class="block-content">
            <div class="row">
                <div class="col-md-6 col-12 d-md-block d-none">
                    <div class="large-news-item news-item hover mb-3">
                        <div class="image mb-3">
                            <a href="{{ $item->slugvi }}">
                                <img class="img-fluid"
                                     src="thumbs/590x385x1/upload/news/{{ $item->photo }}"
                                     alt="{{ $item->namevi }}"
                                     onerror="src='thumbs/590x385x1/assets/images/noimage.png'"
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
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        @foreach($kienthuc as $item)
                            <div class="col-12">
                                <div class="small-news-item news-item hover d-flex flex-wrap justify-content-between  mb-3">
                                    <div class="image">
                                        <a href="{{ $item->slugvi }}">
                                            <img class="img-fluid"
                                                 src="thumbs/190x120x1/upload/news/{{ $item->photo }}"
                                                 alt="{{ $item->namevi }}"
                                                 onerror="src='thumbs/190x120x1/assets/images/noimage.png'"
                                            >
                                        </a>
                                    </div>
                                    <div class="content flex-grow-1 ps-2">
                                        <div class="_title">
                                            <a href="{{ $item->slugvi }}" class="inherit text-decoration-none">
                                                <strong>{{ $item->namevi }}</strong>
                                            </a>
                                        </div>
                                        <div class="_desc">
                                            {{ $item->descvi }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
