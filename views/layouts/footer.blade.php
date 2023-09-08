<footer class="bg-footer">
    <div id="footer" class="py-5">
        <div class="container">
            <a href="/">
                <img src="thumbs/110x100x1/upload/photo/{{ $logo->photo }}" alt="logo" class="img-fluid">
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h2 class="h2-title mb-3">
                        THÔNG TIN LIÊN HỆ
                    </h2>
                    <div class="ft-info mb-3">
                        <span class="me-2"><i class="fa fa-phone"></i></span>
                        <span>
                            {{ $optsetting->get("phone") }}
                        </span>
                    </div>
                    <div class="ft-info mb-3">
                        <span class="me-2"><i class="fa fa-envelope"></i></span>
                        <span>
                            {{ $optsetting->get("email") }}
                        </span>
                    </div>
                    <div class="ft-info mb-3">
                        <span class="me-2"><i class="fa fa-globe"></i></span>
                        <span>
                            {{ $optsetting->get("website") }}
                        </span>
                    </div>
                    <h2 class="h2-title">
                        MẠNG XÃ HỘI
                    </h2>
                    <ul class="list-unstyled d-flex">
                        <li>
                            <a target="_blank" href="{{ $optsetting->get("youtube") }}"><img src="/assets/images/images/mxh_youtube.png" alt="mxh_youtube"></a>
                        </li>
                        <li class="mx-3">
                            <a target="_blank" href="{{ $optsetting->get("fanpage") }}"><img src="/assets/images/images/mxh_fb.png" alt="mxh_fb"></a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $optsetting->get("google") }}"><img src="/assets/images/images/mxh_gg.png" alt="mxh_gg"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-12">
                    <h2 class="h2-title mb-3">
                        CHƯƠNG TRÌNH ĐÀO TẠO
                    </h2>
                    <ul class="ft-list list-unstyled p-0">
                        @foreach($khoahocList as $item)
                            <li>
                                <a href="{{ $item->slugvi }}">
                                    {{ $item->namevi }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4 col-12">
                    <h2 class="h2-title">
                        KIẾN THỨC
                    </h2>
                    <ul class="ft-list list-unstyled p-0">
                        @foreach($kienthucList ?? [] as $item)
                            <li>
                                <a href="{{ $item->slugvi }}">
                                    {{ $item->namevi }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="copyright" class="py-4">
        <div class="container text-center">
            2023 Copyright © {{ $setting->namevi }}. All rights reserved.Design by TLTVietnam.vn
        </div>
    </div>


</footer>