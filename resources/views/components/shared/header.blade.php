<a href="/blogs"><h1 class="txt__xl">BLOGiT</h1></a>
<div class="navigation" onclick="showNavigation('navigation', 'arrow')">
    @if ($user->profile_picture)
        <img
        src="{{$user->profile_picture}}"
        alt=""
        class="profile-picture"
        />
    @else
        <i class="bi bi-person-circle profile-picture"></i>
    @endif

    <i class="bi bi-caret-down-fill nav-closed" id="arrow"></i>
</div>
<nav class="hidden" id="navigation">
    <ul class="txt__s">
        <li class="btn"><a href="/blogs">Home</a></li>
        <li class="btn"><a href="my_blogs.html">My Profile</a></li>
        <li class="btn"><a href="edit-account.html">Account Settings</a></li>
        <form class="btn" action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </ul>
</nav>
