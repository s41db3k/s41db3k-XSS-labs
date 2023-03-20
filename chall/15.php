
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
                  <span class="help-msg">Chall 15 — Clue : <span class="code">Regex Filter #2</span> </span>
                </div>
              </div>
              <div class="terminal-line">
  
              <?php

		if (isset($_POST['fname'])) {

      $name = $_POST['fname'];

      $name = preg_replace('/(?:\b(?:(?:type\b\W*?\b(?:text\b\W*?\b
(?:j(?:ava)?|ecma|vb)|application\b\W*?\bx-(?:java|vb))script|c(?:opyparentfolde
r|reatetextrange)|get(?:special|parent)folder|iframe\b.{0,100}?\bsrc)\b|on(?:(?:
mo(?:use(?:o(?:ver|ut)|down|move|up)|ve)|key(?:press|down|up)|c(?:hange|lick)|s(
?:elec|ubmi)t|(?:un)?load|dragdrop|resize|focus|blur)\b\W*?=|abort\b)|(?:l(?:ows
rc\b\W*?\b(?:(?:java|vb)script|shell|http)|ivescript)|(?:href|url)\b\W*?\b(?:(?:
java|vb)script|shell)|background-image|mocha):|s(?:(?:tyle\b\W*=.*\bexpression\b
\W*|ettimeout\b\W*?)\(|rc\b\W*?\b(?:(?:java|vb)script|shell|http):)|a(?:ctivexob
ject\b|lert\b\W*?\(|sfunction:))|<(?:(?:body\b.*?\b(?:backgroun|onloa)d|input\b.
*?\btype\b\W*?\bimage)\b| ?(?:(?:script|meta)\b|iframe)|!\[cdata\[)|(?:\.(?:(?:e
xecscrip|addimpor)t|(?:fromcharcod|cooki)e|innerhtml)|\@import)\b)/', '', $name);

			echo "<div style=\"text-align:center;font-size:1em;\">Hello, " . $name . "</div>";

		}
		else{

			echo '<form name="myForm" action="15.php" onsubmit="return validateForm()" method="post">
			<div class="siimple-form">
			<div class="siimple-form-title">Send a comment</div>
			<div class="siimple-form-field">
				<input type="text" class="siimple-input siimple-input--fluid" placeholder="s41db3k" name="fname">
			</div>
			<div class="siimple-form-field">
				<input class="siimple-btn siimple-btn--blue" type="submit"  value="Send">
            </div><br>
            click here to see <button><a href="filter-15.txt">regex filter</a></button>
			</div>
			</form>';

		}

?>
                   <br><br>
                <span class="success">Happy</span> <span class="directory">hacking ^_^</span> <span class="user-input" id="userInput"></span>
              </div>
            </div>
            <br>
            <button style="align:right;" class="button is-info is-outlined is-small"><a href="/xss-labs">Home</a></button> | 
            <button style="align:right;" class="button is-link is-outlined is-small"><a href="14.php">Previous Chall</a></button>
            <button style="align:right;" class="button is-link is-outlined is-small"><a href="16.php">Next Chall</a></button>
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