<div class="pagination">
    @if($blogs->onFirstPage())
        <span class="disabled"></span>
        <span class="disabled"></span>
    @else
        <a href="{{$blogs->toArray()['first_page_url']}}@isset($scrollTo){{$scrollTo}}@endisset"><i class="bi bi-arrow-bar-left"></i></a>
        <a href="{{$blogs->previousPageUrl()}}@isset($scrollTo){{$scrollTo}}@endisset"><i class="bi bi-arrow-left-short"></i></a>
    @endif
        <p class="page__status txt__s--bold">Page {{$blogs->currentPage()}} of {{$blogs->lastPage()}} </p>

    @if($blogs->hasMorePages())
        <a href="{{$blogs->nextPageUrl()}}@isset($scrollTo){{$scrollTo}}@endisset"><i class="bi bi-arrow-right-short"></i></a>
        <a href="{{$blogs->toArray()['last_page_url']}}@isset($scrollTo){{$scrollTo}}@endisset"><i class="bi bi-arrow-bar-right"></i></a>
    @else
        <span class="disabled"></span>
        <span class="disabled"></span>
    @endif
</div>
