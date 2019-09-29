<?php require_once APP_ROOT . '/views/inc/header.php'; ?>

<div class="container mt-4" style="text-align: center;">
    <a href="/categories/create" class="btn btn-outline-warning">Add Category <i class="fas fa-plus"></i></a>
</div>

<div class="row mt-4 display-grid">

    <div class="card-deck">
        <div class="card mb-4 mr-4" style="min-width: 18rem; max-width: 18rem;">
            <!-- <img class="card-img-top" src="https://placehold.it/280x140/abc" alt="Card image cap"> -->
            <div class="card-body display-card">
                <?php foreach ($data as $category) : ?>
                    <div class="row">
                        <div class="col-md-8">
                            <p style="font-size: 1.1em;"><?php echo ucwords($category['title']); ?></p>
                        </div>
                        <div class="col-md-4">
                            <div style="display:flex; justify-content: flex-end;">
                                <a href="/categories/edit/<?php echo $category['id']; ?>" class="btn btn-sm btn-info mr-1"><img class="icon-svg" src=<?php echo URL_ROOT . "/img/icons/edit.svg"; ?>></a>
                                <a href="/categories/delete/<?php echo $category['id']; ?>" class="btn btn-sm btn-warning"><img class="icon-svg" src=<?php echo URL_ROOT . "/img/icons/delete.svg"; ?>></a>
                            </div>
                        </div>
                    </div>
                    <hr>
                <?php endforeach ?>
            </div>
        </div>
    </div>

</div>

<?php require_once APP_ROOT . '/views/inc/footer.php'; ?>