<div class="row clearfix">
    @if($items->count() != 0)
        @foreach($items as $r)
            <div class="col-md-4 col-sm-6 blog-item">
                <div class="blog-img-box">
                    <a class="hover-effect" href="{{$r->route()}}">
                        <img src="{{$r->img()}}" style="height: 240px;" alt="{{$r->name()}}"/>
                    </a>
                </div>
                <div class="blog-content">
                    <h3><a href="{{$r->route()}}"> {{$r->name()}} </a></h3>
                    <p>{{$r->tags()}}</p>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-md-12 col-xs-12 col-sm-12 text-center alert alert-warning">
            {{$lang->Empty}}
        </div>
    @endif
</div>
<div class="col-md-12 col-xs-12 col-sm-12 text-center">
    {{$items->render()}}
</div>
