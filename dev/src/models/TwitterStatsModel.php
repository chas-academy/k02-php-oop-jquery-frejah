<?php
    class TwitterStatsModel {

        private $tweetCount = 4;
        private $followingCount = 12;
        private $followersCount = 12;
        private $likesCount = 13;

        public function __construct() {
        }

        public function getTweetCount() {
            return $this->tweetCount;
        }

        public function getFollowingCount() {
            return $this->followingCount;
        }

        public function getFollowersCount() {
            return $this->followersCount;
        }

        public function getLikesCount() {
            return $this->likesCount;
        }
    }
?>