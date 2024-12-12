<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @foreach ($getData as $item)
        <a href="{{ route('category.detail', $item->slug) }}">
            <div class="relative bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden" data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="450">
                <img src="{{ $item->image }}" alt="Card Image" class="w-full h-64 object-cover">
                <div
                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-30 dark:bg-opacity-50 text-white p-4 text-center select-none">
                    <div>
                        <h3 class="text-xl font-semibold">{{ $item->name }}</h3>
                        <p class="mt-2">
                            {{ \Illuminate\Support\Str::limit($item->description, 50) }}</p>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>
