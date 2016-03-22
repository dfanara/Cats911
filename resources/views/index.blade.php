<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/normalize.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="">
  </head>
  <body>
    <div id="bg" style="background-color: #FFFFFF; position: absolute; top: 0; left: 0; right: 0; bottom: 0;">
      <!-- <img id="cat" src="" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-height: 60%; max-width: 100%;"> -->
      @foreach($pics as $pic)
        {!! $pic !!}
      @endforeach
    </div>
    
    <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script>
      var elements = document.getElementsByClassName("cat");

      function doRandom() {
        $("#bg").css({backgroundColor: "rgb(" + Math.round(Math.random() * 255) + ", " + Math.round(Math.random() * 255) + ", " + Math.round(Math.random() * 255) + ")"});
        $(".cat").hide();
        var url = elements[Math.floor(Math.random()*elements.length)];
        // $("#cat").attr("src", url);
        $(url).show();
      }

      $(window).on("load", function() {
        setInterval(doRandom, 100);
      })
    </script>
  </body>
</html>
