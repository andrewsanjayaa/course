<div class="relative overflow-x-auto">
    <div class="flex justify-between">
        <h1 class="text-3xl mb-5 font-semibold text-center text-gray-900 dark:text-white">Category</h1>
        <a href="{{ route('category.create') }}"
            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 mb-7 px-4 float-right border border-blue-500 hover:border-transparent rounded">
            Create Category
        </a>
    </div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Slug
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($getData as $data)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $data->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $data->description }}
                    </td>
                    <td class="px-6 py-4 w-1/4">
                        <img src="{{ $data->image }}" alt="">
                    </td>
                    <td class="px-6 py-4">
                        {{ $data->slug }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('category-detail', $data->slug) }}"
                            class="font-medium text-green-600 dark:text-green-500 hover:underline">Detail</a> <br>
                        <a href="{{ route('category.edit', $data->slug) }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> <br>
                        <form action="{{ route('category.delete', $data->slug) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this category?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                Delete
                            </button>
                        </form> <br>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
