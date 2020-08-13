<?php

namespace App\Policies;

use App\Channel;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChannelPolicy
{
    use HandlesAuthorization;

   public function edit(User $user, Channel $channel)
   {
       return $user->id == $channel->user_id;
   }

   public function update(User $user, Channel $channel)
   {
       return $user->id == $channel->user_id;
   }
}
