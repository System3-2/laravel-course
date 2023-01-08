<x-layout>
    @foreach ($user as $user)
    <div class="wrapper">
      <h2>{{ $user->name }}</h2>
      <h3>{{ $user->email }}</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore modi explicabo dicta, quia perspiciatis ipsa!</p>
    </div>
    @endforeach
</x-layout>
