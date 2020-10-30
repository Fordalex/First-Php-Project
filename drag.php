<!DOCTYPE html>
<html lang="en">

<?php include_once "templates/head.html"; ?>

<body>

    <!-- navigation -->
    <?php include_once "templates/navigation.html"; ?>

    <h3 class="my-3">Draggables!</h3>

    <!-- main content -->
    <div class="page-container d-flex justify-content-center">
    
        <div class="draggable-container">
            <p draggable="true" class="draggable-item">One</p>
            <p draggable="true" class="draggable-item">Two</p>
            <p draggable="true" class="draggable-item">Three</p>
            <p draggable="true" class="draggable-item">Four</p>
        </div>
       
    </div>

    <!-- footer -->
    <?php include_once "templates/footer.html"; ?>

</body>

</html>