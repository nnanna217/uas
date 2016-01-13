<style>

</style>
<div class="">
    <div class="col-md-12">
        <div class="col-md-3">
            <section>
                <div class="">
                    <div class="panel-body" style="background:#808080;color:#fff">
                        <div>
                            <h4 class="text-center"><i class="fa fa-lightbulb-o"></i> HEAT MAP</h4>

                            <div class="form-group label-floating">

                                <input type="email" class="form-control" id="i2" placeholder="placeholder attribute">

                            </div>
                        </div>
                        <div style="margin-top:30px">
                            <h4><i class="fa fa-user"></i> INCIDENCE REPORT</h4>
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

                            <h4 class="text-center"><i class="fa fa-bars"></i> DRILL DOWN</h4>
                            <section>
                                <div class="form-group">
                                    <label for="sel1">Select location:</label>
                                    <select class="form-control" id="sell">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </section>

                            <section>


                                <div class="form-group">
                                    <label for="sel1"></label>
                                    <select class="form-control" id="sell">
                                        <option>UAV-098</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </section>

                            <section>


                                <div class="form-group">

                                    <select class="form-control" id="sell">
                                        <option>AQ-532-KJA</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>

                            </section>

                        </div>

                        <div class="" style="margin-top:30px">
                            <h4 class="text-center"><i class="fa fa-database"></i> ICONS</h4>

                            <div class="row" style="color:#000">
                                <div class="col-md-2 col-md-offset-1"><i class="fa fa-user-plus fa-3x"></i></div>
                                <div class="col-md-2 col-md-offset-1"><i class="fa fa-envelope-o fa-3x"></i></div>
                                <div class="col-md-2 col-md-offset-1"><i class="fa fa-ambulance fa-3x"></i></div>
                            </div>
                            <div class="row" style="margin-top:30px;color:#000">
                                <div class="col-md-2 col-md-offset-1"><i class="fa fa-bank fa-3x"></i></div>
                                <div class="col-md-2 col-md-offset-1"><i class="fa fa-camera fa-3x"></i></div>
                                <div class="col-md-2 col-md-offset-1"><i class="fa fa-dashboard fa-3x"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-6">
            <section>
                <img width="100%" src="" id="static-map">
                <iframe class="hidden" width="100%" height="100%" src=""></iframe>
            </section>
        </div>
        
        <div class="col-md-3">
            <section>
                
            
            
            <?php foreach ($feeds as $feed): ?>
            
                <div class="panel">
                    <div class="panel-body">
                        <div style="height:150px; background:#ccc">
							<iframe
							src="<?= h($feed->url); ?>"
							height="150" width="100%"></iframe>
                        </div>
                    </div>
                </div>
           <?php endforeach; ?>


            </section>
        </div>
    </div>
</div>