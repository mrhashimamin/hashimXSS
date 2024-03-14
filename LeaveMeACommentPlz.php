<?php
    include('main.php');
?>
<head>
    <title>hashimXSS: Leave me a comment plz! </title>
</head>
<body>
    <main>
        <section class="first-sec">
            <h2>Welcome to <span>Leave me a comment..Plz</span>!</h2>
        </section>
        <section class="challs">
        <h2>Try to  execute <span>confirm(64)</span>.</h2>
        </section>
        <?php
            echo "<div class='commentsDiv'>";
        ?>
        <form action="" method="post" class="commForm">
            <input type="text" name="username" required placeholder="Your name goes here">
            <textarea name="usercomment" cols="30" rows="5" required placeholder="Enter your magic words :D"></textarea>
            <input type="submit" value="Send">
        </form>
        <?php
            $usrNm=$_POST['username'];
            $usrCm=$_POST['usercomment'];
            // Ah..shit, here we go again :D
            $usrNm=htmlspecialchars($usrNm);
            $finder=preg_match_all('#(alert|prompt|eval|script)#i',$usrCm);
            $finderNmIllgl=preg_match_all('#(alert|prompt|eval|script|confirm)#i',$usrNm);
            if($usrNm && $usrCm){
                if ($finder || $finderNmIllgl){
                    echo "</div>";
                    echo('<div class="chall">
                        <p>XSS Detected..Try better :)</p></div>');
                }else{
                    // Ah..shit, here we go again :D
                    $illglFinder=strpos($usrCm,"confirm");
                        if($illglFinder!==false){
                            $strMdf=substr($usrCm,$illglFinder,strlen("confirm"));
                            $strMdfied=base64_encode($strMdf);
                            $usrCm=substr_replace($usrCm,$strMdfied,$illglFinder,strlen("confirm"));
                        }
                    echo "<section class='commRes'><p>$usrNm's comment</p><p>$usrCm</p></section>";
                    echo "</div>";
                }
            }else{
                echo "</div>";
                echo('<div class="chall">
                    <p>Empty <span>comment</span> or <span>username</span>!</p></div>');
            }
        ?>

    </main>
</body>
<footer>$ - I need your feedback on my <a href="https://github.com/mrhashimamin" target="_blank">github</a> - $</footer>