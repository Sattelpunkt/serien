<?php
$this->printHeader();
$this->printNavigation();
?>
<div class="col d-flex flex-column h-sm-100">
    <div class="content">
        <div class="col-12 box">
            <div class="boxheader">Passwort ändern</div>
            <div class="boxbody">
                <form class="row g-3">

                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">aktuelles Passwort</label>
                        <input type="password" class="form-control" id="inputCity" name="oldPassword" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">neues Passwort</label>
                        <input type="password" class="form-control" id="inputCity" name="newPassword1" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">neues Passwort wiederholen</label>
                        <input type="password" class="form-control" id="inputCity" name="newPassword2" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary graybutton">Passwort ändern</button>
                    </div>
                </form>

            </div>
            <div class="boxfooter"></div>
        </div>


        <div class="col-12 box">
            <div class="boxheader">Email ändern</div>
            <div class="boxbody">
                <form class="row g-3">

                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">Neue Email</label>
                        <input type="email" class="form-control" id="inputCity" name="email" required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary graybutton">Email ändern</button>
                    </div>
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
