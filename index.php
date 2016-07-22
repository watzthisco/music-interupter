<html>
<head>
  <script>
  $('.my_selector').click(function(){
   $.get('https://music-interupter.herokuapp.com/session', {}, function(data){
        $(#sessions).html(data);
   });
  });
  </script>
</head>
<body>
  Open Sessions: <div id="sessions"></div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</body>
</html>
