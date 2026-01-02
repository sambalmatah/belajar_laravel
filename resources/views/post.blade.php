<x-layout :title="$title">

  <article class="py-8 max-w-3xl border-b border-gray-300">
    <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
    <div class="font-extralight text-gray-800">
      <p><a href="#">{{ $post->author->name }}</a> | 1 Jan 2025</p>
    </div>
    <p class="my-4 font-light">{{ $post['body'] }}</p>
    <a href="/posts/" class="font-medium text-blue-600 hover:underline"> &laquo; Back to All Blog</a>
  </article>
  
</x-layout>