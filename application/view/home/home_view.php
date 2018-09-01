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
        <div class="post-preview">
            <a href="post.html">
                <h2 class="post-title">
                    Man must explore, and this is exploration at its greatest
                </h2>
                <h3 class="post-subtitle">
                    Problems look mighty small from 150 miles up
                </h3>
            </a>
            <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                on September 24, 2018</p>
        </div>
        <hr>
        <div class="post-preview">
            <a href="post.html">
                <h2 class="post-title">
                    I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                </h2>
            </a>
            <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                on September 18, 2018</p>
        </div>
        <hr>
        <div class="post-preview">
            <a href="post.html">
                <h2 class="post-title">
                    Science has not yet mastered prophecy
                </h2>
                <h3 class="post-subtitle">
                    We predict too much for the next year and yet far too little for the next ten.
                </h3>
            </a>
            <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                on August 24, 2018</p>
        </div>
        <hr>
        <div class="post-preview">
            <a href="post.html">
                <h2 class="post-title">
                    Failure is not an option
                </h2>
                <h3 class="post-subtitle">
                    Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                </h3>
            </a>
            <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                on July 8, 2018</p>
        </div>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
    </div>
</div>