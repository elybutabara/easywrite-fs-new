<div id="writingPlanModal" class="modal fade global-modal" role="dialog"> {{-- no-header-modal --}}
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h3>Gratis skrivetips</h3>                    
                    <p>
                        Rektor sine 66 beste tips 
                    </p>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="padding: 30px"> {{-- main-form --}}

                <div class="form-container">
                    <div class="form-group">
                        <label>
                            {{ trans('site.first-name') }}
                        </label>

                        <input type="text" name="name" class="form-control"
                               required value="{{old('name')}}">
                    </div>
                    {{-- <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa user-icon"></i></span>
                        </div>
                        <input type="text" name="name" class="form-control no-border-left"
                               placeholder="Fornavn" required value="{{old('name')}}">
                    </div> --}}

                    <div class="form-group">
                        <label>
                            {{ trans('site.front.form.email') }}
                        </label>

                        <input type="email" name="email"
                               class="form-control" required>
                    </div>
                    {{-- <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa email-icon"></i></span>
                        </div>
                        <input type="email" name="email" placeholder="Epost"
                               class="form-control no-border-left" required>
                    </div> --}}

                    <div class="row options-row">
                        <div class="col-md-6">
                            <div class="custom-checkbox">
                                <input type="checkbox" name="terms" id="terms" required>
                                <?php
                                $search_string = [
                                    '[start_link]', '[end_link]'
                                ];
                                $replace_string = [
                                    '<a href="'.route('front.opt-in-terms').'" title="View front page terms">','</a>'
                                ];
                                $terms_link = str_replace($search_string, $replace_string, trans('site.front.accept-terms'))
                                ?>
                                <label for="terms">{!! $terms_link !!}</label>
                            </div>

                            <em>
                                {{ trans('site.front.main-form.note') }}
                            </em>
                        </div>

                        <div class="col-md-6">
                            {!! \Anhskohbo\NoCaptcha\Facades\NoCaptcha::renderJS() !!}
                            {!! \Anhskohbo\NoCaptcha\Facades\NoCaptcha::display(['data-callback' => 'captchaCB']) !!}
                        </div>
                    </div>

                    <input type="hidden" name="captcha" value="">

                    <div class="btn-container text-right" style="margin-top: 20px">
                        <button type="button" class="btn submit-btn w-100" onclick="submitWritingPlan(this)">
                            {{ trans('site.front.main-form.submit-text') }}
                        </button>
                    </div>

                    <div class="alert alert-danger no-bottom-margin mt-3 d-none">
                        <ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<footer id="home-footer-new">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                {{-- <img data-src="https://www.forfatterskolen.no/{{'images-new/home/logo_2.png'}}" class="logo"
                     alt="new footer logo"> --}}
                     <img src="{{asset('images/EasyWrite Logo White.png')}}" class="logo"
                     alt="new footer logo">
            </div>
            <div class="col-md-6">
                <div class="col-sm-4">
                    <p>
                        {{ trans('site.footer.what-we-offer') }}
                    </p>

                    <ul>
                        <li>
                            <a href="{{route('front.course.index')}}" class="nav-link" 
                            title="View courses">
                                {{ trans('site.front.nav.course') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('front.shop-manuscript.index')}}" class="nav-link"
                            title="View manuscripts">
                                {{ trans('site.front.nav.manuscript') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('front.free-manuscript.index') }}" class="nav-link"
                            title="View manuscripts">
                                {{ trans('site.footer.free-feedback') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('front.course.show', 7)}}" class="nav-link"
                            title="Mentormøter">
                                {{ trans('site.footer.mentor-meetings') }}
                            </a>
                        </li>
                        {{-- <li>
                            <a href="https://indiemoon.no" class="nav-link"
                            title="Indiepublisering">
                                {{ trans('site.footer.publishing') }}
                            </a>
                        </li>
                        <li>
                            <a href="https://rskolen.no" class="nav-link"
                            title="Redaktørskolen">
                                {{ trans('site.footer.editor-school') }}
                            </a>
                        </li> --}}
                    </ul>
                </div>
                <div class="col-sm-4">
                    <p>
                        {{ trans('site.footer.information') }}
                    </p>

                    <ul>
                        <li>
                            <a href="{{ route('front.contact-us') }}" class="nav-link"
                            title="Hvem er vi">
                                {{ trans('site.footer.contact-us') }}
                            </a>
                        </li>
                        <li>
                            <a href="/terms/all" class="nav-link"
                            title="Vilkår og betingelser">
                                {{ trans('site.footer.terms') }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <p>
                        {{ trans('site.footer.social-media') }}
                    </p>

                    <ul>
                        <li>
                            <a class="nav-link" href="https://www.facebook.com/profile.php?id=100063692359984" target="_blank">
                                {{ trans('site.footer.facebook') }}
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="https://www.instagram.com/easywrite_sverige/" target="_blank">
                                {{ trans('site.footer.instagram') }}
                            </a>
                        </li>
                        {{-- <li>
                            <a class="nav-link" href="https://twitter.com/Forfatterrektor" target="_blank">
                                {{ trans('site.footer.twitter') }}
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="https://no.pinterest.com/forfatterskolen_norge/" target="_blank">
                                {{ trans('site.footer.pinterest') }}
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div> <!-- end row first-row -->

        <div class="clearfix"></div>

        <div class="row mt-5">
            <div class="col-md-3">
                <p>{{ trans('site.footer.address') }}</p>

                <h2>
                    {{ trans('site.footer.address-value') }}
                </h2>
            </div>
            <div class="col-md-3">
                <p>
                    {{ trans('site.footer.email') }}
                </p>

                <h2>
                    {{ trans('site.footer.email-value') }}
                </h2>
            </div>
            <div class="col-md-3">
                <p>
                    {{ trans('site.footer.telephone') }}
                </p>

                <h2>
                    {{ trans('site.footer.telephone-value') }}
                </h2>
            </div>
            <div class="col-md-3 text-right justify-content-center d-flex">
                <button class="btn site-btn-global" data-toggle="modal" data-target="#writingPlanModal">
                    {{ trans('site.footer.sign-me-up') }}
                </button>
            </div>
        </div> <!-- end row -->

        <div class="row footer-bottom pb-0 mt-5">
            <div class="col-md-12">
                <p>
                    {!! trans('site.footer.copyright') !!}
                </p>
            </div>
        </div>
    </div>
</footer>