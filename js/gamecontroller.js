//Cronómetro y Controlador de Audio

//Variables de Control del tiempo y del DOM

var time = 0;
var running = 0;
var centinela = 1;
var tiempo_transcurrido = "Tiempo: ";
const strangerthings = document.getElementById("StrangersThings");
const minesweeper = document.getElementById("MineSweeper");

//Variables Declarations for sliderPuzzle

var array_key = [];
var array_temp = [];
var array_hackerman = ["tile1", "tile2", "tile3", "tile4", "tile5", "tile6", "tile7", "tile9", "tile8"];
var movements = 0;
var sentinel = 1;

/*Interfaz Controller*/

function enabledbutton() {

    //Add interactive
    var newgame = document.getElementById("newgame");
    newgame.classList.replace("disabledbutton", "enabledbutton");
    newgame.disabled = false;

}

function disabledbutton() {

    //Remove interactive
    var startgame = document.getElementById("startgame");
    startgame.classList.replace("enabledbutton", "disabledbutton");
    startgame.disabled = true;

}

//Reload page
function reloadPage() {
    window.location.reload();
}

//Get Current Date
function getDate() {

    var date = new Date();
    var aaaa = date.getFullYear();
    var gg = date.getDate();
    var mm = (date.getMonth() + 1);

    if (gg < 10)
        gg = "0" + gg;

    if (mm < 10)
        mm = "0" + mm;

    var cur_day = aaaa + "-" + mm + "-" + gg;

    var hours = date.getHours()
    var minutes = date.getMinutes()
    var seconds = date.getSeconds();

    if (hours < 10)
        hours = "0" + hours;

    if (minutes < 10)
        minutes = "0" + minutes;

    if (seconds < 10)
        seconds = "0" + seconds;

    return cur_day + " " + hours + ":" + minutes + ":" + seconds;

}

//Close Modal
function closeModal() {

    if (hackerCentinela == 0) {

        document.getElementById("my-modal").style.display = 'none';
        document.getElementById("ok").click();
        //window.location.href = "http://localhost/ganador";
    } else {
        document.getElementById("my-modal").style.display = 'none';
        document.getElementById("winmodalform").click();
    }

}

//Hackerman Win Modal
function hackerManModal() {

    if (hackerCentinela == 0) {
        document.getElementById("my-modal-hackerman").style.display = "block";
        document.getElementById("resultadoHackerman").style.fontFamily = "Arial";
        document.getElementById("resultadoHackerman").style.fontWeight = "Bold";
        document.getElementById("resultadoHackerman").style.fontSize = "25px";
        resultadoHackerman.innerHTML = tiempo_transcurrido.concat(stopwatch.innerText);
        disabledbutton();
    }
}

//Win Modal
function winModal() {

    //DOM variable initialization

    modal_time = document.getElementById("modal-time");
    input_time = document.getElementById("input-time");
    modal_movement = document.getElementById("modal-movements");
    input_movement = document.getElementById("input-movements");
    input_date = document.getElementById("input-date");
    stopwatch = document.getElementById("output");

    //DOM manipulation

    modal_time.innerHTML = tiempo_transcurrido.concat(stopwatch.innerText);
    input_time.value = stopwatch.innerText;
    modal_movement.innerHTML = "Movimientos: " + (movements + 1);
    input_movement.value = (movements + 1);
    input_date.value = getDate();

    //Modal revelation

    document.getElementById("my-modal").style.display = 'block';
}

/*StopWatch Controller*/

//Start Stopwatch
function startStopWatch() {
    //Cuando: Se abra una celda, Entonces: Arrancar el cronómetro y mostrar "Pause"
    if (running == 0) {
        running = 1;
        increment();
    } else {
        //Cuando: Se de click al botón, Entonces: pausar el cronómetro y mostrar "Resume"
        running = 0;
    }
}

//Reset Stopwatch
function reset() {
    console.log("dentro de la función Reset");
    running = 0;
    time = 0;
    document.getElementById("output").innerHTML = "00:00:00";
}

//Increment Time
function increment() {
    //console.log("dentro de la función Increment");
    if (running == 1) {
        setTimeout(function () {
            time++;
            var mins = Math.floor(time / 10 / 60);
            var secs = Math.floor(time / 10 % 60);
            var tenths = time % 10;

            if (mins < 10) {
                mins = "0" + mins;
            }

            if (secs < 10) {
                secs = "0" + secs;
            }
            document.getElementById("output").innerHTML = mins + ":" + secs + ":" + "0" + tenths;
            increment();
        }, 100);
    }
}

/*Soundtrack Controller*/

//Play Music
function playAudio() {
    if (hackerCentinela == 0) {
        minesweeper.play();
        console.log("Reproduciendo MineSweeper Track");
    } else {
        strangerthings.play();
        console.log("Reproduciendo StrangerThings Track");
    }
}

//Pause Music
function pauseAudio() {
    if (hackerCentinela == 1) {
        minesweeper.pause();
        console.log("Pausando MineSweeper Track");
    } else {
        strangerthings.pause();
        console.log("Pausando StrangerThings Track");
    }
}

/*functions for sliderpuzzle*/

//Win key generator
function keyGenerator() {
    for (var row = 1; row <= 3; row++) {
        for (var column = 1; column <= 3; column++) {
            tempclasses = document.getElementById("cell" + row + column).className;
            tempclass = tempclasses.substr(0, 5);
            array_key.push(tempclass);
        }
    }
    console.log(array_key);
}

//Check the current position of the cell for determinate the victory of user
function arrayValidator() {

    let acum = 0;
    for (var row = 1; row <= 3; row++) {

        for (var column = 1; column <= 3; column++) {
            temp = document.getElementById("cell" + row + column).className;
            array_temp[acum] = temp;
            acum += 1;
        }
    }

    //Validate if the board has the initial classes for each cell

    //console.log("----" + "\n" + array_temp);

    if (JSON.stringify(array_temp) == JSON.stringify(array_key)) {
        winGame();
    }
}

//Returns interactivity to board
function gameClassManager() {

    var table = document.getElementById("table");
    table.classList.remove("disabletable");

    for (var row = 1; row <= 3; row++) { //For each row of the 3x3 grid
        for (var column = 1; column <= 3; column++) { //For each column in this row

            var element = document.getElementById("cell" + row + column);
            element.classList.remove("disabletile");

        }
    }
    sentinel = 0;

}

//Change the name class of the objects
function swapTiles(cell1, cell2) {

    var temp = document.getElementById(cell1).className;
    document.getElementById(cell1).className = document.getElementById(cell2).className;
    document.getElementById(cell2).className = temp;
    //console.log("valor de sentinel: " + sentinel);
    //Validate
    if (sentinel == 2) {
        arrayValidator();
    }
}

//Randomly create two coordinates, extract the class and exchange them
function shuffle() {

    //Return Interactive to the board

    if (sentinel == 1) {
        gameClassManager();
    }

    //Use nested loops to access each cell of the 3x3 grid
    for (var row = 1; row <= 3; row++) { //For each row of the 3x3 grid
        for (var column = 1; column <= 3; column++) { //For each column in this row

            //Work variables

            var row2 = Math.floor(Math.random() * 3 + 1); //Pick a random row from 1 to 3
            var column2 = Math.floor(Math.random() * 3 + 1); //Pick a random column from 1 to 3
            var cell1 = "cell" + row + column;
            var cell2 = "cell" + row2 + column2;
            swapTiles(cell1, cell2); //Swap the look & feel of both cells
            if (cell1 == "cell33") {
                sentinel = 2;
            }
        }
    }
}

//Receive the cell coordinate as parameters, then search where the white cell is
function clickTile(row, column) {
    var cell = document.getElementById("cell" + row + column);
    var tile = cell.className;
    if (tile != "tile9") {

        //Checking if white tile on the right
        if (column < 3) {
            if (document.getElementById("cell" + row + (column + 1)).className == "tile9") {
                swapTiles("cell" + row + column, "cell" + row + (column + 1));
                console.log("Celda: " + row + column + "\nClase: " + tile + "\nPosición anterior de blanco: derecha");
                //If start a new game and move a valid cell then count a new movement for user
                movements += 1;
                console.log("Movimientos: " + movements);
                return;
            }
        }
        //Checking if white tile on the left
        if (column > 1) {
            if (document.getElementById("cell" + row + (column - 1)).className == "tile9") {
                swapTiles("cell" + row + column, "cell" + row + (column - 1));
                console.log("Celda: " + row + column + "\nClase: " + tile + "\nPosición anterior de blanco: izquierda");
                //If start a new game and move a valid cell then count a new movement for user
                movements += 1;
                console.log("Movimientos: " + movements);
                return;
            }
        }
        //Checking if white tile is above
        if (row > 1) {
            if (document.getElementById("cell" + (row - 1) + column).className == "tile9") {
                swapTiles("cell" + row + column, "cell" + (row - 1) + column);
                console.log("Celda: " + row + column + "\nClase: " + tile + "\nPosición anterior de blanco: arriba");
                //If start a new game and move a valid cell then count a new movement for user
                movements += 1;
                console.log("Movimientos: " + movements);
                return;
            }
        }
        //Checking if white tile is below
        if (row < 3) {
            if (document.getElementById("cell" + (row + 1) + column).className == "tile9") {
                swapTiles("cell" + row + column, "cell" + (row + 1) + column);
                console.log("Celda: " + row + column + "\nClase: " + tile + "\nPosición anterior de blanco: abajo");
                //If start a new game and move a valid cell then count a new movement for user
                movements += 1;
                console.log("Movimientos: " + movements);
                return;
            }
        }

    }

}

//Demostration of Victory
function hackerMan() {

    //Check the current status of the board and declare local variables
    arrayValidator();
    hackerCentinela = 0;
    let i = 0;

    //Partially solve the game, leaving it to a winning move

    for (var row = 1; row <= 3; row++) { //For each row of the 3x3 grid

        for (var column = 1; column <= 3; column++) { //For each column in this row

            //Work variables
            var newclass = array_hackerman[i];
            var celltemp = document.getElementById("cell" + row + column);
            var classtemp = celltemp.className;
            celltemp.classList.replace(classtemp, newclass);
            i += 1;
        }
    }

}

//Game States
function startGame() {

    shuffle();
    startStopWatch();
    disabledbutton();
    enabledbutton();
}

function newGame() {
    reloadPage();
}

function winGame() {
    startStopWatch();
    winModal();
    reset();
}