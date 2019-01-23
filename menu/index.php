<?php
function soodus($hind, $soodusProtsent){
    return round($hind * ((100-$soodusProtsent) / 100), 2);
}
require_once 'menus/menu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Söökla</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
            <div id="accordion">
                <div class="card">
                    <div class="card-header alert-dark">
                        <a href="#praed" data-toggle="collapse" data-target="#praed" data-parent="#accordion"><h2 class="text-dark">Praed <i class="fas fa-utensils"></i></h2></a>
                    </div>
                    <?php
                    echo '<div id="praed" class="collapse">';
                    foreach ($praed as $praad=>$info){
                        echo '<ul class="list-group">';
                        echo '<li class="list-group-item">';
                        echo '<p class="mb-0">'.$info['nimetus'].' <br>';
                        echo '<span class="small text-secondary">'.$info['kirjeldus'].'</span><br>';
                        echo '<span class="badge badge-info">'.$info['hind'].'&euro;</span>';
                        echo '<span class="badge badge-success">'.soodus($info['hind'], 15).'&euro;</span>';
                        echo '</p>
                                    </li>';
                        echo '</ul>';
                    }
                    echo '</div>';
                    ?>
                </div>
                <div class="card">
                    <div class="card-header alert-dark">
                        <a href="#supp" data-toggle="collapse" data-target="#supp" data-parent="#accordion" class="supplink"><h2 class="text-dark">Supid <i class="fas fa-utensil-spoon"></i></h2></a>
                    </div>
                    <div id="supp" class="collapse">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p class="mb-0">Lihasupp seentega <br>
                                    <span class="small text-secondary">supp, hapukoor, leib</span><br>
                                    <span class="badge badge-info">1,20€</span>
                                    <span class="badge badge-success">1,00€</span>
                                </p>
                            </li>
                            <li class="list-group-item">
                                <p class="mb-0">Kartuli-makaronisupp <br>
                                    <span class="small text-secondary">supp, leib</span><br>
                                    <span class="badge badge-info">1,10€</span>
                                    <span class="badge badge-success">0,95€</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header alert-dark">
                        <a href="#magus" data-toggle="collapse" data-target="#magus" data-parent="#accordion" class="maguslink"><h2 class="text-dark">Magustoidud <i class="fas fa-cookie-bite"></i></h2></a>
                    </div>
                    <div id="magus" class="collapse">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p class="mb-0">Leivavaht piimaga <br>
                                    <span class="badge badge-info">0,95€</span>
                                    <span class="badge badge-success">0,75€</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header alert-dark">
                        <a href="#jook" data-toggle="collapse" data-target="#jook" data-parent="#accordion" class="jooklink"><h2 class="text-dark">Joogid <i class="fas fa-glass-whiskey"></i></h2></a>
                    </div>
                    <div id="jook" class="collapse">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p class="mb-0">Mahl <br>
                                    <span class="badge badge-info">0,60€</span>
                                    <span class="badge badge-success">0,45€</span>
                                </p>
                            </li>
                            <li class="list-group-item">
                                <p class="mb-0">Piim <br>
                                    <span class="badge badge-info">0,30€</span>
                                    <span class="badge badge-success">0,20€</span>
                                </p>
                            </li>
                            <li class="list-group-item">
                                <p class="mb-0">Keefir <br>
                                    <span class="badge badge-info">0,39€</span>
                                    <span class="badge badge-success">0,27€</span>
                                </p>
                            </li>
                            <li class="list-group-item">
                                <p class="mb-0">Morss <br>
                                    <span class="badge badge-info">0,25€</span>
                                    <span class="badge badge-success">0,15€</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>