@if (Route::currentRouteName() === 'category-detail.edit')
    <form class="w-full mx-auto" id="contentForm"
        action="{{ route('category-detail.update', ['slug' => str_replace(' ', '-', $data->name)]) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
    @else
        <form class="w-full mx-auto" action="{{ route('category-detail.store', ['slug' => $category->slug]) }}"
            method="POST" enctype="multipart/form-data">
            @csrf
@endif
<div class="mb-5">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Name</label>
    <input type="text" id="name" name="name" value="{{ $data->name ?? '' }}"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
        placeholder="name@flowbite.com" required />
</div>
<div class="mb-5">
    <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">URL</label>
    <input type="text" id="url" name="url" value="{{ $data->url ?? '' }}"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
        required />
</div>
<div class="mb-5">
    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Description</label>
    <textarea id="summernote" name="description"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
        required>{!! $data->description ?? '' !!}
    </textarea>
</div>
<button type="submit" name="submit"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create
    Detail</button>
</form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture']],
                ['view', ['fullscreen', 'codeview']],
                ['alignment', ['alignLeft', 'alignCenter', 'alignRight']]
            ]
        });
    });
</script>
