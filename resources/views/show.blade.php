<x-layout>
    @foreach ($user as $user)
        <h3>{{ $user->name }}</h3>
        <small>{{ $user->email }}</small>
    @endforeach
</x-layout>
