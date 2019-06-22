<html>
  <head>
    <!-- Load the latest version of TensorFlow.js -->
    <script src="https://unpkg.com/@tensorflow/tfjs"></script>
    <script src="https://unpkg.com/@tensorflow-models/mobilenet"></script>
    <script src="https://unpkg.com/@tensorflow-models/knn-classifier"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Germania+One">
    <link rel="stylesheet" href="style.css">

    <title>Breakout</title>

  </head>
  <!-- The scrollable area -->
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- The navbar - The <a> elements are used to jump to a section in the scrollable area -->
<nav class="navbar navbar-expand-lg navbar-light " style="background-color:7D7461">
  <a class="navbar-brand" href="#">Bre-AI-k Out</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#howtoplay">How to play</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#howitworks">How it works</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#github">Git Hub</a>
      </li>
 

    </ul>

  </div>
</nav>

<br>
<br>
<div class="container">
  <div class= "row">
    <div class="col-12">
      <h1>Bre-AI-k Out </h1>
      <br>
    </div>
  </div>
  <div class= "row">
    <div class="col-4">
    </div>
    <div class="col-4">
      <div id="gameover">
        <img src="IMG/GameOver.png" alt="" id="gameoverIMG">
        <button id="restart">Play Again</button>
      </div>
      <canvas id="breakout" height="500" width="350">  </canvas>
    </div>
  </div>

  <br>

  <!-- Progress Bars -->
    <div class= "row">
      <div class="col-6">
        <div class="progress" id="left-bar">
          <div class="progress-bar" role="progressbar" aria-valuenow="0"
              aria-valuemin="0" aria-valuemax="100" id="left-bar-progress" style="background-color:39304A">
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="progress" id="right-bar">
          <div class="progress-bar" role="progressbar" aria-valuenow="0"
            aria-valuemin="0" aria-valuemax="100" id="right-bar-progress" style="background-color:39304A">
          </div>
        </div>
      </div>
    </div>

    <br>

    <!-- Buttons and Cam -->
    <div class="row">
      <div class="col-4">
        <button id="class-left" class="btn btn-dark" style="background-color:39304A"><h2>Left<h2></button>
      </div>
      <div class="col-4">
        <video autoplay="true" id="webcam" width="350" height="224"></video>
        </div>
      <div class="col-4">
        <button id="class-right" class="btn btn-dark" style="background-color:39304A"><h2>Right<h2></button>
      </div>
    </div>

    <br>

<!-- How to play -->
    <div class="row">
      <div class="col-12">
        <div id="howtoplay">
          <h1>How to play</h1>
          <p>Move your head to a location and take a couple photos by clicking left or right.</p>
            <p>this will regisiter that location as moving the paddle left or right.</p>
            <p> take around 10 photos for each movement, the more the better the AI will know what to do!<p>
            <p> Press the Space bar or click the game to start! </p>
        </div>
      </div>
    </div>

    <br>

<!-- How it works -->
    <div class="row">
      <div class="col-12">
        <div id="howitworks">
          <h1>How it works</h1>
          <p>This website is using a machine learning A.I called the <a href="https://www.quora.com/What-is-MobileNet">MobileNet</a> architecture</p>
          <p>By taking photos, it will regionise what is special about it and place it into two categories. Left or Right </p>
          <p>Then when you are playing, it will continusly watch the camera and when your position fits into one of the two categories, it will move the paddle</p>
          <p>Don't worry, these photos are stored locally and gets deleted when you leave the website </p>
        </div>
      </div>
    </div>

    <br>
    <br>
    
<!-- Github -->
    <div class="row">
      <div class="col-12">
        <div id="github">
          <div class="buttonHolder">
            <a href="https://github.com/DejaBallard/NMIT-WEB701-Project"><button class="btn btn-dark" style="background-color:39304A"><h2>GitHub Link<h2></button>
</a>
          </div>
        </div>
      </div>
    </div>
<br>
<br>
<!-- Container END -->
</div>
  <script src="components.js"></script>
    <script src="game.js"></script>
    <!-- Load index.js after the content of the page -->
   <!-- <script src="index.js"></script> -->


</body>
</html>