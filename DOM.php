<?php
    include('main.php');
?>
<head>
    <title>hashimXSS: DOM!</title>
</head>
<body>
    <main>
        <section class="first-sec">
            <h2>DOM..<span>DOM</span>..DOM!</h2>
        </section>
        <section class="challs">
        <h2>Try to  execute <span>alert("Ha$h_1s_5o_Co0l")</span>.</h2>
        <h2>- <span>Reload</span> after typing your magic words :D -</h2>
        
        <!-- Ah..shit, here we go again :D -->
        <?php
            echo '<script src="DOM.js"></script>';
        ?>

        </section>

        <section class="postsCont">

        <section class="posts">
            <div id="1" class="post">
                <img src="1.jpg">
                <h3>Post-1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero fugit harum amet labore distinctio dicta, nesciunt praesentium architecto adipisci illo sequi minus doloribus quam saepe nemo hic iste maiores. Ullam.</p>
            </div>

            <div id="2" class="post">
                <img src="2.png">
                <h3>Post-2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero fugit harum amet labore distinctio dicta, nesciunt praesentium architecto adipisci illo sequi minus doloribus quam saepe nemo hic iste maiores. Ullam.</p>
            </div>

            <div id="3" class="post">
                <img src="3.jpg">
                <h3>Post-3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero fugit harum amet labore distinctio dicta, nesciunt praesentium architecto adipisci illo sequi minus doloribus quam saepe nemo hic iste maiores. Ullam.</p>
            </div>

            <div id="4" class="post">
                <img src="4.png">
                <h3>Post-4</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero fugit harum amet labore distinctio dicta, nesciunt praesentium architecto adipisci illo sequi minus doloribus quam saepe nemo hic iste maiores. Ullam.</p>
            </div>

            <div id="5" class="post">
                <img src="5.jpg">
                <h3>Post-5</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero fugit harum amet labore distinctio dicta, nesciunt praesentium architecto adipisci illo sequi minus doloribus quam saepe nemo hic iste maiores. Ullam.</p>
            </div>

            <div id="6" class="post">
                <img src="6.png">
                <h3>Post-6</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero fugit harum amet labore distinctio dicta, nesciunt praesentium architecto adipisci illo sequi minus doloribus quam saepe nemo hic iste maiores. Ullam.</p>
            </div>
        </section>
        </section>

    </main>
</body>

<footer>$ - I need your feedback on my <a href="https://github.com/mrhashimamin" target="_blank">github</a> - $</footer>