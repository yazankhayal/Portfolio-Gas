<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts.css")
    @yield("css")
</head>

<body class="homepage">

<div class="wrapper">
    @include("layouts.header")
    @yield("content")
    @include("layouts.footer")
</div>

@include("layouts.js")
<script>
    var geturlphoto = function () {
        return "{{$setting->public}}";
    };
    $(document).ready(function () {

        $(document).on('keypress', '#serarch', function (e) {
            if (e.which == 13) {
                var val = $(this).val();
                window.location.href = geturlphoto() + "products?q=" + val;
            }
        });

        $(document).ajaxStart(function () {
            NProgress.start();
        });
        $(document).ajaxStop(function () {
            NProgress.done();
        });
        $(document).ajaxError(function () {
            NProgress.done();
        });

    });
</script>
@yield("js")

</body>

</html>
