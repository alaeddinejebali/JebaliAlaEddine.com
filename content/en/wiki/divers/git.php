<div class="contentpanel" id="wiki">
    <div class="row-fluid">
        <div class="span12">
            <h1 class="wiki-title page-header"><span id="btnShowHideAllArticles" data-article-visibility="off" class="iconfa-plus-sign"></span> GIT</h1>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">

            <section class="wiki-article">
                <div class="wiki-article-title">
                    <h1 class="btnShowHideArticleBody" data-article-visibility="off">How to color the Git console in Ubuntu??<h1>
                    <ul>
                        <li>update the package index</li>
                        <li class="noStyle">
                            Open "home/userName/.gitconfig" file (Ctrl+H to display hidden files) and edit it like this:
                            <?php include "code/git_code_01.txt"; ?>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="wiki-article">
                <div class="wiki-article-title">
                    <h1 class="btnShowHideArticleBody" data-article-visibility="off">How to check for remote updates without Pull?<h1>
                </div>
                <div class="wiki-article-body invisible">
                    <ul>
                        <li>Update the remote branch in your repository to point to the latest version
                            $> git fetch origin
                        </li>
                        <li>Show difference against remote
                            $> git diff HEAD origin/master
                        </li>
                        <li>Accept (if you're okay) the remote changes:
                            $> git merge origin/master
                        </li>
                    </ul>
                </div>
            </section>
            
            
            
            <section class="wiki-article">
                <div class="wiki-article-title">
                    <h1 class="btnShowHideArticleBody" data-article-visibility="off">To be prepared<h1>
                </div>
                <div class="wiki-article-body invisible">
                    <ul>
                        <li>....</li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>
