<x-layout :title="$title">
  
  @foreach ($posts as $post)

  <article class="py-8 max-w-3xl border-b border-gray-300">
    <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
      <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
    </a>
    <div class="font-extralight text-gray-800">
      <p><a href="#">{{ $post['author'] }}</a> | 1 Jan 2025</p>
    </div>
    <p class="my-4 font-light">{{ Str::limit($post['body'] ?? '', 100) }}</p>
    <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-600 hover:underline">Read more &raquo;</a>
  </article>
  
  @endforeach
  
</x-layout>