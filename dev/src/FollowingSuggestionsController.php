<?php
    include "models/FollowingSuggestionsModel.php";

    class FollowingSuggestionsController {

        private $suggestionsModel;

        public function __construct() {
            $this->suggestionsModel = new FollowingSuggestionsModel();
        }

        public function getFollowingOptions() {
            return $this->suggestionsModel->getFollowingOptions();
        }
    }
?>