           <div class="page-title">
           <div class="title-left">
                <h3>Hasil Perolehan Suara</h3>
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil untuk pemilihan Angoota DPM</small></h2>
             	 <div class="clearfix"></div>
             </div>


		<?php 

		          include '../koneksi.php';
		          $bem1 = mysql_query("select * from hasil_bem where no_urut = '1' ");
		          $bem2 = mysql_query("select * from hasil_bem where no_urut = '2' ");
		          $bem3 = mysql_query("select * from hasil_bem where no_urut = '3' ");
		          $bem4 = mysql_query("select * from hasil_bem where no_urut = '4' ");
		          $bem5 = mysql_query("select * from hasil_bem where no_urut = '5' ");
		          $bem6 = mysql_query("select * from hasil_bem where no_urut = '6' ");
				  $bem7 = mysql_query("select * from hasil_bem where no_urut = '7' ");
				  $bem8 = mysql_query("select * from hasil_bem where no_urut = '8' ");
				  $bem9 = mysql_query("select * from hasil_bem where no_urut = '9' ");
				  $bem10 = mysql_query("select * from hasil_bem where no_urut = '10' ");
				  $bem11 = mysql_query("select * from hasil_bem where no_urut = '11' ");
		          $urut1 = mysql_num_rows($bem1);
		          $urut2 = mysql_num_rows($bem2);
		          $urut3 = mysql_num_rows($bem3);
		          $urut4 = mysql_num_rows($bem4);
		          $urut5 = mysql_num_rows($bem5);
		          $urut6 = mysql_num_rows($bem6);
				  $urut7 = mysql_num_rows($bem7);
				  $urut8 = mysql_num_rows($bem8);
				  $urut9 = mysql_num_rows($bem9);
				  $urut10 = mysql_num_rows($bem10);
				  $urut11 = mysql_num_rows($bem11);


		          $total1 = $urut1*100/100;
		          $total2 = $urut2*100/100;
		          $total3 = $urut3*100/100;
		          $total4 = $urut4*100/100;
		          $total5 = $urut5*100/100;
		          $total6 = $urut6*100/100;
				  $total7 = $urut7*100/100;
				  $total8 = $urut8*100/100;
				  $total9 = $urut9*100/100;
				  $total10 = $urut10*100/100;
				  $total11 = $urut11*100/100;

		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '1'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total1."%"; ?>">
					<?php echo $total1. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '2'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total2."%"; ?>">
					<?php echo $total2.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '3'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres'];

	            ?>
				            </div>

			<div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total3."%"; ?>">
					<?php echo $total3. ""; ?>
				</div>
			</div>
			</div>
			
			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '4'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres'];

	            ?>
				            </div>

			<div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total4."%"; ?>">
					<?php echo $total4. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '5'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres'];

	            ?>
				            </div>

			<div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total5."%"; ?>">
					<?php echo $total5. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '6'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres'];

	            ?>
				            </div>

			<div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total6."%"; ?>">
					<?php echo $total6. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '7'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres'];

	            ?>
				            </div>

			<div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total7."%"; ?>">
					<?php echo $total7. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '8'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres'];

	            ?>
				            </div>

			<div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total8."%"; ?>">
					<?php echo $total8. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '9'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres'];

	            ?>
				            </div>

			<div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total9."%"; ?>">
					<?php echo $total9. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '10'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres'];

	            ?>
				            </div>

			<div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total10."%"; ?>">
					<?php echo $total10. ""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_bem where no_urut = '11'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['capres'];

	            ?>
				            </div>

			<div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total11."%"; ?>">
					<?php echo $total11. ""; ?>
				</div>
			</div>
			</div>
</div>
</div>
</div>


<!--Teknik Informatika-->
<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2><small>Hasil untuk pemilihan Ketua dan Wakil HMIF</small></h2>
             	 <div class="clearfix"></div>
             </div>


		<?php 

		          include '../koneksi.php';
		          $sql1 = mysql_query("select * from hasil_hima where no = '1' ");
		          $sql2 = mysql_query("select * from hasil_hima where no = '2' ");
		          $sql3 = mysql_query("select * from hasil_hima where no = '3' ");
		          $sql4 = mysql_query("select * from hasil_hima where no = '4' ");
		          $sql5 = mysql_query("select * from hasil_hima where no = '5' ");
		          
		          $urut1 = mysql_num_rows($sql1);
		          $urut2 = mysql_num_rows($sql2);
		          $urut3 = mysql_num_rows($sql3);
		          $urut4 = mysql_num_rows($sql4);
		          $urut5 = mysql_num_rows($sql5);
		          

		          $total1 = $urut1*100/100;
		          $total2 = $urut2*100/100;
		          $total3 = $urut3*100/100;
		          $total4 = $urut4*100/100;
		          $total5 = $urut5*100/100;
		          

		?>

            <div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '1'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total1."%"; ?>">
					<?php echo $total1.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '2'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total2."%"; ?>">
					<?php echo $total2.""; ?>
				</div>
			</div>
			</div>
 <!--
			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '3'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total3."%"; ?>">
					<?php echo $total3.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '4'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total4."%"; ?>">
					<?php echo $total4.""; ?>
				</div>
			</div>
			</div>

			<div class="col-md-2">
	            <?php 

	              $dta = mysql_query ("select * from ca_hima where no = '5'") or die(mysql_error()) ;
	              $kon = mysql_fetch_array ($dta);
	              echo $kon['calon_hima'];

	            ?>
            </div>

            <div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total5."%"; ?>">
					<?php echo $total5.""; ?>
				</div>
			</div>
			 </div> -->
</div>
</div>
</div>

<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2>Total Suara Pemilihan DPM yang Masuk </h2>
             	 <div class="clearfix"></div>
			 </div>

				<?php 

				include '../koneksi.php';
				$bem1 = mysql_query("select * from hasil_bem where no_urut = '1' ");
				$bem2 = mysql_query("select * from hasil_bem where no_urut = '2' ");
				$bem3 = mysql_query("select * from hasil_bem where no_urut = '3' ");
				$bem4 = mysql_query("select * from hasil_bem where no_urut = '4' ");
				$bem5 = mysql_query("select * from hasil_bem where no_urut = '5' ");
				$bem6 = mysql_query("select * from hasil_bem where no_urut = '6' ");
				$bem7 = mysql_query("select * from hasil_bem where no_urut = '7' ");
				$bem8 = mysql_query("select * from hasil_bem where no_urut = '8' ");
				$bem9 = mysql_query("select * from hasil_bem where no_urut = '9' ");
				$bem10 = mysql_query("select * from hasil_bem where no_urut = '10' ");
				$bem11 = mysql_query("select * from hasil_bem where no_urut = '11' ");
				$urut1 = mysql_num_rows($bem1);
				$urut2 = mysql_num_rows($bem2);
				$urut3 = mysql_num_rows($bem3);
				$urut4 = mysql_num_rows($bem4);
				$urut5 = mysql_num_rows($bem5);
				$urut6 = mysql_num_rows($bem6);
				$urut7 = mysql_num_rows($bem7);
				$urut8 = mysql_num_rows($bem8);
				$urut9 = mysql_num_rows($bem9);
				$urut10 = mysql_num_rows($bem10);
				$urut11 = mysql_num_rows($bem11);



				$total1 = ($urut1*100/100)+($urut2*100/100)+($urut3*100/100)+($urut4*100/100)+($urut5*100/100)+($urut6*100/100)+($urut7*100/100)+($urut8*100/100)+($urut9*100/100)+($urut10*100/100)+($urut11*100/100);



				?>


		<div class="col-md-2">
			<?php 

			$dta = mysql_query ("select * from ca_bem where no_urut = '1'") or die(mysql_error()) ;
			$kon = mysql_fetch_array ($dta);
			echo "Total Suara";


		?>		
		</div>
		
		<div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total1."%"; ?>">
					<div style="display:block;float:left;"><?php echo $total1. ""; ?></div>
				</div>
			</div>
			</div>

			 

</div>
</div>
</div>

<div class="page-title">
           <div class="title-left">
              
            </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="x_panel">
             <div class="x_title">
             	<h2>Total Suara Pemilihan Ketua dan Wakil HMIF yang Masuk </h2>
             	 <div class="clearfix"></div>
			 </div>

				<?php 

				include '../koneksi.php';
				$bem1 = mysql_query("select * from hasil_bem where no_urut = '1' ");
				$bem2 = mysql_query("select * from hasil_bem where no_urut = '2' ");
				$bem3 = mysql_query("select * from hasil_bem where no_urut = '3' ");
				$bem4 = mysql_query("select * from hasil_bem where no_urut = '4' ");
				$bem5 = mysql_query("select * from hasil_bem where no_urut = '5' ");
				$bem6 = mysql_query("select * from hasil_bem where no_urut = '6' ");
				$bem7 = mysql_query("select * from hasil_bem where no_urut = '7' ");
				$bem8 = mysql_query("select * from hasil_bem where no_urut = '8' ");
				$bem9 = mysql_query("select * from hasil_bem where no_urut = '9' ");
				$bem10 = mysql_query("select * from hasil_bem where no_urut = '10' ");
				$bem11 = mysql_query("select * from hasil_bem where no_urut = '11' ");
				$urut1 = mysql_num_rows($bem1);
				$urut2 = mysql_num_rows($bem2);
				$urut3 = mysql_num_rows($bem3);
				$urut4 = mysql_num_rows($bem4);
				$urut5 = mysql_num_rows($bem5);
				$urut6 = mysql_num_rows($bem6);
				$urut7 = mysql_num_rows($bem7);
				$urut8 = mysql_num_rows($bem8);
				$urut9 = mysql_num_rows($bem9);
				$urut10 = mysql_num_rows($bem10);
				$urut11 = mysql_num_rows($bem11);



				$total1 = ($urut1*100/100)+($urut2*100/100)+($urut3*100/100)+($urut4*100/100)+($urut5*100/100)+($urut6*100/100)+($urut7*100/100)+($urut8*100/100)+($urut9*100/100)+($urut10*100/100)+($urut11*100/100);



				?>


		<div class="col-md-2">
			<?php 

			$dta = mysql_query ("select * from ca_bem where no_urut = '1'") or die(mysql_error()) ;
			$kon = mysql_fetch_array ($dta);
			echo "Total Suara";


		?>		
		</div>
		
		<div class="col-md-9">
			<div class="progress">
				<div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color: black; width:<?php echo $total1."%"; ?>">
				<div style="display:block;float:left;"><?php echo $total1. ""; ?></div>
				</div>
			</div>
			</div>

			 

</div>
</div>
</div>

