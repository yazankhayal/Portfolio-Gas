@extends('layouts.app')

@section('title')
    {{$lang->Contact}}
@endsection

@section('css')
    <style>
        iframe {
            width: 100%;
        }

        .contact-desc p {
            margin-top: 10px;
        }
    </style>
@endsection

@section('content')

    <main class="main">

        @includeIf("layouts.breadcrumb")

        <div class="container">
            <section class="contact-form">
                <div class="row form">
                    <div class="col-md-6">
                        <h2 class="title-2"> {{lang_name('Contact_Us')}} </h2>

                        <form
                            class="form well-form contact_post ps-form--contact ajaxForm ho-form contact-form"
                            method="post"
                            action="{{route('contact_post')}}"
                            data-name="contact_post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input class="cls form-control " type="text" id="f_name" name="f_name"
                                       placeholder="{{$lang->f_Name}}">
                            </div>
                            <div class="form-group">
                                <input class="cls form-control" type="text" id="l_name" name="l_name"
                                       placeholder="{{$lang->l_Name}}">
                            </div>
                            <div class="form-group">
                                <input class="cls form-control" type="text" id="phone" name="phone" placeholder="{{$lang->Phone}}">
                            </div>
                            <div class="form-group">
                                <input class=" cls form-control" type="email" id="email" name="email" placeholder="{{$lang->Email}}">
                            </div>
                            <div class="form-group">
                                    <textarea class=" cls form-control" id="summary" name="summary" rows="6"
                                              placeholder="{{$lang->Comments}}"></textarea>
                            </div>
                            <button type="submit" class="btn btn-block btn-warning">{{lang_name('Send_Message')}}
                            </button>
                        </form>
                    </div>
                    <div class="col-md-6 contact-map">
                        <h2 class="title-2"> {{lang_name('View_Map')}} </h2>
                        {!! hp_contact()->iframe !!}
                    </div>
                </div>
            </section>
        </div>

    </main>
@endsection
