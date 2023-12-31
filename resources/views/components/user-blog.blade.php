<div class="blog--container">
    <div class="blog--container__image">
        @if ($blog->blog_image)
            <img src="{{$blog->blog_image}}" alt="" loading="lazy"/>
        @else
            <div class="no-image"><i class="bi bi-image"></i></div>
        @endif
        <a href="/blogs/edit/{{$blog->id}}" class="edit--blog">
            <i class="bi bi-pencil-fill"></i>
        </a>
    </div>
    <div class="blog--container__details">
        <h2 class="blog--title txt__m">{{$blog->blog_title}}</h2>
        <p class="blog--author txt__s">
            {{date('F d, Y', strtotime($blog->created_at))}}
        </p>
        <p class="blog--description txt__s">
            {{$blog->blog_description}}
        </p>
        <a href="/blogs/{{$blog->id}}" class="blog--link txt__s">
            Read More <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>
