<!DOCTYPE html>
<html lang="en">

<?php include_once "head.php"; ?>

<body>
    
    <!-- navigation -->
    <?php include_once "navigation.php"; ?>

    <!-- main content -->
    <div class="page-container">
        <?php
            $loopCount = 5;
            for ($i = 1; $i < $loopCount + 1; $i++) {
                echo "<p>Hello  $i</p>";
            }
        ?>
    </div>
  
    <!-- footer -->
    <?php include_once "footer.php"; ?>

</body>
</html>