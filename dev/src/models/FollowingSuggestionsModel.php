<?php
    class FollowingSuggestionsModel {

        public function __construct() {
        }

        private $followingOptions = [
            [
                'followerTitle' => "WWF",
                'followerSlogan' => "World Wildlife Fund: WWF - Endangered Species Conservation",
                'followerImg' => "<img class=\"mr-3\" id=\"profile-img\" src=\"http://placebear.com/64/64\" alt=\"Generic placeholder image\">"
            ],
            [
                'followerTitle' => 'David Attenborough',
                'followerSlogan' => 'English broadcaster and naturalist',
                'followerImg' => "<img class=\"mr-3\" id=\"profile-img\" src=\"http://placebear.com/64/64\" alt=\"Generic placeholder image\">"
            ],
            [
                'followerTitle' => 'Greenpeace',
                'followerSlogan' => 'Saving animals and wildlife since like forever.',
                'followerImg' => "<img class=\"mr-3\" id=\"profile-img\" src=\"http://placebear.com/64/64\" alt=\"Generic placeholder image\">"
            ]
        ];



        // public function getFollowerTitle() {
        //     return $this->followerTitle;
        // }

        // public function getFollowerSlogan() {
        //     return $this->followerSlogan;
        // }

        // public function getFollowerImg() {
        //     return $this->followerImg;
        // }

        public function getFollowingOptions() {
            return $this->followingOptions;
        }

    }











?>