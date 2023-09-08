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
        </div>
    </div>
@endsection