<?php

if ( ! class_exists( 'aioseop_dashboard_widget' ) ) {

	/**
	 * Class aioseop_dashboard_widget
	 *
	 * @since 2.3.10
	 */
	class aioseop_dashboard_widget {

		function __construct() {
			add_action( "wp_dashboard_setup", array( $this, 'aioseop_add_dashboard_widget' ) );
		}

		/**
		 * @since 2.3.10
		 */
		function aioseop_add_dashboard_widget() {
			if ( current_user_can( 'install_plugins' ) ) {
				wp_add_dashboard_widget( "semperplugins-rss-feed", __( 'SEO News', 'all-in-one-seo-pack' ), array(
					$this,
					'aioseop_display_rss_dashboard_widget',
				) );
			}

		}

		/**
		 * @since 2.3.10
		 */
		function aioseop_display_rss_dashboard_widget() {

			include_once( ABSPATH . WPINC . "/feed.php" );

			if ( false === ( $rss_items = get_transient( 'aioseop_feed' ) ) ) {

				$rss = fetch_feed( "https://www.semperplugins.com/feed/" );
				if ( is_wp_error( $rss ) ) {
					echo '{Temporarily unable to load feed.}';
					return;
				}
				$rss_items = $rss->get_items( 0, 7 );

				$cached = array();
				foreach ( $rss_items as $item ) {
					$cached[] = array(
						'url'     => $item->get_permalink(),
						'title'   => $item->get_title(),
						'date'    => $item->get_date( "M jS Y" ),
						'content' => substr( strip_tags( $item->get_content() ), 0, 128 ) . "...",
					);
				}
				$rss_items = $cached;

				set_transient( 'aioseop_feed', $cached, 12 * HOUR_IN_SECONDS );

			}

			?>

			<ul>
				<?php
				if ( false === $rss_items ) {
					echo "<li>No items</li>";

					return;
				}

				foreach ( $rss_items as $item ) {
					?>
					<li>
						<a target="_blank" href="<?php echo esc_url( $item['url'] ); ?>">
							<?php echo esc_html( $item['title'] ); ?>
						</a>
						<span class="aioseop-rss-date"><?php echo $item['date']; ?></span>
						<div class="aioseop_news">
							<?php echo strip_tags( $item['content'] ) . "..."; ?>
						</div>
					</li>
					<?php
				}

				?>
			</ul>

			<?php

		}
	}

	new aioseop_dashboard_widget();
}


