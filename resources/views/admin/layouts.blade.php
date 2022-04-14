<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @if(app()->getLocale() == $select_lan_choice->dir)
            {{$setting->name}}
        @else
            {{$setting->Translate($select_lan->id) != null ? $setting->Translate($select_lan->id)->name : ""}}
        @endif
        -
        @yield('title')
    </title>
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{url('/').$get_url_photo}}login_style/assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="{{url('/').$get_url_photo}}login_style/assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="{{url('/').$get_url_photo}}login_style/assets/fonts/flaticon/font/flaticon.css">
    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{url('/').$get_url_photo}}login_style/assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet"
          href="{{url('/').$get_url_photo}}login_style/assets/css/skins/default.css">
</head>
<body>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

@yield('content')

<!-- Whatsapp -->

<!-- External JS libraries -->
<script src="{{url('/').$get_url_photo}}login_style/assets/js/jquery-2.2.0.min.js"></script>
<script src="{{url('/').$get_url_photo}}login_style/assets/js/popper.min.js"></script>
<script src="{{url('/').$get_url_photo}}login_style/assets/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->
</body>
</html>
