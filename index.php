<?php
    include('main.php');
?>
<head>
    <title>hashimXSS: Cross-Site-Scripting Game</title>
</head>
<main>
        <section class="first-sec">
            <h2>Welcome to <span>hashimXSS</span> Game!</h2>
        </section>

        <section class="posts" id="index">
            <section class="challs">
                <h2>Now choose a <span>challenge</span>!</h2>
                <div class="chall">
                    <a href="EasyPeasy.php" target="_blank">Easy..Peasy!</a>
                </div>
                <div class="chall">
                    <a href="TryReflectMe.php" target="_blank">TryReflectMe</a>
                </div>
                <div class="chall">
                    <a href="LeaveMeACommentPlz.php" target="_blank">Leave me a comment..Plz</a>
                </div>
                <div class="chall">
                    <a href="DOM.php" target="_blank">DOM..DOM..DOM</a>
                </div>
                <div class="chall">
                    <a href="Impossible.php" target="_blank">Mission: Impossible</a>
                </div>
            </section>
        </section>

        <footer>$ - I need your feedback on my <a href="https://github.com/mrhashimamin" target="_blank">github</a> - $</footer>
        
    </main>