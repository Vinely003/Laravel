@props(['countyid'])

<div class="p-4">
    <form action="/newcity" method="POST">
        @csrf
        <input type="hidden" name="county_id" value="{{ $countyid }}">
        Új város felvétele
        <div class="input-group mb-3">
            <div class="mx-auto">
                <div class="input-group-prepend ">
                    <button class="btn-secondary" type="submit">Létrehozás</button>
                    <input name="name" type="text" value="{{ old('name') }}"
                        placeholder="Írd be egy város nevét...">
                </div>
            </div>
        </div>
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </form>
</div>
