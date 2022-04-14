@extends('layouts.app')

@section('title')
    {{$item->name()}}
@endsection


@section('content')

    <main class="main">

        @includeIf("layouts.breadcrumb")

        <div class="container">
            <div class="blog-info">
                <section class="blog-single">
                    <div class="blog-slide">
                        <ul class="slides">
                            <li>
                                <img class="w-100" src="{{$item->img()}}" style="width: 100%;"
                                     alt="{{$item->name()}}"/>
                            </li>
                        </ul>
                    </div>
                    <div class="single-post">
                        {!! $item->summary() !!}
                      </div>
                </section>
            </div>
        </div>

    </main>

@endsection
