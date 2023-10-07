let functionIsRan = false;
function stepCounter(elementSelector , currentNumber ,endNumber , stepNumber , totalTime){
    let theIntervals = Math.round(totalTime/(endNumber/stepNumber));
    let mainAction = setInterval(() => {
        if(currentNumber<endNumber){
            $(elementSelector).text(currentNumber);
            currentNumber+=stepNumber;
        }
        else{
            $(elementSelector).text(endNumber);
            clearInterval(mainAction);
        }
    }, theIntervals);
}
$(document).ready(function(){
    $(window).scroll(function(){
        let windowBottom = $(window).scrollTop() + $(window).outerHeight(true);
        let objectCenter = $('#counterNumbers').offset().top + ($('#counterNumbers').outerHeight(true)/2);
        if(windowBottom > objectCenter && functionIsRan==false){
            stepCounter('#counter-1', 1 , 3479 , 10 , 1500);
            stepCounter('#counter-2', 1 , 6 , 1 , 900);
            stepCounter('#counter-3', 1 , 17 , 1 , 900);
            stepCounter('#counter-4', 1 , 6742 , 15 , 2000);
            functionIsRan = true;
        }

    });
});