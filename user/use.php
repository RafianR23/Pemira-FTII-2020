<?php 
  @session_start();
  include"../koneksi.php";

  if( @$_SESSION['NPM']){
$sql = mysql_query("select * from user where NPM = '$_SESSION[NPM]'") or die(mysql_error());
$id = mysql_fetch_array($sql);
?>


<center><h1>Terima kasih sudah memilih DPM<br>
Klik tulisan ini untuk memilih HIMA <br>

<a style="padding:0.3em 1em;font-size:0.5em;margin-top:1em;" class="btn btn-success btn-xs" href="?page=hima&id=<?php echo $id['id'];?>"/>Pilih Hima</a></h1>
<?php 
}
?>