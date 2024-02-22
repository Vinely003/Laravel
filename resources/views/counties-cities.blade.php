<x-layout>
    <a class="btn btn-danger mb-4" href="/logout">Logout</a>
    <x-select :counties="$counties" />
    <x-all-table :cities="$cities"/>
</x-layout>
