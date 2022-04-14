<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>{{setting()->name()}}-@yield('title')</title>

@yield("seo")

<meta charset="utf-8">
<link rel="shortcut icon" href="{{path().setting()->fav}}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{path().setting()->fav}}">

<link href="{{path()}}files/home/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{path()}}files/home/fonts/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="{{path()}}files/home/css/flexslider.css">
<link rel="stylesheet" href="{{path()}}files/home/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{path()}}files/home/css/owl.theme.min.css">
<link href="{{path()}}files/home/css/style.css" rel="stylesheet">

@if(app()->getLocale() == "ar")
    <link rel="stylesheet" href="{{path()}}files/home/css/rtl.css">
@endif

<link rel="stylesheet" href="{{path()}}css/toastr.min.css">
<link rel="stylesheet" href="{{path()}}nprogress-master/nprogress.css"/>
<style>
    .toast, #toast-container {
        z-index: 9999999999999999;
    }
</style>
@if(scripts())
    @if(scripts()->css)
        {!! scripts()->css !!}
    @endif
@endif
