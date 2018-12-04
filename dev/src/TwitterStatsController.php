<?php
    include "models/TwitterStatsModel.php";

    class TwitterStatsController {

        private $statsModel;

        public function __construct() {
            $this->statsModel = new TwitterStatsModel();
        }

        public function getTweetCount() {
            return $this->statsModel->getTweetCount();
        }

        public function getFollowingCount() {
            return $this->statsModel->getFollowingCount();
        }

        public function getFollowersCount() {
            return $this->statsModel->getFollowersCount();
        }

        public function getLikesCount() {
            return $this->statsModel->getLikesCount();
        }
    }
?>