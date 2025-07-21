<?php
include "dbconnect.php";
if (isset($_POST['user']) && !empty($_POST['user'])) {
    $user_name = $_POST['user'];
    $user_name = $user_name . '%';

    $sql = "select distinct name from users where name like ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user_name);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) { ?>
        <div class="sugg-list">
            <?php foreach ($result as $row) {
                $user = $row['name']; ?>
                <div class="line1" onclick="selectUser('<?= $user ?>')"><?= $user ?></div>

            <?php } ?>
        </div>
<?php }
}
