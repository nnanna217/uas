

function registerButtonEvents() {
    $("#bttnPausePlay").on("click", PausePlay);
    $("#bttnPrevious").on("click", movePrevious);
    $("#bttnNext").on("click", moveNext);
    $("#screenlabel");
}

function replaceString(param) {

    if (param.length > 7) {

        return param.substr(0, 5) + " ...";
    }

    return param;
}

function Pause() {

    if (interval > -1) {
        clearInterval(interval);
        interval = -1;
    }
}

function Play() {

    if (interval > -1) {
        clearInterval(interval);
    }

    interval = setInterval(moveNext, intervalDuration);
}

function refreshCharts() {

    var currentScreen = currentScreenIndex + 1;

    var query = "[id^=screen" + currentScreen + "]";

    $(query).each(function() {$(this).data("kendoChart").refresh();});

}


function ResetInterval() {

    if (interval > -1) {
        clearInterval(interval);

        interval = setInterval(moveNext, intervalDuration);

    }
}

function moveNext() {

    ShowScreen(false);

    if (currentScreenIndex === (screens.length - 1)) {

        currentScreenIndex = 0;
    } else {
        currentScreenIndex++;
    }

    ShowScreen(true);

    refreshCharts();

    ResetInterval();
}


function movePrevious() {

    ShowScreen(false);

    if (currentScreenIndex === 0) {

        currentScreenIndex = (screens.length - 1);
    } else {
        currentScreenIndex--;
    }

    ShowScreen(true);

    refreshCharts();

    ResetInterval();
}


function ShowScreen(flag) {
    var screenCount = String(screens.length);
    if (flag) {
        $("#" + screens[currentScreenIndex]).slideDown();
        $("#screenlabel").html(String(screens[currentScreenIndex]).substring(3,9)+ " "+String(screens[currentScreenIndex]).substring(9,11)+" " +"of" +" "+ screenCount);
        }
    else {
        $("#" + screens[currentScreenIndex]).slideUp();
    }

}



function PausePlay() {

    var img = $("#bttnPausePlay");

    if (img.prop('src').indexOf('/img/pause-icon.png') >= 0) {

        img.prop('src', '/img/play-icon.png');


        Pause();


    } else {

        img.prop('src', '/img/pause-icon.png');

        Play();
    }

}