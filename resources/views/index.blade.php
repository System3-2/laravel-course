<x-layout>
    @foreach ($posts as $post)
      <div class="wrapper">
        <h2>{{ $post->name }}</h2>
        <h3>{{ $post->email }}</h3>
        <h5>{{ $post->job }}</h5>
        <p>{{ $post->description }}</p>
      </div>

    @endforeach
</x-layout>

