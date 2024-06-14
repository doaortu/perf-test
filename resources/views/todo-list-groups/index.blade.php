<x-layout>
    <h1 class="text-2xl font-bold mb-4">Todo List Groups</h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        @foreach ($groups as $group)
        <div class="bg-gray-100 rounded shadow p-4 min-h-48 flex flex-col justify-between">
            <div>
            <h3 class="text-lg font-medium mb-2">{{ $group->title }}</h3>
            <p class="text-sm text-gray-500">{{ $group->created_at->format('d F Y') }}</p>
            </div>
            
            <div class="flex justify-between items-end">
                <a href="{{ route('todo-list-groups.show', $group) }}" class="text-blue-500 hover:underline">View Items</a>
                <form method="POST" action="{{ route('todo-list-groups.destroy', $group) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.5H4.12l1.026 1.026a1 1 0 00.708.708l3 3a1 1 0 001.414-1.414L10.974 4.374l1.294-1.294a1 1 0 00-1.414-1.414zM17.657 3.343a1 1 0 00-1.414 1.414l-3 3a1 1 0 00.708.708L14.874 8.626l1.294-1.294a1 1 0 00-1.414-1.414zM7 10a1 1 0 01-1-1v8a1 1 0 01-1 1h-2a1 1 0 01-1-1v-8a1 1 0 011-1h2zM17 10a1 1 0 01-1-1v8a1 1 0 01-1 1h-2a1 1 0 01-1-1v-8a1 1 0 011-1h2zM10 18a1 1 0 011-1v-2a1 1 0 01.293-.707L14.657 12.657a1 1 0 00-.708-.708L10 17.293V18z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>