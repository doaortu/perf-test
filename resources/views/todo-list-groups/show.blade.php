<x-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">{{ $group->title }}</h1>

        <div class="flex flex-col space-y-4">
        </div>

        <div class="flex justify-end mt-4">
            
        </div>

        <div class="flex flex-col space-y-2">
            @foreach ($items as $todo)
            <div class="flex items-center justify-between bg-gray-100 rounded px-4 py-2 shadow-sm">
                <div class="flex items-center space-x-2">
                    <input type="checkbox" id="{{ $todo->id }}" class="w-5 h-5 accent-blue-500 focus:ring-offset-0 focus:ring-blue-500 focus:ring-2">
                    <label for="{{ $todo->id }}" class="text-sm">{{ $todo->title }}</label>
                </div>
                <div class="flex items-center space-x-2">
                    @if (!$todo->active)
                    <svg class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-5.707l-7-7a1 1 0 00-1.414 1.414L6.393 11.707l-2.293 2.293a1 1 0 001.414 1.414l7-7z" clip-rule="evenodd" />
                    </svg>
                    @endif
                    <form method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>