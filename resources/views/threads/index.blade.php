<x-guest-layout>
<div class="container mx-auto py-4">
    <h1 class="text-6xl">Threads</h1>
        @foreach ($threads as $thread)
            <a href="{{ $thread->path() }}"> <h3 class="text-3xl py-4">{{ $thread->title }}</h3> </a>
            <p class="pb-1">{{ $thread->body }}</p>
            <hr>
        @endforeach
</div>
</x-guest-layout>
