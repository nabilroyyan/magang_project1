<x-layout>


    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post )
        
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-2 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-gray-500 text-base">
            <a href="">{{ $post['Author'] }}</a> | 12 maret 2004
        </div>
        <p class="mb-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
        <a class="font-medium text-blue-400 hover:underline" href="/posts/{{ $post }}">read more &raquo; </a>
    </article>
    @endforeach
  
  </x-layout>