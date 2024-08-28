<x-layout>

      <x-slot:title>
        - Jobs Details
    </x-slot>


    <x-slot:heading>
     Job Specification
    </x-slot>

    <h1 class="text-4xl my-8">Job Description</h1>

    <table>
        <tbody>

            <tr>
                <td class="font-bold">Title</td>
                <td>{{ $job['title'] }}</td>
            </tr>
            <tr>
                <td class="font-bold">Salary</td>
                <td>{{ $job['salary'] }}</td>
            </tr>
        </tbody>

    </table>
    



<div class="mt-6 flex items-center justify-between gap-x-6">
    <button form="delete-job" class="text-sm font-bold text-red-500 px-4 py-2 border border-red-200 rounded">Delete</button>
    <div>
        <x-button href="/jobs/" class="bg-purple-600 text-white">cancel</x-button>
        <x-button href="/jobs/{{ $job->id }}/edit">Update Job</x-button>
    </div>
</div>

<form method="POST" action="/jobs/{{ $job->id }}" id="delete-job" class="hidden">
    @csrf
    @method('DELETE')
</form>
</x-layout>