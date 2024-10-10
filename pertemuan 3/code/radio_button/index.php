<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button</title>
</head>

<body>
    <div class="container mt-5">
        <form action="radio-hasil.php" method="post">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                    value="Teknik Inggris (TI)">
                <label class="form-check-label" for="flexRadioDefault1">
                    Teknik Inggris
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked
                    value="Sastra Mesin (SM)">
                <label class="form-check-label" for="flexRadioDefault2">
                    Sastra Mesin
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked
                    value="Pendidikan dasar Informatika (PDI)">
                <label class="form-check-label" for="flexRadioDefault2">
                    Pendidikan dasar Informatika
                </label>
            </div>
            <input type="submit" name="Input" value="Tampikan" class="ms-5">
        </form>
    </div>
    </div>
</body>

</html>