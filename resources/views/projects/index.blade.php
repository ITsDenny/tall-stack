@include('partials.header')

<main class="min-h-screen bg-gray-200 p-4 pt-20">
    <div class="relative">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 round">
            <thead class="text-xs text-gray-800 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Project Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$project->name}}
                    </th>
                    <td class="px-6 py-4">
                        {{$project->description}}
                    </td>
                    <td class="px-6 py-4">
                        {{ $project->category->name }}
                    </td>
                    <td class="px-6 py-4">
                        <span class="
                            @if ($project->status == 'in_progress') bg-yellow-200 text-yellow-800 uppercase @endif
                            @if ($project->status == 'completed') bg-green-200 text-green-800 uppercase @endif
                            @if ($project->status == 'cancelled') bg-red-200 text-red-800 uppercase @endif
                            px-2 py-1 rounded-lg">
                            {{ $project->status }}
                        </span>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
    </div>
</main>
@include('partials.footer')
