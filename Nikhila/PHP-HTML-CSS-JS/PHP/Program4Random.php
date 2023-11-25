<html>
<head>
</head>
<style>
/* .grad {
  background-image: linear-gradient(green, white);
  width: 1000;
  height: 100
} */
input[type='submit']
{
    width: 150;
    height: 50;
    background-color: beige;
    color: rgb(5, 168, 133);
    font-weight:bolder;
    font-size:medium;
}
body{
    background-color:rgb(197, 160, 160);
}
iframe{
            border-color: brown;
            border-width: 2cm;
        }

</style>

<body >
<center>
    <form id="form1" method="post"  action="Program4Random.php">

        <br><br><br>

            <!-- <div class="grad"> -->
                <h1 style='color:rgb(193, 11, 11)'>Click The Button See Your Luck</h1>
                <input type="submit" name="submit" value="Try your Luck">
            <!-- </div> -->
        
        </form> 
        <br><br>
        <?php
        if(isset($_POST['submit']))
        {
        ?>
        <iframe src="Program4Output.php" width="250" height="200"></iframe>
        <?php
        }
        ?>
 
    </center>

</body>

</html>