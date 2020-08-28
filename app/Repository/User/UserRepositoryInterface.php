<?php

namespace App\Repository\User;

interface UserRepositoryInterface
{
    /**
     * @param $userID
     * @return mixed
     */
    public function get($userID);

    /**
     * @return mixed
     */
    public function all();

    /**
     * @param $userID
     * @return mixed
     */
    public function delete($userID);

    /**
     * @param $userID
     * @param array $data
     * @return mixed
     */
    public function update($userID, array $data);
}
