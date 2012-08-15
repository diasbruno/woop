WooP
====

WooP - OOP for wordpress theme development. (Beta)

# Usage

Clone WooP in the theme folder you are working. '$PATH/wp-content/themes/my_theme'

Add this line in your functions.php:
- include_once( 'woop/woop.php' );

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
 	

if ( $tags->isEmpty ) {
	echo 'Iterator is empty';
} else {
	while ( $tags->hasNext() ) {
		$tag = $tags->get();
		echo '<p>'.$tag->name().'</p>';
	}
}