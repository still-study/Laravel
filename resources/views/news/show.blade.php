<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <x-content-body>
        <h1 class="text-lg">{{ $news->title }}</h1>
        <p class="text-xs text-grey-500 mt-10">{{ $news->created_at->format('d.m.Y') }}</p>
        <p>{{ $news->description }}</p>
    </x-content-body>

    <x-slot name="footer">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News / cat '. $news->category->id . '. ' . $news->category->name ) }}
        </h2>
    </x-slot>

</x-app-layout>

