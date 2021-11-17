<?php
require_once "models/header.php";

require_once "models/menuCategorias.php";
echo "<div class='container'>";
?>
    <h1>Produtos</h1>
    <hr>
    <div class="produtoslist">
        <?php
            require_once "./controllers/produtoslist.php"
        ?>
    </div>
<?php
echo "</div>";
require_once "models/footer.php";
