<section class="wiki-article">
	<div class="wiki-article-title">
		<h1 class="btnShowHideArticleBody" data-article-visibility="off">
			Arrays
			<h1>
	
	</div>
	<div class="wiki-article-body invisible">
		<ul>
			<li>
				<h2>Basics</h2>
				<ul>
					<li>Declaration
                        <?php include "code/php_code_31.txt"; ?>
                    </li>
					<li>Search element
						<ul>
							<li>count($tab): returns the size of the array.</li>
							<li>in_array($tab, $v): checks if tab contains $v or not. returns
								true or false.</li>
							<li>
                                array_key_exists($key, $array): Checks an array for a specified key, and returns true if
                                the key exists and false if the key does not exist.
                                <?php include "code/php_code_32.txt"; ?>
                            </li>
						</ul>
					</li>
					<li>An element can be deleted from an array by unsetting it: unset( $array['index'] );
                        <?php include "code/php_code_33.txt"; ?>
                    </li>
					<li>When an element is added to an array without specifying a key,
						PHP automatically assigns a numeric one that is equal to the
						greatest numeric key already in existence in the array, plus one:
						<ul>
							<li>Example:
                                <?php include "code/php_code_35.txt"; ?>
                            </li>
							<li>Note that this is true even if the array contains a mix of numerical and string keys:
                                <?php include "code/php_code_36.txt"; ?>
                                <ul>
									<li>Note that array keys are case-sensitive, but type
										insensitive. Thus, the key 'A' is different from the key 'a',
										but the keys '1' and 1 are the same.</li>
									<li>The conversion is only applied if a string key contains the
										traditional decimal representation of a number; thus, for
										example, the key '01' is not the same as the key 1.</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<h2>Printing (var_dump() vs print_r())</h2>
				<ul>
					<li>While both functions recursively print out the contents of
						composite value</li>
					<li>only var_dump() outputs the data types of each value.</li>
					<li>Only var_dump() is capable of outputting the value of more than one variable at the same time.
                        <?php include "code/php_code_34.txt"; ?>
                    </li>
					<li>Only print_r can return its output as a string, as opposed to
						writing it to the script's standard output.</li>
				</ul>
			</li>
			<li>
				<h2>Enumerative vs Associative</h2>
				<ul>
					<li>Arrays can be roughly divided in two categories: enumerative
						and associative.
						<ol>
							<li>Enumerative arrays are indexed using only numerical indexes.<em>(fr:
									tableaux num&eacute;rot&eacute;s)</em></li>
							<li>Asociative arrays (sometimes referred to as dictionaries)
								allow the association of an arbitrary key to every element. <em>(fr:
									tableaux associatifs)</em>
							</li>
						</ol>
					</li>
				</ul>
			</li>
			<li>
				<h2>Unravelling Arrays</h2>
				<ul>
					<li>By using the list construct, and passing in three variables, we are causing the first three elements of the array to be assigned to those variables in order, allowing us to then simply use those elements within our while loop.
                        <?php include "code/php_code_37.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Array Operations</h2>
				<ul>
					<li>
						Example:
						<ul>
							<li>
                        		<?php include "code/php_code_38.txt"; ?>
                       			Note how the the resulting array includes all of the elements of the two original arrays, even though they have the same values.
                        	</li>
							<li>
								This is a result of the fact that the keys are different
							</li>
							<li>
								If the two arrays had common elements that also share the same string keys or that have numeric keys (even if they are different), they would only appear once in the end result:
                        		<?php include "code/php_code_39.txt"; ?>
                    		</li>
						</ul>
					</li>
					<li>
						<h2>Comparing Arrays</h2>
						<ul>
							<li>Focus on the order.</li>
							<li>The equivalence operator == returns true if both arrays have
								the same number of elements with the same values and keys,
								regardless of their order.</li>
							<li>The identity operator === returns true only if the array contains the same key/value pairs in the same order.
                        <?php include "code/php_code_40.txt"; ?>
                    </li>
						</ul>
					</li>
					<li>
						<h2>Flipping and Reversing</h2>
						<ul>
							<li>array_flip($array):
								<ul>
									<li>Inverts the value of each element with its key.
                                <?php include "code/php_code_41.txt"; ?>
                            </li>
								</ul>
							</li>
							<li>array_reverse($array):
								<ul>
									<li>Inverts the order of the array's elements, so that the last one appears first.
                                <?php include "code/php_code_42.txt"; ?>
                            </li>
									<li class="caution">Note how key association is only lost
										for those elements whose keys are numeric.</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<h2>The Array Pointer</h2>
						<ul>
							<li>Each array has a pointer that indicates the current element
								of an array in an iteration.</li>
							<li>Upon starting an iteration over an array, the first step is usually to reset the pointer to its initial position using the reset() function; after that, we can move forward or backwards by one position by using prev() and next().
                        <?php include "code/php_code_43.txt"; ?>
                    </li>
							<li>To start the iteration from the last element:
                        <?php include "code/php_code_44.txt"; ?>
                    </li>
							<li>An EasierWay to Iterate:
                        <?php include "code/php_code_45.txt"; ?>
                    </li>
						</ul>
					</li>
					<li>
						<h2>Sorting arrays</h2>
						<ul>
							<li>sort() effectively destroys all the keys in the array and renumbers its elements starting from zero.
                        <?php include "code/php_code_46.txt"; ?>
                    </li>
							<li>If you wish to maintain key association, you can use a<small>ssociative</small>sort() instead:
                        <?php include "code/php_code_47.txt"; ?>
                    </li>
							<li>Both sort() and asort() accept a second, optional parameter:
								<ol>
									<li>SORT_REGULAR: Compare items as they appear in the array,
										without performing any kind of conversion. This is the default
										behaviour.</li>
									<li>SORT_NUMERIC: Convert each element to a numeric value for
										sorting purposes.</li>
									<li>SORT_STRING: Compare all elements as strings.</li>
								</ol>
							</li>
							<li>To sort them in descending order, you can use rsort() and
								arsort().</li>
							<li>The sorting operation performed by <b>sort()</b> and <b>asort()</b> simply takes into consideration either the numeric value of each element, or performs a byte-by-byte comparison of strings values. This can result in an "unnatural" sorting order -for example, the string value '10t' will be considered "lower" than '2t' because it starts with the character 1, which has a lower value than 2.
                       </li>
                       <li>
                       nat<small>ural</small>sort($array)
                        <?php include "code/php_code_48.txt"; ?>
                    </li>
							<li>You can sort by key (rather than by value) using: <b>ksort()</b> and
								<b>krsort()</b></li>
							<li>To randomize elements of array, use: <b>shuffle($array)</b>. You'll
								lost all keys and will be replaced from zero to n.</li>
						</ul>
					</li>
					<li>
						<h2>Arrays as Stacks and Queues</h2>
						<ul>
							<li>Stacks (LIFO)
								<ul>
									<li><b>array_push($array, $val)</b>: add at the end</li>
									<li><b>array_pop($array)</b>: remove the last element</li>
								</ul>
							</li>
							<li>Queues (FIFO)
								<ul>
									<li><b>array_unshift($array, $val)</b>: add at the beginning</li>
									<li><b>array_shift($array)</b>: remove the first element</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<h2>Other functionalities</h2>
						<ul>
							<li><b>array_diff ($a, $b))</b>: returns all the values of $a that do
								not appear in $b.
								</li>
							<li><b>array_intersect ($a, $b))</b>: returns all values that are included in both arrays.
                        <?php include "code/php_code_49.txt"; ?>
                    </li>
						</ul>
					</li>
				</ul>
	
	</div>
</section>