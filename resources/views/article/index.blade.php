<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Article') }}
        </h2>
    </x-slot>

    <!-- CKEditor 5 from CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.0/classic/ckeditor.js"></script>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center uppercase text-2xl">
                    {{ __('Add Article') }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('article.store', ['id' => $detail]) }}" method="POST">
                        @csrf

                        <!-- Title Input -->
                        <div class="mb-6">
                            <label for="title"
                                class="block text-gray-700 dark:text-gray-100 font-semibold">Title</label>
                            <input type="text" id="title" name="title"
                                class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Enter the title" required>
                        </div>

                        <!-- CKEditor -->
                        <div class="mb-6">
                            <label for="content"
                                class="block text-gray-700 dark:text-gray-100 font-semibold">Content</label>
                            <textarea id="editor" name="content" placeholder="Write your content here..." required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit"
                                class="px-6 py-2 bg-indigo-600 text-dark-100 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                Save Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: [
                    'bold', 'italic', 'link', 'imageUpload', 'bulletedList', 'numberedList', '|',
                    'insertTable', 'tableColumn', 'tableRow', 'mergeTableCells', '|',
                    'alignment:left', 'alignment:center', 'alignment:right' // Enable alignment options
                ],
                ckfinder: {
                    // You can set the image upload URL here
                    uploadUrl: "{{ route('article.store', ['id' => $detail]) }}",
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</x-app-layout>
