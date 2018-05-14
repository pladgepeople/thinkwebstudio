
    <div class="col-md-12 col-sm-12 col-xs-12 margin-30px-top">
        <div class="display-table width-100 border-all border-color-extra-light-gray padding-50px-all sm-padding-30px-all xs-padding-20px-all">
            <div class="display-table-cell width-130px text-center vertical-align-top xs-margin-15px-bottom xs-width-100 xs-display-block xs-text-center">
                <img src="{{url('storage/')}}/{{ $post->author->avatar }}" class="img-circle width-100px" alt="" />
            </div>
            <div class="padding-40px-left display-table-cell vertical-align-top last-paragraph-no-margin xs-no-padding-left xs-display-block xs-text-center">
                <a href="{{url('/blog/autore')}}/{{$post->author->id}}" class="text-extra-dark-gray text-uppercase alt-font font-weight-600 margin-10px-bottom display-inline-block text-small">{{$post->author->name}}</a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                <a class="btn btn-very-small btn-black margin-20px-top" href="{{url('/blog/autore')}}/{{$post->author->id}}">All author posts</a>
            </div>
        </div>
    </div>