<?php include 'header.php';?>

<style>
.pageContainer {
  overflow-x: auto !important;
  overflow-y: hidden !important;
  white-space: nowrap !important;
}
.page {
  position: unset !important;
}
.page, .addPage {
  width: 13vw !important;
  display: inline-block !important;
  margin-right: 2vw;
}
.page-label input {
  width: 90%;
  background-color: transparent;
  border: 0;
  font-weight: 600;
  pointer-events: none;
}
.page-label input.editable {
  pointer-events: unset;
}
.page-label img {
  cursor: pointer;
}
</style>

    <div class="container-fluid" style="padding:0 10vw">
    <div class="row">
        <div class="dragmenu col-lg-4" id="dragmenu" ondrop="drop(event)" ondragover="allowDrop(event)">
                <div class="row">
                  <div class="col-lg-6">
                            <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag1">
                                    <img src="img/dots.png" class="dots center">
                                    <p>Boek/reserveer plugin</p>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag2">
                        <img src="img/dots.png" class="dots center">
                        <p>Recensies</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag3">
                        <img src="img/dots.png" class="dots center">
                        <p>Concept omschrijving</p>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag4">
                        <img src="img/dots.png" class="dots center">
                        <p>Prijsoverzicht</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag5">
                            <img src="img/dots.png" class="dots center">
                            <p>Boek/reserveer plugin</p>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag6">
                        <img src="img/dots.png" class="dots center">
                        <p>Boek/reserveer zonder plugin</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag7">
                        <img src="img/dots.png" class="dots center">
                        <p>Menukaart</p>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag8">
                        <img src="img/dots.png" class="dots center">
                        <p>Fotogallerij</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag9">
                            <img src="img/dots.png" class="dots center">
                            <p>Contactformulier</p>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag10">
                        <img src="img/dots.png" class="dots center">
                        <p>Interactieve kaart</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag11">
                        <img src="img/dots.png" class="dots center">
                        <p>Routebeschrijving</p>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag12">
                        <img src="img/dots.png" class="dots center">
                        <p>Vestigingen</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag13">
                            <img src="img/dots.png" class="dots center">
                            <p>Vacatures</p>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag14">
                        <img src="img/dots.png" class="dots center">
                        <p>Sollicitatie formulier</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag15">
                        <img src="img/dots.png" class="dots center">
                        <p>Sollicitatie procedure</p>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag16">
                        <img src="img/dots.png" class="dots center">
                        <p>Geschiedenis</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag17">
                            <img src="img/dots.png" class="dots center">
                            <p>Prijslijst</p>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag18">
                        <img src="img/dots.png" class="dots center">
                        <p>Aanbiedingen</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag19">
                        <img src="img/dots.png" class="dots center">
                        <p>Nieuwsoverzicht</p>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag20">
                        <img src="img/dots.png" class="dots center">
                        <p>Blog</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag21">
                        <img src="img/dots.png" class="dots center">
                        <p>Activiteiten</p>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="dragmenuItem" draggable="true" ondragstart="drag(event)" id="drag22">
                        <img src="img/dots.png" class="dots center">
                        <p>Informatie</p>
                        </div>
                </div>
                </div>
                </div>

            <div id="overlay" onclick="off()">
                <div class="container">
                    <div class="uitleg">
                        <div class="singleUitleg">
                            <h1>Single page</h1>
                            <ol>
                                <li>Er kan op een overzichtelijke manier een verhaal verteld worden, met een duidelijk begin, midden en eind.</li>
                                <li>Er hoeft maar één actie ondernomen te worden om ergens te komen.</li>
                                <li>Onderzoek wijst uit dat een single page design leidt tot een 37,5% grotere kans op een contactmoment tussen gebruiker en bedrijf.</li>
                                <li>Met relatief minder content (omdat het op een pagina past) gaat het schalen naar kleinere apparaten beter en natuurlijker.</li>
                                <li>Een design van een single page is veel makkelijker te implementeren, itereren en onderhouden.</li>
                            </ol>
                        </div>
                        <div class="vl"></div>
                        <div class="multiUitleg">
                            <h1>Multi page</h1>
                            <ol>
                                <li>Er kunnen zo veel pagina's als je maar wilt toegevoegd worden aan de navigatiebalk.</li>
                                <li>De navigatie structuur op een multi-page website is makkelijk te volgen. Voor veel gebruikers is het een bekend systeem, en verwachten vaak meerdere pagina's op één site.</li>
                                <li>De website heeft door de grote hoeveelheid van content meer potentie voor een goede SEO-optimalisatie.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


                        <div class="col-lg-7 offset-lg-1">
                        <div class="pageContainer">
                                    <div class="">
                                            <div class="page col-lg-3" ondrop="drop(event)" ondragover="allowDrop(event)">
                                                <div class="page-label">
                                                    <input type="text" value="Homepagina"><img width="16px" height="auto" src="img/edit-page-label.png"/>
                                                </div>
                                                <div class="page-sortable">

                                                </div>
                                        </div>

                                       <div class="addPage col-lg-3">
                                            <div class="addPageText">
                                                +
                                            </div>
                                       </div>
                                    </div>
                                    </div>
                                    <div class="mt-5">
                                    <div class="row">
                                        <div class="button col-lg-1 offset-lg-7">
                                            <div class="multipage" onclick="on()">
                                                <img src="img/multi.png" class="multi">
                                            </div>
                                        </div>
                                        <div class="button col-lg-3 offset-lg-0"><a href="confirmation.php">
                                            <div class="export">
                                                Exporteren
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
