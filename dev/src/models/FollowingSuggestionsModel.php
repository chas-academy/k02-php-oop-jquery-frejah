<?php
    class FollowingSuggestionsModel {

        public function __construct() {
        }

        private $followingOptions = [
            [
                'followerTitle' => "WWF",
                'followerSlogan' => "World Wildlife Fund: WWF - Endangered Species Conservation",
                'followerImg' => "http://placebear.com/64/64"
            ],
            [
                'followerTitle' => 'David Attenborough',
                'followerSlogan' => 'English broadcaster and naturalist',
                'followerImg' => "http://placebear.com/64/64"
            ],
            [
                'followerTitle' => 'Greenpeace',
                'followerSlogan' => 'Saving animals and wildlife since like forever.',
                'followerImg' => "http://placebear.com/64/64"
            ]
        ];

        public function getFollowingOptions() {
            return $this->followingOptions;
        }

    }











?>