<div class="dropright">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Válassz megyét
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="/">Összes</a>
        @foreach ($counties as $county)
            <a class="dropdown-item" href="/county/{{ $county->id }}">{{ $county->name }}</a>
        @endforeach
    </div>
</div>
