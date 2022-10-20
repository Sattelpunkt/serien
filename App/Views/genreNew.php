<?php
$this->printHeader();
$this->printNavigation();
?>
<div class="col d-flex flex-column h-sm-100">
    <div class="content">
        <div class="col-12 box">
            <div class="boxheader">Neues Genre anlegen</div>
            <div class="boxbody">
                <p class="text-start">
                    <a href="https://<?= URL ?>/genre/settings/">
                        <button type="button" class="btn btn-primary graybutton">Zurück</button>
                    </a></p>
                <p class="text-center">
                <form class="row g-3" action="https://<?= URL ?>genre/insert/" method="post">

                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Name des Genre</label>
                        <input type="text" class="form-control" id="inputCity" name="genre" required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary graybutton">anlegen</button>
                    </div>
                </form>
            </p>
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

