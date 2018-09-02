<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
            <h2 class="post-title">
                <?= $data['article'][0]['title']; ?>
            </h2>
            <h3 class="post-subtitle">
                <?= $data['article'][0]['article']; ?>
            </h3>
            <p class="post-meta">Posted by <?= $data['article'][0]['user_name']; ?>
                on <?= $data['article'][0]['date']; ?></p>
        </div>
    </div>
</div>
<?php if ($data['comments']): ?>
    <h3>Comments :</h3>
    <?php foreach ($data['comments'] as $comment): ?>

        <div class="row">
            <p><span>Author: <?= $comment['user_name']; ?></span></p>
            <p><?= $comment['comment']; ?> </p>
            <p>Date : <?= $comment['date']; ?></p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<h3> Leave comment :</h3>
<form name="article_comments" method="POST"
      action="<?= 'http://' . $_SERVER['HTTP_HOST'] . '/comment/add'; ?>"
>
    <input type="hidden" id="article_id" name="article_id" value="<?= $data['article'][0]['id']; ?>">
    <p>
        <label>Name:</label>
        <span>*</span>
        <input id="comment_username" type="text" name="username" required>
    </p>
    <p>
        <label>Текст:</label>
        <span>*</span>
        <textarea id="comment_text" name="comment" required></textarea>
    </p>
    <p>
        <button type="submit" name="add">Add</button>
    </p>
</form>
