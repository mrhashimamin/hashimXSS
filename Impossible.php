<?php
    include('main.php');
    // Safe CSP for secure Scripts 
    header("Content-Security-Policy: script-src 'self' 'unsafe-inline' http://localhost;");
    // Enable XSS filter in blocking mode
    header('X-XSS-Protection: 1; mode=block');
?>

<head>
    <title>hashimXSS: Mission Impossible</title>
</head>

<body>
    <main>
        <section class="first-sec">
            <h2>This page should be <span>Impossible</span> to attack with <span>XSS</span>!</h2>
            <h2>So do your best :D</h2>
        </section>
        <section class="challs">
            <h3 id="alerTxt">That's not a real search bar it's only made for this challenge.</h3>
            <form class="usrForm" action="" method="get">
                <input type="text" placeholder="Search with any words :)" name="searchQuery" minlength="1" maxlength="20" required>
                <input type="submit" value="Search" id="srchbuttn">
            </form>

            <?php
                $searchQry=$_GET['searchQuery'];
                // Encoding the special chars before reflecting it
                $searchQryEncdd=htmlspecialchars($searchQry);
                if($searchQry){
                    // Validating or Filtering user input
                    $finder=preg_match_all('#(alert|prompt|eval|script|confirm|src|new|Function|img|svg|iframe|on*)#i',$searchQry);
                    if($finder){
                        echo "</div>";
                        echo('<div class="chall"><p>XSS Detected..Try better :)</p></div>');
                    }else{
                    echo '<script>';
                    echo "document.write('<h2>Results for [ <span>' + '$searchQryEncdd' + '</span> ].</h2>');";
                    echo '</script>';
                    }
                }
            ?>
        </section>

        <section class="postsCont">

        <section class="posts">
            <div id="1" class="post">
                <img src="p1.webp">
                <h3>FREE PALESTINE &lt3</h3>
                <p>كانت وستظل حرة مستقلة.</p>
            </div>

            <div id="2" class="post">
                <img src="p2.webp">
                <h3>Hello, world!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero fugit harum amet labore distinctio dicta, nesciunt praesentium architecto adipisci illo sequi minus doloribus quam saepe nemo hic iste maiores. Ullam.</p>
            </div>

            <div id="3" class="post">
                <img src="p3.jpg">
                <h3>Black hat??</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero fugit harum amet labore distinctio dicta, nesciunt praesentium architecto adipisci illo sequi minus doloribus quam saepe nemo hic iste maiores. Ullam.</p>
            </div>

            <div id="4" class="post">
                <img src="p4.webp">
                <h3>The beauty of Ai</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero fugit harum amet labore distinctio dicta, nesciunt praesentium architecto adipisci illo sequi minus doloribus quam saepe nemo hic iste maiores. Ullam.</p>
            </div>

            <div id="5" class="post">
                <img src="p5.png">
                <h3>Manjaro | Good to start with Linux.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero fugit harum amet labore distinctio dicta, nesciunt praesentium architecto adipisci illo sequi minus doloribus quam saepe nemo hic iste maiores. Ullam.</p>
            </div>

            <div id="6" class="post">
                <img src="p6.jpg">
                <h3>Is github useful for me?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero fugit harum amet labore distinctio dicta, nesciunt praesentium architecto adipisci illo sequi minus doloribus quam saepe nemo hic iste maiores. Ullam.</p>
            </div>
        </section>
        </section>

    </main>
</body>

<footer>$ - I need your feedback on my <a href="https://github.com/mrhashimamin" target="_blank">github</a> - $</footer>