<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form onsubmit="return false">
    <input name="search_for" type="text" oninput="search()">
  </form>

  <script>
    var timer // used to stop the timer
    function search(){
      if(timer){ clearTimeout(timer) }
      if(event.target.value.length >= 2){
        timer = setTimeout( function(){
        console.log("searching...")
        }, 500 )
      }
    }
  </script>


</body>
</html>