<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div style="width: 500px; margin:0 auto;">

        <?php
        session_start();

        if (isset($_SESSION['errors'])) {
            // print_r($_SESSION['errors']);
            echo '<ul>';
            foreach ($_SESSION['errors'] as $key => $error) {
                echo '<li>The ' . $key .' ' . $error . '</li>';
            }
            echo '</ul>';
        }
        ?>

        <a href="./index.php">List</a>
        <form action="./store.php" method="post" enctype="multipart/form-data">
            <input 
                type="text" 
                name="student_id" 
                value="<?= $_SESSION['old']['student_id'] ?? null ?>"
                placeholder="Enter Student ID"
            ><br>
            <?= $_SESSION['errors']['student_id'] ?? null ?> <br>

            <input 
                type="text" 
                name="name" 
                value="<?= $_SESSION['old']['name'] ?? null ?>" 
                placeholder="Enter Student Name"
            ><br>
            <?= $_SESSION['errors']['name'] ?? null ?>
            <input 
                type="file" 
                name="picture" 
                
                
            ><br>
            <?= $_SESSION['errors']['picture'] ?? null ?><br>

            <button>Add</button>
        </form>

        <?php
            if (isset($_SESSION['errors'])) {
                unset($_SESSION['errors']);
            }
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>