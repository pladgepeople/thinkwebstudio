<section class="wow fadeIn">
    <div class="container">
        <div class="row">
            @foreach($clients as $client)
            <div class="col-md-3 col-sm-3 col-xs-12 margin-three-bottom xs-text-center xs-margin-15px-bottom wow fadeInRight">
                    <a href="" target="_blank"><img src="{{url('storage/')}}/{{$client->image}}" alt="{{$client->name}}"></a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- start divider -->
<div class="container"><div class="divider-full bg-extra-light-gray"></div></div>
<!-- end divider -->