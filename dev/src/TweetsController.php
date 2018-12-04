<?php
    include "models/TweetsModel.php";

    class TweetsController {

        private $tweetsModel;

        public function __construct() {
            $this->tweetsModel = new TweetsModel();
        }

        public function getTweets() {
            return $this->tweetsModel->getTweets();
        }
    }
?>