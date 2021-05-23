<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Users') }}
        </h2>
    </x-slot>
    @if(session()->has('success'))
        <div class="md-6 bg-green-200 text-green-700 px-3 px-2 rounded-lg">
            {{ session()->get('success') }}
        </div>
    @endif

    @foreach($users as $user)
        <x-content-body>
            <p>ID: {{ $user->id }}</p>
            <p class="text-lg text-grey-500 mt-3">{{ $user->name }}</p>
            <p class="text-lg text-grey-500 mt-3">{{ $user->email }}</p>
            <p class="text-lg text-grey-500 mt-3">Role_id: {{ $user->role_id }}</p>
            <p class="text-lg text-grey-500 mt-3">Created_at: {{ $user->created_at }}</p>
            <p class="text-lg text-grey-500 mt-3">Updated_at: {{ $user->updated_at }}</p>
            <a href="{{ route('user.edit', ['user' => $user]) }}">
                <p class="mt-4 px-2 text-xs py-1 rounded-md bg-gray-200 text-gray-700 uppercase font-semibold">Edit user</p>
            </a>
            <form action="{{ route('user.delete', ['user' => $user]) }}" method="post">
                <input class="mt-4 px-2 text-xs py-1 rounded-md bg-gray-200 text-gray-700 uppercase font-semibold cursor-pointer" type="submit" value="Delete user" />
                <input type="hidden" name="_method" value="delete" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </x-content-body>
    @endforeach
    <x-slot name="footer">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Users') }}
        </h2>
    </x-slot>

</x-app-layout>
