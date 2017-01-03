<!-- load header -->
<?php $this->load->view('templates/header'); ?>

<!-- === BEGIN CONTENT === -->
                    <div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <div class=".col-xs-12 .col-sm-6 .col-md-8 col-xs-height col-full-height " id="kwanza">
                                <h2 class="col-md-6 .col-xs-8 .col-sm-4 .text-capitalize .text-center .center-block" id="msg">Welcome and Stay onboard</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <div class="container background-gray-lighter">
                 <div class="row">
                     <h2 class="animate fadeIn text-center margin-top-50" id="tahoma">Welcome to JKUSDA</h2>
                     <hr class="margin-top-15">
                     <p class="animate fadeIn text-center">
Jomo Kenyatta University Seventh Day Adventist Church is a warm Christian fellowship. <br>This community comprises of professionals and university students who live to glorify God.Feel at the feet of Jesus.
                        </p>

                 </div>
             </div>

             <!-- === BEGIN CONTENT === -->
                      <div class="container" style="background-color:white">
                          <div class="row margin-vert-30">
                              <div class="col-md-12">
                                  <h2 class="margin-vert-20"></h2>
                                  <div class="row margin-bottom-30">
                                      <div class="col-md-4 animate fadeInLeft">
                                        <div class="accordion">
                      <h3 id="tahoma" style="margin-bottom:10px;">Current Study Topics</h3>
                      <div class="panel-group" id="accordion1">
                        <div class="panel panel-default">
                          <div class="panel-heading active">
                            <h4 class="panel-title" id="tahoma">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                Sanctuary
                                <i class="fa fa-angle-right pull-right"></i>
                              </a>
                            </h4>
                          </div>

                          <div id="collapseOne1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="media accordion-inner">
                                      <div class="pull-left">
                                          <!--<img class="img-responsive" src="images/accordion1.png">-->
                                      </div>
                                      <div class="media-body">
                                           <h4>Speaker:Daniel Kitur</h4>
                                           <p><a href="<?php echo site_url('Admin/resource1_download');?>">Download Material</a></p>
                                      </div>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title" id="tahoma">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                The Seal Of God
                                <i class="fa fa-angle-right pull-right"></i>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo1" class="panel-collapse collapse">
                            <div class="panel-body">
                              Speaker:Peter <p><a href="<?php echo site_url('Admin/resource2_download');?>">Download Material</a></p>
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title" id="tahoma">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                Pillars of our Faith
                                <i class="fa fa-angle-right pull-right"></i>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseThree1" class="panel-collapse collapse">
                            <div class="panel-body">
                                Speaker:Peter <a href="#">Download Materials</a>
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title" id="tahoma">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                Second Coming of CHRIST
                                <i class="fa fa-angle-right pull-right"></i>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseFour1" class="panel-collapse collapse">
                            <div class="panel-body">
                            Speaker:Peter <a href="#">Download Materials</a>
                            </div>
                          </div>
                        </div>
                      </div><!--/#accordion1-->
                  </div>
                                      </div>
                                      <div class="col-md-8 animate fadeIn">
                                          <h3 id="tahoma" style="margin-bottom:10px;">What's Happening</h3>
                                          <div class="col-md-4 col-sm-4 person-details margin-bottom-30" id="1">
                                              <figure>

                                                  <figcaption>
                                                      <h4 id="tahoma" class="margin-bottom-10 ">Wednesday
                                                          <h5 >- AMO Marathon</h5>
                                                      </h4>
                                                      <span id="wedd">Description</span>
                                                  </figcaption>

                                              </figure>
                                          </div>
                                          <!-- //Portfolio Item// -->
                                          <!-- Person Details -->
                                          <div class="col-md-4 col-sm-4 person-details margin-bottom-30" id="2">
                                              <figure>

                                                  <figcaption>
                                                      <h4 id="tahoma" class="margin-bottom-10 ">Friday
                                                          <h5 id="fri">- ALO Cookery</h5>
                                                      </h4>
                                                      <span id="fridd">Description</span>
                                                  </figcaption>
                                              </figure>
                                          </div>
                                          <!-- //Portfolio Item// -->
                                          <!-- Person Details -->
                                          <div class="col-md-4 col-sm-4 person-details margin-bottom-30" id="3">
                                              <figure>
                                                  <figcaption>
                                                      <h4 id="tahoma" class="margin-bottom-10 ">Sabbath
                                                          <h5 id="sat">- Finalists Sabbath</h5>
                                                      </h4>
                                                      <span id="satd">Description</span>
                                                  </figcaption>
                                              </figure>
                                          </div>
                                          <!-- //Portfolio Item// -->
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>

          <!-- END CONTENT  -->
          <!-- load footer -->
          <?php $this->load->view('templates/footer'); ?>
          <?php $this->load->view('pages/phjs'); ?>
