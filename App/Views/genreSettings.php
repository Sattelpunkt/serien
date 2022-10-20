<?php
$this->printHeader();
$this->printNavigation();
?>
<div class="col d-flex flex-column h-sm-100">
    <div class="content">
        <div class="col-12 box">
            <div class="boxheader">Genre Verwaltung</div>
            <div class="boxbody">
                <p class="text-end">
                    <a href="https://<?= URL ?>genre/new">
                        <button type="button" class="btn btn-primary bluebutton">Neues Genre anlegen</button>
                    </a></p>
                <table class="table table-borderless table_main ">
                    <thead>
                    <tr>
                        <th style="width: 90%">Name</th>
                        <th>Aktion</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($this->output['genre'] as $value) {
                        ?>
                        <tr>
                            <th scope="row"><?= $value['name'] ?></th>

                            <td><a href="https://<?= URL ?>genre/edit/<?= $value['id'] ?>"><i
                                            class="fas fa-pen  text-white"></i></a>&nbsp; &nbsp;
                                <a href="https://<?= URL ?>genre/delete/<?= $value['id'] ?>"><i class="fas fa-trash text-white"></i></a>&nbsp;
                                &nbsp;
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>


            </div>
            <div class="boxfooter"></div>
        </div>

    </div>


</div>

</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
