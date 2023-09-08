@extends("base")

@section("content")
    @if($slides->isNotEmpty())
        @include("home.slide", ['slides' => $slides])
    @endif
    @if($khoahoc->isNotEmpty())
        @include("home.khoahoc", ['khoahoc' => $khoahoc])
    @endif
    @if($kienthuc && $kienthuc->isNotEmpty())
        @include("home.chiase", ['kienthuc' => $kienthuc])
    @endif

    @if($lastestNews && $lastestNews->isNotEmpty())
        @include("home.lastestNews", ['lastestNews' => $lastestNews])
    @endif

    @if($sunghiep && $sunghiep->isNotEmpty())
        @include("home.sunghiep", ['sunghiep' => $sunghiep])
    @endif
@endsection