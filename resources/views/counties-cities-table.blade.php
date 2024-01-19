<x-layout>
    <x-select :counties="$counties" />
    <x-new-city :countyid="$countyId" />
    <x-table :cities="$cities" :currentcounty="$currentCounty" />
</x-layout>
