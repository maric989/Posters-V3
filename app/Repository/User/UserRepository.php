<?php

namespace App\Repository\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @param $userID
     * @return Collection
     */
    public function get($userID): Collection
    {
        return User::where('id',$userID)->get();
    }

    public function update($userID, $data)
    {

    }

    /**
     * @param $userID
     * @return mixed|void
     */
    public function delete($userID)
    {
        User::destroy($userID);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return User::all();
    }
}
