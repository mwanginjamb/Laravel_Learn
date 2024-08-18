<x-layout>
    <x-slot:heading>
     Jobs Page
    </x-slot>

    <h1 class="font-bold">Jobs Listings</h1>

    <ol class="list-decimal">
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}">
                    {{$job['title']}} Pays {{$job['salary']}} per year.
                </a>
            </li>
        @endforeach
    </ol>
</x-layout>