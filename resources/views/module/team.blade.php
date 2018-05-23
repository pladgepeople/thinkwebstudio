
<section class="wow fadeIn">
    <div class="container">
        <div class="row">
            <!-- start team item -->
            @foreach ($teams as $team)
            <div class="col-md-3 col-sm-6 col-xs-12 team-block text-left team-style-1 sm-margin-50px-bottom xs-margin-30px-bottom wow fadeInUp">
                <figure >
                    <div class="team-image xs-width-100" style="height:350px;">
                        <img src="{{url('storage/')}}/{{$team->avatar}}" alt="" >
                        <div class="overlay-content text-center">
                            <div class="display-table height-100 width-100">
                                <div class="vertical-align-middle display-table-cell icon-social-small">
                                    <a href="{{$team->facebook}}" class="text-white text-white-hover" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{$team->twitter}}" class="text-white text-white-hover" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="{{$team->linkedin}}" class="text-white text-white-hover" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="{{$team->instagram}}" class="text-white text-white-hover" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-overlay bg-deep-pink opacity8"></div>
                    </div>
                    <figcaption>
                        <div class="team-member-position text-center margin-20px-top sm-margin-15px-top">
                            <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">{{$team->name}}</div>
                            <div class="text-extra-small text-uppercase text-medium-gray">{{$team->profession}}</div>
                        </div>   
                    </figcaption>
                </figure>
            </div>
            @endforeach
            <!-- end team item -->
        </div> 
    </div>
</section>
