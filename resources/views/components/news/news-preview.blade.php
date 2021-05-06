@props(['news'])

<div class="bg-white shadow-md rounded-lg p-6 mt-6">
    <p class="px-2 text-xs py-1 rounded-md bg-gray-200 text-gray-700 uppercase font-semibold">{{ $news->category->name }}</p>
    <p class="mt-4"><a href="{{ route('news.show', ['news' => $news]) }}">{{ $news->title }}</a></p>
    <p class="mt-4 text-xs text-grey-500">{{ $news->created_at->format('d.m.Y') }}</p>
</div>
