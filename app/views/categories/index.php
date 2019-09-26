<?php require_once APP_ROOT . '/views/inc/header.php'; ?>

<div class="container mt-4" style="text-align: center;">
<a href = "/categories/create" class="btn btn-outline-warning">Add Category <i class="fas fa-plus"></i></a>
</div>

<div class="row mt-4 display-grid">
    <?php foreach ($data as $category) : ?>
        <div class="card-deck">
            <div class="card mb-4 mr-4" style="min-width: 18rem; max-width: 18rem;">
                <!-- <img class="card-img-top" src="https://placehold.it/280x140/abc" alt="Card image cap"> -->
                <div class="card-body display-card">
                    <h5 class="card-title"><?php echo $category['title']; ?></h5>
                    <a href="/categories/delete/<?php echo $category['id'];?>" class="btn btn-sm btn-warning">delete</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?php require_once APP_ROOT . '/views/inc/footer.php'; ?>