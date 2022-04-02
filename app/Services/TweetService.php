<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Tweet;

class TweetService
{
    public function getTweets()
    {
        return Tweet::orderBy('created_at', 'DESC')->get();
    }

    public function checkOwnTweet(int $userId, int $tweetId): bool
    {
        $tweet = Tweet::where('id', $tweetId)->first();
        if (!$tweet) {
            return true;
        }

        return $tweet->user_id === $userId;
    }
}
