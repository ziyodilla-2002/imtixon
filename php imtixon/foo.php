<?php 

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$get_id = $_GET['id'];

// Create
if (isset($_POST['add'])) {
    try {
        $sql = "INSERT INTO user_1 (name, email) VALUES (?, ?)";
        $query = $pdo->prepare($sql);
        $query->execute([$name, $email]);

        if ($query->rowCount() > 0) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit; 
        } else {
            echo "Ошибка при добавлении записи.";
        }
    } catch (PDOException $e) {
        echo "Ошибка: " . $e->getMessage();
    }
}

// Read
try {
    print_r($pdo);
    // $sql = $pdo->prepare("SELECT * FROM user_1");
    // $sql->execute();
    // $result = $sql->fetchAll(PDO::FETCH_OBJ);   
} catch (PDOException $e) {
    echo "Ошибка: " . $e->getMessage();
}

//Update

if (isset($_POST['edit'])){
    $sql = ("UPDATE user_1 SET name=?, email=? WHERE id=?");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $email, $get_id]);
    if ($query) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }
}

//Delete

if (isset($_POST['delete'])) {
  $sql = ("DELETE FROM user_1 WHERE id = ?");
  $query = $pdo->prepare($sql);
  $query->execute([$get_id]);
  if ($query) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}
}
?>