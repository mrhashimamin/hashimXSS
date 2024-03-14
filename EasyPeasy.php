<?php
    include('main.php');
?>
<head>
    <title>hashimXSS: EasyPeasy</title>
</head>
<body>
    <main>
        <section class="first-sec">
            <h2>Welcome to <span>EasyPeasy</span>!</h2>
        </section>
        <section class="challs">
            <h2>Try to <span>inject</span> this search form with <span>alert()</span> function.</h2>
            <form class="usrForm" action="" method="get">
                <input type="text" placeholder="Search with any words :)" name="userinputVal">
                <input type="submit" value="Search" id="srchbuttn">
            </form>
            <?php
                $userTxt=$_GET["userinputVal"];
                if($userTxt){
                    // Ah..shit, here we go again :D
                    $finder=preg_match_all('#(alert|eval)#i',$userTxt);
                    if($finder){
                        echo('<div class="chall">
                    <p>XSS Detected..Try better :)</p></div>');
                    }else{
                        echo('<div class="chall">
                        <p>Wow..Safe text!</p></div>');
                        echo('<div class="chall">
                    <p>');
                    echo($userTxt);
                    echo('</p></div>');
                    }
                }
            ?>
        </section>
    </main>
</body>
<footer>$ - I need your feedback on my <a href="https://github.com/mrhashimamin" target="_blank">github</a> - $</footer>