<?php

use App\Models\User;

class USERDTO
{
    public $userId = 'userId';
    public $userName = 'userName';
    public $userEmail = 'userEmail';
    public $userPassword = 'userPassword';

    public function getUsersViewData()
    {
        $userData = User::all()->toArray();

        $returnData = array();
        foreach ($userData as $user) {
            array_push($returnData, array(
                $this->userId => $user['id'],
                $this->userName => $user['name'],
                $this->userEmail => $user['email'],
            ));
        }

        return $returnData;
    }
}
