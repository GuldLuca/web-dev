function validate(){
    const frm = event.target;
  
    // Clear errors
    all("[data-validate]").forEach(element=>{
      element.classList.remove("error");
    })
  
    let min;
    let max;
  
    all("[data-validate]").forEach( element => {
      
      switch(element.getAttribute("data-validate")){ // str | int | email
  
        case "str":
          min = element.getAttribute("data-min")
          max = element.getAttribute("data-max")
          let total_characters = element.value.length
          if( total_characters < min ||  total_characters > max){
            element.classList.add("error")      
          }
        break
        case "int":
          min = parseInt(element.getAttribute("data-min"))
          max = parseInt(element.getAttribute("data-max"))
          let age = parseInt(element.value)
          if( ! age || age < min || age > max ){
            element.classList.add("error")     
          }
        break
        case "email":
          const re = /^[a-z0-9]+[\._]?[a-z0-9]+[@]\w+[.]\w{2,3}$/
          if( ! re.test(element.value.toLowerCase()) ){ 
            element.classList.add("error")
          }
        break
      }
    })
  
  }
  
  function clear_error(){
    event.target.classList.remove("error")
  }
  
  
  
  function one(selector){ return document.querySelector(selector)}
  function all(selector){return document.querySelectorAll(selector)}