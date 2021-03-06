<?php 
include_once "../includes/header.php";
$authentication = new Authentication;
if($authentication->priority() != 0)
{
  header("location: http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/person/getForm.php");
}
?>

<div class="container" style="width:500px">
    <h3>Get User</h3>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="user" class="form-control" placeholder="Enter username..."/>
        <br>
        <input type="submit" name="getForm" class="btn btn-primary" value="Get"/>
    </form>
    <?php
        $tbl = "";
        if(isset($_POST["getForm"]))
        {
            if(isset($_POST["user"]))
            {
                $userController = new UserController;
                $results = $userController->getAllUsers($_POST["user"]);
                $tbl .= '<table class="table"><thead><tr>
                <th scope="col">Username</th>
                <th scope="col">Pri</th>
                <th scope="col">Person ID</th>
                <th scope="col">Description</th>
                <th scope="col">Edit</th></tr></thead>';
                foreach($results as $user)
                {
                    $tbl .= '<tr><th scope="row">'.$user['user'].'</th>
                    <td>'.$user['pri'].'</td>
                    <td>'.$user['id'].'</td>
                    <td>'.$user['description'].'</td>
                    <td><a class="btn btn-primary" href="http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/user/editForm.php?user='.$user['user']."&pri=".$user['pri']."&id=".$user['id']."&description=".$user['description'].'">Edit</a></td>';
                }
                $tbl .= '</tbody></table>';
            }
            echo $tbl;
        }

        if(!empty($message))
        {
            echo $message;
        }
    ?>
</div>

<?php include_once "../includes/footer.php" ?>