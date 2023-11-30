<div class="pagination">
    @if($blogs->onFirstPage())
    <span class="disabled"></span>
    @else
    <a href="{{$blogs->previousPageUrl()}}#otherBlogs"><i class="bi bi-arrow-left-circle-fill"></i></a>
    @endif
    <p class="page__status txt__s--bold">Page {{$blogs->currentPage()}} of {{$blogs->lastPage()}} </p>

    @if($blogs->hasMorePages())
    <a href="{{$blogs->nextPageUrl()}}#otherBlogs"><i class="bi bi-arrow-right-circle-fill"></i></a>
    @else
    <span class="disabled"></span>
    @endif
</div>
