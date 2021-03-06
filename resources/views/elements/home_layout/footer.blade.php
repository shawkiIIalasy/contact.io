<footer class="mt-lg-5">
    <div class="container px-lg-5 px-3">
        <div class="row">
            <div class="col-lg-3">
                <div class="">
                    <h3>{{__('About Us')}}</h3>
                </div>
                <div class="">
                    <p>{{__('Is a StartUp Company aimed at making life more sophisticated and easy by employing artificial
                        intelligence techniques and creative industry')}}.</p>
                    <ul class="footer-social text-left">

                        <li class="mx-3">
                            <a href="#">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="mx-3">
                            <a href="#">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li class="mx-3">
                            <a href="#">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </li>
                        <li class="mx-3">
                            <a href="#">
                                <span class="fa fa-linkedin"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="">
                    <h3>{{__('Get in touch')}}</h3>
                </div>
                <div class="">
                    <h4>{{__('Location')}}:</h4>
                    <p> {{__('Amman, Jordan')}}.</p>
                    <div class="phone">
                        <h4>{{__('Contact')}}:</h4>
                        <p><i class="fa fa-phone"></i>&nbsp;{{__('Phone')}}: +00962795059264</p>
                        <p><i class="fa fa-envelope"></i>&nbsp;{{__('Email')}}:
                            <a href="mailto:info@Nextia.com">info@Nextia.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-title">
                    <h3>{{__('Quick Links')}}</h3>
                </div>
                <ul class="links">
                    <li>
                        <a href="/">{{__('Home')}}</a>
                    </li>
                    <li>
                        <a href="/services">{{__('Installations')}}</a>
                    </li>
                    <li>
                        <a href="/services">{{__('Services')}}</a>
                    </li>
                    <li>
                        <a href="{{route('contact-us')}}">{{__('Contact Us')}}</a>
                    </li>
                    <li>
                        <a href="{{route('about-us')}}">{{__('About Us')}}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3">
                <div class="">
                    <h3>{{__('Sign up for your offers')}}</h3>
                </div>
                <div class="">
                    <p>{{__('By subscribing to our mailing list you will always get latest news and updates from us')}}
                        .</p>
                    <form action="#" method="post">
                        <input class="form-control" type="email" name="Email" placeholder="{{__('Enter your email...')}}"
                               required="">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="mt-4 border-top pt-lg-4">
            <p class="copy-right text-center">© 2019 - {{date('Y')}} {{env('APP_NAME')}}
                . {{__('All Rights Reserved | Design &amp; Program by')}}
                <a href="http://nextia.herokuapp.com/"> {{__('Shawki Alasy')}} </a>
            </p>
        </div>
    </div>
</footer>
