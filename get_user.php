<?php
include "dbconnect.php";
if (isset($_POST['user']) && !empty($_POST['user'])) {
    $user_name = $_POST['user'];

    $sql = "select * from users where name = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user_name);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) { ?>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                <tbody>
                    <?php foreach ($result as $row){ ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['created_at'] ?></td>
                            <td><?= $row['updated_at'] ?></td>
                        </tr>
                   <?php  } ?>
                </tbody>
            </thead>
        </table>
<?php }
}
