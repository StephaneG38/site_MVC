<?php
include_once 'init.php';

include_once 'views/include/header.php';

include_once 'views/include/navbar.php';

?>
<div class="container">
<h3 class="text-center">BOUTIQUE DU TELEPHONE </h3>
<h3><?php
 if(isset($_SESSION['user'])){
    ?> <h3 class="text-center">Bonjour <?= $_SESSION['user']->prenom ?> </h3>  <?php
 }

?> </h3>


</div>

<div class="container offset-4">
<img src="assets/img/boutique.jpg" alt="boutique téléphone" id="logo" />


</div>

<?php
include_once 'views/include/footer.php';

?>