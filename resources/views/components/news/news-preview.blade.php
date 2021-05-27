@props(['news', 'categories'])

<div class="bg-white shadow-md rounded-lg p-6 mt-6">
    <p class="px-2 text-xs py-1 rounded-md bg-gray-200 text-gray-700 uppercase font-semibold">{{ $categories['title'] }}</p>
    <p class="mt-4"><a href="#">{{ $news['title'] }}</a></p>
    <p class="mt-4 text-xs text-grey-500">{{ $news['pubDate'] }}</p>
</div>
