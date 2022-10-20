<div class="container-fluid overflow-hidden">
    <div class="row vh-100 overflow-auto">
        <div class="sidebar p-2" style="width: 240px;">
            <div class="sidebar-header">
                <span class="fs-3"><?= $this->siteTitel ?></span>
            </div>
            <ul class="nav nav-pills flex-column mb-auto navigation">
                <li class="nav-item">
                    <a href="https://<?= URL ?>home" class="nav-link text-white active">

                        <i class="fa fa-home" aria-hidden="true"></i>&nbsp; &nbsp;Überblick
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp; &nbsp;Aktuell
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp; &nbsp;Wunschliste
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp; &nbsp;Abgebrochen
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp; &nbsp;Abgeschlossen
                    </a>
                </li>

                <li class="mb-1">
                    <a href="#" class="nav-link text-white" data-bs-toggle="collapse"
                       data-bs-target="#dashboard-collapse1" aria-expanded="false">
                        <i class="fa fa-book" aria-hidden="true"></i>&nbsp; &nbsp;Genre&nbsp; &nbsp;<i
                                class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <div class="collapse" id="dashboard-collapse1">
                        <ul class="nav nav-pills flex-column mb-auto navigation">
                            <li><a href="#" class="nav-link text-white childlist"><i class="fa fa-book"
                                                                                     aria-hidden="true"></i>&nbsp;
                                    &nbsp;Drama</a></li>
                            <li><a href="#" class="nav-link text-white childlist"><i class="fa fa-book"
                                                                                     aria-hidden="true"></i>&nbsp;
                                    &nbsp;Sitcom</a></li>
                            <li><a href="#" class="nav-link text-white childlist"><i class="fa fa-book"
                                                                                     aria-hidden="true"></i>&nbsp;
                                    &nbsp;Action</a></li>
                            <li><a href="#" class="nav-link text-white childlist"><i class="fa fa-book"
                                                                                     aria-hidden="true"></i>&nbsp;
                                    &nbsp;Comedy</a></li>

                        </ul>


                    </div>
                <li class="mb-1">
                    <a href="#" class="nav-link text-white" data-bs-toggle="collapse"
                       data-bs-target="#dashboard-collapse2" aria-expanded="false">
                        <i class="fa fa-book" aria-hidden="true"></i>&nbsp; &nbsp;Kategorie&nbsp; &nbsp;<i
                                class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <div class="collapse" id="dashboard-collapse2">
                        <ul class="nav nav-pills flex-column mb-auto navigation">
                            <li><a href="#" class="nav-link text-white childlist"><i class="fa fa-book"
                                                                                     aria-hidden="true"></i>&nbsp;
                                    &nbsp;Filme</a></li>
                            <li><a href="#" class="nav-link text-white childlist"><i class="fa fa-book"
                                                                                     aria-hidden="true"></i>&nbsp;
                                    &nbsp;Serien</a></li>
                            <li><a href="#" class="nav-link text-white childlist"><i class="fa fa-book"
                                                                                     aria-hidden="true"></i>&nbsp;
                                    &nbsp;Bücher</a></li>
                            <li><a href="#" class="nav-link text-white childlist"><i class="fa fa-book"
                                                                                     aria-hidden="true"></i>&nbsp;
                                    &nbsp;Hörbücher</a></li>




                    </div>
                <li class="nav-item">
                    <a href="https://<?= URL ?>settings" class="nav-link text-white">
                        <i class="fa fa-cog" aria-hidden="true"></i>&nbsp; &nbsp;Einstellungen
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://<?= URL ?>logout" class="nav-link text-white">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; &nbsp;Ausloggen
                    </a>
                </li>
            </ul>



            <br/><br/><br/>
            <?php
            $this->displayMSG();
            ?>
            <div class="position-absolute bottom-0 start- sitebar-bottom">


               © <?= $this->output['year'] ?>
                &nbsp;<?= $this->output['Author'] ?> &nbsp;

            </div>
        </div>
