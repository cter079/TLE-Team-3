<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Chatbot in PHP | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="phone">
    <div class="wrapper">               
        <div class="title">                    
gAppy</div>
<button onclick="plusDivs(-1)">Notificaties</button>
<button    onclick="plusDivs(+1)">Chats</button>
<div class="mySlides"><div class="form">
    S
    </div></div>
<div class="mySlides">
    <div class="form">
    <div class="search-box">
		  <div class="input-wrapper">
			<i class="material-icons">search</i>
			<input placeholder="Search here" type="text">
		  </div>
		</div>
		<div class="friend-drawer friend-drawer--onhover">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/robocop.jpg" alt="">
		  <div class="text">
			<h6>Robo Cop</h6>
			<p class="text-muted">Hey, you're arrested!</p>
		  </div>
		  <span class="time text-muted small">13:21</span>
		</div>
		<hr>
		<div class="friend-drawer friend-drawer--onhover">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/optimus-prime.jpeg" alt="">
		  <div class="text">
			<h6>Optimus</h6>
			<p class="text-muted">Wanna grab a beer?</p>
		  </div>
		  <span class="time text-muted small">00:32</span>
		</div>
		<hr>
		<div class="friend-drawer friend-drawer--onhover ">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/real-terminator.png" alt="">
		  <div class="text">
			<h6>Skynet</h6>
			<p class="text-muted">Seen that canned piece of s?</p>
		  </div>
		  <span class="time text-muted small">13:21</span>
		</div>
		<hr>
		<div class="friend-drawer friend-drawer--onhover">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/termy.jpg" alt="">
		  <div class="text">
			<h6>Termy</h6>
			<p class="text-muted">Im studying spanish...</p>
		  </div>
		  <span class="time text-muted small">13:21</span>
		</div>
		<hr>
		<div class="friend-drawer friend-drawer--onhover">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/rick.jpg" alt="">
		  <div class="text">
			<h6>Richard</h6>
			<p class="text-muted">I'm not sure...</p>
		  </div>
		  <span class="time text-muted small">13:21</span>
		</div>
		<hr>
		<div class="friend-drawer friend-drawer--onhover">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/rachel.jpeg" alt="">
		  <div class="text">
			<h6>XXXXX</h6>
			<p class="text-muted">Hi, wanna see something?</p>
		  </div>
		  <span class="time text-muted small">13:21</span>
		</div>
	  </div>
	
    </div></div>
    <button class="home-button" style="background-color: black;" onclick="window.location.href='index.php';"></button>

    </div>
    <script>
    var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
    </script>

</body>

</html>