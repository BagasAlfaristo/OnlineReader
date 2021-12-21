<?php
include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 0px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>Profile</h4>
    <?php
    include('../db.php');
    $id = 1;
    $query = mysqli_query($con, "SELECT * FROM users WHERE id='$id'") or die(mysqli_error($con));;
    $data = mysqli_fetch_assoc($query);
    ?>
    <hr>
    
        <input type="hidden" value="<?php echo $data["id"] ?>" name="id" id="id">
        <div class="mb-3">
            <label style="font-weight:bold" for="exampleInputEmail1" class="form-label" >Name</label><span style="display:inline-block; width: 35px;"></span>
            <?php echo $data['name'] ?>
        </div>
        <div class="mb-3">
            <label style="font-weight:bold" for="exampleInputEmail1" class="form-label">Username</label><span style="display:inline-block; width: 5px;"></span>
            <?php echo $data['username'] ?>
        </div>
        <div class="mb-3">
            <label style="font-weight:bold" for="exampleInputEmail1" class="form-label">Email</label><span style="display:inline-block; width: 40px;"></span>
            <?php echo $data['email'] ?>
        </div>
        <div class="d-grid gap-2">
        <a href="./editAccount.php" class="btn btn-primary">Edit Profile</a>
        </div>
    
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>