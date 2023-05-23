
//nam.16Apr
//count_id get from home.php
var countDownDate= new Date(count_id).getTime();
//Update the count down every 1s
var x= setInterval(function(){

    var now= new Date().getTime();
    var distance= countDownDate- now;

    //Time cal
    var days= Math.floor(distance/(1000*60*60*24));
    var hours= Math.floor((distance%(1000*60*60*24))/(1000*60*60));
    var minutes= Math.floor((distance%(1000*60*60))/(1000*60));
    var seconds= Math.floor((distance%(1000*60))/1000);
    //Output the results in an elemet with id="countTime"
    document.getElementById('countTime').innerHTML= days+ "D "+ hours+ "H "+minutes+ "M "+ seconds+ "S ";

    if(distance< 0 ){
        clearInterval(x);
        document.getElementById('countTime').innerHTML()= "EXPIRED";

    }
}, 1000);

//////////////18h 16Apr


