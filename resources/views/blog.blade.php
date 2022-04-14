@extends('layouts.app')

@section('title')
    {{$lang->Blog}}
@endsection

@section('content')

    <main class="main">
        @includeIf("layouts.breadcrumb")

        <div class="container">
            <div class="blog-grid">
                <section class="blog-services">
                    <div class="row news">
                        @includeIf("data.blog")
                    </div>
                </section>
            </div>
        </div>

    </main>

@endsection
