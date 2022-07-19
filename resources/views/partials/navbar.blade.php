<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Larablog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ ($active === "home") ? 'fw-bold' : '' }}" href="/">Home</a>
                <a class="nav-link {{ ($active === "categories") ? 'fw-bold' : '' }}" href="/categories">Categories</a>
                <a class="nav-link {{ ($active === "authors" ) ? 'fw-bold' : '' }}" href="/authors">Authors</a>
            </div>
        </div>
    </div>
</nav>
