<!DOCTYPE html>
<html>
  <head>
    <title>SATCOV ONLINE TRADING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo2.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../assets/css/konfirm_beli_style.css">
  </head>
  <body>
    <?php
      session_start();
      date_default_timezone_set("Asia/Jakarta");
      $_SESSION['lot'] = $_POST['lot'];
    ?>
    <center>
      <div class="kotak_login">
        <p class="tulisan_login">Verification</p>
        <form action="pages_konfirm_jual.php" method="post">
        <video src="" ></video>
            <br />
        <button id='flipCamera' hidden></button>

            <br>
          <input type="submit" class="tombol_buy" value="Verify">
        </form>
      </div>
    </center>
  </body>
  <script>
  var front = false;
var video = document.querySelector('video');
  document.getElementById('flipCamera').onclick = function() { front = !front; };
  var constraints = { video: { facingMode: (front? "user" : "environment"), width: 200, height: 200  } };
  navigator.mediaDevices.getUserMedia(constraints)
  .then(function(mediaStream) {
    video.srcObject = mediaStream;
    video.onloadedmetadata = function(e) {
    video.play();
};
})
.catch(function(err) { console.log(err.name + ": " + err.message); })
</script>
</html>