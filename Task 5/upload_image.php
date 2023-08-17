<html>
<head>

    <title>upload image</title>
    <meta charset="UTF-8">

</head>
<body>
<h1>upload image</h1>
<form action="validate.image.php" method="post" enctype="multipart/form-data" >
    <div>
        <label>upload image:</label>
        <input type="file" name="images" multiple/>
    </div>

    <br>


    <div>
            <label>submit</label>
            <input type="submit" name="submit" >
    </div>


