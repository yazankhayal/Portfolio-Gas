
<footer>
    <div class="footer">
        <div class="container">
            <div class="row pre-footer">
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title">{{lang_name('Address')}}</h4>
                            <p>{{hp_contact()->address}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title">{{lang_name('Call_Us_Now')}}</h4>
                            <p>{{hp_contact()->phone}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title">{{lang_name('Email')}}</h4>
                            <p>{{hp_contact()->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row widgets">
                <div class="col-md-4 col-sm-6">
                    <div class="about-txt widget">
                        <img src="{{setting()->avatar1()}}" alt="{{setting()->name()}}"/>
                        <p>{{setting()->summary()}}</p>
                        <div class="widgets-social">
                            @if(hp_contact()->facebook)
                                <a href="{{hp_contact()->facebook}}"><i class="fa fa-facebook"
                                                                        aria-hidden="true"></i></a>
                            @endif
                            @if(hp_contact()->twitter)
                                <a href="{{hp_contact()->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            @endif
                            @if(hp_contact()->instagram)
                                <a href="{{hp_contact()->instagram}}"><i class="fa fa-instagram"
                                                                         aria-hidden="true"></i></a>
                            @endif
                            @if(hp_contact()->pinterest)
                                <a href="{{hp_contact()->facebook}}"><i class="fa fa-youtube"
                                                                        aria-hidden="true"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="quick-links widget">
                        <h2 class="widget-title">{{lang_name('FOOTER_1')}}</h2>
                        <ul>
                            <li><a href="{{route('index')}}"> {{lang_name('Home_Page')}} </a></li>
                            <li><a href="{{route('about')}}">  {{lang_name('About')}} </a></li>
                            <li><a href="{{route('blog')}}"> {{lang_name('Blog')}} </a></li>
                            <li><a href="{{route('contact')}}"> {{lang_name('Contact')}} </a></li>
                        </ul>
                    </div>
                </div>
                <div class="spacer-50 visible-sm"></div>
                <div class="col-md-3 col-sm-6">
                    <div class="our-services widget">
                        <h2 class="widget-title">{{lang_name('FOOTER_2')}}</h2>
                        <ul>
                            @if(pages_footer()->count() != 0)
                                @foreach(pages_footer() as $r)
                                    <li><a href="{{$r->route()}}">{{$r->name()}}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="newsletter widget">
                        <h2 class="widget-title">{{lang_name('Our_Newsletter')}}</h2>
                        <p>{{lang_name('Subscribe_desc')}}</p>
                        <form method="post" action="{{route('newsletter')}}" class="ajaxForm newsletter"
                              data-name="newsletter">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="{{lang_name('Email')}}"
                                       class="form-control cls" title="{{lang_name('Email')}}">
                            </div>
                            <button type="submit" class="btn btn-block">{{lang_name('Subscribe')}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row copyright-bar">
                <div class="col-md-6">
                    <p>&copy; {{lang_name('Copy_Right')}} {{date('Y')}} - <a
                            href="{{route('index')}}">{{setting()->name()}}</a></p>
                </div>
                <div class="col-md-6 text-right">
                    <p>
                        @if(pages_footer1()->count() != 0)
                            @foreach(pages_footer1() as $r)
                                <a href="{{$r->route()}}">{{$r->name()}}</a>
                            @endforeach
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#0" class="cd-top"> {{lang_name('Top')}} </a>
