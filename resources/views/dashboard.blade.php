<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <div class="p-6 dark:text-gray-100 flex justify-center">
                        <p>Welcome Back!! {{(Auth::user()->name)}}</p>
                    </div>


                    <div class="flex justify-center">
                        <img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" alt="Profile Photo" class="w-32 h-32 object-cover rounded-full">
                    </div>

                    <div class="p-3 dark:text-gray-100 flex justify-center">
                        <p>!!! Anything BUT DO NOT COPY Your classmates !!!</p>
                    </div>
                    
                    <div class="py-3 dark:text-gray-100 flex justify-center">
                        <p>{{ __("You're logged in!") }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
