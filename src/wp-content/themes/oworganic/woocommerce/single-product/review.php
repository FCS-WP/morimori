<?php
/**
 * Review Comments Template
 *
 * Closing li is left out on purpose!
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );

?>
<li itemprop="review" itemscope itemtype="http://schema.org/Review" <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

		<div class="the-comment">
			<div class="avatar">
				<?php echo get_avatar( $comment, apply_filters( 'woocommerce_review_gravatar_size', '60' ), '' ); ?>
			</div>
			<div class="comment-box">
				<div class="comment-author meta flex-middle">	
					<div class="inner-left">
						<strong><?php comment_author(); ?></strong>	
						<?php if ( $comment->comment_approved == '0' ) : ?>
							<div class="meta"><em><?php esc_html_e( 'Your comment is awaiting approval', 'oworganic' ); ?></em></div>
						<?php else : ?>
							<div class="date">
								<?php
									if ( get_option( 'woocommerce_review_rating_verification_label' ) === 'yes' )
										if ( wc_customer_bought_product( $comment->comment_author_email, $comment->user_id, $comment->comment_post_ID ) )
											echo '<em class="verified">(' . esc_html__( 'verified owner', 'oworganic' ) . ')</em> ';

								?><time itemprop="datePublished" datetime="<?php echo get_comment_date( 'c' ); ?>"><?php echo get_comment_date( wc_date_format() ); ?></time>
							</div>
						<?php endif; ?>

					</div>
					<div class="ali-right">
						<?php if ( $rating && get_option( 'woocommerce_enable_review_rating' ) == 'yes' ) : ?>
							<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="<?php echo sprintf( esc_html__( 'Rated %d out of 5', 'oworganic' ), $rating ) ?>">
								<span style="width:<?php echo esc_attr(( $rating / 5 ) * 100); ?>%"><strong itemprop="ratingValue"><?php echo trim($rating); ?></strong> <?php esc_html_e( 'out of 5', 'oworganic' ); ?></span>
							</div>
						<?php endif; ?>
					</div>

				</div> 
				<div itemprop="description" class="comment-text"><?php comment_text(); ?></div>
			</div>
		</div>
