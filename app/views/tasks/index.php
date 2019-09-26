<?php require_once APP_ROOT . '/views/inc/header.php' ?>

<div class="container mt-4" style="text-align: center;">
    <a href="/tasks/create" class="btn btn-outline-warning">Add Task <i class="fas fa-plus"></i></a>
</div>

<div class="row mt-4 display-grid">
    <?php foreach ($data as $task) : ?>
        <div class="card-deck">
            <div class="card mb-4 mr-4" style="min-width: 18rem; max-width: 18rem;">
                <!-- <img class="card-img-top" src="https://placehold.it/280x140/abc" alt="Card image cap"> -->
                <div class="card-body display-card">
                    <h5 class="card-title"><?php echo $task['title']; ?></h5>
                    <p class="card-text"><?php echo $task['body']; ?></p>
                    <p class="card-text"><small class="text-muted"><?php echo $task['category_title'] ?></small></p>
                    <hr>
                    <div style="display:flex; justify-content: flex-end;">
                        <a href="/tasks/edit/<?php echo $task['id']; ?>" class="btn btn-sm btn-info mr-1"><i class="far fa-edit"></i></a>
                        <a href="/tasks/delete/<?php echo $task['id']; ?>" class="btn btn-sm btn-warning"><i class="far fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?php require_once APP_ROOT . '/views/inc/footer.php' ?>