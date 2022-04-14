<header>
    <div class="header-area">
        <div class="row logo-top-info">
            <div class="container">
                <div class="col-md-3 logo">
                    <a href="{{route('index')}}">
                        <img src="{{setting()->avatar()}}" alt="{{setting()->name()}}"/>
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only"> Main Menu </span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="col-md-9 top-info-social">
                    <div class="pull-right">
                        <div class="top-info">
                            <div class="call">
                                <h3> {{lang_name('Call_Us_Now')}} </h3>
                                <p>{{hp_contact()->phone}}</p>
                            </div>
                            <div class="email">
                                <h3>  {{lang_name('Email')}} </h3>
                                <p>{{hp_contact()->email}}</p>
                            </div>
                        </div>
                        <div class="social">
                            <ul class="social-icons">
                                @if(hp_contact()->facebook)
                                    <li><a href="{{hp_contact()->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                @endif
                                @if(hp_contact()->twitter)
                                    <li><a href="{{hp_contact()->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                @endif
                                @if(hp_contact()->instagram)
                                    <li><a href="{{hp_contact()->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                @endif
                                @if(hp_contact()->pinterest)
                                    <li><a href="{{hp_contact()->facebook}}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="navbar" class="collapse navbar-collapse main-menu">
            <div class="container">
                <ul class="main-menu">
                    <li class="active"><a href="{{route('index')}}"> {{lang_name('Home_Page')}} </a></li>
                    <li><a href="{{route('about')}}">  {{lang_name('About')}} </a></li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"> {{lang_name('Services')}}
                            <i class="fa fa-chevron-down dropdown-toggle"> </i> </a>
                        <ul>
                            <li><a href="{{route('services')}}"> {{lang_name('All_Services')}} </a></li>
                            @if(category()->count() != 0)
                                @foreach(category() as $r)
                                    <li><a href="{{$r->route()}}">{{$r->name()}}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                    <li><a href="{{route('blog')}}"> {{lang_name('Blog')}} </a></li>
                    <li><a href="{{route('contact')}}"> {{lang_name('Contact')}} </a></li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown">
                            {{$select_lan->name}}
                            <i class="fa fa-chevron-down dropdown-toggle"> </i> </a>
                        <ul>
                            @if($langauges->count() > 0)
                                @foreach($langauges as $lang222)
                                    <li><a href="{{route('change_language',['lang'=>$lang222->dir])}}">{{$lang222->name}}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
