<div class="panel panel-default wiki-article">
	<div class="panel-heading wiki-article-title">
		<h4 class="panel-title">
        	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#functions">Functions</a>
		</h4>
	</div>
	<div id="functions" class="panel-collapse collapse">
		<div class="panel-body wiki-article-body">
		<ul>
			<li>
				<h2>Variable scope</h2>
				<ul>
					<li>PHP has three variable scopes: the global scope, function
						scope, and class scope.</li>
					<li>There are two ways to access variables in the global scope from inside a function; the first
                        consists of "importing" the variable inside the function's scope by using the global statement:
                        <?php include "code/php_code_27.txt"; ?>
                    </li>
					<li>Many developers feel that the use of global introduces an element of confusion into their code,
                        and that "connecting" a function's scope with the global scope can easily be a source of
                        problems. They prefer, instead, to use the $GLOBALS superglobal array, which contains all the
                        variables in the global scope:
                        <?php include "code/php_code_28.txt"; ?>
                    </li>
				</ul>
			</li>
			<li>
				<h2>Variable-length Argument Lists</h2>
				<ul>
					<li>func_num_args(): returns number of passed arguments</li>
					<li>func_get_args(): returns an array of passed arguments</li>
					<li>func_get_arg(2): returns the value of argument passed in
						parameter</li>
				</ul>
				<ul>
					<li>Let's say that we want to have a function with 2 params with
						the 1<sup>st</sup> one is optional and the 2<sup>nd</sup> is required.
                        <?php include "code/php_code_29.txt"; ?>
                    </li>
					<li>This does not cause any errors to be emitted, but it also makes
						no sense whatsoever because you will never be able to omit the
						first parameter ($optional) if you want to specify the second, and
						you can't omit the second because PHP will emit a warning.</li>
					<li>
                        In this case, what you really want is variable-length argument lists:
                        <?php include "code/php_code_30.txt"; ?>
                    </li>
					<li class='caution'>In function, only variables can be passed as
						by-reference arguments; you cannot pass an expression as a
						by-reference parameter.</li>
				</ul>
			</li>
		</ul>
		</div>
	</div>								
</div>