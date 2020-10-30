<!DOCTYPE html>
<html lang="en">

<?php include_once "templates/head.html"; ?>

<body>

    <!-- navigation -->
    <?php include_once "templates/navigation.html"; ?>

    <h3 class="my-3">Draggables!</h3>

    <!-- main content -->
    <div class="page-container d-flex justify-content-center px-2">

        <div class="container-fluid">
            <h6>Notes</h6>
            <div class="container">

                <p class="draggable" draggable="true">1</p>
                <p class="draggable" draggable="true">2</p>
            </div>
        </div>
        <div class="container-fluid">
            <h6>To Do</h6>
            <div class="container">

                <p class="draggable" draggable="true">1</p>
                <p class="draggable" draggable="true">2</p>
            </div>
        </div>
        <div class="container-fluid">
            <h6>Done</h6>
            <div class="container">

                <p class="draggable" draggable="true">3</p>
                <p class="draggable" draggable="true">4</p>
            </div>
        </div>


    </div>

    <!-- footer -->
    <?php include_once "templates/footer.html"; ?>

</body>

</html>