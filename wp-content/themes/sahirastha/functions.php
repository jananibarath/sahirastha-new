<?php
/**
 * SahiRastha theme bootstrap.
 *
 * @package SahiRastha
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup.
 */
function sahirastha_setup(): void {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'sahirastha' ),
		)
	);
}
add_action( 'after_setup_theme', 'sahirastha_setup' );

/**
 * Build standard core page content.
 *
 * @param string $title Page title.
 * @return string
 */
function sahirastha_core_page_content( string $title ): string {
	$contact_url  = home_url( '/contact/' );
	$service_url  = home_url( '/services/' );
	$process_url  = home_url( '/process/' );

	$content_map = array(
		'Home'        => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Help with Shares, Insurance, PF, Mutual Funds, and Dormant Accounts That Need Action</h1><!-- /wp:heading -->' .
			'<!-- wp:paragraph --><p>SahiRastha supports families and individuals dealing with unclaimed or blocked assets where records are old, scattered, or mismatched.</p><!-- /wp:paragraph -->' .
			'<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $contact_url ) . '">Request a Case Review</a></div><!-- /wp:button --><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $service_url ) . '">Explore Services</a></div><!-- /wp:button --></div><!-- /wp:buttons -->',
		'About'       => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">About / Why SahiRastha</h1><!-- /wp:heading --><!-- wp:paragraph --><p>SahiRastha is founder-led and process-disciplined. The focus is practical route clarity, documentation discipline, and realistic communication.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Read the <a href="' . esc_url( $process_url ) . '">Process</a> or <a href="' . esc_url( $contact_url ) . '">request a case review</a>.</p><!-- /wp:paragraph -->',
		'Process'     => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Process</h1><!-- /wp:heading --><!-- wp:list {"ordered":true} --><ol><li>Share facts and current records.</li><li>Identify route and likely blockers.</li><li>Clarify documentation and execution sequence.</li><li>Proceed with structured follow-up.</li></ol><!-- /wp:list --><!-- wp:paragraph --><p>Timelines depend on records, entitlement, and institution-side processing.</p><!-- /wp:paragraph -->',
		'Pricing'     => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Pricing</h1><!-- /wp:heading --><!-- wp:paragraph --><p>Fees depend on route complexity and record condition. Scope and fee logic are clarified before execution starts.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $contact_url ) . '">Request a Consultation</a></div><!-- /wp:button --></div><!-- /wp:buttons -->',
		'FAQ'         => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">FAQ</h1><!-- /wp:heading --><!-- wp:list --><ul><li>Can we start with incomplete records? <strong>Yes.</strong></li><li>Can you support after a death? <strong>Yes, route depends on facts and entitlement.</strong></li><li>Can NRIs approach SahiRastha? <strong>Yes.</strong></li></ul><!-- /wp:list -->',
		'Contact'     => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Contact SahiRastha</h1><!-- /wp:heading --><!-- wp:paragraph --><p>Share the situation: asset type, holder details, what is blocked, and what records are available now.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><strong>WhatsApp:</strong> <a href="https://wa.me/916364659339" target="_blank" rel="noreferrer noopener">+91 6364659339</a></p><!-- /wp:paragraph -->',
		'Case Stories'=> '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Case Stories</h1><!-- /wp:heading --><!-- wp:paragraph --><p>Anonymised case stories help explain process and route clarity. They do not promise guaranteed outcomes.</p><!-- /wp:paragraph -->',
		'Services'    => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Service Hub</h1><!-- /wp:heading --><!-- wp:list --><ul><li><a href="' . esc_url( home_url( '/services-shares-securities/' ) ) . '">Shares &amp; Securities</a></li><li><a href="' . esc_url( home_url( '/services-insurance-claims-recovery/' ) ) . '">Insurance Claims &amp; Recovery</a></li><li><a href="' . esc_url( home_url( '/services-pf-mutual-funds-bank-deposits/' ) ) . '">Other Asset Recovery</a></li></ul><!-- /wp:list --><!-- wp:paragraph --><p>Not sure where to begin? Start with <a href="' . esc_url( home_url( '/pathways-not-sure-where-to-start/' ) ) . '">Not Sure Where to Start</a>.</p><!-- /wp:paragraph -->',
		'Pathways'    => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Pathways</h1><!-- /wp:heading --><!-- wp:list --><ul><li><a href="' . esc_url( home_url( '/pathways-after-a-death/' ) ) . '">After a Death</a></li><li><a href="' . esc_url( home_url( '/pathways-nri-cases/' ) ) . '">NRI Cases</a></li><li><a href="' . esc_url( home_url( '/pathways-old-missing-mismatched-records/' ) ) . '">Old / Missing / Mismatched Records</a></li><li><a href="' . esc_url( home_url( '/pathways-nominee-vs-legal-heir/' ) ) . '">Nominee vs Legal Heir</a></li><li><a href="' . esc_url( home_url( '/pathways-not-sure-where-to-start/' ) ) . '">Not Sure Where to Start</a></li></ul><!-- /wp:list -->',
		'Shares & Securities'            => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Shares &amp; Securities</h1><!-- /wp:heading --><!-- wp:list --><ul><li><a href="' . esc_url( home_url( '/service-iepf-claims/' ) ) . '">IEPF Claims</a></li><li><a href="' . esc_url( home_url( '/service-duplicate-lost-share-documents/' ) ) . '">Duplicate / Lost Share Documents</a></li><li><a href="' . esc_url( home_url( '/service-transmission-of-shares/' ) ) . '">Transmission of Shares</a></li><li><a href="' . esc_url( home_url( '/service-physical-shares-to-demat/' ) ) . '">Physical Shares to Demat</a></li><li><a href="' . esc_url( home_url( '/service-transmission-cum-demat/' ) ) . '">Transmission-cum-Demat</a></li><li><a href="' . esc_url( home_url( '/service-share-record-correction/' ) ) . '">Name / Signature / Address Correction</a></li></ul><!-- /wp:list -->',
		'Insurance Claims & Recovery'    => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Insurance Claims &amp; Recovery</h1><!-- /wp:heading --><!-- wp:list --><ul><li><a href="' . esc_url( home_url( '/service-insurance-death-claim-support/' ) ) . '">Death Claim Support</a></li><li><a href="' . esc_url( home_url( '/service-unclaimed-maturity-survival-benefits/' ) ) . '">Unclaimed Maturity or Survival Benefits</a></li><li><a href="' . esc_url( home_url( '/service-rejected-insurance-claims/' ) ) . '">Rejected Claims</a></li><li><a href="' . esc_url( home_url( '/service-short-settled-claims/' ) ) . '">Short-Settled Claims</a></li><li><a href="' . esc_url( home_url( '/service-lost-policy-bond/' ) ) . '">Lost Policy Bond</a></li><li><a href="' . esc_url( home_url( '/service-insurance-nominee-issues/' ) ) . '">Nominee Issues</a></li><li><a href="' . esc_url( home_url( '/service-insurance-kyc-bank-mismatch/' ) ) . '">Policy / KYC / Bank Mismatch Issues</a></li><li><a href="' . esc_url( home_url( '/service-policy-record-mismatch/' ) ) . '">Old Insurer / LIC Record Mismatch</a></li></ul><!-- /wp:list -->',
		'Other Asset Recovery'           => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Other Asset Recovery</h1><!-- /wp:heading --><!-- wp:list --><ul><li><a href="' . esc_url( home_url( '/service-unclaimed-provident-fund/' ) ) . '">Unclaimed Provident Fund</a></li><li><a href="' . esc_url( home_url( '/service-unclaimed-mutual-funds/' ) ) . '">Unclaimed Mutual Funds</a></li><li><a href="' . esc_url( home_url( '/service-dormant-bank-deposits/' ) ) . '">Dormant / Inoperative Bank Deposits</a></li></ul><!-- /wp:list -->',
		'After a Death'                  => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">After a Death</h1><!-- /wp:heading --><!-- wp:paragraph --><p>Start with asset mapping, nominee and legal-heir review, and route separation by asset type.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>See <a href="' . esc_url( $service_url ) . '">Services</a> and <a href="' . esc_url( $contact_url ) . '">Contact</a> to proceed.</p><!-- /wp:paragraph -->',
		'NRI Cases'                      => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">NRI Cases</h1><!-- /wp:heading --><!-- wp:paragraph --><p>NRI cases usually require remote execution planning, attestation checks, and record consistency across jurisdictions.</p><!-- /wp:paragraph -->',
		'Old / Missing / Mismatched Records' => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Old / Missing / Mismatched Records</h1><!-- /wp:heading --><!-- wp:paragraph --><p>These cases often need sequence planning: classify asset, identify core mismatch, and fix blockers required for filing.</p><!-- /wp:paragraph -->',
		'Nominee vs Legal Heir'          => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Nominee vs Legal Heir</h1><!-- /wp:heading --><!-- wp:paragraph --><p>Nominee records are useful but may not settle final ownership in every case. Route depends on asset-specific rules and succession position.</p><!-- /wp:paragraph -->',
		'Not Sure Where to Start'        => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Not Sure Where to Start</h1><!-- /wp:heading --><!-- wp:list --><ul><li>What asset might exist?</li><li>Whose name is on records?</li><li>What has already been attempted?</li><li>Which records are available right now?</li></ul><!-- /wp:list --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $contact_url ) . '">Request a Case Review</a></div><!-- /wp:button --></div><!-- /wp:buttons -->',
	);

	if ( isset( $content_map[ $title ] ) ) {
		return $content_map[ $title ];
	}

	return '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">' . esc_html( $title ) . '</h1><!-- /wp:heading -->' .
		'<!-- wp:paragraph --><p>SahiRastha supports this case route with practical classification, document handling, and structured follow-up.</p><!-- /wp:paragraph -->' .
		'<!-- wp:paragraph --><p>Next steps: <a href="' . esc_url( $process_url ) . '">review process</a>, then <a href="' . esc_url( $contact_url ) . '">request a case review</a>.</p><!-- /wp:paragraph -->';
}

/**
 * One-time page and menu setup.
 */
function sahirastha_seed_site_structure(): void {
	if ( ! is_admin() ) {
		return;
	}

	$seed_version = '2026-03-24';
	if ( get_option( 'sahirastha_seed_version' ) === $seed_version ) {
		return;
	}

	$pages = array(
		array( 'title' => 'Home', 'slug' => 'home' ),
		array( 'title' => 'About', 'slug' => 'about' ),
		array( 'title' => 'Process', 'slug' => 'process' ),
		array( 'title' => 'Pricing', 'slug' => 'pricing' ),
		array( 'title' => 'FAQ', 'slug' => 'faq' ),
		array( 'title' => 'Contact', 'slug' => 'contact' ),
		array( 'title' => 'Case Stories', 'slug' => 'case-stories' ),
		array( 'title' => 'Services', 'slug' => 'services' ),
		array( 'title' => 'Pathways', 'slug' => 'pathways' ),
		array( 'title' => 'Shares & Securities', 'slug' => 'services-shares-securities' ),
		array( 'title' => 'Insurance Claims & Recovery', 'slug' => 'services-insurance-claims-recovery' ),
		array( 'title' => 'Other Asset Recovery', 'slug' => 'services-pf-mutual-funds-bank-deposits' ),
		array( 'title' => 'After a Death', 'slug' => 'pathways-after-a-death' ),
		array( 'title' => 'NRI Cases', 'slug' => 'pathways-nri-cases' ),
		array( 'title' => 'Old / Missing / Mismatched Records', 'slug' => 'pathways-old-missing-mismatched-records' ),
		array( 'title' => 'Nominee vs Legal Heir', 'slug' => 'pathways-nominee-vs-legal-heir' ),
		array( 'title' => 'Not Sure Where to Start', 'slug' => 'pathways-not-sure-where-to-start' ),
		array( 'title' => 'IEPF Claims', 'slug' => 'service-iepf-claims' ),
		array( 'title' => 'Duplicate / Lost Share Documents', 'slug' => 'service-duplicate-lost-share-documents' ),
		array( 'title' => 'Transmission of Shares', 'slug' => 'service-transmission-of-shares' ),
		array( 'title' => 'Physical Shares to Demat', 'slug' => 'service-physical-shares-to-demat' ),
		array( 'title' => 'Transmission-cum-Demat', 'slug' => 'service-transmission-cum-demat' ),
		array( 'title' => 'Name / Signature / Address Correction', 'slug' => 'service-share-record-correction' ),
		array( 'title' => 'Death Claim Support', 'slug' => 'service-insurance-death-claim-support' ),
		array( 'title' => 'Unclaimed Maturity or Survival Benefits', 'slug' => 'service-unclaimed-maturity-survival-benefits' ),
		array( 'title' => 'Rejected Claims', 'slug' => 'service-rejected-insurance-claims' ),
		array( 'title' => 'Short-Settled Claims', 'slug' => 'service-short-settled-claims' ),
		array( 'title' => 'Lost Policy Bond', 'slug' => 'service-lost-policy-bond' ),
		array( 'title' => 'Nominee Issues', 'slug' => 'service-insurance-nominee-issues' ),
		array( 'title' => 'Policy / KYC / Bank Mismatch Issues', 'slug' => 'service-insurance-kyc-bank-mismatch' ),
		array( 'title' => 'Old Insurer / LIC Record Mismatch', 'slug' => 'service-policy-record-mismatch' ),
		array( 'title' => 'Unclaimed Provident Fund', 'slug' => 'service-unclaimed-provident-fund' ),
		array( 'title' => 'Unclaimed Mutual Funds', 'slug' => 'service-unclaimed-mutual-funds' ),
		array( 'title' => 'Dormant / Inoperative Bank Deposits', 'slug' => 'service-dormant-bank-deposits' ),
		array( 'title' => 'Policy Loan Complications', 'slug' => 'service-policy-loan-complications' ),
		array( 'title' => 'Survival Benefit Not Received', 'slug' => 'service-survival-benefit-not-received' ),
	);

	$page_ids = array();

	foreach ( $pages as $page ) {
		$existing_page = get_page_by_path( $page['slug'], OBJECT, 'page' );
		$seed_content  = sahirastha_core_page_content( $page['title'] );

		if ( $existing_page instanceof WP_Post ) {
			$page_ids[ $page['slug'] ] = (int) $existing_page->ID;

			if ( '' === trim( (string) $existing_page->post_content ) ) {
				wp_update_post(
					array(
						'ID'           => $existing_page->ID,
						'post_content' => $seed_content,
					)
				);
			}

			continue;
		}

		$page_id = wp_insert_post(
			array(
				'post_title'   => $page['title'],
				'post_name'    => $page['slug'],
				'post_type'    => 'page',
				'post_status'  => 'publish',
				'post_content' => $seed_content,
			)
		);

		if ( ! is_wp_error( $page_id ) ) {
			$page_ids[ $page['slug'] ] = (int) $page_id;
		}
	}

	if ( isset( $page_ids['home'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $page_ids['home'] );
	}

	sahirastha_setup_primary_menu( $page_ids );
	update_option( 'sahirastha_seed_version', $seed_version );
}
add_action( 'after_switch_theme', 'sahirastha_seed_site_structure' );

/**
 * Create or repair primary menu.
 *
 * @param array<string, int> $page_ids Page IDs keyed by slug.
 */
function sahirastha_setup_primary_menu( array $page_ids ): void {
	$menu_name = 'Primary Navigation';
	$menu      = wp_get_nav_menu_object( $menu_name );

	if ( ! $menu ) {
		$menu_id = wp_create_nav_menu( $menu_name );
		$menu    = wp_get_nav_menu_object( $menu_id );
	}

	if ( ! $menu || is_wp_error( $menu ) ) {
		return;
	}

	$menu_items = wp_get_nav_menu_items( $menu->term_id );
	if ( is_array( $menu_items ) ) {
		foreach ( $menu_items as $menu_item ) {
			wp_delete_post( (int) $menu_item->ID, true );
		}
	}

	$primary_items = array(
		array( 'slug' => 'home', 'title' => 'Home' ),
		array( 'slug' => 'services', 'title' => 'Services' ),
		array( 'slug' => 'pathways', 'title' => 'Pathways' ),
		array( 'slug' => 'about', 'title' => 'About' ),
		array( 'slug' => 'faq', 'title' => 'FAQ' ),
		array( 'slug' => 'contact', 'title' => 'Contact' ),
	);

	foreach ( $primary_items as $item ) {
		if ( empty( $page_ids[ $item['slug'] ] ) ) {
			continue;
		}

		wp_update_nav_menu_item(
			$menu->term_id,
			0,
			array(
				'menu-item-title'     => $item['title'],
				'menu-item-object-id' => (int) $page_ids[ $item['slug'] ],
				'menu-item-object'    => 'page',
				'menu-item-type'      => 'post_type',
				'menu-item-status'    => 'publish',
			)
		);
	}

	$locations            = get_theme_mod( 'nav_menu_locations', array() );
	$locations['primary'] = (int) $menu->term_id;
	set_theme_mod( 'nav_menu_locations', $locations );
}

/**
 * Render sticky WhatsApp CTA button.
 */
function sahirastha_render_whatsapp_floating_cta(): void {
	echo '<a class="sahirastha-whatsapp-float" href="https://wa.me/916364659339" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">WhatsApp</a>';
}
add_action( 'wp_footer', 'sahirastha_render_whatsapp_floating_cta', 30 );
