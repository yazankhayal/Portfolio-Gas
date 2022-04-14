@extends('layouts.app')

@section('title')
    {{$lang->Home_Page}}
@endsection

@section('content')

    <main class="main">
        <section class="home-slider">
            <div class="flexslider">
                <ul class="slides">
                    @if($slider->count() != 0)
                        @foreach($slider as $i)
                            <li class="has-overlay">
                                <img src="{{$i->img1()}}" alt="{{$i->name()}}"/>
                                <div class="slider-content">
                                    <div class="container">
                                        <h2> {{$i->name()}} <br> {{$i->sub_name()}} </h2>
                                        <p>{{$i->summary()}}</p>
                                        <a href="{{$i->link}}" class="btn primary-btn"> {{lang_name('Read_More')}} <i
                                                class="fa fa-angle-right"></i> </a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </section>
        <section class="home-company">
            <div class="container">
                <div class="row company">
                    <div class="col-md-5 col-sm-8">
                        {!! $about->summary() !!}
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="company-image">
                            <div class="img-left hover-effect">
                                <img src="{{$about->img1()}}" alt="Company Image"/>
                            </div>
                            <div class="img-right hover-effect">
                                <img src="{{$about->img2()}}" alt="Company Image"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-services">
            <div class="container">
                <div class="row services">
                    @if($featured->count() != 0)
                        @foreach($featured as $r)
                            <div class="col-md-4">
                                <div class="hover-effect">
                                    <img src="{{$r->img()}}" style="height: 240px;" alt="{{$r->name()}}"/>
                                </div>
                                <h4 class="services-title-one subtitle">{{$r->name()}}</h4>
                                <p>
                                    {{$r->sub_name()}}
                                </p>
                                <a href="{{$r->route()}}"
                                   class="btn btn-default btn-normal">{{lang_name('Read_More')}}</a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <section class="home-process">
            <div class="container">
                <div class="row process">
                    {!! $fact->summary() !!}
                </div>
            </div>
        </section>
        <section class="home-stats">
            <div class="container">
                <div class="row stats">
                    {!! $special->summary() !!}
                </div>
            </div>
        </section>
        <section class="home-services-other">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title-services-other title-2">{{lang_name('Services')}}</h2>
                    <h4 class="subtitle-services-other subtitle-2">{{lang_name('Objectively_whiteboard_transparent_models')}}</h4>
                    <div class="spacer-50"></div>
                </div>
                <div class="row services-other">
                    @if($address->count() != 0)
                        @foreach($address as $r)
                            <div class="col-sm-4">
                                <div class="img-box">
                                    <img src="{{$r->img1()}}" alt="{{$r->name()}}"/>
                                </div>
                                <div class="services-info">
                                    <h4 class="services-title-one subtitle">{{$r->name()}}</h4>
                                    <p>{{$r->summary()}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <section class="home-news">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="title-blog color-title"> {{lang_name('LATEST_BLOGS')}} </h2>
                    <h2 class="subtitle-blog title-2"> {{lang_name('Last_blogs_parg')}} </h2>
                    <div class="spacer-50"></div>
                </div>
                <div class="row news">
                    @if($blog->count() != 0)
                        @foreach($blog as $r)
                            <div class="col-md-4">
                                <div class="blog-img-box">
                                    <a class="hover-effect" href="{{$r->route()}}">
                                        <img src="{{$r->img()}}" style="height: 240px;" alt="{{$r->name()}}"/>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="{{$r->route()}}"> {{$r->name()}} </a></h3>
                                    <p>{{$r->tags()}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="blog-btn text-center">
                    <a href="{{route('blog')}}" class="btn btn-primary" role="button">{{lang_name('Blog')}}</a>
                </div>
            </div>
        </section>
        <section class="home-partners">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="subtitle-testimonials title-2"> {{lang_name('OUR_PARTNERS')}} </h2>
                    <div class="spacer-20"></div>
                </div>
                <div class="row partners">
                    <div class="logo-slides slides owl-carousel">
                        @if($gallery->count() != 0)
                            @foreach($gallery as $r)
                                <div class="item">
                                    <div class="partner-images">
                                        <img src="{{$r->img()}}" alt="Partner Image 1">
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
