<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
            <h2 class="post-title">
                <?= $data['article'][0]['title']; ?>
            </h2>
            <p class="post-subtitle">
                <?= $data['article'][0]['article']; ?>
            </p>
            <p class="post-meta">Posted by <?= $data['article'][0]['user_name']; ?>
                on <?= $data['article'][0]['date']; ?></p>
        </div>
    </div>
</div>
<?php if ($data['comments']): ?>
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h3>Comments :</h3>
        </div>
        <?php foreach ($data['comments'] as $comment): ?>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="media g-mb-30 media-comment">
                    <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                        <div class="g-mb-15">
                            <h5 class="h5 g-color-gray-dark-v1 mb-0"><?= $comment['user_name']; ?></h5>
                            <span class="g-color-gray-dark-v4 g-font-size-12"><?= $comment['date']; ?></span>
                        </div>

                        <p><?= $comment['comment']; ?></p>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<div class="row mt-40">
    <div class="col-lg-8 col-md-10 mx-auto">
        <h3> Leave comment :</h3>
        <form name="article_comments" method="POST"
              action="<?= 'http://' . $_SERVER['HTTP_HOST'] . '/comment/add'; ?>">
            <input type="hidden" id="article_id" name="article_id" value="<?= $data['article'][0]['id']; ?>">
            <div class="form-group row">
                <label for="comment_username" class="col-2 col-form-label">
                    Your Name:
                    <span>*</span>
                </label>
                <div class="col-10">
                    <input class="form-control" id="comment_username" type="text" name="username" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="comment_text" class="col-2 col-form-label">
                    Text:
                    <span>*</span>
                </label>
                <div class="col-10">
                    <textarea class="form-control" id="comment_text" type="text" name="comment" required></textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-primary pull-right" name="add" value="Add">
        </form>
    </div>
</div>

