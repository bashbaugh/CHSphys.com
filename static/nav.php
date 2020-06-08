<header>
	<script>
		function myFunction() {
		  var x = document.getElementById("xTopnav");
		  if (x.className === "topnav") {
		    x.className += " responsive";
		  } else {
		    x.className = "topnav";
		  }
		} 
	</script>
	<nav>
		<a href="/"><img src="/images/chsphysicslogo.png"></a>
		<div class="nav-foot"></div>
		<div id="head-back"></div>

		<div class="topnav" id="xTopnav">
		  <a class="active" id="duh"></a>
		  <a href="/about/">About</a>
		  <a href="/contact/">Contact</a>
		  <a href="/contact/join-us">Join!</a>
		  <a href="/resources/">Resources</a>
		  <a href="/projects/">Projects</a>
		  <a href="javascript:void(0);" class="icon" onclick="myFunction()">Menu
		    <i class="fa fa-bars"></i>
		  </a>
		</div>
		<hr>
	</nav>
</header>