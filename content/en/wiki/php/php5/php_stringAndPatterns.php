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
                        <ul>
                            <li>Res &lt;0 if(str1 &lt; str2);</li>
                            <li>Res &gt; 0 if(str1 &gt; str2);</li>
                            <li>Res == 0 if they are equal.</li>
                        </ul>
                    </li>
                    <li>
                        str<u>case</u>cmp($s1, $s2) is case insensitive
                        <?php include "code/php_code_55.txt"; ?>
                    </li>
                    <li>
                    	str<u>n</u>casecmp($s1, $s2): Test a given number of characters inside two strings.
                        <?php include "code/php_code_59.txt"; ?>
                    </li>
                </ul>
            </li>
			<li>
				<h2>The Heredoc Syntax</h2>
				<ul>
					<li>Used to declare complex strings</li>
					<li>You don't need to escape characters</li>
					<li>
						It's easier to declare strings that include many double-quote characters
						<?php include 'code/php_code_58.txt'; ?>
					</li>
				</ul>
			</li>
			<li>
				<h2>Simple Searching</h2>
				<ul>
					<li>
						strpos($haystack, $needle, $optionalIndexStart)
						<ul>
							<li>
								returns either the numeric position of the needle's (first occurrence within the haystack) or false if a match could not be found.
								<?php include 'code/php_code_60.txt'; ?>
							</li>
							<li>
								str<u>i</u>pos($haystack, $needle, $optionalIndexStart): variants that work in a case-insensitive.
							</li>
							<li>
								str<u>r</u>pos($haystack, $needle, $optionalIndexStart): Reverse search
								<?php include 'code/php_code_62.txt'; ?>
							</li>
						</ul>
					</li>
					<li>
						strstr ($haystack, $needle)
						<ul>
							<li>
								Works like strpos() but it returns the portion of the haystack that starts with the needle.
								<?php include 'code/php_code_61.txt'; ?>
							</li>
							<li>
								you cannot force strstr() to start looking for the needle from a given location by passing a third parameter.
							</li>
							<li>
								str<u>i</u>str($haystack, $needle, $optionalIndexStart): variants that work in a case-insensitive.
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Matching Against a Mask</h2>
				<ul>
					<li>
						strspn ($string, $mask)
						<ul>
							<li>
								match a string against a “whitelist” mask of allowed characters.
							</li>
							<li>
								returns the length of the initial segment of the string that contains any of the characters specified in the mask
							</li>
						</ul>
					</li>
				</ul>
			</li>
        </ul>
    </div>
</section>