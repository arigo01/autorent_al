
<header>
  
 
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">T</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
<?php
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profili-im.php">Parametrat e Profilit</a></li>
            <li><a href="rezervimet-emia.php">Rezervimet e mia</a></li>
            <li><a href="logout.php">Dil</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Parametrat</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Rezervimet e mia</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Dil</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>





        <?php   if(strlen($_SESSION['login'])==0)
	{
?>
<div class="login_btn" style="padding-top:18px"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Hyr/Regjistrohu</a> </div>
<?php }
else{
echo "";
 } ?>




      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Faqja Kryesore</a>    </li>

          <li><a href="page.php?type=aboutus">Rreth Nesh</a></li>
          <li><a href="lista-makinave.php">Lista e Makinave</a>
          <li><a href="na-kontaktoni.php">Na Kontaktoni</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end -->

</header>
