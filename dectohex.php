<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container col-sm-3 mt-5 border">
        <div class="row mt-2">
            <div class="col">
                <form action="dectohex.php" method="POST">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Input Decimal</label>
                        <input type="text" name="decimal" class="form-control bill" id="formGroupExampleInput" placeholder="Example input placeholder">
                    </div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                    <div class="mb-3">
                        <label for="disabledTextInput">Hasil Convert ke Hexadecimal</label>
                        <?php
                        if(isset($_POST['submit']))
                        {
                        $input = $_POST['decimal'];
                        $hasil = $input
                        
                        ?>
                        
                        <!--[ Daerah Konversi Hasil ]-->
                        
                            <input type="text" id="disabledTextInput" value="<?php echo dechex($hasil); }">"?>
                        
                            <input type="text" value="0" class="bil">
                            <button type="button" class="btn btn-warning"><a href="hextodec.php" class="link-secondary">Swap</a></button>
                        <!--[ Daerah Konversi Hasil ]-->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>