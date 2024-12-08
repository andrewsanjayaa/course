<div class="container px-6 mx-auto flex justify-center">
    <div class="w-full max-w-screen-xl grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
        <div class="flex items-center p-4 bg-gray-700 rounded-lg shadow-xs">
            <div class="p-3 mr-4 text-blue-500 bg-blue-800 rounded-full">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-400">
                    Total Free Users
                </p>
                <p class="text-lg font-semibold text-gray-200">{{ $count['free'] ?? 0 }}</p>
            </div>
        </div>
        <div class="flex items-center p-4 bg-gray-700 rounded-lg shadow-xs">
            <div class="p-3 mr-4 text-green-500 bg-green-800 rounded-full">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-400">
                    Total Premium Users
                </p>
                <p class="text-lg font-semibold text-gray-200">{{ $count['premium'] ?? 0 }}</p>
            </div>
        </div>
        <div class="flex items-center p-4 bg-gray-700 rounded-lg shadow-xs">
            <div class="p-3 mr-4 text-red-500 bg-red-800 rounded-full">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-400">
                    Total Videos
                </p>
                <p class="text-lg font-semibold text-gray-200">{{ $count['video'] ?? 0 }}</p>
            </div>
        </div>
    </div>
</div>

<canvas id="freeUserChart"></canvas>

<canvas id="premiumUserChart"></canvas>

<canvas id="videoChart"></canvas>


<script>
    const ctx = document.getElementById('freeUserChart').getContext('2d');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                @foreach ($data as $item)
                    "{{ $item['bulan'] }}",
                @endforeach
            ],
            datasets: [{
                label: 'Free Users',
                data: [
                    @foreach ($data as $item)
                        "{{ $item['total'] }}",
                    @endforeach
                ]
            }],
            backgroundColor: [
                '#36a2eb',
                '#ff6384',
                '#4bc0c0',
                '#ff9f40',
                '#9966ff',
                '#ffcd56',
                '#c9cbcf',
                '#0A6EBD',
                '#4D3C77',
            ],

            borderWidth: 1
        }
    })
</script>

<script>
    const ctx2 = document.getElementById('premiumUserChart').getContext('2d');

    new Chart(ctx2, {
        type: 'line',
        data: {
            labels: [
                @foreach ($datas as $item)
                    "{{ $item['bulan'] }}",
                @endforeach
            ],
            datasets: [{
                label: 'Premium Users',
                data: [
                    @foreach ($datas as $item)
                        "{{ $item['total'] }}",
                    @endforeach
                ]
            }],
            backgroundColor: [
                '#36a2eb',
                '#ff6384',
                '#4bc0c0',
                '#ff9f40',
                '#9966ff',
                '#ffcd56',
                '#c9cbcf',
                '#0A6EBD',
                '#4D3C77',
            ],

            borderWidth: 1
        }
    })
</script>

<script>
    const ctx3 = document.getElementById('videoChart').getContext('2d');

    new Chart(ctx3, {
        type: 'line',
        data: {
            labels: [
                @foreach ($datass as $item)
                    "{{ $item['bulan'] }}",
                @endforeach
            ],
            datasets: [{
                label: 'Video',
                data: [
                    @foreach ($datass as $item)
                        "{{ $item['total'] }}",
                    @endforeach
                ]
            }],
            backgroundColor: [
                '#36a2eb',
                '#ff6384',
                '#4bc0c0',
                '#ff9f40',
                '#9966ff',
                '#ffcd56',
                '#c9cbcf',
                '#0A6EBD',
                '#4D3C77',
            ],

            borderWidth: 1
        }
    })
</script>
