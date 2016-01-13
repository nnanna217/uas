<div class="">
    <div class="col-md-12">
        <div class="col-md-3">
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

                        <div class="info" style="margin-top:30px;  background:#029644">
                              <span class="icon_boxed bg-success set_m_icon flat" style="background:#029644">
                                            <i class="fa fa-bus"></i>
                                        </span>
                            <i class="fa fa-users icon-bg"></i>


                            <div class="row" style="padding-top:50px;color:#fff">
                                <div class="col-md-10">
                                <div class="col-md-5 col-md-offset-1 text-center"><i class="fa fa-user-plus fa-2x"></i><h6 style="font-size: :9px">UAV</h6></div>
                                <div class="col-md-5 col-md-offset-1 text-center"><i class="fa fa-envelope-o fa-2x"></i><h6  style="font-size: :6px">UAV Station</h6></div>
</div>
                            </div>
                            <div class="progress no-rounded progress-xs">
                                <div class="progress-bar progress-bar-greenbg" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                </div>
                            </div>
                            <div class="row" style="margin-top:30px;color:#fff">
                                <div class="col-md-10">
                                <div class="col-md-5 col-md-offset-1 text-center"><i class="fa fa-database fa-2x"></i><h6 style="font-size: :9px">UAV</h6></div>
                                <div class="col-md-5 col-md-offset-1 text-center"><i class="fa fa-dashboard fa-2x"></i><h6  style="font-size: :6px">UAV Station</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-6">
            <section>
                <img style="width: 95%; display: block; margin: auto" src="" id="static-map">
                <iframe style="width: 95%; margin: auto; display: block; height: 550px" id="video-feed" src=""></iframe>
            </section>
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
                        <h5><?= h($feed->location);?></h4>
                    </div>
                </div>
           <?php endforeach; ?>
            </section>
        </div>
    </div>
</div>