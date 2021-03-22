<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/app.css">
  <title>POSTS</title>
</head>
<body>
  
  <div id="posts">
  
    <div class="post">
      <div>This is post one</div>
      <button class="like" onclick="like(); return false">like</button>
      <button class="dislike" onclick="dislike(); return false">dislike</button>    
    </div>

  
  </div>


  <script>
    async function like(){
      let button = event.target     
      let button_parent = button.parentNode
      console.log(button_parent) 
      let conn = await fetch('/posts/1/1', {
        method:"POST"
      })
      // if( conn.status != 200 ){ alert("something went wrong") }
      if( ! conn.ok ){ 
        alert("sorry, we are updating our servers") 
        return
      }
      
      button_parent.querySelector(".like").classList.add('hide')
      button_parent.querySelector(".dislike").classList.remove('hide')
    }

    async function dislike(){
      let button = event.target 
      let button_parent = button.parentNode     
      let conn = await fetch('/posts/1/0', {
        method:"POST"
      })
      // if( conn.status != 200 ){ alert("something went wrong") }
      if( ! conn.ok ){ 
        alert("sorry, we are updating our servers") 
        return
      }
      button_parent.querySelector(".dislike").classList.add('hide')
      button_parent.querySelector(".like").classList.remove('hide')
    }



  </script>


</body>
</html>