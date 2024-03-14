<?php
    include('main.php');
?>
<head>
    <title>hashimXSS: TryReflectMe</title>
</head>
<body>
    <main>
        <section class="first-sec">
            <h2>Welcome to <span>TryReflectMe</span>!</h2>
        </section>
        <section class="challs">
            <h2>Try to <span>inject</span> this page with <span>alert()</span> function.</h2>
            <h2>- Add your payload after => site.com/TryReflectMe.php<span>?xss=</span></h2>
            <?php
                $userTxt=$_GET["xss"];
                if($userTxt){
                    // Ah..shit, here we go again :D
                    $finder=preg_match_all('#(alert)#i',$userTxt);
                    if($finder){
                        echo('<div class="chall">
                    <p>XSS Detected..Try better :)</p></div>');
                    }else{
                        echo "<form class='usrForm' action='' method='get'>
                <input type='text' placeholder='Hey, I am a mystery box :D' name='xss' value='$userTxt'></form>";
                        echo('<div class="chall">
                    <p>Wow..Safe text!</p></div>');
                    }
                }
            ?>
        </section>
    </main>    
</body>

<footer>$ - I need your feedback on my <a href="https://github.com/mrhashimamin" target="_blank">github</a> - $</footer>