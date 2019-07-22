<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../asset/css/bootstrap/bootstrap.min.css">

    <title>Data Subscriber</title>
</head>

<body>
    <div class="container table-responsive-lg">
        <br>
        <h2>Data Subscriber</h2>
        <table class="table table-bordered">
            <thead>
                <tr class="text-center table-info">
                    <th scope="col">No</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 0;
                    $names = file("..\\data\\nama.txt")          
                ?>
                <tr>
                    <th scope="row" style="text-align: center;">
                        <?php
                            for($i; $i < 5; $i++){
                                echo $i + 1;
                            } 
                        ?>
                    </th>
                    <td>
                        <?php 
                            foreach($names as $nama ){
                                echo ($nama);
                            }
                        ?>
                    </td>
                    <td>
                        <?php 
                            echo "Upi.23@gmail.com";
                        ?>
                    </td>
                    <td>
                        <?php 
                            echo "mantep gan";
                        ?>
                    </td>
                <?php
                    
                ?>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="../index.html">
            <button type="button" class="btn btn-outline-success">Back</button>
        </a>
    </div>

</body>

</html>