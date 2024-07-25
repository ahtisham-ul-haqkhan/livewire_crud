<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach($users as $user)
                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <p style="margin: 0;"><strong>Sender:</strong> <a href="{{ route('chat', $user->id) }}">{{ $user->name }}</a></p>
                        <p style="margin: 0;"><strong>Receiver:</strong> <a href="{{ route('chats', $user->id) }}">{{ $user->name }}</a></p>
                    </div>
                @endforeach
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
