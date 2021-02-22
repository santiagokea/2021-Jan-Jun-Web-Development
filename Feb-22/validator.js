function validate(){
  // console.log(event.target)
  const frm = event.target

  // Clear errors
  all("[data-validate]").forEach(element=>{
    element.classList.remove("error")
  })

  all("[data-validate]").forEach( element => {
    const min = element.getAttribute("data-min")
    const max = element.getAttribute("data-max")
    const total_characters = element.value.length
    console.log(total_characters)
    if( total_characters < min ||  total_characters > max){
      element.classList.add("error")      
    }
  })
}



function one(selector){ return document.querySelector(selector)}
function all(selector){return document.querySelectorAll(selector)}
