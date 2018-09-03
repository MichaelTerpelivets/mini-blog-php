<div class="section group">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto" style="margin-bottom: 30px;">
            <button id="content" type="button" class="btn btn-primary addnote" data-toggle="collapse"
                    data-target="#note"><span
                        class="fa fa-plus"
                        style="color: white;"></span>
                Add Article
            </button>
            <div id="note" class="collapse">
                <div class="comments-area">
                    <h3 style="text-align: left;">Create New Article</h3>
                    <form id="addnote" method="post" action="<?= 'http://' . $_SERVER['HTTP_HOST'] . '/home/create'; ?>"
                          role="form">
                        <div class="form-group row">
                            <label for="user_name" class="col-2 col-form-label">
                                Your Name:
                                <span>*</span>
                            </label>
                            <div class="col-10">
                                <input class="form-control" id="user_name" type="text" name="user_name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-2 col-form-label">
                                Title:
                                <span>*</span>
                            </label>
                            <div class="col-10">
                                <input class="form-control" id="title" type="text" name="title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="article" class="col-2 col-form-label">
                                Text:
                                <span>*</span>
                            </label>
                            <div class="col-10">
                                <textarea class="form-control" id="article" type="text" name="article"
                                          required></textarea>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary pull-right" name="add" value="Create">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <?php if (!empty($data['arr_news'])) : ?>
            <?php foreach ($data['arr_news'] as $article) : ?>
                <div class="post-preview">
                    <a href="<?= 'http://' . $_SERVER['HTTP_HOST'] . '/home/details/id/' . $article['id']; ?>">
                        <h2 class="post-title">
                            <?= $article['title']; ?>
                        </h2>
                        <p class="post-subtitle">
                            <?= mb_strimwidth($article['article'], 0, 50, '...'); ?>
                        </p>
                    </a>
                    <p class="post-meta">Posted by <?= $article['user_name']; ?> on <?= $article['date']; ?>. Comments
                        : <?= $article['comments_count']; ?></p>
                </div>
                <hr>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>