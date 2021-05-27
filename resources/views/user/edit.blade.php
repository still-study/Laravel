<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit user') }}
        </h2>
    </x-slot>

    <x-content-body>
        <div class="my-8">
            <x-auth-validation-errors :errors="$errors"/>
        </div>
        <form method="POST" action="{{ route('user.update', ['user' => $user]) }}" class="max-w-3xl">
            @csrf


            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$user->name" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="$user->email" required autofocus />
            </div>

            <div class="block mt-4">
                <label for="role_id" class="inline-flex items-center">
                    <input value="" @if($user->role_id == null) checked @endif type="radio" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="role_id">
                    <span class="m-2 text-sm text-gray-600">{{ __('User') }}</span>

                    <input value="1" @if($user->role_id == 1) checked @endif type="radio" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="role_id">
                    <span class="m-2 text-sm text-gray-600">{{ __('Admin') }}</span>

                    <input value="2" @if($user->role_id == 2) checked @endif type="radio" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="role_id">
                    <span class="m-2 text-sm text-gray-600">{{ __('Moderator') }}</span>
                </label>
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
            {{ __('Edit user') }}
        </h2>
    </x-slot>

</x-app-layout>
