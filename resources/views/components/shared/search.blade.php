<section class="actions">
    <form action="#" class="search--group">
        @csrf
        <input
            type="text"
            name="search"
            id="search"
            placeholder="Search"
            class="txt__s"
        />
        <button type="submit" class="search--button">
            <i class="bi bi-search"></i>
        </button>
    </form>
    <a href="create_blog.html" class="btn">
        <i class="bi bi-plus-circle-fill"></i>
        <p class="txt__s">Create New Blog</p>
    </a>
</section>
