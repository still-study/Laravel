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
        <a href="{{ route('news.edit', ['news' => $news]) }}">
            <p class="mt-4 px-2 text-xs py-1 rounded-md bg-gray-200 text-gray-700 uppercase font-semibold">Edit news</p>
        </a>
        <form action="{{ route('news.delete', ['news' => $news]) }}" method="post">
            <input class="mt-4 px-2 text-xs py-1 rounded-md bg-gray-200 text-gray-700 uppercase font-semibold cursor-pointer" type="submit" value="Delete news" />
            <input type="hidden" name="_method" value="delete" />
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </x-content-body>

    <x-slot name="footer">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News / cat '. $news->category->id . '. ' . $news->category->name ) }}
        </h2>
    </x-slot>

</x-app-layout>

