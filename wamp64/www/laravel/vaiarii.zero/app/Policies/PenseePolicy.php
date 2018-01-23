<?php
namespace App\Policies;
use App\User;
use App\Pensee;
use Illuminate\Auth\Access\HandlesAuthorization;
class PenseePolicy
{
    use HandlesAuthorization;
    public function delete(User $user, Pensee $pensee)
    {
        return $user->id == $pensee->user_id;
    }
}
