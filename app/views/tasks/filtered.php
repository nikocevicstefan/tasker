<?php require_once APP_ROOT . '/views/inc/header.php' ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <a href="/tasks/create" class="btn btn-light">Add Task</a>
        </div>
        <div class="col-6">
            <?php $categories = array();
            foreach ($data as $category) {
                array_push($categories, $category['category_id']);
            }
            $categories = array_unique($categories);
            ?>

            <div class="btn-group">
                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </button>
                <div class="dropdown-menu">
                        <a class="dropdown-item" href="/tasks/index">All</a>
                    <?php foreach ($categories as $key): ?>
                        <a class="dropdown-item" href="/tasks/filter/<?php echo $key; ?>"><?php echo $key; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
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
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?php require_once APP_ROOT . '/views/inc/footer.php' ?>