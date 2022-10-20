<?php
$this->printHeader();
?>
<div class="col d-flex flex-column h-sm-100">
    <div class="content">
        <div class="col-12 boxklein">
            <div class="boxheader">Login</div>
            <div class="boxbody">
                <center>

                    <?php
                    $this->displayMSG();
                    ?>

                    <form action="https://<?= URL ?>doLogin/" method="post">
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" aria-describedby="usernamelHelp" autocomplete="false" required>

                            </div>

                            <div class="mb-3">
                                <label for="password class="form-label">Passwort</label>
                                <input type="password" class="form-control" id="password" name="password"
                                       aria-describedby="passwordHelp" autocomplete="false" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary graybutton">Login</button>
                            </div><br />
                </center>
                </form>
            </div>
            <div class="boxfooter">Du hast noch kein Account. <a href="https://<?= URL ?>register">Hier geht es zur Registierung</a>&nbsp; &nbsp; &nbsp;</div>
        </div>


    </div>

</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>