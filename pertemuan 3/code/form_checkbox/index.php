<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Check</title>
</head>

<body>
    <div class="container mt-5">
        <form action="checkbox-hasil.php" method="post">
            <p>Motor Impian</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="ZX-25R" id="hasil1" name="hasil[]">
                <label class="form-check-label" for="hasil1">
                    ZX-25R
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="R6" id="hasil2" name="hasil[]">
                <label class="form-check-label" for="hasil2">
                    R6
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Ducati Hypermotorad" id="hasil3" name="hasil[]">
                <label class="form-check-label" for="hasil3">
                    Ducati Hypermotorad
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="CBR 1000 R-RR" id="hasil4" name="hasil[]">
                <label class="form-check-label" for="hasil4">
                    CBR 1000 R-RR
                </label>
            </div>
            <input type="submit" name="Input" value="Tampikan" class="ms-5">
        </form>
    </div>
</body>

</html>