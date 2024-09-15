<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Conflict Diary Entries') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($conflictDiary->isEmpty())
                    <p>There is no conflicted diary found.</p>
                    @else
                    @foreach ($conflictDiary as $entry)
                    <div class="diary-entry mb-4 p-4 border rounded">
                        <p class="text-l font-bold mb-2">Diary ID: {{$entry->id}}</p>
                        <h3 class="text-xl font-bold mb-4">
                            {{ \Carbon\Carbon::parse($entry->date)->format('F j, Y') }}
                        </h3>
                        <div class="text-m font-bold mb-4">
                            <p class ="mb-4">{{ $entry->content }}</p>
                            <p>Emotion: {{ $entry->name }}</p>
                            <p> Intensity: {{ $entry->intensity }}</p>
                        </div>
                        
                        
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>