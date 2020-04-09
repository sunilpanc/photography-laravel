<html>
    <head>
        <title>
            Success
        </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        $save=session('count');
        if($save==0)
       {
        $s=" ";
        $save=0;
       }
       else
       {
        $s=session('name');
       }
                ?>
        <div class="container">
            <div class="jumbotron">
                <?php
                if($save==0)
                {
                 echo "<h1>You Have Nothing Left in Your Cart !</h1>";
                }
                else
                {
                    echo "<h1>Thankyou for Shopping with us $s</h1>";
                }
                ?>
                <div class="row">
                <a href="/index" class="btn btn-warning">Home Page</a>
                <?php
                if($save>0)
                {   
                echo "<a href='/Remove' class='btn btn-danger' class='remove_item_link'>Click to Cancel Order</a>";
                }
                else 
                    {
                    echo "<a href='/Remove' class='btn btn-danger' class='remove_item_link' disabled>Click to Cancel Order</a>";
                    }
                ?>
                </div>
            </div>
        </div>
    </body>
</html>
<?php