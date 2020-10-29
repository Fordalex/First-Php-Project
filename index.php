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
        <form action="functions.php" method="GET">
            <label>Number One</label>
            <input type="number" name="numOne" class="form-control">
            <select name="oper">
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
            </select>
            <label>Number Two</label>
            <input type="number" name="numTwo" class="form-control">
            <button type="submit">Submit</button>
        </form>
    </div>

    <!-- footer -->
    <?php include_once "footer.php"; ?>

</body>

</html>