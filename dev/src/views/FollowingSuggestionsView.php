<?php
    class FollowingSuggestionsView {

        private $followingController;

        public function __construct($controller) {
            $this->followingController = $controller;
        }

        public function render() {
            $followingOptions = $this->followingController->getFollowingOptions();
            
            foreach ($followingOptions as $toFollow)
            {
                echo "<li class=\"media\" id=\"followSuggestion\">
                    <div class\"img\">{$toFollow['followerImg']}</div>
                    <div class=\"media-body\">
                    <button type=\"button\" class=\"close\" data-suggestion=\"#followSuggestion\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h6 class=\"mt-0 mb-1\">{$toFollow['followerTitle']}</h6>
                    <div class=\"small-text\">{$toFollow['followerSlogan']}</div>
                    <button type=\"button\" class=\"btn btn-dark btn-sm\" style=\"float: right\">
                    <i class=\"fab fa-twitter fa-1x\"></i> Follow
                    </button>
                    </div>
                    </li>";
            }
        }
    }

















?>