<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <a class="navbar-brand" href="#">News24</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="{{Request::is('/') ? 'active' : ''}}">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="{{Request::is('news') ? 'active' : ''}}">
                <a class="nav-link" href="/view_categories">News</a>
            </li>
            <li class="{{Request::is('create news') ? 'active' : ''}}">
                <a class="nav-link disabled" href="/create_news">Create News</a>
            </li>
            <li class="{{Request::is('create-categories') ? 'active' : ''}}">
                <a class="nav-link disabled" href="/create_category">Create Categories</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
