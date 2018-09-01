<div class="section group">
    <div class="col-md-10 col-md-offset-2 cont span_2_of_3" style="margin-bottom: 30px;">
        <button style="font-size: 14px" id="content" type="button" class="addnote" data-toggle="collapse"
                data-target="#note"><span
                    class="fa fa-plus"
                    style="color: white; font-size: 18px;"></span>
            Add Article
        </button>
        <div id="note" class="collapse">
            <div class="comments-area">
                <h3 style="text-align: left;">Create New Article</h3>
                <form id="addnote" method="post" action="<?= 'http://' . $_SERVER['HTTP_HOST'] . '/home/create'; ?>"
                      role="form">
                    <p>
                        <label>Your Name:</label>
                        <span>*</span>
                        <input id="user_name" type="text" name="user_name" required>
                    </p>
                    <p>
                        <label>Title:</label>
                        <span>*</span>
                        <input id="title" name="title" required/>
                    </p>
                    <p>
                        <label>Text:</label>
                        <span>*</span>
                        <textarea id="article" name="article" required></textarea>
                    </p>
                    <p>
                        <input type="submit" name="add" value="Add">
                    </p>
                </form>
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
                            <?= $article['title'] ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?= $article['article'] ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <?= $article['user_name']; ?> on <?= $article['date']; ?>. Comments
                        : <?= $article['comments_count']; ?></p>
                </div>
                <hr>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>