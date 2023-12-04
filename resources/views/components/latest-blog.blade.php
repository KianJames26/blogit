<div class="blog--container fade slide">
    <div class="blog--container__image">
        @if ($blog->blog_image)
            <img src="{{$blog->blog_image}}" alt="" />
        @else
            <div class="no-image"><i class="bi bi-image"></i></div>
        @endif
    </div>
    <div class="blog--container__details">
        <h2 class="blog--title txt__m">{{$blog->blog_title}}</h2>
        <p class="blog--author txt__s">
            {{date('F d, Y', strtotime($blog->created_at))}}, @if ($blog->author->id == Auth::user()->id) You @else {{$blog->author->first_name}} {{$blog->author->last_name}} @endif
        </p>
        <p class="blog--description txt__s">
            {{$blog->blog_description}}
        </p>
        <a href="/blogs/{{$blog->id}}" class="blog--link txt__s">
            Read More <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>
