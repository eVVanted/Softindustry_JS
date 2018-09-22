<?php

/* @var $this yii\web\View */

$this->title = 'Countries of the World';
?>
<div class="row">
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 bhoechie-tab-container">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-2 bhoechie-tab-menu">
            <div class="list-group">
                <a href="#" class="list-group-item active text-center certification windows"> <!--style="background-color:#008cce;-->
                    <h3><i class="fa fa-windows"></i></h3><br/>Windows
                </a>
                <a href="#" class="list-group-item text-center windows-server">   <!--style="background-color:#2b3385;"-->
                    <h3><i class="fa fa-windows"></i></h3><br/>Windows Server
                </a>
                <a href="#" class="list-group-item text-center office365">   <!--style="background-color:#ef1f26;"-->
                    <h3><i class="fa fa-paperclip"></i></h3><br/>Office 365
                </a>
                <a href="#" class="list-group-item text-center certification sql">   <!-- style="background-color:#535a5a;"-->
                    <h3><i class="fa fa-database"></i></h3><br/>SQL Server
                </a>
                <a href="#" class="list-group-item text-center azure" style="height:33.33%;">   <!-- style="background-color:#01aef0;"-->
                    <h3 class="fa fa-cloud"></h3><br/>Azure
                </a>
                <a href="#" class="list-group-item text-center certification dev">   <!-- style="background-color:#613095;"-->
                    <h3><i class="fa fa-code"></i></h3><br/>Development paths
                </a>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
            <!-- flight section -->
            <div class="bhoechie-tab-content active">
                <center>
                    <h1 class="glyphicon glyphicon-plane" style="font-size:14em;color:#55518a"></h1>
                    <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                    <h3 style="margin-top: 0;color:#55518a">Windows</h3>
                </center>
            </div>
            <!-- train section -->
            <div class="bhoechie-tab-content">
                <center>
                    <h1 class="" style="font-size:12em;color:#55518a"></h1>
                    <h2 style="margin-top: 0;color:#55518a"></h2>
                    <h3 class="certification" style="margin-top: 0;color:#55518a">Windows Server</h3>
                </center>
                <div class="row">
                    <div class="process">
                        <div class="process-row nav nav-tabs">
                            <div class="process-step">
                                <button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu1"><i class="glyphicon glyphicon-ok"></i></button>
                                <p><small>20410</small></p>
                            </div>
                            <div class="process-step">
                                <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="glyphicon glyphicon-ok"></i></button>
                                <p><small>20411</small></p>
                            </div>
                            <div class="process-step">
                                <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="glyphicon glyphicon-ok"></i></button>
                                <p><small>2012</small></p>
                            </div>
                            <div class="process-step">
                                <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu4"><i class="glyphicon glyphicon-ok"></i></button>
                                <p><small>MCSA</small></p>
                            </div>
                            <div class="process-step">
                                <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu5"><i class="glyphicon glyphicon-ok"></i></button>
                                <p><small>20413</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade active in">
                            <h3>Installing and Configuring Windows Server® 2012</h3>
                            <p>This course is part one in a series of three courses that provides the skills and knowledge necessary to implement a core Windows Server 2012 infrastructure in an existing enterprise environment.</p>
                            <ul class="list-unstyled list-inline pull-right">
                                <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
                            </ul>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>Administering Windows Server® 2012</h3>
                            <p>This course is part two in a series of three courses that provides the skills and knowledge necessary to implement a core Windows Server 2012 infrastructure in an existing enterprise environment.</p>
                            <ul class="list-unstyled list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                                <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
                            </ul>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <h3>Configuring Advanced Windows Server® 2012 Services</h3>
                            <p>This course is part three in a series of three courses that provides the skills and knowledge necessary to implement a core Windows Server 2012 infrastructure in an existing enterprise environment.</p>
                            <ul class="list-unstyled list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                                <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
                            </ul>
                        </div>
                        <div id="menu4" class="tab-pane fade">
                            <h3>Menu 4</h3>
                            <p>Some content in menu 2.</p>
                            <ul class="list-unstyled list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                                <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
                            </ul>
                        </div>
                        <div id="menu5" class="tab-pane fade">
                            <h3>Menu 5</h3>
                            <p>Some content in menu 2.</p>
                            <ul class="list-unstyled list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                                <li><button type="button" class="btn btn-success"><i class="fa fa-check"></i> Done!</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- hotel search -->
            <div class="bhoechie-tab-content">
                <center>
                    <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
                    <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                    <h3 style="margin-top: 0;color:#55518a">Office 365</h3>
                </center>
            </div>
            <div class="bhoechie-tab-content">
                <center>
                    <h1 class="glyphicon glyphicon-cutlery" style="font-size:12em;color:#55518a"></h1>
                    <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                    <h3 style="margin-top: 0;color:#55518a">SQL Server</h3>
                </center>
            </div>
            <div class="bhoechie-tab-content">
                <center>
                    <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
                    <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                    <h3 style="margin-top: 0;color:#55518a">Microsoft Azure</h3>
                </center>
            </div>
            <div class="bhoechie-tab-content">
                <center>
                    <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
                    <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                    <h3 style="margin-top: 0;color:#55518a">Development Paths</h3>
                </center>
            </div>
        </div>
    </div>
</div>

