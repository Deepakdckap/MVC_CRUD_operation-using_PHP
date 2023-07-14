<!-- this form is use to create and insert-->
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<style>
    form{
        margin-left: 500px;
        border: solid 2px;
        width: 400px;
        padding: 20px ;
    }
    input{
        padding: 10px;
        margin: 10px 10px 10px 10px;
        border-radius: 5px;
    }
    input[type=email]{
        margin-left: 50px;
    }
    h1{
        text-align: center;
        color: blueviolet;
    }
    button{
        padding: 10px;
        border-radius: 10px;
        margin-left: 140px;
        cursor: pointer;
        background-color: rebeccapurple;
        margin-top: 20px;
    }
</style>
<body>

<?php foreach ($statement as $stmt => $data) ?>
<form action="/update" method="post" enctype="multipart/form-data">
    <h1>EDIT</h1>
    <label for="username">Username: </label> <input type="text" required  placeholder="username" name="username" value="<?php echo $data->name ?>"> <br>
    <label for="email">Email: </label> <input type="email" required placeholder="email" name="email"value="<?php echo $data->email ?>" > <br>
    <label for="password">Password: </label> <input type="password" required placeholder="password" name="password" value="<?php echo $data->password ?>"> <br>
    <button name="update" value="<?php echo $data->id?>">Update</button>
</form>
</body>
</html>


