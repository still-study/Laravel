<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News (edit)') }}
        </h2>
    </x-slot>

    <x-content-body>
        <form method="POST" action="{{ route('news.update', ['news' => $news]) }}" class="max-w-3xl">
            @csrf


            <div>
                <x-label for="title" :value="__('Title')" />

                <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $news->title }}" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="description" :value="__('Description')" />

                <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{ $news->description }}" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="category_id" :value="__('Category')" />

                <select name="category_id" id="category_id" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option selected>{{ $news->category->name }}</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <x-label for="source" :value="__('Source')" />

                <select name="source" id="source" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option selected>{{ $news->source }}</option>
                    @foreach($newsAll as $newsItem)
                        <option>{{ $newsItem->source }}</option>
                    @endforeach
                </select>
            </div>


            <div class="mt-4">
                <x-button class="ml-3">
                    {{ __('Save') }}
                </x-button>
            </div>
        </form>
    </x-content-body>

    <x-slot name="footer">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News (edit)') }}
        </h2>
    </x-slot>

</x-app-layout>
