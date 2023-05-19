const sliderPosition = document.querySelector(".slider-forfait")
const bNavMobile = document.querySelector(".btn-navmobile")
const navMobile = document.querySelector(".nav-mobile")
const crossMobileNav = document.querySelector(".fa-xmark")
basePosition = 0


  const slider = () => {  setTimeout(() =>{
        if( basePosition < 1500)
        {basePosition = basePosition +5
        sliderPosition.style.right = basePosition +"px"
        console.log(basePosition);}
        else if (basePosition >= 1500){ 
            basePosition = 0
        }

    },100)}
    setInterval(slider,100);

 bNavMobile.addEventListener("click", () =>{
    navMobile.style.left = "0"
 })

 crossMobileNav.addEventListener("click", () =>{
    navMobile.style.left = "-100%"
 })

