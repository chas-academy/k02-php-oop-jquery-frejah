<?php
    class TweetsModel {
        public function __construct() {
        }

        private $tweets = [
            [
                'tweetSubject' => "List-based media object",
                'tweetText' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.',
                'tweetImg' => "https://placekitten.com/96/139"
            ],
            [
                'tweetSubject' => "List-based media object",
                'tweetText' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.',
                'tweetImg' => "https://placekitten.com/96/139"
            ],
            // [
            //     'tweetSubject' => "List-based media object",
            //     'tweetText' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.',
            //     'tweetImg' => "<img class=\"mr-3\" id='profile-img' src=\"https://placekitten.com/96/139\" alt=\"Generic placeholder image\">"
            // ],
            // [
            //     'tweetSubject' => "List-based media object",
            //     'tweetText' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.',
            //     'tweetImg' => "<img class=\"mr-3\" id='profile-img' src=\"https://placekitten.com/96/139\" alt=\"Generic placeholder image\">"
            // ],
            // [
            //     'tweetSubject' => "List-based media object",
            //     'tweetText' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.',
            //     'tweetImg' => "<img class=\"mr-3\" id='profile-img' src=\"https://placekitten.com/96/139\" alt=\"Generic placeholder image\">"
            // ]
        ];

        public function getTweets() {
            return $this->tweets;
        }
    }





















?>