@include('partials.header')
<div>
    <div class="relative">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                        {{ $project->status }}
                    </td>
                </tr>
                @endforeachcls
                

            </tbody>
        </table>
    </div>
</div>
@include('partials.footer')
