<?php
$this->printHeader();
$this->printNavigation();
?>
<div class="col d-flex flex-column h-sm-100">
    <div class="content">
        <div class="col-12 box">
            <div class="boxheader">Alle Netzwerke</div>
            <div class="boxbody">
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
                        <td><i class="fa fa-play" aria-hidden="true"></i>&nbsp; &nbsp;<i class="fa fa-stop" aria-hidden="true"></i>&nbsp; &nbsp;<i class="fa fa-cog" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">SD</th>
                        <td><b>San Andreas Sherrif Department</b></td>
                        <td><i class="fa fa-play" aria-hidden="true"></i>&nbsp; &nbsp;<i class="fa fa-stop" aria-hidden="true"></i>&nbsp; &nbsp;<i class="fa fa-cog" aria-hidden="true"></i></td>

                    </tr>
                    <tr>
                        <th scope="row">DOJ</th>
                        <td><b>Department of Justice</b></td>
                        <td><i class="fa fa-play" aria-hidden="true"></i>&nbsp; &nbsp;<i class="fa fa-stop" aria-hidden="true"></i>&nbsp; &nbsp;<i class="fa fa-cog" aria-hidden="true"></i></td>


                    </tr>
                    <tr>
                        <th scope="row">MD</th>
                        <td><b>Los Santos Medical Department</b></td>
                        <td><i class="fa fa-play" aria-hidden="true"></i>&nbsp; &nbsp;<i class="fa fa-stop" aria-hidden="true"></i>&nbsp; &nbsp;<i class="fa fa-cog" aria-hidden="true"></i></td>

                    </tr>
                    </tbody>
                </table>





            </div>
            <div class="boxfooter"></div>
        </div>
<div class="col-12 box">
          <div class="boxheader">Notiz</div>
          <div class="boxbody">
            <form method="post">
              <center><textarea id="mytextarea">Hello, World!</textarea></center><br />
            </form>
          </div>
          <div class="boxfooter"></div>
        </div>

  <div class="col-12 box">
    <div class="boxheader">Neues Netzwerk anlegen</div>
      <div class="boxbody">


        <form class="row g-3">

          <div class="col-md-6">
            <label for="inputCity" class="form-label">Name des Netzwerkes</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Art des Netzwerkes</label>
            <select id="inputState" class="form-select">
              <option selected>Police</option>
              <option>Justice</option>
              <option>Medical</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Prefix</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
          <div class="col-12">

          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary graybutton">Anlegen</button>
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
