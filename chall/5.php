<?php
if (!isset($_COOKIE['labs-s41db3k'])) {
	setcookie('labs-s41db3k', 'labs-s41db3k', time() + (86400 * 30), "/",null,null,true);
	header("Refresh:0");
}
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>S41db3k | XSS Labs</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css'>
<link rel="stylesheet" href="./style.css">
  </head>
  <body>
<!-- partial:index.partial.html -->
<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container">
      <div class="columns">
        <div class="column is-3 is-flex">
          <div class="column-child sidebar shadow">
            <div class="sidebar-header has-text-centered"><br>
            <div class="photo"><img src="img/logo.png" width="250px"/></div>              
            <h5>Cross-site scripting labs for web application security enthusiasts</h5>
              <div class="social-icons">
                <a href="https://github.com/s41db3k"><i class="fab fa-github icon"></i></a>
              </div>
              
            </div>
          </div>
        </div>
        <div class="column is-flex">
          <div class="column-child terminal shadow">
            <div class="terminal-bar dark-mode">
              <div class="icon-btn close"></div>
              <div class="icon-btn min"></div>
              <div class="icon-btn max"></div>
              <div class="terminal-bar-text is-hidden-mobile dark-mode-text">root@s41db3k</div>
            </div>
            <div class="terminal-window primary-bg" onclick="document.getElementById('dummyKeyboard').focus();">
              <div class="terminal-output" id="terminalOutput">
                <div class="terminal-line">
                  <span class="help-msg">Chall 5 — Clue : <span class="code">Cookie</span> </span>
                </div>
              </div>
              
              <div class="terminal-line">
  
<?php
if (isset($_COOKIE['labs-s41db3k'])) {


    echo "<br><span style=\"font-size:1em;\">Current value supplied by <b>labs-s41db3k</b> cookie is: </span><br>" . (string)$_COOKIE['labs-s41db3k'] . '';

}

?>   
                    <br>
                   <br>
                <span class="success">Happy</span> <span class="directory">hacking ^_^</span> <span class="user-input" id="userInput"></span>
              </div>
            </div>
            <br>
            <button style="align:right;" class="button is-info is-outlined is-small"><a href="/xss-labs">Home</a></button> | 
            <button style="align:right;" class="button is-link is-outlined is-small"><a href="4.php">Previous Chall</a></button>
            <button style="align:right;" class="button is-link is-outlined is-small"><a href="6.php">Next Chall</a></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        Support by <i class="fas fa-heart icon"></i> S41db3k.
      </p>
    </div>
  </footer>
</section>
<!-- partial -->
  <script src='https://use.fontawesome.com/releases/v5.3.1/js/all.js'></script><script  src="./script.js"></script>

</body>

</html>