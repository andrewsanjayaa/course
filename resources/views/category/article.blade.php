<div>
    <div class="text-2xl font-bold text-center mb-5">{{ $details->name }}</div>
    <iframe src="{{ $details->url }}" class="w-full h-[400px]" frameborder="0"></iframe>
    <div class="mt-5 mx-8 text-justify">
        <p class="text-gray-600 dark:text-gray-400 text-justify">{!! $details->description !!}</p>
    </div>
</div>
