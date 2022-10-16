<div class="container-fluid overflow-hidden">
    <div class="row vh-100 overflow-auto">
        <div class="sidebar p-2" style="width: 240px;">
            <div class="sidebar-header">
                <span class="fs-2"><?= $this->siteTitel ?></span>
            </div>
            <ul class="nav nav-pills flex-column mb-auto navigation">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white active">

                        <i class="fa fa-home" aria-hidden="true"></i>&nbsp; &nbsp;Alle Serien
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp; &nbsp;Aktuelle Serien
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp; &nbsp;Wunschliste
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp; &nbsp;Abgebrochende Serien
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp; &nbsp;Unterbrochende Serien
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp; &nbsp;Abgeschlossene Serien
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
                </li>
            </ul>
            <br/><br/><br/>
            <?php
            $this->displayMSG();
            ?>
            <div class="sitebar-bottom">
                <ul class="nav nav-pills flex-column mb-auto navigation">

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;© <?= $this->output['year'] ?>
                    &nbsp;&nbsp;<?= $this->output['Author'] ?></div>
        </div>
