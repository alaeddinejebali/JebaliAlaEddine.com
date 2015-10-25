<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Strings and patterns<h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
            <li>
                <h2>Basics</h2>
                <ul>
                    <li>strlen($v): returns the length of $v</li>
                    <li>
                        strtr($v): used to translate certain characters of a string into other characters (transliteration)
                        <?php include "code/php_code_53.txt"; ?>
                    </li>
                    <li>
                        The code bellow will show 'A' because PHP first transparently converts the contents of $string to the integer 123, thus making the comparison true. Naturally, the best way to avoid this problemis to use the identity operator ===
                        <?php include "code/php_code_54.txt"; ?>
                    </li>
                </ul>
            </li>
            <li>
                <h2>Comparison</h2>
                <ul>
                    <li>
                        strcmp($s1, $s2): compare two strings. It is binary-safe and case-sensitive it returns:
                        <ol>
                            <li>&lt;0 if(str1 &lt; str2);</li>
                            <li>&gt; 0 if(str1 &gt; str2);</li>
                            <li>0 if they are equal.</li>
                        </ol>
                    </li>
                    <li>
                        strcasecmp($s1, $s2) is case insensitive
                        <?php include "code/php_code_55.txt"; ?>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</section>