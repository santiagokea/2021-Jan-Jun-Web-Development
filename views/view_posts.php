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
      <form class="like" onsubmit="like(); return false">
        <button>like</button>
      </form>
      <form class="dislike" onsubmit="dislike(); return false">
        <button>dislike</button>
      </form>      
    </div>

  
  </div>


  <script>
    async function like(){
      let form = event.target     
      let form_parent = form.parentNode
      console.log(form_parent) 
      let conn = await fetch('/posts/1/1', {
        method:"POST"
      })
      // if( conn.status != 200 ){ alert("something went wrong") }
      if( ! conn.ok ){ 
        alert("sorry, we are updating our servers") 
        return
      }
      form_parent.querySelector(".like").style.display = "none" 
      form_parent.querySelector(".dislike").style.display = "grid"
    }

    async function dislike(){
      let form = event.target 
      let form_parent = form.parentNode     
      let conn = await fetch('/posts/1/0', {
        method:"POST"
      })
      // if( conn.status != 200 ){ alert("something went wrong") }
      if( ! conn.ok ){ 
        alert("sorry, we are updating our servers") 
        return
      }
      form_parent.querySelector(".like").style.display = "grid" 
      form_parent.querySelector(".dislike").style.display = "none"     
    }



  </script>


</body>
</html>