<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Kalkulator Diskon</title>
        <style>
            body {
                background: linear-gradient(to right, rgb(255, 248, 183), rgb(224, 251, 255));
            }
            .btn, .card-header, .input-group-text {
                border: #a29bfe;
                background-color: #a29bfe;
                color: #fff;
            }
            .btn:hover {
                background-color: #6c5ce7;
            }
            .hasil {
                color: grey;
            }
        </style>
    </head>
    <body>

        <?php
            error_reporting(0);
            $angka = $_POST['angka'];
            $diskon = $_POST['diskon'];

            $nilai = ($diskon / 100) * $angka;
        ?>

        <div class="container d-flex justify-content-center mt-5">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card shadow-lg p-3 mb-5 bg-body rounded" style="width: 18rem;">
                        <div class="card-header text-center">
                            KALKULATOR DISKON
                        </div>
                        <ul class="list-group list-group-flush">
                            <form method="post">
                                <li class="list-group-item">
                                    <div class="input-group mt-3 mb-3">
                                        <span class="input-group-text" id="basic-addon1">123</span>
                                        <input type="text" class="form-control" name="angka" placeholder="Masukkan angka ..." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="input-group mt-3 mb-3">
                                        <span class="input-group-text" id="basic-addon1">%</span>
                                        <input type="text" class="form-control" name="diskon" placeholder="Masukkan diskon ..." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary" value="hitung">HITUNG</button>
                                </li>
                                <li class="list-group-item">
                                    <div class="input-group mt-3 mb-3 hasil">
                                        <?php
                                            echo 'Hasil : ' . number_format($nilai,2,",",".");
                                        ?>
                                    </div>
                                </li>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>