<div class="margin-45px-bottom xs-margin-25px-bottom">
    <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Categorie</span></div>
    <ul class="list-style-6 margin-50px-bottom text-small">
        @foreach($cats as $cat)
        <li><a href="/blog/categoria/{{$cat->id}}" description="{{$cat->name}}">{{$cat->name}}</a></li>
        @endforeach
    </ul>   
</div>