<x-layout>

    <x-slot:title>
        - Jobs Listing
    </x-slot>

    <x-slot:heading>
     Jobs Page
    </x-slot>

    <h1 class="font-bold mb-2">Jobs Listings</h1>

    <div class="space-y-4">
        @foreach($jobs as $job)
         
                <a href="/jobs/{{$job['id']}}" class="hover:underline block px-4 py-6 border border-gray-400 ">
                    <div class="font-medium text-blue-400">{{ $job->employer->name }}</div>
                    <div class="font-bold">{{$job['title']}} </div> {{ $job['salary'] }} per year.
                </a>
          
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>