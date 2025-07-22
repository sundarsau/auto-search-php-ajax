<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Search Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>Autosearch using JavaScript and Ajax</h1>
        <form class="form1" action="" method="post">
            <div class="mb-3">
                <label for="user_name" class="form-label">Search User</label>
                <input
                    type="text"
                    class="form-control"
                    name="user_name"
                    id="user_name"
                    placeholder="Type in..."
                    autocomplete="off"
                    onkeyup="suggestUser(this.value)" />
                <div id="suggUser"></div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="js/autosearch.js"></script>
</body>

</html>