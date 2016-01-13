<div class="">
    <div class="row">
        <div class="col-xs-3">
            <section>
                <div class="" >
                    <div class="" style="color:#fff">
                        <div class="heat" style="background:#808080; padding: 10px;border-top: 10px solid #fff">
                            <i class="fa fa-users ic-bg"></i>

                            <h5 class="text-center"><i class="fa fa-lightbulb-o"></i> HEAT MAP</h5>

                            <div class="form-group label-floating">
                            </div>

                            <div style="margin-top:30px">
                                <h5 class="text-center"><i class="fa fa-user"></i> INCIDENCE REPORT</h5>
                                <section>
                                    <div class="progress no-rounded progress-sm">
                                        <div class="progress-bar progress-bar-black" role="progressbar" aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        </div>
                                    </div>
                                    <span> 345 All Events</span>
                                </section>

                                <section style="margin-top:30px">
                                    <div class="progress no-rounded progress-sm">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        </div>
                                    </div>
                                    <span>150 Border Smuggling</span>
                                </section>

                                <section style="margin-top:30px">
                                    <div class="progress no-rounded progress-sm">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                        </div>
                                    </div>
                                    <span>135 Kidnapping</span>
                                </section>
                                <section style="margin-top:30px">
                                    <div class="progress no-rounded progress-sm">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                        </div>
                                    </div>
                                    <span>135 Robbery Attacks</span>
                                </section>
                                <section style="margin-top:30px">
                                    <div class="progress no-rounded progress-sm">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                        </div>
                                    </div>
                                    <span>135 Mistaken Identity</span>
                                </section>
                            </div>
                            <div class="" style="margin-top:30px">

                                <h5 class="text-center"><i class="fa fa-bars"></i> DRILL DOWN</h5>
                                <section>
                                    <div class="form-group">
                                        <label for="sel1">Select location:</label>
                                        <select class="form-control" id="select-frame">
                                            <option value="-1">Map View</option>
                                            <option value="https://www.youtube.com/embed/fywfkFSRHEM">Lagos</option>
                                            <option value="https://www.youtube.com/embed/fywfkFSRHEM">Port Harcourt</option>
                                            <option value="https://www.youtube.com/embed/fywfkFSRHEM">Abuja</option>
                                            <option value="https://www.youtube.com/embed/fywfkFSRHEM">Kano</option>
                                        </select>
                                    </div>
                                </section>



                            </div></div>

                        <!--
                                                <div class="info" style="margin-top:30px;  background:#029644">
                                                      <span class="icon_boxed bg-success set_m_icon flat" style="background:#029644">
                                                                    <i class="fa fa-dashboard"></i>
                                                                </span>
                                                    <i class="fa fa-users icon-bg"></i>


                                                    <div class="row" style="padding-top:50px;color:#fff">
                                                        <div class="col-md-10">
                                                        <div class="col-md-5 col-md-offset-1 text-center"><i class="fa fa-send fa-2x"></i><h6 style="font-size: :9px">UAV</h6></div>
                                                        <div class="col-md-5 col-md-offset-1 text-center"><i class="fa fa-wifi fa-2x"></i><h6  style="font-size: :6px">UAV Station</h6></div>
                        </div>
                                                    </div>
                                                    <div class="progress no-rounded progress-xs">
                                                        <div class="progress-bar progress-bar-greenbg" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top:30px;color:#fff">
                                                        <div class="col-md-10">
                                                        <div class="col-md-5 col-md-offset-1 text-center"><i class="fa fa-database fa-2x"></i><h6 style="font-size: :9px">Critical Infrastructure</h6></div>
                                                        <div class="col-md-5 col-md-offset-1 text-center"><i class="fa fa-warning fa-2x"></i><h6  style="font-size: :6px">Reported Situation</h6></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-6 col-xs-9">
            <div class="row">
                <div class="col-md-12">
                    <section>
                        <img style="width: 100%; display: block; margin: auto" src="../img/heat.png"" id="static-map" class="">
                        <iframe style="width: 95%; margin: auto; display: block; height: 550px" id="video-feed" src=""></iframe>
                    </section>
                </div></div>
            <div class="row" style="margin-top: 20px">
                <div class="col-md-12">
                    <img style="width:100% ;" src="../img/heat-bg1.jpg" class="img-responsive"/>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <section id="feeds">
                <?php foreach ($feeds as $feed): ?>
                    <div class="panel">
                        <div class="panel-body">
                            <div style="background:#ccc">
                                <iframe src="<?= h($feed->url); ?>"
                                        height="150" width="100%"></iframe>
                            </div>
                            <h4><?= h($feed->location);?></h4>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
        </div>
    </div>
</div>