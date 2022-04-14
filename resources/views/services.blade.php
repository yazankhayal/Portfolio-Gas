@extends('layouts.app')

@section('title')
    {{$lang->Services}}
@endsection

@section('css')
@endsection

@section('content')

    <main class="main">

        @includeIf("layouts.breadcrumb")

        <div class="container">
            <div class="services-content">
                <section class="services-company">
                    <div class="row service-list">
                        @if($items->count() != 0)
                            @foreach($items as $r)
                                <div class="col-md-4 col-sm-4">
                                    <a href="{{$r->route()}}" class="hover-effect">
                                        <img src="{{$r->img()}}" style="height: 240px;" alt="{{$r->name()}}"/>
                                    </a>
                                    <h4 class="subtitle services-title-one">{{$r->name()}}</h4>
                                    <p>{{$r->sub_name()}}</p>
                                    <a class="link" href="{{$r->route()}}"> {{lang_name('Read_More')}} </a>
                                </div>
                            @endforeach
                        @endif


                        <div class="col-md-12 col-sm-12">
                        {{$items->render()}}
                        </div>

                    </div>
                </section>
            </div>
        </div>

    </main>
@endsection
