<?php
    class TwitterStatsView {

        private $statsController;

        public function __construct($controller) {
            $this->statsController = $controller;
        }

        public function render() {
            echo "<div class=\"col-md-6 col-md-8\">
                <a href=\"#\" class=\"profile-stats\">Tweets<span> {$this->statsController->getTweetCount()} </span></a>
                <a href=\"#\" class=\"profile-stats\">Following<span> {$this->statsController->getFollowingCount()} </span></a>
                <a href=\"#\" class=\"profile-stats\">Followers<span> {$this->statsController->getFollowersCount()} </span></a>
                <a href=\"#\" class=\"profile-stats\">Likes<span> {$this->statsController->getLikesCount()} </span></a>
            </div>";
        }
    }

    class TwitterStatsViewAlt {

        private $statsController;

        public function __construct($controller) {
            $this->statsController = $controller;
        }

        public function render() {
            echo "<div class=\"col-md-6 col-md-8\">
                Tweets: {$this->statsController->getTweetCount()} |
                Following: {$this->statsController->getFollowingCount()} |
                Followers: {$this->statsController->getFollowersCount()} |
                Likes: {$this->statsController->getLikesCount()}
            </div>";
        }
    }
    
?>