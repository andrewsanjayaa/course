<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 items-center">
    @foreach ($details as $item)
        <div class="max-w-sm bg-white border border-gray-100 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
            data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="450">
            <a href="#">
                <iframe src="{{ $item->url }}" title="YouTube video player" class="w-full h-[210px]"
                    frameborder="0"></iframe>
            </a>
            <a href="{{ route('category.detail.article', $item->id) }}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mt-3">{{ $item->name }}
                </h5>
            </a>
            <div class="mb-5 font-normal text-gray-700 dark:text-gray-400 px-3">
                <span>{{ Str::limit($item->short_description, 50) }}</span>
            </div>
        </div>
    @endforeach
</div>
