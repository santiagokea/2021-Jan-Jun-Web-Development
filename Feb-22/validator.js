function validate(){
  // console.log(event.target)
  const frm = event.target
  all("[data-validate]").forEach( element => {
    console.log(element)
  })
}



function one(selector){ return document.querySelector(selector)}
function all(selector){return document.querySelectorAll(selector)}
