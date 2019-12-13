<!--Win Modal-->
<div id="my-modal" class="modal" align="center">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" onClick="closeModal();">&times;</span>
            <br>
        </div>
        <div class="modal-body">
            <h2>¡Felicidades has Ganado!</h2>
            <br>
            <p><i>"We Are Made of Star Stuff"</i></p>
            <p><i><b>-Carl Sagan</b></i></p>
            <form id="winmodalform" action="cosmos.php" method="post">
                <input id="input-time" name="user_time" type="hidden"><b id="modal-time"></b></input>
                </br>
                <input id="input-movements" name="user_movements" type="hidden"><b id="modal-movements"></b></input>
                <input id="input-date" name="current_time" type="hidden"></input>
                </br></br>
                <button id="ok" class="enabledbutton" type="submit" name="aceptar" value="true">Aceptar</button>
            </form>
        </div>
        <div class="modal-footer">
            <br>
        </div>
    </div>
</div>

<!--Hackerman Win Modal-->
<div id="my-modal-hackerman" class="modal" align="center">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" onClick="closeModal();">&times;</span>
            <br>
        </div>
        <div class="modal-body">
            <h2>YOU WON AS A HACKERMAN!</h2>
            <br>
            <img src="https://i.kym-cdn.com/photos/images/newsfeed/001/176/251/4d7.png" alt="Mr Robot" height="500" width="500">
            <p id="resultadoHackerman"><b></b></p>
        </div>
        <div class="modal-footer">
            <br>
        </div>
    </div>
</div>