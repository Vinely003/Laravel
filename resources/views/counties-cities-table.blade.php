<x-layout>
    <a class="btn btn-danger mb-4" href="/logout">Logout</a>
    <x-select :counties="$counties" />
    <x-new-city :countyid="$countyId" />
    <x-table :cities="$cities" :currentcounty="$currentCounty" />
</x-layout>
