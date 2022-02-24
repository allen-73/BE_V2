<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">



    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    
</head>
<body>
    <div class="page">
        <h1>A responsive table</h1>
        <table class="layout display responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Mobile1</th>
                    <th>Mobile2</th>
                    <th>Operation</th>
                    
                </tr>
            </thead>
            <tbody>

                <?php
                    include 'config.php';
                    $selectquery = "select * from customer_details";
                    $query = mysqli_query($conn,$selectquery);
                    
                    $nums = mysqli_num_rows($query);
                    
                    
                    while($res = mysqli_fetch_array($query))
                    {
                        ?>
                            <tr>
                                <td class="organisationnumber"><?php echo $res['id'] ?> </td>
                                <td class="organisationnumber"><?php echo $res['fname'] ?></td>
                                <td class="organisationnumber"><?php echo $res['lname'] ?></td>
                                <td class="organisationnumber"><?php echo $res['address'] ?></td>
                                <td class="organisationnumber"><?php echo $res['city'] ?></td>
                                <td class="organisationnumber"><?php echo $res['mobile1'] ?></td>                   
                                <td class="organisationnumber"><?php echo $res['mobile2'] ?></td>
                                <td class="actions">
                                    <a href="dashboard_form_edit.php?id=<?php echo $res['id'] ?>" id="edit" title="Edit"><i class="fas fa-edit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></a>
                                    <a href="dashboard_form_delete.php?iddl=<?php echo $res['id'] ?>" id="delete" title="Remove"><i class="fas fa-trash-alt"></i></a>
                                    <!-- PUT TOOL TIP FOR THE EDIT AND DELETE BUTTONS -->
                                </td>
                            </tr>
                        <?php
                    }
                ?>
                
                

            </tbody>
        </table>
    </div>
    




</body>
</html>