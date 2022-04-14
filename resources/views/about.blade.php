@extends('layouts.app')

@section('title')
    {{$lang->About}}
@endsection

@section('content')
    <main class="main">

        @includeIf("layouts.breadcrumb")

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
                <div class="row company">
                {!! $how_work->summary() !!}
                </div>
            </div>
        </section>
    </main>
@endsection
