<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Feedback\'s') }}
        </h2>

    </x-slot>

    <x-content-body>
        <h2 class="mb-10 font-semibold text-xl text-gray-800 leading-tight">Create feedback</h2>
        <div class="my-8">
            <x-auth-validation-errors :errors="$errors"/>
        </div>
        <form method="POST" action="{{ route('feedback.store') }}" class="max-w-3xl">
            @csrf


            <div>
                <x-label for="user_name" :value="__('User name')" />

                <x-input id="user_name" class="block mt-1 w-full" type="text" name="user_name" :value="old('user_name')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="text" :value="__('Text')" />

                <x-input id="text" class="block mt-1 w-full" type="text" name="text" :value="old('text')" required autofocus />
            </div>



            <div class="mt-4">
                <x-button class="ml-3">
                    {{ __('Create') }}
                </x-button>
            </div>
        </form>

    </x-content-body>

    <x-content-body>
        @if(session()->has('success'))
            <div class="md-6 bg-green-200 text-green-700 px-3 px-2 rounded-lg">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="-mx-3">
            @forelse($feedbacks as $feedbackItem)
                <div class="w-full px-3">
                    <div class="bg-white shadow-md rounded-lg p-6 mt-6">
                        <p class="px-2 text-xs py-1 text-gray-400 font-semibold">{{ $feedbackItem->created_at }}</p>
                        <p class="px-2 text-xs py-1 rounded-md bg-gray-200 text-gray-700 uppercase font-semibold">{{ $feedbackItem->user_name }}</p>
                        <p class="mt-4">{{ $feedbackItem->text }}</p>
                    </div>
                </div>
            @empty
                <p>There's no news for today</p>
            @endforelse
        </div>
    </x-content-body>

    <x-slot name="footer">
        <h2 class="font-semibold text-md text-gray-800 leading-tight">
            {{ __('Feedback\'s') }}
        </h2>
    </x-slot>


</x-app-layout>
