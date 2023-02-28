<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Proposal
 */

if ( ! function_exists( 'proposal_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function proposal_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'proposal' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'proposal_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function proposal_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'proposal' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'proposal_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function proposal_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'proposal' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'proposal' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'proposal' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'proposal' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'proposal' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'proposal' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'proposal_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function proposal_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

            <div class="article-thumb">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;
########################################################################

if ( ! function_exists( 'get_selection' ) ) :
    /**
     *
     */
    function get_selection() {
        do_action( 'wp_body_open' );
    }
endif;

##############################################################
/*
function get_term_sticky_posts()
{
    // Проверка находимся ли мы на странице архива категорий / category page... если нет - возвращает false
    if ( !is_category() )
        return false;

    // Во-вторых, смотрим если вообще закрепленные посты, в противном случае - опять возвращаем false
    $stickies = get_option( 'sticky_posts' );

    if ( !$stickies )
        return false;

    // Ок, sticky-заметки имеются, и мы находимся в архиве рубрики, тогда считываем ID текущего category-объекта
    $current_object = get_queried_object_id();

    // Создание запроса на получение прилепленных постов в разделе, получаем ID постов
    $args = [
        'nopaging' => true,
        'post__in' => $stickies,
        'cat' => $current_object,
        'ignore_sticky_posts' => 1,
        'fields' => 'ids'
    ];
    $q = get_posts( $args );

    return $q;
}
*/

if ( ! function_exists( 'get_contact_phone' ) ) :
    /**
     * @return string|void contact fhone from SETTING_PAGE
     */
    function get_contact_phone() {

        $contacts = get_field('contacts', SETTING_PAGE)?? null;

            if( $contacts ){
                $html ='';
                $html .= '<a href="tel:';
                $html .= $contacts['phone']['phone'];
                $html .= '">';
                $html .= $contacts['phone']['phone_for_interface'];
                $html .= '</a>';

                //'Contact us <a href="tel:+13479269458">+1 (347) 926-9458</a>'
                return $html;
            }
    }
endif;

if ( ! function_exists( 'get_contact_email' ) ) :

    /**
     * @return string|void contact email from SETTING_PAGE
     */
    function get_contact_email() {

        $contacts = get_field('contacts', SETTING_PAGE)?? null;

        if( $contacts ){
            $html = '<a href="mailto:';
            $html .= $contacts['email'];
            $html .= '">';
            $html .= $contacts['email'];
            $html .= '</a>';


            return $html;
        }
    }
endif;

if ( ! function_exists( 'get_random_post_category_link' ) ) :

    /**
     * @return array category url & name from post ID or current post
     */
    function get_random_post_category_link($post_id = null): array
    {
        global $post;
        $post_id = $post_id?? $post->ID;

        $category = get_the_category( $post_id );
        $cat_count = count($category);
        $cat_rand = null;
        if($cat_count > 1){
            $cat_rand = $category[rand(0, $cat_count -1)];
        }
        $cat = [];
        if($cat_rand){

            $cat['url'] = get_category_link( $cat_rand );
            $cat['name'] = get_cat_name( $cat_rand->term_id );
        }

        return $cat;
    }

endif;

if ( ! function_exists( 'get_post_short_description' ) ) :

    /**
     * @return string from post
     */
    function get_post_short_description($post = null, $count = 240): string
    {
        $short_description = trim($post->post_excerpt);
        if($short_description){
            $short_description = wp_html_excerpt($short_description, $count);
            $short_description = esc_html($short_description);
        }else{
            $short_description = wp_html_excerpt($post->post_content, $count);
            $short_description = esc_html($short_description);
        }

        return $short_description.'...';
    }

endif;

########################## Blog Post Tags#############################

if ( ! function_exists( 'post_date' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function post_date() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( DATE_W3C ) ),
            esc_html( get_the_modified_date() )
        );

        $posted_on = sprintf(
        /* translators: %s: post date. */
            esc_html_x( 'Posted on %s', 'post date', 'proposal' ),
            '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

    }
endif;

############################################################

