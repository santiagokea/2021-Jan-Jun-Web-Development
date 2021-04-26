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
    // People prof. exp. use this approach
    var search_timer // used to stop the search_timer
    function search(){
      if(search_timer){ clearTimeout(search_timer) }
      if(event.target.value.length >= 2){
        search_timer = setTimeout( function(){
        console.log("searching...")
        }, 500 )
      }
    }
  </script>


</body>
</html>