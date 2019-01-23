<?php

require_once 'menus/menu.php';
require_once 'lib/fnk.php'
?>
<?php
pais();
?>

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
                        <a href="#supp" data-toggle="collapse" data-target="#supp" data-parent="#accordion"><h2 class="text-dark">Supid <i class="fas fa-utensil-spoon"></i></h2></a>
                    </div>
                    <?php
                    echo '<div id="supp" class="collapse">';
                    foreach ($supid as $suppid=>$info){
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
                        <a href="#magus" data-toggle="collapse" data-target="#magus" data-parent="#accordion" class="maguslink"><h2 class="text-dark">Magustoidud <i class="fas fa-cookie-bite"></i></h2></a>
                    </div>
                    <?php
                    echo '<div id="magus" class="collapse">';
                    foreach ($magusad as $magus=>$info){
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
                        <a href="#jook" data-toggle="collapse" data-target="#jook" data-parent="#accordion" class="jooklink"><h2 class="text-dark">Joogid <i class="fas fa-glass-whiskey"></i></h2></a>
                    </div>
                    <?php
                    echo '<div id="jook" class="collapse">';
                    foreach ($joogid as $jook=>$info){
                        echo '<ul class="list-group">';
                        echo '<li class="list-group-item">';
                        echo '<p class="mb-0">'.$info['nimetus'].' ';
                        echo '<span class="small text-secondary">'.$info['kirjeldus'].'</span>';
                        echo '<span class="badge badge-info">'.$info['hind'].'&euro;</span>';
                        echo '</p>
                                    </li>';
                        echo '</ul>';
                    }
                    echo '</div>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
jalus();
?>