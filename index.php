<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negozio Animali</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <?php
            require_once 'includes/products.php';

            foreach ($products as $product) {
                try {
                    $details = $product->getDetails();
            ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <?php if (!empty($details['image'])): ?>
                                <img src="img/<?php echo $details['image']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($details['title']); ?>">
                            <?php else: ?>
                                <img src="img/default.jpg" class="card-img-top" alt="Immagine non disponibile">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($details['title']); ?></h5>
                                <p class="card-text">Prezzo: €<?php echo number_format($details['price'], 2); ?></p>
                                <p class="card-text">
                                    <i class="fas <?php echo htmlspecialchars($details['category']->getIcon()); ?>"></i>
                                    Categoria: <?php echo htmlspecialchars($details['category']->getName()); ?>
                                </p>
                                <p class="card-text">Tipo: <?php echo htmlspecialchars($details['type']); ?></p>
                            </div>
                        </div>
                    </div>
            <?php
                } catch (Exception $e) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card mb-4 shadow-sm">';
                    echo '<img src="img/default.jpg" class="card-img-top" alt="Immagine non disponibile">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">Prodotto non disponibile</h5>';
                    echo '<p class="card-text">Errore: ' . htmlspecialchars($e->getMessage()) . '</p>';
                    echo '</div></div></div>';
                }
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>