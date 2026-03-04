<footer class="footer section gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <div class="logo mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="" class="navbar-logo">
                    </div>
                    <p>@lang('messages.footer_paragraph')</p>

                    <ul class="list-inline footer-socials mt-4">
                        <li class="list-inline-item"><a href=""><i class="icofont-facebook"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="icofont-twitter"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="icofont-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="icofont-instagram"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="icofont-youtube-play"></i></a></li>
                        <li class="list-inline-item"><a href="https://wa.me/+255715303510" target="_blank"><i
                                    class="icofont-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">@lang('messages.service')</h4>
                    <div class="divider mb-4"></div>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="{{ url('/service') }}">Novage Nutrition</a></li>
                        <li><a href="{{ url('/service') }}">Novage Move</a></li>
                        <li><a href="{{ url('/service') }}">Novage Wellness</a></li>
                        <li><a href="{{ url('/service') }}">Novage Connect</a></li>
                        <li><a href="{{ url('/service') }}">Novage Mindfulness & Counselling</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">@lang('messages.support')</h4>
                    <div class="divider mb-4"></div>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="">@lang('messages.terms_conditions')</a></li>
                        <li><a href="">@lang('messages.privacy_policy')</a></li>
                        <li><a href="">@lang('messages.company_support')</a></li>
                        <li><a href="{{ url('/faq') }}">@lang('messages.faq')</a></li>
                        <li><a href="">@lang('messages.company_licence')</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget widget-contact mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">@lang('messages.get_in_touch')</h4>
                    <div class="divider mb-4"></div>

                    <div class="footer-contact-block mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-email mr-3"></i>
                            <span class="h6 mb-0">@lang('messages.support_available')</span>
                        </div>
                        <h4 class="mt-2"><a href="mailto:support@novagecare.com">support@novagecare.com</a></h4>
                    </div>

                    <div class="footer-contact-block">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-support mr-3"></i>
                            <span class="h6 mb-0">Mon to Sun : 08:30 - 18:00</span>
                        </div>
                        <h4 class="mt-2"><a href="tel:+255715303510">+255-7153-03510</a></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-btm py-4 mt-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="copyright">
                        &copy; @lang('messages.copyright_reserved_to') <span class="text-color">NovageCare</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                        <form action="#" class="subscribe">
                            <input type="text" class="form-control" placeholder="@lang('messages.subscribe_placeholder')">
                            <a type="submit" href="mailto:support@novagecare.com"
                                class="btn btn-main-2 btn-round-full">@lang('messages.subscribe')</a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <a class="backtop js-scroll-trigger" href="#top">
                        <i class="icofont-long-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
