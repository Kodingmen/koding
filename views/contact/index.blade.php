@extends("base")
@section("content")
    <div class="block py-4">
        <div class="container">
            <div class="title-main">
                <h3 class="inherit">
                    <span>LIÊN HỆ</span>
                </h3>
            </div>
            <div class="block-content mb-4">
            <div class="row">
                <div class="col-lg-6 col-12">
                    {!! html_entity_decode($contact_info->contentvi) !!}
                </div>
                <div class="col-lg-6 col-12">
                    <form class="contact-form validation-contact" novalidate method="post" action="" enctype="multipart/form-data">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6 col-12">
                                <input type="text" class="form-control text-sm" id="fullname-contact" name="dataContact[fullname]" placeholder="{{ __('Họ tên') }}" value="{{ old("fullname") }}" required />
                                <div class="invalid-feedback">{{ __('Vui lòng nhập họ tên') }}</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="number" class="form-control text-sm" id="phone-contact" name="dataContact[phone]" placeholder="{{ __('Số điện thoại') }}" value="{{ old("phone") }}" required />
                                <div class="invalid-feedback">{{ __('Vui lòng nhập số điện thoại') }}</div>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6 col-12">
                                <input type="text" class="form-control text-sm" id="address-contact" name="dataContact[address]" placeholder="{{ __('Địa chỉ') }}" value="{{ old("address") }}" required />
                                <div class="invalid-feedback">{{ __('Vui lòng nhập địa chỉ') }}</div>
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="email" class="form-control text-sm" id="email-contact" name="dataContact[email]" placeholder="Email" value="{{ old("email") }}" required />
                                <div class="invalid-feedback">{{ __('Vui lòng nhập email') }}</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control text-sm" id="subject-contact" name="dataContact[subject]" placeholder="{{ __('Chủ đề') }}" value="{{ old("subject") }}" required />
                            <div class="invalid-feedback">{{ __('Vui lòng nhập chủ đề') }}</div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control text-sm" id="content-contact" name="dataContact[content]" placeholder="{{ __('Nội dung') }}" required />{{ old("content") }}</textarea>
                            <div class="invalid-feedback">{{ __('Vui lòng nhập nội dung') }}</div>
                        </div>
                        <div class="mb-3">
                            <input type="file" class="custom-file-input" name="file_attach">
                            <label class="custom-file-label" for="file_attach" title="{{ __('Chọn') }}">{{ __('Đính kèm tập tin') }}</label>
                        </div>
                        <input type="submit" class="btn btn-primary mr-2" value="{{ __('Gửi') }}"/>
                        <input type="reset" class="btn btn-secondary" value="{{ __('Nhập lại') }}" />
                        <input type="hidden" name="submit-contact" value="1">
                        <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">
                    </form>
                </div>
                <div class="col-12 my-4">
                    <div class="ratio ratio-16x9">
                    {!! html_entity_decode($optsetting['coords_iframe']) !!}
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>
@endsection