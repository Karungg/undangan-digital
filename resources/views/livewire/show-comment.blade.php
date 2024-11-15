<div>
    <div role="alert" class="alert mb-5" x-data="{ show: false }" x-show="show"
        x-on:comment-created.window="show = true; setTimeout(() => show = false, 3000)" x-transition.duration.500ms>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info h-6 w-6 shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span>Ucapan Berhasil Dikirim.</span>
    </div>

    @foreach ($comments as $comment)
        <div class="chat chat-start">
            <div class="chat-header">
                {{ $comment->name }}
                <time class="text-xs opacity-50">{{ $comment->created_at->diffForHumans() }}</time>
            </div>
            <div class="chat-bubble">{{ $comment->words }}</div>
        </div>
    @endforeach

    <div class="w-80 sm:w-96 lg:w-96 mt-5">
        {{ $comments->links(data: ['scrollTo' => false]) }}
    </div>
</div>
