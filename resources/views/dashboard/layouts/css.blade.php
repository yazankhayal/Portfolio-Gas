<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="Latest updates and statistic charts">
<link rel="shortcut icon" href="{{url('/').$get_url_photo.$setting->fav}}">
<title>
    @if(app()->getLocale() == $select_lan_choice->dir)
        {{$setting->name}}
    @else
        {{$setting->Translate($select_lan->id) != null ? $setting->Translate($select_lan->id)->name : ""}}
    @endif
    - @yield('title')</title>
<!-- BOOTSTRAP CSS -->

@php
   $selctor = "ltr";
    if(app()->getLocale() == "ar"){
        $selctor = "rtl";
    }
@endphp

<!-- STYLE CSS -->
<link href="{{$path}}files/dash_board/{{$selctor}}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="{{$path}}files/dash_board/{{$selctor}}/css/style.css" rel="stylesheet"/>
<link href="{{$path}}files/dash_board/{{$selctor}}/css/skin-modes.css" rel="stylesheet"/>

<!-- SIDE-MENU CSS -->
<link href="{{$path}}files/dash_board/{{$selctor}}/plugins/sidemenu/sidemenu.css" rel="stylesheet">

<!-- sweetalert -->
<link href="{{$path}}files/dash_board/{{$selctor}}/plugins/sweet-alert/sweetalert.css" rel="stylesheet">

<!--C3 CHARTS CSS -->
<link href="{{$path}}files/dash_board/{{$selctor}}/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

<!-- CUSTOM SCROLL BAR CSS-->
<link href="{{$path}}files/dash_board/{{$selctor}}/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

<!--- FONT-ICONS CSS -->
<link href="{{$path}}files/dash_board/{{$selctor}}/css/icons.css" rel="stylesheet"/>

<!-- SIDEBAR CSS -->
<link href="{{$path}}files/dash_board/{{$selctor}}/plugins/sidebar/sidebar.css" rel="stylesheet">

<!-- COLOR SKIN CSS -->
<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{$path}}files/dash_board/{{$selctor}}/colors/color1.css" />


<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{$path.'css/toastr.min.css'}}">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{$path.'nprogress-master/nprogress.css'}}"/>

<style>
    .btn .fa {
        color: #Fff !important;
    }
    .tox-notifications-container{
        display:none;
    }
    /***** whatsapp_fixed ********/
    #whatsapp_fixed {
        position: fixed;
        bottom: 45px;
        right: 35px;
        z-index: 99;
    }

    .img_usres {
        width: 150px;
        height:110px;;
    }

    .disabled {
        pointer-events: none;
    }

    .img_flag {
        width: 25px;
        height: 18px;
        margin-right: 5px;
    }
    #whatsapp_fixed:hover {
        -webkit-animation: wiggle 0.1s linear infinite;
        animation: wiggle 0.1s linear infinite;
    }
    #whatsapp_fixed a {
        display: block;
        background: #f72f4e;
        color: #fff;
        font-size: 25px;
        width: 50px;
        height: 50px;
        text-align: center;
        line-height: 50px;
        border-radius: 50%;
        overflow: hidden;
        position: relative;
    }
    #whatsapp_fixed .light {
        width: 70px;
        height: 70px;
        position: absolute;
        background: #ff93a4;
        border-radius: 50%;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        z-index: -1;
        -webkit-animation: lightning 1.5s linear infinite;
        animation: lightning 1.5s linear infinite;
    }
    a.disabled {
        pointer-events: none;
        cursor: default;
    }
</style>
@if(app()->getLocale() == $select_lan->dir)
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <style>
        *, body, html, p, h1, h2, h3, h4, h6, h5, a, input, button, .btn{
            font-family: 'Tajawal', sans-serif;
    </style>
@endif