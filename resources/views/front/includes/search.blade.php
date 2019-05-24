<!-- open/close -->
<div class="overlay overlay-door">
    <button type="button" class="overlay-close">
        <i class="fa fa-times" aria-hidden="true"></i>
    </button>
    <form action="{{ action('Front\SearchController@show') }}" method="get" class="d-flex">
        <input class="form-control" type="search" placeholder="Search here..." name="q" required="">
        <button type="submit" class="btn btn-primary submit">
            <i class="fas fa-search"></i>
        </button>
    </form>

</div>
<!-- open/close -->
