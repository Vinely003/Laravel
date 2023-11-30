@props(['cities'])
<div class="col-6 mx-auto p-4">
    <table class="table table-striped">
        <thead>
            <th id="name" scope="col">
                Összes város
            </th>
        </thead>
        <tbody>
            @foreach ($cities as $city)
                <tr>
                    <td>
                        {{ $city->name }}
                    </td>
                </tr>
            @endforeach
        </tbody>
</div>
</table>
