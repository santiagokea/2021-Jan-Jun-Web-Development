function validate(){
  // console.log(event.target)
  const frm = event.target
  all("[data-validate]").forEach( element => {
    const min = element.getAttribute("data-min")
    const max = element.getAttribute("data-max")
    console.log(min)
    console.log(max)
  })
}



function one(selector){ return document.querySelector(selector)}
function all(selector){return document.querySelectorAll(selector)}
