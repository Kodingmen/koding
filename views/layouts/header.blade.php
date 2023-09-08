<div id="top">
    <div class="container d-none d-lg-block">
        <div class="w-100 d-flex flex-wrap justify-content-center justify-content-lg-between align-items-center">
            <div id="logo">
                <a href="/">
                    <img src="thumbs/110x100x1/upload/photo/{{ $logo->photo }}" alt="logo" class="img-fluid">
                </a>
            </div>
            <div id="menu">
                <ul class="list-unstyled d-flex justify-content-end mb-0">
                    <li @if($source == 'index') class="active" @endif>
                        <a href="/"><span>GIỚI THIỆU</span></a>
                    </li>
                    <li @if($com == 'kinh-nghiem') class="active" @endif>
                        <a href="kinh-nghiem"><span>KINH NGHIỆM KINH DOANH</span></a>
                    </li>
                    <li @if($com == 'khoa-hoc') class="active" @endif>
                        <a href="khoa-hoc"><span>KHÓA HỌC</span></a>
                        <ul>
                            @foreach($khoahocList as $list)
                                <li>
                                    <a href="{{ $list->slugvi }}"><span>{{ $list->namevi }}</span></a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li @if($com == 'video') class="active" @endif>
                        <a href="video"><span>VIDEO</span></a>
                        <ul>
                            @foreach($videoList as $list)
                                <li>
                                    <a href="{{ $list->slugvi }}"><span>{{ $list->namevi }}</span></a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="kien-thuc"><span>KIẾN THỨC</span></a>
                        <ul>
                            @foreach($kienthucList as $list)
                                <li>
                                    <a href="{{ $list->slugvi }}"><span>{{ $list->namevi }}</span></a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="kenh-ban-hang"><span>KÊNH BÁN HÀNG</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container d-flex d-lg-none justify-content-between align-items-center">
        <div id="logo">
            <a href="/">
                <img src="thumbs/110x100x1/upload/photo/{{ $logo->photo }}" alt="logo" class="img-fluid">
            </a>
        </div>
        <a href="#menu-mobile" class="d-block text-black">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>
<div id="menu-mobile" class="d-lg-none d-block">
    <ul>
        <li @if($source == 'index') class="active" @endif>
            <a href="/"><span>GIỚI THIỆU</span></a>
        </li>
        <li @if($com == 'kinh-nghiem') class="active" @endif>
            <a href="kinh-nghiem"><span>KINH NGHIỆM KINH DOANH</span></a>
        </li>
        <li @if($com == 'khoa-hoc') class="active" @endif>
            <a href="khoa-hoc"><span>KHÓA HỌC</span></a>
        </li>
        <li @if($com == 'video') class="active" @endif>
            <a href="video"><span>VIDEO</span></a>
        </li>
        <li>
            <a href="kien-thuc"><span>KIẾN THỨC</span></a>
        </li>
        <li>
            <a href="kenh-ban-hang"><span>KÊNH BÁN HÀNG</span></a>
        </li>
    </ul>
</div>