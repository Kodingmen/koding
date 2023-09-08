{{--<div id="slider">--}}
{{--    <div class="slick slick-slider">--}}
{{--        @foreach($slides as $slide)--}}
{{--            <div>--}}
{{--                <a class="slideshow-image" href="{{$slide->link}}" tarrget="_blank" title="{{$slide->namevi}}">--}}
{{--                    <img class="img-fluid" src="thumbs/1366x490x1/upload/photo/{{ $slide->photo }}" alt="{{$slide->namevi}}">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--</div>--}}
@if($staticGioiThieu)
<div id="gioithieu">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="__content">
                    <div class="__wrap">
                        <div class="__wrap-content">
                            {!! html_entity_decode($staticGioiThieu->descvi) !!}
                        </div>
                        <div class="position-relative">
                            <a href="gioi-thieu" class="title-more text-black">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 position-relative">
                <div class="__image">
                    <img class="img-fluid position-absolute bottom-0" src="thumbs/300x445x1/upload/news/{{ $staticGioiThieu->photo }}" alt="{{$staticGioiThieu->namevi ?? ''}}">
                </div>
            </div>
        </div>
    </div>
</div>
@endif