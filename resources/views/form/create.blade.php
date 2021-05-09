<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form get data') }}
        </h2>
    </x-slot>

    <x-content-body>
        <form method="POST" action="{{ route('form.store') }}" class="max-w-3xl">
            @csrf


            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="tel" :value="__('Tel')" />

                <x-input id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="info" :value="__('Info')" />

                <x-input id="info" class="block mt-1 w-full" type="text" name="info" :value="old('info')" required autofocus />
            </div>


            <div class="mt-4">
                <x-button class="ml-3">
                    {{ __('Upload to file') }}
                </x-button>
            </div>
        </form>
    </x-content-body>

    <x-slot name="footer">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form get data') }}
        </h2>
    </x-slot>

</x-app-layout>
