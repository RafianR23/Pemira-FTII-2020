<?php
$no_urut = $_GET['no_urut'];
$sql = mysql_query("select * from ca_bem where no_urut = '$no_urut' ") or die (mysql_error());
$tmpl = mysql_fetch_array($sql);

?>

<div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left" >
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="../admin/images/<?php echo $tmpl['foto']; ?>" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <div style="display:block;border-radius:0.5em;padding:0.5em;">
                        <h3><?php echo $tmpl['capres']; ?> </h3>

                        <ul class="list-unstyled user_data " >
                          <!-- -++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $tmpl['alamat']; ?></li> -->

                          <li>
                            <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $tmpl['jurusan']; ?></li>
                          </li>
                        </ul>
                      </div>
                      

                      <a href="index.php" class="btn btn-success">Kembali</a>
                      <br />

                

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        
                     

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Rekam Jejak</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Visi</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Misi</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            
                                <div class="message_wrapper">
                                  <h4 class="heading"></h4>
                                  <blockquote class="message" style="border-left: 5px solid #ffeb3b;"><?php echo $tmpl['rekamjejak']; ?></blockquote>
                                  <br />
                                 
                                </div>
                        
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            <div class="message_wrapper">
                                  <h4 class="heading"></h4>
                                  <blockquote class="message" style="border-left: 5px solid #ffeb3b;"><?php echo $tmpl['visi']; ?></blockquote>
                                  <br />
                                 
                                </div>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <div class="message_wrapper">
                                  <h4 class="heading"></h4>
                                  <blockquote class="message" style="border-left: 5px solid #ffeb3b;"><?php echo $tmpl['misi']; ?></blockquote>
                                  <br />
                                 
                                </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->