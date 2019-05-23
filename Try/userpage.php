
<?php 
  include('functions.php');

  if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
?>

<!DOCTYPE HTML>
<html>
<head>

<title></title>
<script>
function del() {
    
       var del= confirm("For sure Would you like to delete it?");
    if(del==true)
        { return true;}
    else 
        { return false;}
           }
</script>



<style >

.menuber{
  width: 100%;
  height: 20px;
  top: 20px
  background:red;
 
  


}
.content {

  right: 0px;
  height: 22px;
  width: 13%;
  top: 0px;

  background: blue;

}
</style>




</head><body>
<div class="menuber">






  </div>
<div class="content">
   
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
    <!-- logged in user information -->
    
        <?php  if (isset($_SESSION['user'])) : ?>
          <strong><?php echo $_SESSION['user']['username']; ?></strong>

          <small>
            <i  style="color: #red;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            <br>
            <a href="index.php?logout='1'" style="color: black ;">Logout</a>
          </small>

        <?php endif ?>
      </div>
    </div>
  </div>



</div>

 </body>
</html>



