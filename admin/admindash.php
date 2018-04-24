<?php
include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
<title> Admin Dashboard</title>
        
		</head>
<body>
<?php
include 'header.php';
?>
<br/>
<div class="wedding-section">
                <div class="container">
   
                <div class="container">
					
                    <div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="reg_users.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_users = mysql_query("select * from users ")or die(mysql_error());
								$count_users = mysql_num_rows($query_users);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_users; ?>"><?php echo $count_users; ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Users</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
						<div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="reg_suppliers.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_suppliers= mysql_query("select * from suppliers ")or die(mysql_error());
								$count_suppliers= mysql_num_rows($query_suppliers);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_suppliers; ?>"><?php echo $count_suppliers; ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Suppliers</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
						<div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="view_message.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_contact= mysql_query("select * from contact ")or die(mysql_error());
								$count_contact= mysql_num_rows($query_contact);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_contact; ?>"><?php echo $count_contact; ?></div>
                                    <div class="chart-bottom-heading"><strong>Messages</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
							<div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="aubineaux_bookings.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_aubineauxbookings= mysql_query("select * from aubineauxbookings ")or die(mysql_error());
								$count_aubineauxbookings= mysql_num_rows($query_aubineauxbookings);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_aubineauxbookings; ?>"><?php echo $count_aubineauxbookings; ?></div>
                                    <div class="chart-bottom-heading"><strong>Domaine des Aubineaux Bookings</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
						<div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="longbeach_bookings.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_longbeachbookings= mysql_query("select * from longbeachbookings ")or die(mysql_error());
								$count_longbeachbookings= mysql_num_rows($query_longbeachbookings);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_longbeachbookings; ?>"><?php echo $count_longbeachbookings; ?></div>
                                    <div class="chart-bottom-heading"><strong>Long Beach Resort Bookings</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
					<div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="royalparbeaux_bookings.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_venue3bookings= mysql_query("select * from venue3bookings ")or die(mysql_error());
								$count_venue3bookings= mysql_num_rows($query_venue3bookings);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_venue3bookings; ?>"><?php echo $count_venue3bookings; ?></div>
                                    <div class="chart-bottom-heading"><strong>Royal Parbeaux Hall Bookings</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
						<div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="mondesir_bookings.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_venue4bookings= mysql_query("select * from venue4bookings ")or die(mysql_error());
								$count_venue4bookings= mysql_num_rows($query_venue4bookings);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_venue4bookings; ?>"><?php echo $count_venue4bookings; ?></div>
                                    <div class="chart-bottom-heading"><strong>Chateau Mon Desir Bookings</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
						<div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="weddingplus_bookings.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_weddingplusbookings= mysql_query("select * from weddingplusbookings ")or die(mysql_error());
								$count_weddingplusbookings= mysql_num_rows($query_weddingplusbookings);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_weddingplusbookings; ?>"><?php echo $count_weddingplusbookings; ?></div>
                                    <div class="chart-bottom-heading"><strong>Weddingplus Bookings</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
						   
						<div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="kvs_bookings.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_kvsbookings= mysql_query("select * from kvsbookings ")or die(mysql_error());
								$count_kvsbookings= mysql_num_rows($query_kvsbookings);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_kvsbookings; ?>"><?php echo $count_kvsbookings; ?></div>
                                    <div class="chart-bottom-heading"><strong>KVS Bookings</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
						
						
						<div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="lms_bookings.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_floralbookings= mysql_query("select * from floralbookings ")or die(mysql_error());
								$count_floralbookings= mysql_num_rows($query_floralbookings);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_floralbookings; ?>"><?php echo $count_floralbookings; ?></div>
                                    <div class="chart-bottom-heading"><strong>LMS Bookings</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
						
						<div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="delicecake_bookings.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_cakemaker= mysql_query("select * from cakemaker ")or die(mysql_error());
								$count_cakemaker= mysql_num_rows($query_cakemaker);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_cakemaker; ?>"><?php echo $count_cakemaker; ?></div>
                                    <div class="chart-bottom-heading"><strong>Season's Delice Bookings</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
						<div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="tastemauritius_bookings.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_catererbookings= mysql_query("select * from catererbookings ")or die(mysql_error());
								$count_catererbookings= mysql_num_rows($query_catererbookings);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_catererbookings; ?>"><?php echo $count_catererbookings; ?></div>
                                    <div class="chart-bottom-heading"><strong>Taste Mauritius Bookings</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
						<div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="vipcars_bookings.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_carsbookings= mysql_query("select * from carsbookings ")or die(mysql_error());
								$count_carsbookings= mysql_num_rows($query_carsbookings);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_carsbookings; ?>"><?php echo $count_carsbookings; ?></div>
                                    <div class="chart-bottom-heading"><strong>VIP Transport Bookings</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
						<div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="girishphotography_bookings.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_photosbookings= mysql_query("select * from photosbookings ")or die(mysql_error());
								$count_photosbookings= mysql_num_rows($query_photosbookings);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_photosbookings; ?>"><?php echo $count_photosbookings; ?></div>
                                    <div class="chart-bottom-heading"><strong>Girish Photography Bookings</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
						<div class="services-grids">
                        <div class="col-md-3 services-grid">
						
                            
                                <a href ="kudosmusic_bookings.php"><img src="../images/chart.jpg" class="img-responsive" alt="" />
								<?php 
								$query_musicbookings= mysql_query("select * from musicbookings ")or die(mysql_error());
								$count_musicbookings= mysql_num_rows($query_musicbookings);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_musicbookings; ?>"><?php echo $count_musicbookings; ?></div>
                                    <div class="chart-bottom-heading"><strong>Kudos Bookings</strong>

                                    </div>
                                </div>
</a>
                             
                            
                        </div>
						</div>
						
						
						</div>
						</div>
						</div>
  
									


</body>
</html>
