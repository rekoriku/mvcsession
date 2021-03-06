<?php 
    include "../includes/header.php";

    $message = "";
?>

<div class="container" style="width:500px">
    <h3>Get Person</h3>
    <form method="post">
        <label>Firstname:</label>
        <input type="text" name="firstname" class="form-control" placeholder="Enter firstname..."/>
        <br>
        <input type="submit" name="getForm" class="btn btn-primary" value="Get"/>
    </form>
    <?php
        $tbl = "";
        if(isset($_POST["getForm"]))
        {
            if(isset($_POST["firstname"]))
            {
                $personController = new PersonController;
                $authentication = new Authentication;
                $results = $personController->getFname($_POST["firstname"]);

                $tbl .= '<table class="table"><thead><tr>
                <th scope="col">Id</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>';
                if($authentication->validSess())
                {
                    $tbl .= '<th scope="col">Edit</th></tr></thead>';
                }
                $tbl .= '</tr></thead>';
                foreach($results as $person)
                {
                    $tbl .= '<tr><th scope="row">'.$person['id'].'</th>
                    <td>'.$person['fname'].'</td>
                    <td>'.$person['sname'].'</td>';
                    if($authentication->validSess())
                    {
                        $tbl .= '<td><a class="btn btn-primary" href="http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/person/editForm.php?id='.$person['id']."&fname=".$person['fname']."&sname=".$person['sname'].'">Edit</a></td>';
                    }
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

<?php 
    include "../includes/footer.php";
?>