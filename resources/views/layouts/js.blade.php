<script src="{{path()}}files/home/js/jquery.min.js"></script>
<script src="{{path()}}files/home/js/bootstrap.min.js"></script>
<script src="{{path()}}files/home/js/jquery.flexslider-min.js"></script>
<script src="{{path()}}files/home/js/owl.carousel.min.js"></script>
<script src="{{path()}}files/home/js/waypoints.min.js"></script>
<script src="{{path()}}files/home/js/jquery.counterup.min.js"></script>
<script src="{{path()}}files/home/js/back-to-top.js"></script>
<script src="{{path()}}files/home/js/validate.js"></script>
<script src="{{path()}}files/home/js/subscribe.js"></script>
<script src="{{path()}}files/home/js/main.js"></script>

<script src="{{path()}}js/toastr.min.js"></script>
<script src="{{path()}}js/jquery.form.min.js"></script>
<script src="{{path()}}nprogress-master/nprogress.js"></script>
<script src="{{path()}}js/master.js"></script>
@if(scripts())
    @if(scripts()->js)
        {!! scripts()->js !!}
    @endif
    @if(scripts()->custom)
        {!! scripts()->custom !!}
    @endif
@endif
