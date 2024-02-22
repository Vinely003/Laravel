@props(['cities', 'currentcounty'])

<div class="col-6 mx-auto">
    <table id="table" class="table table-striped">
        <thead>
            <tr>
                <th colspan="4" id="name" scope="col">
                    {{ $currentcounty->name }}
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
                <tr>
                    <td>
                        <span class="text">{{ $city->name }}</span>
                        <input type="text" name="name" class="input d-none">
                        <button class="updateBtn btn btn-primary btn-sm d-none"
                            data-cityid="{{ $city->id }}">Módosítás</button>
                        <button class="cancelBtn btn btn-secondary btn-sm d-none">Mégse</button>
                        <button class="deleteBtn btn btn-danger btn-sm d-none"
                            data-cityid="{{ $city->id }}">Törlés</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
