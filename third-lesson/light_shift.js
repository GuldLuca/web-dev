
    let timer;
    let timerBreak;
    let red = document.querySelector("#red");
    let yellow = document.querySelector("#yellow");
    let green = document.querySelector("#green");

    //Start traffic lights and part order
    function start(){
        getGreen();
        removeRed();
        timer = setTimeout(getYellow, 2000);
    }


    //Get colors and order logic
    function getGreen(){
        green.classList.remove("inactive");
    }

    function getYellow(){
        removeGreen();
        yellow.classList.remove("inactive");
        timer = setTimeout(getRed, 2000);
    }

    function getRed(){
        removeYellow();
        red.classList.remove("inactive");
        timer = setTimeout(start, 2000);
    }

    //Remove colors
    function removeGreen(){
        green.classList.add("inactive");
    }

    function removeYellow(){
        yellow.classList.add("inactive");
    }

    function removeRed(){
        red.classList.add("inactive");
    }
    
    function stop(){
        clearInterval(timer);
    }