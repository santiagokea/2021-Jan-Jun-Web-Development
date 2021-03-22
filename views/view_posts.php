<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POSTS</title>
</head>
<body>
  
  <div id="posts">
  
    <div class="post">
      <div>This is post one</div>
      <form onsubmit="like(); return false">
        <button>like</button>
      </form>
      <form onsubmit="dislike(); return false">
        <button>dislike</button>
      </form>      
    </div>

  
  </div>


  <script>
    async function like(){

      let form = event.target
      
      let conn = await fetch('/posts/1/1', {
        method:"POST"
      })
      // if( conn.status != 200 ){ alert("something went wrong") }
      if( ! conn.ok ){ 
        alert("sorry, we are updating our servers") 
        return
      }

      console.log(form)
      
    }
  </script>


</body>
</html>