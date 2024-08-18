<x-layout>
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
</x-layout>