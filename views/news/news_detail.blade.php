@extends("base")

@section("content")
    <div class="block py-4">
        <div class="container">
            <div class="title-main">
                <h3 class="inherit">
                    <span>{{ $item->namevi ?? $titleMain }}</span>
                </h3>
            </div>
            <div class="block-content mb-4">
                {!! html_entity_decode($item->contentvi) !!}
            </div>
            <div class="block-other-content">
                <div class="title-main">
                    <h3 class="inherit">
                        <span>CÁC BÀI VIẾT KHÁC</span>
                    </h3>
                </div>
                <ul class="otherNewsItems list-unstyled p-0">
                    @foreach($otherItems as $other)
                        <li class="pb-2 mb-2 border-bottom hover text-effect">
                            <a href="{{ $other->slugvi }}" class="text-decoration-none ">
                                <span><i class="fa fs-6 fa-0 fa-chevron-right me-1"></i></span>
                                <span>{{ $other->namevi }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection