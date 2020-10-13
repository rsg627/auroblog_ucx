<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\post;
use Illuminate\Support\Str;
use GrahamCampbell\Markdown\Facades\Markdown;

class PostSaving {

    use Dispatchable,
        InteractsWithSockets,
        SerializesModels;

    public $order;

    /**
     * Create a new event instance.
     *
     * @param  \App\Models\Order  post
     * @return void
     */
    public function __construct(post $post) {
        $post->slug = Str::uuid();
        $post->content_md = Markdown::convertToHtml($post->content);
    }

}
