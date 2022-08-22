const menu_logo = document.querySelector(".menu_logo")
const menu = document.querySelector(".menu")

let isshowing = false



menu_logo.addEventListener("click",()=>{

   if(isshowing == false){
    menu.style.transform = "translateY(0px)"
    isshowing = true
   }else{
    menu.style.transform = "translateY(-1000px)"
    isshowing = false
   }

})