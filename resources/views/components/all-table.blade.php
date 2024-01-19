@props(['cities'])
<div class="col-6 mx-auto p-4">
    <table class="table table-striped">
        <thead>
            <tr>
                <th id="name" scope="col">
                    Összes város
                </th>
            </tr>
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
