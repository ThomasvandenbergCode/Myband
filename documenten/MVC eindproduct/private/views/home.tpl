<header>


    <div class="navbar">
        <a href="index.php?page=home"><i class="fas fa-home"></i>HOME</a>
        <a href="index.php?page=blog"><i class="fab fa-blogger"></i>BLOG</a>
        <a href="index.php?page=contact"><i class="fas fa-address-card"></i>CONTACT</a>
    </div>

    <div class="admin-login"><a href="index.php?page=login"><i class="fas fa-lock"></i>ADMIN CENTER</a></div>

</header>


<div id="bannerDiv">
    <img src="css/liquicitylogo.png" id="logo">
</div>

<script src="js/script.js"> </script>





<main>




        <div>
            {foreach from=$columns item=column}
            <div class="column">
                <h1>{$column[1]}</h1>    <br>
                <p>{$column[2]}</p>
                <img class="columnimage" src="{$column[3]}" alt="foobar" />
            </div>
            {/foreach}

        </div>








</main>


<footer>

    <div class="smallfootbar"></div>
    <div class="footerbar"></div>

    <p class="copyright">© 2018 THOMAS VAN DEN BERG ALL RIGHTS RESERVED</p>
    <div class="row">

        <div class="iconcollumn"><a href="www.github.com"><img class="icons" src="css/github.png" alt="icon" target="_blank"/></a></div>
        <div class="iconcollumn"><a href="www.github.com"><img class="icons" src="css/facebook.png" alt="icon" target="_blank"/></a></div>
        <div class="iconcollumn"><a href="www.github.com"><img class="icons" src="css/youtube.png" alt="icon" target="_blank"/></a></div>
        <div class="iconcollumn"><a href="www.github.com"><img class="icons" src="css/googleplus.png" alt="icon" target="_blank"/></a></div>
        <div class="iconcollumn"><a href="linkedin.com"><img class="icons" src="css/linkedin.png" alt="icon" target="_blank"/></a></div>
    </div>

    <div class="underbar"></div>
    <div class="smallunderbar"></div>
</footer>

