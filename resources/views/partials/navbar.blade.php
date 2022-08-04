<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand fw-bolder" href="/">LaraBlog <i class="bi bi-bug-fill"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ ($active === "home") ? 'fw-bold' : '' }}" href="/">Home</a>
                <a class="nav-link {{ ($active === "categories") ? 'fw-bold' : '' }}" href="/categories">Categories</a>
                <a class="nav-link {{ ($active === "authors" ) ? 'fw-bold' : '' }}" href="/authors">Authors</a>
            </div>

            <div class="navbar-nav ms-auto">
                @auth                    
                <div class="nav-item ms-auto dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome, {{ auth()->user()->name }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/dashboard"><i class="bi bi-display"></i> Dashboard</a>
                        <hr class="dropdown-divider">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                        </form>
                    </div>
                </div>
                @else
                <div class="nav-item">
                    <a href="/login" class="nav-link {{ ($active === "login" ) ? 'fw-bold' : '' }}""><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
