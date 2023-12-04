<section class="actions">
    <form action="#" class="search--group">
        <input
            type="text"
            name="search"
            id="search"
            placeholder="Search"
            class="txt__s"
            value="@if(request('search')){{request('search')}}@endif"
        />
        <button type="submit" class="search--button">
            <i class="bi bi-search"></i>
        </button>
    </form>
    <a href="/blogs/create" class="btn">
        <i class="bi bi-plus-circle-fill"></i>
        <p class="txt__s">Create New Blog</p>
    </a>
</section>
