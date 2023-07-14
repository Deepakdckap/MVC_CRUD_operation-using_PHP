
<!-- this form is use to fetch -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid</title>
</head>
<style>
    table,th,td{
        border: solid 1.5px;
        margin-left: 260px;
        padding: 10px;
    }
    button{
        padding: 5px;
        border-radius: 3px;
        cursor: pointer;
    }
</style>
<body>
<div class="main">
    <table>
        <tr>
            <th >ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr
            <?php foreach ($alluser as $all=> $value): ?>
            <tr>
                <td><?php echo $all+1 ?></td>
                <td><?php echo $value->name ?></td>
                <td><?php echo $value->email ?></td>
                <td><?php echo $value->password ?></td>
                <td>
                    <form action="/edit" method="post">

                        <button type="submit" name="edit" value="<?php echo $value->id ?>" >EDIT</button>
                    </form>
                </td>

                <td>
                    <form action="/delete" method="post">
                        <button type="submit" name="delete" value="<?php echo $value->id ?>">DELETE</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </table>


</div>
<button><a href="/">CREATE</a>      </button>
</body>
</html>