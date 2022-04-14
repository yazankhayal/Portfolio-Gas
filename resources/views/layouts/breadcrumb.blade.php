<div class="page-title text-center" style="background-image:url('{{setting()->bunner()}}')" ;>
    <h2 class="title"> {{$lang->Home_Page}} </h2>
</div>
<div class="breadcrumbs">
    <div class="container">
        <span class="parent"> <i class="fa fa-home"></i> <a href="{{route('index')}}"> {{lang_name('Home_Page')}} </a> </span>
        <i class="fa fa-chevron-right"></i>
        <span class="child"> @yield("title") </span>
    </div>
</div>
