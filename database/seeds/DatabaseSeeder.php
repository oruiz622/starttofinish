<?php

use App\Channel;
use App\User;
use App\Subscription;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1 =  factory(User::class)->create([
            'email' => 'johndoe@gmail.com'
        ]);

        $user2 =  factory(User::class)->create([
            'email' => 'janedoe@gmail.com'
        ]);

        $channel1 = factory(Channel::class)->Create([
            'user_id' => $user1->id
        ]);

        $channel2 = factory(Channel::class)->Create([
            'user_id' => $user2->id
        ]);

        $channel1->subscriptions()->create([
            'user_id' => $user2->id
        ]);

        $channel2->subscriptions()->create([
            'user_id' => $user1->id
        ]);

        factory(Subscription::class, 100)->create([
            'channel_id' => $channel1->id
        ]);

        factory(Subscription::class, 190)->create([
            'channel_id' => $channel2->id
        ]);
    }
}
