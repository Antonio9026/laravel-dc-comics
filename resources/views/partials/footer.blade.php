@php
    
$footerLinks = [
    [
        'category' => 'DC COMICS',
        'links' => [
            'Caracters', 'Comics', 'Movies', 'Games', 'Collectibles', 'Videos', 'Fans', 'News'
        ],
    ],
    [
        'category' => 'SHOP',
        'links' => [
            'Shop DC', 'Shop DC Collectibles',
        ],
    ],
    [
        'category' => 'DC',
        'links' => [
            'Term Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Subscriptions', 'Talent Workshops', 'Ratings', 'Shop Help', 'Contact Us',
        ],
    ],
    [
        'category' => 'SITES',
        'links' => [
            'DC', 'Mad Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',
        ],
    ],
];
@endphp
<footer>
    <div class="footer-main">
        <div class="foot-container">
            <nav>
                @foreach ( $footerLinks as $category )
                    
                
                <div class="nav-col">
                    <h2>{{$category['category']}}</h2>
                    @foreach ( $category['links'] as $link )

                    <ul class="footer-list">
                        <li class="footer-list-item"><a class="footer-link" href="#">{{$link}}</a></li>
                    </ul>
                    @endforeach
                    
                </div>
               
                @endforeach
            </nav>
        
        </div>
    </div>
    <div id="footBottom">
        <div class="foot-bottom-container">
            <button>SIGN-UP NOW!</button>
            <!-- social media -->
            <div class="socialMedia">
                <span>
                    <a href="#">FOLLOW US</a>
                </span>
                <ul class="foot-bottom-list">
                    <li class="foot-bottom-list-item">
                        <a href="#">
                            <img src="/img/footer-facebook.png" alt="">
                        </a>
                    </li >
                    <li class="foot-bottom-list-item">
                        <a href="#">
                            <img src="/img/footer-twitter.png" alt="">
                        </a>
                    </li>
                    <li class="foot-bottom-list-item">
                        <a href="#">
                            <img src="/img/footer-youtube.png" alt="">
                        </a>
                    </li>
                    <li class="foot-bottom-list-item">
                        <a href="#">
                            <img src="/img/footer-pinterest.png" alt="">
                        </a>
                    </li>
                    <li class="foot-bottom-list-item">
                        <a href="#">
                            <img src="/img/footer-periscope.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
