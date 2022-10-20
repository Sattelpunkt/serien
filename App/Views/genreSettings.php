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
                        <button type="button" class="btn btn-primary graybutton">Neues Genre anlegen</button>
                    </a></p>
                <table class="table table-borderless table_main">
                    <thead>
                    <tr>
                        <th scope="col">Prefix</th>
                        <th scope="col">Name</th>
                        <th scope="col">Aktion</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">PD</th>
                        <td><b>Los Santos Police Department</b></td>
                        <td><i class="fa fa-play" aria-hidden="true"></i>&nbsp; &nbsp;<i class="fa fa-stop"
                                                                                         aria-hidden="true"></i>&nbsp;
                            &nbsp;<i class="fa fa-cog" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">SD</th>
                        <td><b>San Andreas Sherrif Department</b></td>
                        <td><i class="fa fa-play" aria-hidden="true"></i>&nbsp; &nbsp;<i class="fa fa-stop"
                                                                                         aria-hidden="true"></i>&nbsp;
                            &nbsp;<i class="fa fa-cog" aria-hidden="true"></i></td>

                    </tr>
                    <tr>
                        <th scope="row">DOJ</th>
                        <td><b>Department of Justice</b></td>
                        <td><i class="fa fa-play" aria-hidden="true"></i>&nbsp; &nbsp;<i class="fa fa-stop"
                                                                                         aria-hidden="true"></i>&nbsp;
                            &nbsp;<i class="fa fa-cog" aria-hidden="true"></i></td>


                    </tr>
                    <tr>
                        <th scope="row">MD</th>
                        <td><b>Los Santos Medical Department</b></td>
                        <td><i class="fa fa-play" aria-hidden="true"></i>&nbsp; &nbsp;<i class="fa fa-stop"
                                                                                         aria-hidden="true"></i>&nbsp;
                            &nbsp;<i class="fa fa-cog" aria-hidden="true"></i></td>

                    </tr>
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
