<nav class="container">
    <div class="navbar navbar-expand-lg">
        <div class="mx-auto d-flex flex-grow-1">
            <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse d-flex flex-grow-1 text-right" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto flex-nowrap">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/resources" aria-haspopup="true" aria-expanded="false">
                        Resources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/case-studies">Case Studies</a>
                        <a class="dropdown-item" href="/white-papers">White Papers</a>
                        <a class="dropdown-item" href="/ebooks">Ebooks</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/careers">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact-us">Contact Us</a>
                </li>
            </ul>
            {{-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> --}}
        </div>
    </div>
</nav>
<div class="navbar-divider"></div>