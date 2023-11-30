@props(['cities', 'currentcounty'])

<div class="col-6 mx-auto">
    <table id="table" class="table table-striped">
        <thead>
            <th colspan="4" id="name" scope="col">
                {{ $currentcounty->name }}
            </th>
        </thead>
        <tbody>
            @foreach ($cities as $city)
                <tr>
                    <td>
                        <span class="text">{{ $city->name }}</span>
                        <input type="text" name="name" class="input" style="display: none;">
                        <button class="updateBtn btn btn-primary btn-sm" data-cityid="{{ $city->id }}"
                            style="display: none;">Módosítás</button>
                        <button class="cancelBtn btn btn-secondary btn-sm" style="display: none;">Mégse</button>
                        <button class="deleteBtn btn btn-danger btn-sm" data-cityid="{{ $city->id }}"
                            style="display: none;">Törlés</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
