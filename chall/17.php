<?php
if(!isset($_GET['status'])) {
  header('Location: 17.php?status=s41db3k');
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
                  <span class="help-msg">Chall 17 — Clue : <span class="code">HTML Entities + URL decode</span> </span>
                </div>
              </div>
              <div class="terminal-line">
  
              <?php
	 if(isset($_GET['status'])) {
    $status =  $_GET['status'];

    $status = htmlentities($status);

    echo urldecode($status);

}
?>
                   <br><br>
                <span class="success">Happy</span> <span class="directory">hacking ^_^</span> <span class="user-input" id="userInput"></span>
              </div>
            </div>
            <br>
            <button style="align:right;" class="button is-info is-outlined is-small"><a href="/xss-labs">Home</a></button> | 
            <button style="align:right;" class="button is-link is-outlined is-small"><a href="16.php">Previous Chall</a></button>
            <button style="align:right;" class="button is-link is-outlined is-small"><a href="18.php">Next Chall</a></button>
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
<!--
/*
https://www.cdxy.me/?p=763
https://github.com/nuxsmin/sysPass/blob/master/inc/SP/Html/Html.class.php#L40
%26%23x22%26%23x3e%26%23x3c%26%23x73%26%23x76%26%23x67%26%23x2f%26%23x6f%26%23x6e%26%23x6c%26%23x6f%26%23x61%26%23x64%26%23x3d%26%23x61%26%23x6c%26%23x65%26%23x72%26%23x74%26%23x28%26%23x31%26%23x29%26%23x3e
*/
-->