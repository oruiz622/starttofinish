<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Jobs\Videos\ConvertForStreaming;
use App\Jobs\Videos\CreateVideoThumbnail;

class UploadVideoController extends Controller
{
    public function index(Channel $channel)
    {
        return view('channels.upload', [
            'channel' => $channel
        ]);
    }

    public function store(Channel $channel)
    {
        $video = $channel->videos()
            ->create([
                'title' => request()->title,
                'path'  => request()->video->store("channels/{$channel->id}")
            ]);

        // Dispatch job for creating thumbnail from video screenshot
        $this->dispatch(new CreateVideoThumbnail($video));

        // Dispatch to jobs for Streaming
        $this->dispatch(new ConvertForStreaming($video));

        return $video;
    }
}
