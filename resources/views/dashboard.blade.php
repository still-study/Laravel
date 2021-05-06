<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-content-body>
        <p class="font-semibold text-sm text-gray-400 leading-tight">You're logged in!</p>
        <h3>Welcome to the news portal!</h3>
        </h2><p class="font-semibold text-sm text-gray-400 leading-tight">Today is: {{ $date }}</p>
    </x-content-body>

    <x-slot name="footer">
        <h2 class="font-semibold text-md text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>
