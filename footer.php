
<footer>
    <div class="footer-top">
        <div class="container wrapper">
            <div class="contacts">
                <h3>Contact us</h3>
                <div class="location">55 Main St. Toronto, ON M1H 3A5</div>
                <div class="phone">(416) 555-5252</div>
                <div class="email">hello@treehouse.com</div>
            </div>
            <div class="posts">
                <h3>Latest posts</h3>
                <?php foreach($pageData['blog']['text'] as $id => $value) :?>
                    <div class="latest-<?=$value['type']?>"><a href="/page.php?id=<?=$id?>"><?=$value['name']?></a></div>
                <?php endforeach; ?>
            </div>
            <div class="tweets">
                <h3>latest tweets</h3>
                <div class="tweet-item">
                    <div class="tweet-text">Confucius: Life is really simple, but we insist on making it complicated. 
                    #famousquotes</div>
                    <div class="tweet-time">8 mins ago</div>
                </div>
                <div class="tweet-item">
                    <div class="tweet-text">Grab the Free Treehouse web template at FreebiesXpress! #freebies #templates  2 days ago
                    </div>
                    <div class="tweet-time">2 days ago</div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container wrapper">
            <div class="copyrigth">© Copyright 2014 FreebiesXpress.com</div>
            <div class="social">
                <a class="twitter" href="#"></a>
                <a class="facebook" href="#"></a>
                <a class="pinterest" href="#"></a>
                <a class="google" href="#"></a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>