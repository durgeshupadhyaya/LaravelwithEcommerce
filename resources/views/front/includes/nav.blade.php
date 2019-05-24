<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

    <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">

					</span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-mega mx-auto">
            <li class="nav-item">
                <a class="nav-link ml-lg-0" href="{{ url('/') }}">Home
                </a>
            </li>

            @foreach($main_categories as $main_category)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                    {{ $main_category->name }}
                </a>
                <ul class="dropdown-menu mega-menu ">
                    <li>
                        <div class="row">
                            <div class="col-md-4 media-list span4 text-left">
                                <ul>
                                    @foreach($main_category->categories as $category)
                                    <li class="media-mini mt-3">
                                        <a href="{{ action('Front\CategoryController@show', $category->id) }}">{{ $category->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            @endforeach

        </ul>

    </div>
</nav>
