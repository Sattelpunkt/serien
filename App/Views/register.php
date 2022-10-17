<?php
$this->printHeader();
?>
<div class="col d-flex flex-column h-sm-100">
    <div class="content">
        <div class="col-12 boxklein">
            <div class="boxheader">Registrierung</div>
            <div class="boxbody">
                <center>

                    <?php
                    $this->displayMSG();
                    ?>

                    <form action="https://<?= URL ?>doRegister/" method="post">
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" aria-describedby="usernamelHelp" autocomplete="false" required>
                                <div id="emailHelp" class="form-text">Der Username ist nicht änderbar</div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" autocomplete="false" required>
                                <div id="emailHelp" class="form-text">Die Email ist änderbar</div>
                            </div>
                            <div class="mb-3">
                                <label for="password1" class="form-label">Passwort</label>
                                <input type="password" class="form-control" id="password1" name="password1"
                                       aria-describedby="passwordHelp" autocomplete="false" required>
                                <div id="passwordHelp" class="form-text">Der Server ist noch nicht abgesichert. Bitte
                                    nur Testpasswörter verwenden
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password2" class="form-label">Passwort wiederholen</label>
                                <input type="password" class="form-control" id="password2" name="password2"
                                       aria-describedby="passwordHelp" autocomplete="false" required>

                            </div>

                            <hr/>

                            <label for="checkbox" class="form-label">Welches Modul möchtest du verwenden? <br />Mindestens eins muss aktiv sein</label>

                            <div class="form-check">
                                <input type="hidden" value="0" name="filme">
                                <input class="form-check-input" type="checkbox" name="filme" value="1" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Filme
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" value="0" name="serie">
                                <input class="form-check-input" type="checkbox" name="serie" value="1" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Serien
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" value="0" name="buecher">
                                <input class="form-check-input" type="checkbox" name="buecher" value="1" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Bücher
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" value="0" name="hoerbuecher">
                                <input class="form-check-input" type="checkbox" name="hoerbuecher" value="1" id="flexCheckChecked"
                                       aria-describedby="checkboxHelp">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Hörbücher
                                </label>
                            </div>
                            <div id="checkboxHelp" class="form-text">Die Module sind später anpassbar</div>
                            <br />
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary graybutton">Registrieren</button>
                            </div><br />
                </center>
                </form>
            </div>
            <div class="boxfooter"></div>
        </div>


    </div>

</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>

