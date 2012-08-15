WooP
====

WooP - OOP for wordpress theme development. (Super Alpha)

# Usage

Clone WooP in the theme folder you are working. '$PATH/wp-content/themes/my_theme'

Add this line in your functions.php:
	
	include_once( 'woop/woop.php' );

WooP will create some globals for you:

- $WooPBookmarks
- $WooPPosts
- $WooPTags
- $WooPCategories
...

When you use a global, it will ways return an iterator. So you will have something like this:

	global $WooPTags;
	// 'get..UsingArgs' uses the wp methods. 
	// In this case, get_tags( $args ); 
	$tags = $WooPTags->getTagsUsingArgs( args );
	
	
	if ( $tags->isEmpty() ) {
		echo 'Iterator is empty';
	} else {
		while ( $tags->hasNext() ) {
			$tag = $tags->get();
			echo '<p>'.$tag->name().'</p>';
		}
	}

# License

Copyright (c) 2012 Bruno Dias.

Permission is hereby granted, free of charge, to any person obtaining 
a copy of this software and associated documentation files (the "Software"), 
to deal in the Software without restriction, including without limitation 
the rights to use, copy, modify, merge, publish, distribute, sublicense, 
and/or sell copies of the Software, and to permit persons to whom the Software 
is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included 
in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR 
PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE 
FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT 
OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE 
OR OTHER DEALINGS IN THE SOFTWARE.
