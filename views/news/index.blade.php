@extends("base")

@section("content")
    <div class="block py-4">
        <div class="container">
            <div class="title-main">
                <h3 class="inherit">
                    <span>{{ $titleMain }}</span>
                </h3>
            </div>
            <div class="block-content mb-4">
                <div class="row">
                    @foreach($items as $item)
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

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    {{ $items->links() }}
                </div>
            </div>

        </div>
    </div>
@endsection