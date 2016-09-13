<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Strings and patterns
			<h1>
	
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
					<li>strcmp($s1, $s2): compare two strings. It is binary-safe and
						case-sensitive it returns:
						<ul>
							<li>Res &lt;0 if(str1 &lt; str2);</li>
							<li>Res &gt; 0 if(str1 &gt; str2);</li>
							<li>Res == 0 if they are equal.</li>
						</ul>
					</li>
					<li>str<u>case</u>cmp($s1, $s2) is case insensitive
                        <?php include "code/php_code_55.txt"; ?>
                    </li>
					<li>str<u>n</u>casecmp($s1, $s2): Test a given number of characters inside two strings.
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
					<li>strpos($haystack, $needle, $optionalIndexStart)
						<ul>
							<li>
								returns either the numeric position of the needle's (first occurrence within the haystack) or false if a match could not be found.
								<?php include 'code/php_code_60.txt'; ?>
							</li>
							<li>str<u>i</u>pos($haystack, $needle, $optionalIndexStart):
								variants that work in a case-insensitive.
							</li>
							<li>str<u>r</u>pos($haystack, $needle, $optionalIndexStart): Reverse search
								<?php include 'code/php_code_62.txt'; ?>
							</li>
						</ul>
					</li>
					<li>strstr ($haystack, $needle)
						<ul>
							<li>
								Works like strpos() but it returns the portion of the haystack that starts with the needle.
								<?php include 'code/php_code_61.txt'; ?>
							</li>
							<li>you cannot force strstr() to start looking for the needle
								from a given location by passing a third parameter.</li>
							<li>str<u>i</u>str($haystack, $needle, $optionalIndexStart):
								variants that work in a case-insensitive.
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Matching Against a Mask</h2>
				<ul>
					<li>strspn($string, $mask, $optionalStartIndex, $optionalLength):
						The whitelist approach
						<ul>
							<li>match a string against a whitelist mask of allowed
								characters.</li>
							<li>returns the length of the <u>initial segment</u> of the string that contains any of the characters specified in the mask
								<?php include 'code/php_code_63.txt'; ?>
							</li>
						</ul>
					</li>
					<li>strspn($string, $mask, $optionalStartIndex, $optionalLength):
						The blacklist approach
						<ul>
							<li>returns the length of <u>the initial segment</u> of the string that does not contain any of the characters from the mask.
								<?php include 'code/php_code_64.txt'; ?>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Search and Replace</h2>
				<ul>
					<li>str_replace($needle, $replacement, $haystack,
						$optionalNbrReplacements) : case sensitive
						<ul>
							<li>str_ireplace($needle, $replacement, $haystack,
								$optionalNbrReplacements) : case insensitive</li>
							<li>
		        				Look for the needle in the haystack and substitute every single instance of the latter with the replacement string.
		        				<?php include "code/php_code_65.txt"; ?>
		        			</li>
						</ul>
					</li>
					<li>substr_replace($needle, $replacement, $startIndex,
						$optionalLength)
						<ul>
							<li>
	        					Used if you know the starting and the ending point
	        					<?php include "code/php_code_66.txt"; ?>
	        				</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Extracting Substrings</h2>
				<ul>
					<li>
        				substr($string, $startIndex, $optionalLength)
        				<?php include "code/php_code_67.txt"; ?>
        			</li>
				</ul>
			</li>
			<li>
				<h2>Formatting strings</h2>
				<ul>
					<li>Formatting Numbers
						<ul>
							<li>number_format($number, $optionalNbrDecimal=0,
								$optionalSeparatorDecimal=".", $optionalThousendSeparator=",")
								<ul>
									<li>This function accepts either one, two, or four parameters
										(not three).</li>
									<li>
        								number_format($number): The number will be rounded to the nearest integer, and a comma will be used to separate thousands.
        								<?php include "code/php_code_68.txt"; ?>
        							</li>
									<li>This function is not "locale-aware": Even if you have a
										French or German locale set ( with setlocale (LC_MONETARY,
										'fr_FR'); ), it will still use periods for decimals and commas
										for thousands, unless you specify otherwise.</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Formatting Currency Values</h2>
				<ul>
					<li>This function is "locale aware" and will display the correct
						currency symbol (<u>n</u>ational or <u>i</u>nternational notation) depending on how your locale is set.
        				<?php include "code/php_code_69.txt"; ?>
        			</li>
					<li class="caution">call to setlocale() affects the entire process
						inside which it is executed, rather than the individual script.
						Thus, you should be careful to always reset the locale whenever
						you need to perform a formatting operation.</li>
					<li>
        				The default rounding rules may change from locale to locale.
        				<?php include "code/php_code_70.txt"; ?>
        			</li>
				</ul>
			</li>
			<li>
				<h2>Generic Formatting</h2>
				<ul>
					<li>
        				If you are not handling numbers or currency values, you can use the printf() family of functions to perform arbitrary formatting of a value.
        				<?php include "code/php_code_71.txt"; ?>
        			</li>
				</ul>
			</li>
			<li>
				<h2>Parsing Formatted Input</h2>
				<ul>
					<li>
        				works in a similar way to printf() , except that, instead of formatting output, it allows you to parse formatted input
        				<?php include "code/php_code_72.txt"; ?>
        			</li>
					<li>The data must match the format passed to sscanf() exactly—or
						the function will fail to retrieve all the values.</li>
				</ul>
			</li>
			<li>
				<h2>Perl-compatible Regular Expressions (PCRE)</h2>
				<ul>
					<li>Offer a very powerful string-matching and replacement
						mechanism.</li>
					<li>The real power of regular expressions comes into play when you
						don't know the exact string that you want to match.</li>
					<li>Delimiter
						<ul>
							<li>A regular expression is always delimited by a starting and
								ending character.</li>
							<li>it's usually a good idea to pick a delimiter that isn't
								likely to appear inside the expression.</li>
							<li>By convention, the forward slash is used for this purpose.</li>
						</ul>
					</li>
					<li>Metacharacters
						<ul>
							<li class="noStyle">"." : Match any character</li>
							<li class="noStyle">"^" : Match the start of the string</li>
							<li class="noStyle">"$" : Match the end of the string</li>
							<li class="noStyle">"\s": Match any whitespace character</li>
							<li class="noStyle">"\d": Match any digit</li>
							<li class="noStyle">"\w": Match any word character</li>
							<li class="noStyle">"[]": Ranges of valid characters</li>
						</ul>
					</li>
					<li>Quantifiers
						<ul>
							<li class="noStyle">"*": zero or more times</li>
							<li class="noStyle">"+": one or more times</li>
							<li class="noStyle">"?": zero or one times</li>
							<li class="noStyle">{n,m}: at least n times, and no more than m .</li>
						</ul>
					</li>
					<li>Matching and Extracting Strings
						<ul>
							<li>preg_match($pattern, $string)
								<ul>
									<li>returns 1 if the match is successful, 0 otherwise.</li>
								</ul>
							</li>
							<li>preg_match($pattern, $string, $matches)
								<ul>
									<li>
        								return all the captured subpatterns.
        								<?php include 'code/php_code_73.txt'; ?>
        							</li>
									<li class="caution">The first element of the array contains the
										entire matched string.</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>Performing Multiple Matches
						<ul>
							<li>preg_match_all($pattern, $string, $matches)
								<ul>
									<li>All the whole-pattern matches are stored in the first
										sub-array of the result.</li>
									<li>
										The first captured subpattern of every match is stored in the corresponding slot of the second sub-array.
        								<?php include 'code/php_code_74.txt'; ?>
        							</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>Using PCRE to Replace Strings
						<ul>
							<li>str_replace() is quite flexible, it still only works on
								“whole” strings, that is, where you know the exact text to
								search for.</li>
							<li>preg_replace($regex, $replacement, $string)
								<ul>
									<li>Replace text that matches a pattern we specify.</li>
									<li>
		        						It is possible to reuse captured subpatterns directly in the substitution string by prefixing their index with a dollar sign.
		        						<?php include 'code/php_code_75.txt'; ?>
		        					</li>
									<li>
		        						We can pass arrays of search and replacement arguments and we can also pass in an array of subjects.
		        						<?php include 'code/php_code_76.txt'; ?>
		        					</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>