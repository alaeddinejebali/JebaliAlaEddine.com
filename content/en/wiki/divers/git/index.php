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
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">How to color the Git console in Ubuntu!?</h1>
                </div>
                <div class="wiki-article-body invisible">
                    <ul>
                        <li>update the package index</li>
                        <li class="noStyle">
							Open "home/userName/.gitconfig" file (Ctrl+H to display hidden files) and edit it like this:
                            <?php include "code/git_code_01.txt"; ?>
							If you don't see your "home/userName/.gitconfig" even when you display hidden files "Ctrl+H"
							<?php include "code/git_code_05.txt"; ?>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="wiki-article">
                <div class="wiki-article-title">
                    <h1 class="btnShowHideArticleBody" data-article-visibility="off">How to check for remote updates without Pull?</h1>
                </div>
                <div class="wiki-article-body invisible">
                    <ul>
                        <li>Update the remote branch in your repository to point to the latest version
                            <?php include "code/git_code_02.txt"; ?>
                        </li>
                        <li>Show difference against remote
                            <?php include "code/git_code_03.txt"; ?>
                        </li>
                        <li>Accept (if you're okay) the remote changes:
                            <?php include "code/git_code_04.txt"; ?>
                        </li>
                        <li>
                            To be verified if this solution is better
                            <ul>
                                <li>$> git remote update</li>
                                <li>$> git status -uno will tell you whether the branch you are tracking is ahead, behind or has diverged. If it says nothing, the local and remote are the same.</li>
                                <li>$> git show-branch *master will show you the commits in all of the branches whose names end in master (eg master and origin/master).</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </section>
            
            <section class="wiki-article">
                <div class="wiki-article-title">
                    <h1 class="btnShowHideArticleBody" data-article-visibility="off">Adding an existing project to GitHub</h1>
                </div>
                <div class="wiki-article-body invisible">
                    <ul>
                         <?php include "code/git_code_06.txt"; ?>
                    </ul>
                </div>
            </section>
            
            <section class="wiki-article">
				<div class="wiki-article-title">
					<h1 class="btnShowHideArticleBody" data-article-visibility="off">Show file's diffence between master and develop</h1>
                </div>
                <div class="wiki-article-body invisible">
                    <ul>
                        <li class="noStyle">
                        	<?php include "code/git_code_07.txt"; ?>
                        </li>
                        <li>
                        	Red lines are lines removed from 'develop' and they are existing for now in 'master'.
                        </li>
                        <li>
                        	Green lines are lines added in 'develop' and they are not existing for now in 'master'.
                        </li>
                    </ul>
                </div>
            </section>            
            
            
            <section class="wiki-article">
                <div class="wiki-article-title">
                    <h1 class="btnShowHideArticleBody" data-article-visibility="off">To be prepared</h1>
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
