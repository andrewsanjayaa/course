<div class="relative overflow-x-auto">
    <div class="flex justify-between">
        <h1 class="text-3xl mb-5 font-semibold text-center text-gray-900 dark:text-white">Detail Category</h1>
        <a href="{{ route('category-detail.create', ['slug' => $category->slug]) }}"
            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 mb-7 px-4 float-right border border-blue-500 hover:border-transparent rounded">
            Create Detail
        </a>
    </div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Video
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($getData as $data)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $category->name }}
                    </th>
                    <td class="px-3 py-4">
                        {{ $data->name }}
                    </td>
                    <td class="px-3 py-4">
                        <button id="openModal" data-description="{{ $data->description ?? '' }}"
                            class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">
                            Description
                        </button>
                    </td>
                    <td class="px-6 py-4 w-1/5">
                        <iframe width="300" height="157" src="{{ $data->url }}" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </td>
                    <td class="px-6 py-4 flex">
                        <a href="{{ route('category-detail.edit', ['slug' => str_replace(' ', '-', $data->name)]) }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline me-4">Edit</a>
                        <form
                            action="{{ route('category-detail.delete', ['slug' => str_replace(' ', '-', $data->name)]) }}"
                            method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                Remove
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="modal"
    class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-50 dark:bg-opacity-80 flex justify-center items-center">
    <div class="bg-white dark:bg-gray-800 rounded-lg w-full max-w-lg p-6 relative">
        <button id="closeModal"
            class="absolute top-3 right-3 text-white bg-transparent hover:bg-gray-600 hover:text-white rounded-full p-2">
            <span class="text-xl">&times;</span>
        </button>

        <!-- Modal Content -->
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white"></h2>
        <p class="mt-4 dark:text-gray-500" id="data-description"></p> <!-- Empty initially -->
        <div class="mt-6 flex justify-end">
            <button id="closeModalBtn"
                class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">Close</button>
        </div>
    </div>
</div>

<script>
    // Get modal and button elements
    const modal = document.getElementById('modal');
    const openModalButton = document.getElementById('openModal');
    const closeModalButton = document.getElementById('closeModal');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const dataDescription = document.getElementById('data-description');

    // Open modal event
    openModalButton.addEventListener('click', () => {
        // Get the description data from the button
        const description = openModalButton.getAttribute('data-description');

        // Update modal content with the description
        dataDescription.innerHTML = description;

        // Show the modal
        modal.classList.remove('hidden');
    });

    // Close modal event
    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    closeModalBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
</script>
