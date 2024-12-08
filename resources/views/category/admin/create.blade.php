@if (Route::currentRouteName() === 'category.edit')
    <form class=" mx-auto" action="{{ route('category.update', ['slug' => $data->slug]) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1 class="text-3xl mb-5 font-semibold text-center text-gray-900 dark:text-white">Edit Category</h1>
    @else
        <form class="mx-auto" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="text-3xl mb-5 font-semibold text-center text-gray-900 dark:text-white">Create Category</h1>
@endif
<div class="mb-5">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
    <input type="text" id="name" name="name" value="{{ $data->name ?? '' }}"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
        required />
</div>
<div class="mb-5">
    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
    <textarea type="text" id="description" name="description"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
        required> {{ $data->description ?? '' }} </textarea>
</div>
<div class="mb-5">
    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
    <input type="text" id="slug" name="slug" value="{{ $data->slug ?? '' }}"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
        required />
</div>
@if (Route::currentRouteName() === 'category.edit')
    <label for="">Old Image</label>
    <img src="{{ $data->image }}" alt="" class="w-32 h-32 object-cover mb-5 mt-1">
@endif
<div class="flex items-start mb-5">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload
        file</label>
    <input
        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        aria-describedby="user_avatar_help" id="user_avatar" type="file" name="image">
</div>
<button type="submit" name="submit"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create
    Category</button>
</form>
