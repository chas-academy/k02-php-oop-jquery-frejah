<?php
    include "models/FollowingSuggestionsModel.php";

    class FollowingSuggestionsController {

        private $suggestionsModel;

        public function __construct() {
            $this->suggestionsModel = new FollowingSuggestionsModel();
        }

        // public function getFollowerTitle() {
        //     return $this->suggestionsModel->getFollowerTitle();
        // }

        // public function getFollowerSlogan() {
        //     return $this->suggestionsModel->getFollowerSlogan();
        // }

        // public function getFollowerImg() {
        //     return $this->suggestionsModel->getFollowerImg();
        // }

        public function getFollowingOptions() {
            return $this->suggestionsModel->getFollowingOptions();
        }
    }
?>