<?php
    class TweetsView {

        private $tweetsController;

        public function __construct($controller) {
            $this->tweetsController = $controller;
        }

        public function render() {
            $tweets = $this->tweetsController->getTweets();

        foreach($tweets as $tweet)
        {
            echo "<div class=\"list-container\">
            <li class=\"media\">
            <div class\"img\"><img class=\"mr-3\" id='profile-img' src=\"{$tweet['tweetImg']}\" alt=\"Generic placeholder image\"></div>
            <div class=\"media-body\">
            <button type=\"button\" class=\"close\" data-suggestion=\"#followSuggestion\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
            </button>
            <h5 class=\"mt-0 mb-1\">{$tweet['tweetSubject']}</h5>
            <p>{$tweet['tweetText']}</p>
            </div>
            </li>
            </div>";
        }
    }
}






















?>