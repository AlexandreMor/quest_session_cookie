<?php
require 'inc/head.php';
require 'inc/data/products.php';
if (empty($_SESSION['login'])) {
    header('Location: /index.php');
}

if (isset($_SESSION['cart'])) { ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_SESSION['cart'] as $idCookie => $nb) {
                if ($idCookie === 46) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail text-center">
                            <figcaption class="caption">
                                <h3>Pecan Nuts</h3>
                                <p><?= 'Quantité : ' . $nb ?></p>
                            </figcaption>
                        </figure>
                    </div>
                <?php
                }
                if ($idCookie === 36) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail text-center">
                            <figcaption class="caption">
                                <h3>Chocolate Chips</h3>
                                <p><?= 'Quantité : ' . $nb ?></p>
                            </figcaption>
                        </figure>
                    </div>
                <?php
                }
                if ($idCookie === 58) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail text-center">
                            <figcaption class="caption">
                                <h3>Full chocolate cookie</h3>
                                <p><?= 'Quantité : ' . $nb ?></p>
                            </figcaption>
                        </figure>
                    </div>
                <?php
                }
                if ($idCookie === 32) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail text-center">
                            <figcaption class="caption">
                                <h3>M&M's© cookies</h3>
                                <p><?= 'Quantité : ' . $nb ?></p>
                            </figcaption>
                        </figure>
                    </div>
        <?php
                }
            
        }
        ?>
    </div>
</section>
<?php } ?>
</div>
</section>
<?php require 'inc/foot.php'; ?>