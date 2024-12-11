<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Role
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
                        {{ $data->email }}
                    </td>
                    <td class="py-4">
                        @if ($data->role == 'admin')
                            <span
                                class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Admin</span>
                        @endif
                        @if ($data->role == 'free_user')
                            <span
                                class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Free
                                User</span>
                        @endif
                        @if ($data->role == 'premium_user')
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Premium
                                User</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('user.edit', $data->id) }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> <br>
                        <form action="{{ route('user.delete', $data->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this User?');">
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
