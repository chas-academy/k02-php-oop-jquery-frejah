<?php

class UserModel {

    public function __construct() {
    }

    public $userInfo = [
        'userImg' => "images/lama_face.jpg",
        'userBackground' => "images/house_header.jpg",
        'userName' => "Chewpaca de Paca",
        'userText' => "Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus."
    ];

    public function getUserBackground() {
        return $this->userInfo['userBackground'];
    }

    public function getUserImg() {
        return $this->userInfo['userImg'];
    }

    public function getUserName() {
        return $this->userInfo['userName'];
    }

    public function getUserText() {
        return $this->userInfo['userText'];
    }
}

