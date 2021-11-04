<?php
include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>Edit Data USER</h4>
    <?php
    include('../db.php');
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM users WHERE id='$id'") or die(mysqli_error($con));;
    $data = mysqli_fetch_assoc($query);
    ?>
    <hr>
    <form action="../process/editAccountProcess.php" method="post">
        <input type="hidden" value="<?php echo $data["id"] ?>" name="id" id="id">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input class="form-control" id="name" value="<?php echo $data['name'] ?>" name="name"
                aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input class="form-control" id="username" value="<?php echo $data['name'] ?>" name="username"
                aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="register">Edit User</button>
        </div>
    </form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>