<x-layout>
    <x-select :counties="$counties" />
    <x-new-city :countyid="$countyId" />
    <x-table :cities="$city" :currentcounty="$currentCounty" />
</x-layout>
