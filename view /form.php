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
        color: darkgreen;
    }
    button{
        padding: 10px;
        border-radius: 10px;
        margin-left: 140px;
        cursor: pointer;
        background-color: goldenrod;
        margin-top: 20px;
    }
</style>
<body>

<form action="/create" method="post" enctype="multipart/form-data">
    <h1>Register</h1>
    <label for="username">Username: </label> <input type="text" required  placeholder="username" name="username"> <br>
    <label for="email">Email: </label> <input type="email" required placeholder="email" name="email"> <br>
    <label for="password">Password: </label> <input type="password" required placeholder="password" name="password"> <br>
    <button name="action" value="create">create new </button>
</form>
</body>
</html>

