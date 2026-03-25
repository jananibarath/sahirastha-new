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
 * Content migration version.
 */
function sahirastha_content_seed_version(): string {
	return '2026-03-25-final-content-refresh';
}

/**
 * Build reusable content blocks from cleaned current source material.
 *
 * @return array<string, string>
 */
function sahirastha_page_content_map(): array {
	$contact_url = home_url( '/contact/' );
	$services_url = home_url( '/services/' );
	$process_url = home_url( '/process/' );

	return array(
		'home' =>
			'<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Help with Shares, Insurance, PF, Mutual Funds, and Dormant Accounts That Need Action</h1><!-- /wp:heading -->' .
			'<!-- wp:paragraph --><p>SahiRastha helps individuals and families recover financial assets that become difficult because records are old, routes are unclear, or institution-side processes are fragmented.</p><!-- /wp:paragraph -->' .
			'<!-- wp:paragraph --><p>This is especially relevant for legal heirs, widows, NRIs, and families handling matters after a death or with incomplete documents.</p><!-- /wp:paragraph -->' .
			'<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $contact_url ) . '">Request a Case Review</a></div><!-- /wp:button --><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $services_url ) . '">Explore Services</a></div><!-- /wp:button --></div><!-- /wp:buttons -->' .
			'<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">What SahiRastha helps with</h2><!-- /wp:heading -->' .
			'<!-- wp:list --><ul><li><a href="' . esc_url( home_url( '/services-shares-securities/' ) ) . '">Shares &amp; Securities</a> including IEPF, transmission, duplicate share documents, demat conversion, and record correction.</li><li><a href="' . esc_url( home_url( '/services-insurance-claims-recovery/' ) ) . '">Insurance Claims &amp; Recovery</a> including death claims, unpaid maturity benefits, nominee issues, and mismatch corrections.</li><li><a href="' . esc_url( home_url( '/services-pf-mutual-funds-bank-deposits/' ) ) . '">PF, Mutual Funds &amp; Bank Deposits</a> including unclaimed PF, blocked folios, and dormant deposits.</li></ul><!-- /wp:list -->' .
			'<!-- wp:paragraph --><p>Not sure what category applies? Start with <a href="' . esc_url( home_url( '/pathways-not-sure-where-to-start/' ) ) . '">Not Sure Where to Start</a>.</p><!-- /wp:paragraph -->',

		'about' =>
			'<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Why SahiRastha Exists</h1><!-- /wp:heading -->' .
			'<!-- wp:paragraph --><p>SahiRastha is founder-led and built for people facing old, stuck, and document-heavy financial recovery matters where generic advice has not solved the problem.</p><!-- /wp:paragraph -->' .
			'<!-- wp:paragraph --><p>The core value is route clarity before blind filing: identify what the matter actually is, what entitlement applies, what records are missing, and what practical path is still workable.</p><!-- /wp:paragraph -->' .
			'<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">How this is different</h2><!-- /wp:heading -->' .
			'<!-- wp:list --><ul><li>Comfort with messy real-world records: old addresses, signature mismatches, missing papers, and post-death complexity.</li><li>Cross-asset handling when families are dealing with more than one issue at the same time.</li><li>Honest assessment: not every case is equally actionable, and no false certainty is promised.</li></ul><!-- /wp:list -->' .
			'<!-- wp:paragraph --><p>Read the <a href="' . esc_url( $process_url ) . '">Process</a> to understand how matters move from scattered facts to structured action.</p><!-- /wp:paragraph -->' .
			'<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $contact_url ) . '">Request a Case Review</a></div><!-- /wp:button --></div><!-- /wp:buttons -->',

		'process' =>
			'<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">How SahiRastha Works</h1><!-- /wp:heading -->' .
			'<!-- wp:paragraph --><p>Most cases start with uncertainty, incomplete documents, or confusion about which route applies. The process is designed to bring structure before execution.</p><!-- /wp:paragraph -->' .
			'<!-- wp:list {"ordered":true} --><ol><li>Start with the facts available now: asset clues, holder details, what is blocked, and what was already attempted.</li><li>Review available records, even if incomplete, and identify the likely route.</li><li>Assess blockers such as nomination vs legal-heir issues, KYC mismatch, old bank details, or succession paperwork gaps.</li><li>Clarify scope and practical fee logic for actionable cases.</li><li>Move through disciplined documentation, filing support, and follow-up.</li></ol><!-- /wp:list -->' .
			'<!-- wp:paragraph --><p>Timelines depend on record quality, claimant entitlement, and institution-side processing. The goal is disciplined movement, not unrealistic speed claims.</p><!-- /wp:paragraph -->' .
			'<!-- wp:paragraph --><p>Ready to begin? <a href="' . esc_url( $contact_url ) . '">Request a Case Review</a>.</p><!-- /wp:paragraph -->',

		'pricing' =>
			'<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Pricing That Matches the Work Involved</h1><!-- /wp:heading -->' .
			'<!-- wp:paragraph --><p>SahiRastha does not use one flat number for every matter. Pricing follows route complexity, record condition, claimant position, and execution burden.</p><!-- /wp:paragraph -->' .
			'<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">How fee logic is handled</h2><!-- /wp:heading -->' .
			'<!-- wp:list --><ul><li>Straightforward, well-documented matters are treated differently from succession-heavy or fragmented cases.</li><li>Scope is explained before execution starts.</li><li>No promise of guaranteed recoverability or identical timelines across cases.</li></ul><!-- /wp:list -->' .
			'<!-- wp:paragraph --><p>If you share the facts first, pricing can be discussed in the context of the actual route rather than guesswork.</p><!-- /wp:paragraph -->' .
			'<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . esc_url( $contact_url ) . '">Request a Consultation</a></div><!-- /wp:button --></div><!-- /wp:buttons -->',

		'faq' =>
			'<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Frequently Asked Questions</h1><!-- /wp:heading -->' .
			'<!-- wp:list --><ul><li><strong>Do I need to know the exact service first?</strong> No. Many cases begin with a symptom, not a clear category.</li><li><strong>Can you help with incomplete records?</strong> Often yes. Many workable matters begin from fragments.</li><li><strong>Can legal heirs and families approach after a death?</strong> Yes, including nominee and succession-linked complexity.</li><li><strong>Can NRIs approach for India-based matters?</strong> Yes. Remote execution and document handling are addressed case by case.</li><li><strong>Do you guarantee outcomes or timelines?</strong> No. Honest assessment and process discipline come first.</li></ul><!-- /wp:list -->' .
			'<!-- wp:paragraph --><p>For service-specific details, visit the <a href="' . esc_url( $services_url ) . '">Service Hub</a>.</p><!-- /wp:paragraph -->',

		'contact' =>
			'<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Contact SahiRastha</h1><!-- /wp:heading -->' .
			'<!-- wp:paragraph --><p>Share the situation clearly: asset type (if known), holder details, what is blocked, and what records are available right now.</p><!-- /wp:paragraph -->' .
			'<!-- wp:list --><ul><li>Best for: old records, nominee/legal-heir questions, post-death documentation, mismatch and correction issues, and multi-asset family matters.</li><li>Primary route: Request a Case Review with basic facts and available documents.</li></ul><!-- /wp:list -->' .
			'<!-- wp:paragraph --><p><strong>WhatsApp:</strong> <a href="https://wa.me/916364659339" target="_blank" rel="noreferrer noopener">+91 6364659339</a></p><!-- /wp:paragraph -->',

		'case-stories' =>
			'<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Case Stories</h1><!-- /wp:heading -->' .
			'<!-- wp:paragraph --><p>These anonymised case stories show how route clarity and disciplined documentation can move difficult matters forward.</p><!-- /wp:paragraph -->' .
			'<!-- wp:paragraph --><p>Case stories are illustrative and do not guarantee outcomes, timelines, or recoverability for different facts.</p><!-- /wp:paragraph -->' .
			'<!-- wp:paragraph --><p>If your situation seems similar, <a href="' . esc_url( $contact_url ) . '">request a case review</a>.</p><!-- /wp:paragraph -->',

		'services' =>
			'<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Service Hub</h1><!-- /wp:heading -->' .
			'<!-- wp:paragraph --><p>Choose the route that best matches your situation. If you are unsure, use a pathway page first and then move into the relevant service category.</p><!-- /wp:paragraph -->' .
			'<!-- wp:list --><ul><li><a href="' . esc_url( home_url( '/services-shares-securities/' ) ) . '">Shares &amp; Securities</a></li><li><a href="' . esc_url( home_url( '/services-insurance-claims-recovery/' ) ) . '">Insurance Claims &amp; Recovery</a></li><li><a href="' . esc_url( home_url( '/services-pf-mutual-funds-bank-deposits/' ) ) . '">PF, Mutual Funds &amp; Dormant Bank Deposits</a></li></ul><!-- /wp:list -->' .
			'<!-- wp:paragraph --><p>Pathway routes: <a href="' . esc_url( home_url( '/pathways-after-a-death/' ) ) . '">After a Death</a>, <a href="' . esc_url( home_url( '/pathways-nri-cases/' ) ) . '">NRI Cases</a>, <a href="' . esc_url( home_url( '/pathways-old-missing-mismatched-records/' ) ) . '">Old / Missing / Mismatched Records</a>.</p><!-- /wp:paragraph -->',

		'pathways-after-a-death' => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">After a Death</h1><!-- /wp:heading --><!-- wp:paragraph --><p>When a family loses a member, financial records are often scattered across institutions. Start with asset mapping, claimant position, and route separation by asset type.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Move next to relevant service categories: <a href="' . esc_url( home_url( '/services-shares-securities/' ) ) . '">Shares</a>, <a href="' . esc_url( home_url( '/services-insurance-claims-recovery/' ) ) . '">Insurance</a>, and <a href="' . esc_url( home_url( '/services-pf-mutual-funds-bank-deposits/' ) ) . '">PF / Mutual Funds / Bank</a>.</p><!-- /wp:paragraph -->',
		'pathways-nri-cases' => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">NRI Cases</h1><!-- /wp:heading --><!-- wp:paragraph --><p>NRI matters require route clarity plus remote execution discipline: attestation, identity consistency, bank alignment, and succession documentation where applicable.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Start with what you have and <a href="' . esc_url( $contact_url ) . '">request a case review</a>.</p><!-- /wp:paragraph -->',
		'pathways-old-missing-mismatched-records' => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Old / Missing / Mismatched Records</h1><!-- /wp:heading --><!-- wp:paragraph --><p>These matters need staged reconstruction. Identify the asset first, then fix the specific blocker (name, signature, bank, KYC, nomination, or entitlement gap) before final filing.</p><!-- /wp:paragraph -->',
		'pathways-nominee-vs-legal-heir' => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Nominee vs Legal Heir</h1><!-- /wp:heading --><!-- wp:paragraph --><p>Nomination helps operations but does not always settle ownership in every asset class. The right route depends on asset rules, entitlement documents, and case facts.</p><!-- /wp:paragraph -->',
		'pathways-not-sure-where-to-start' => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Not Sure Where to Start</h1><!-- /wp:heading --><!-- wp:list --><ul><li>What asset may exist?</li><li>Whose name appears on records?</li><li>What has already been attempted?</li><li>Which documents are available now?</li></ul><!-- /wp:list --><!-- wp:paragraph --><p>Start with these facts and <a href="' . esc_url( $contact_url ) . '">request a case review</a>.</p><!-- /wp:paragraph -->',

		'services-shares-securities' => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Shares &amp; Securities Services</h1><!-- /wp:heading --><!-- wp:paragraph --><p>Support for IEPF recovery, transmission, duplicate/lost share document routes, demat conversion, and share record correction.</p><!-- /wp:paragraph --><!-- wp:list --><ul><li><a href="' . esc_url( home_url( '/service-iepf-claims/' ) ) . '">IEPF Claims</a></li><li><a href="' . esc_url( home_url( '/service-duplicate-lost-share-documents/' ) ) . '">Duplicate / Lost Share Documents</a></li><li><a href="' . esc_url( home_url( '/service-transmission-of-shares/' ) ) . '">Transmission of Shares</a></li><li><a href="' . esc_url( home_url( '/service-physical-shares-to-demat/' ) ) . '">Physical Shares to Demat</a></li><li><a href="' . esc_url( home_url( '/service-transmission-cum-demat/' ) ) . '">Transmission-cum-Demat</a></li><li><a href="' . esc_url( home_url( '/service-share-record-correction/' ) ) . '">Share Record Correction</a></li></ul><!-- /wp:list -->',
		'services-insurance-claims-recovery' => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">Insurance Claims &amp; Recovery Services</h1><!-- /wp:heading --><!-- wp:paragraph --><p>Support for death claims, unpaid maturity/survival benefits, rejected or short-settled outcomes, lost policy records, nominee issues, and KYC/bank mismatches.</p><!-- /wp:paragraph --><!-- wp:list --><ul><li><a href="' . esc_url( home_url( '/service-insurance-death-claim-support/' ) ) . '">Death Claim Support</a></li><li><a href="' . esc_url( home_url( '/service-unclaimed-maturity-survival-benefits/' ) ) . '">Unclaimed Maturity / Survival Benefits</a></li><li><a href="' . esc_url( home_url( '/service-rejected-insurance-claims/' ) ) . '">Rejected Claims</a></li><li><a href="' . esc_url( home_url( '/service-short-settled-claims/' ) ) . '">Short-Settled Claims</a></li><li><a href="' . esc_url( home_url( '/service-lost-policy-bond/' ) ) . '">Lost Policy Bond</a></li><li><a href="' . esc_url( home_url( '/service-insurance-nominee-issues/' ) ) . '">Nominee Issues</a></li><li><a href="' . esc_url( home_url( '/service-insurance-kyc-bank-mismatch/' ) ) . '">Policy / KYC / Bank Mismatch</a></li><li><a href="' . esc_url( home_url( '/service-policy-record-mismatch/' ) ) . '">Old Insurer / LIC Record Mismatch</a></li></ul><!-- /wp:list -->',
		'services-pf-mutual-funds-bank-deposits' => '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">PF, Mutual Funds &amp; Dormant Bank Deposit Services</h1><!-- /wp:heading --><!-- wp:paragraph --><p>Support for unclaimed provident fund, blocked mutual-fund folios, and dormant/inoperative bank deposits where document and route gaps are delaying recovery.</p><!-- /wp:paragraph --><!-- wp:list --><ul><li><a href="' . esc_url( home_url( '/service-unclaimed-provident-fund/' ) ) . '">Unclaimed Provident Fund</a></li><li><a href="' . esc_url( home_url( '/service-unclaimed-mutual-funds/' ) ) . '">Unclaimed Mutual Funds</a></li><li><a href="' . esc_url( home_url( '/service-dormant-bank-deposits/' ) ) . '">Dormant / Inoperative Bank Deposits</a></li></ul><!-- /wp:list -->',
	);
}

/**
 * Slug to title map.
 *
 * @return array<string, string>
 */
function sahirastha_page_titles(): array {
	return array(
		'home' => 'Home',
		'about' => 'About',
		'process' => 'Process',
		'pricing' => 'Pricing',
		'faq' => 'FAQ',
		'contact' => 'Contact',
		'case-stories' => 'Case Stories',
		'services' => 'Services',
		'pathways-after-a-death' => 'After a Death',
		'pathways-nri-cases' => 'NRI Cases',
		'pathways-old-missing-mismatched-records' => 'Old / Missing / Mismatched Records',
		'pathways-nominee-vs-legal-heir' => 'Nominee vs Legal Heir',
		'pathways-not-sure-where-to-start' => 'Not Sure Where to Start',
		'services-shares-securities' => 'Shares & Securities',
		'services-insurance-claims-recovery' => 'Insurance Claims & Recovery',
		'services-pf-mutual-funds-bank-deposits' => 'PF, Mutual Funds & Bank Deposits',
		'service-iepf-claims' => 'IEPF Claims',
		'service-duplicate-lost-share-documents' => 'Duplicate / Lost Share Documents',
		'service-transmission-of-shares' => 'Transmission of Shares',
		'service-physical-shares-to-demat' => 'Physical Shares to Demat',
		'service-transmission-cum-demat' => 'Transmission-cum-Demat',
		'service-share-record-correction' => 'Share Record Correction',
		'service-insurance-death-claim-support' => 'Death Claim Support',
		'service-unclaimed-maturity-survival-benefits' => 'Unclaimed Maturity / Survival Benefits',
		'service-rejected-insurance-claims' => 'Rejected Insurance Claims',
		'service-short-settled-claims' => 'Short-Settled Insurance Claims',
		'service-lost-policy-bond' => 'Lost Policy Bond',
		'service-insurance-nominee-issues' => 'Insurance Nominee Issues',
		'service-insurance-kyc-bank-mismatch' => 'Insurance KYC / Bank Mismatch',
		'service-policy-record-mismatch' => 'Policy Record Mismatch',
		'service-unclaimed-provident-fund' => 'Unclaimed Provident Fund',
		'service-unclaimed-mutual-funds' => 'Unclaimed Mutual Funds',
		'service-dormant-bank-deposits' => 'Dormant / Inoperative Bank Deposits',
		'service-policy-loan-complications' => 'Policy Loan Complications',
		'service-survival-benefit-not-received' => 'Survival Benefit Not Received',
	);
}

/**
 * Build service detail page content from category and issue focus.
 */
function sahirastha_service_page_content( string $service_title, string $category_slug, string $focus ): string {
	$contact_url = home_url( '/contact/' );
	$category_url = home_url( '/' . $category_slug . '/' );

	return '<!-- wp:heading {"level":1} --><h1 class="wp-block-heading">' . esc_html( $service_title ) . '</h1><!-- /wp:heading -->' .
		'<!-- wp:paragraph --><p>' . esc_html( $focus ) . '</p><!-- /wp:paragraph -->' .
		'<!-- wp:paragraph --><p>Route clarity usually comes first: identify claimant position, check documents available, and classify whether this is a straightforward filing, a correction-heavy route, or a succession-linked case.</p><!-- /wp:paragraph -->' .
		'<!-- wp:paragraph --><p>Related links: <a href="' . esc_url( $category_url ) . '">Category page</a> · <a href="' . esc_url( home_url( '/process/' ) ) . '">Process</a> · <a href="' . esc_url( $contact_url ) . '">Request a Case Review</a>.</p><!-- /wp:paragraph -->';
}

/**
 * Fill content for pages not explicitly mapped.
 */
function sahirastha_expand_page_content_map( array $base_map ): array {
	$service_details = array(
		'service-iepf-claims' => array( 'IEPF Claims', 'services-shares-securities', 'Recover shares/dividends moved to IEPF through a documentation-led claim route, including post-death and mismatch-heavy files.' ),
		'service-duplicate-lost-share-documents' => array( 'Duplicate / Lost Share Documents', 'services-shares-securities', 'Restore missing or damaged share document trails so holdings can move toward valid demat or transmission action.' ),
		'service-transmission-of-shares' => array( 'Transmission of Shares', 'services-shares-securities', 'Support families and legal heirs with transmission of holdings after death, including entitlement and documentation discipline.' ),
		'service-physical-shares-to-demat' => array( 'Physical Shares to Demat', 'services-shares-securities', 'Convert old physical holdings into demat form with proper record alignment and correction support where needed.' ),
		'service-transmission-cum-demat' => array( 'Transmission-cum-Demat', 'services-shares-securities', 'Handle linked transmission and demat steps where both succession and dematerialisation must be managed together.' ),
		'service-share-record-correction' => array( 'Share Record Correction', 'services-shares-securities', 'Resolve name, signature, address, or bank-detail mismatches blocking valid share servicing.' ),
		'service-insurance-death-claim-support' => array( 'Death Claim Support', 'services-insurance-claims-recovery', 'Support families with death-claim routes where entitlement and record consistency determine claim movement.' ),
		'service-unclaimed-maturity-survival-benefits' => array( 'Unclaimed Maturity / Survival Benefits', 'services-insurance-claims-recovery', 'Recover insurance payouts that were due but remained unpaid because details changed, records broke, or servicing stalled.' ),
		'service-rejected-insurance-claims' => array( 'Rejected Insurance Claims', 'services-insurance-claims-recovery', 'Review rejected claim routes and supporting records to identify what is still actionable and what corrective path is required.' ),
		'service-short-settled-claims' => array( 'Short-Settled Insurance Claims', 'services-insurance-claims-recovery', 'Assess short-settlement disputes where policy interpretation and supporting documentation need structured follow-up.' ),
		'service-lost-policy-bond' => array( 'Lost Policy Bond', 'services-insurance-claims-recovery', 'Rebuild policy trail and supporting documents where original bond papers are missing or unusable.' ),
		'service-insurance-nominee-issues' => array( 'Insurance Nominee Issues', 'services-insurance-claims-recovery', 'Address nominee-related confusion and claimant-position issues in insurance recovery matters.' ),
		'service-insurance-kyc-bank-mismatch' => array( 'Insurance KYC / Bank Mismatch', 'services-insurance-claims-recovery', 'Resolve identity, KYC, and bank-detail mismatch barriers that block payout processing.' ),
		'service-policy-record-mismatch' => array( 'Policy Record Mismatch', 'services-insurance-claims-recovery', 'Correct legacy policy-record defects that prevent servicing, payout release, or claim progress.' ),
		'service-unclaimed-provident-fund' => array( 'Unclaimed Provident Fund', 'services-pf-mutual-funds-bank-deposits', 'Recover PF balances tied to old employment trails, inactive member IDs, or documentation gaps.' ),
		'service-unclaimed-mutual-funds' => array( 'Unclaimed Mutual Funds', 'services-pf-mutual-funds-bank-deposits', 'Trace blocked or unpaid mutual-fund folios and regularise records before payout/transmission movement.' ),
		'service-dormant-bank-deposits' => array( 'Dormant / Inoperative Bank Deposits', 'services-pf-mutual-funds-bank-deposits', 'Support recovery or regularisation of dormant bank balances where records are stale or claimant position is unclear.' ),
		'service-policy-loan-complications' => array( 'Policy Loan Complications', 'services-insurance-claims-recovery', 'Review insurance cases affected by policy-loan history, deductions, and payout blocking issues.' ),
		'service-survival-benefit-not-received' => array( 'Survival Benefit Not Received', 'services-insurance-claims-recovery', 'Resolve non-receipt of survival benefits by revalidating policy records, bank trail, and claimant details.' ),
	);

	foreach ( $service_details as $slug => $data ) {
		$base_map[ $slug ] = sahirastha_service_page_content( $data[0], $data[1], $data[2] );
	}

	return $base_map;
}

/**
 * Detect thin seeded content that is safe to replace automatically.
 */
function sahirastha_looks_like_legacy_seed( string $content ): bool {
	$normalized = strtolower( trim( wp_strip_all_tags( $content ) ) );
	if ( '' === $normalized ) {
		return true;
	}

	$legacy_markers = array(
		'help with shares, insurance, pf, mutual funds, and dormant accounts that need action',
		'sahirastha is founder-led and process-disciplined',
		'anonymised case stories help explain process and route clarity',
		'next steps: review process, then request a case review',
		'sahirastha supports this case route with practical classification',
	);

	$word_count = str_word_count( $normalized );
	foreach ( $legacy_markers as $marker ) {
		if ( str_contains( $normalized, $marker ) && $word_count < 190 ) {
			return true;
		}
	}

	return false;
}

/**
 * Run page content migration safely.
 */
function sahirastha_run_content_migration( bool $force_refresh = false ): void {
	$page_titles = sahirastha_page_titles();
	$content_map = sahirastha_expand_page_content_map( sahirastha_page_content_map() );
	$page_ids = array();

	foreach ( $page_titles as $slug => $title ) {
		$content = $content_map[ $slug ] ?? '';
		if ( '' === $content ) {
			continue;
		}

		$existing_page = get_page_by_path( $slug, OBJECT, 'page' );

		if ( $existing_page instanceof WP_Post ) {
			$page_ids[ $slug ] = (int) $existing_page->ID;
			$existing_hash = (string) get_post_meta( $existing_page->ID, '_sahirastha_seed_hash', true );
			$new_hash = md5( $content );
			$should_overwrite = $force_refresh || sahirastha_looks_like_legacy_seed( (string) $existing_page->post_content ) || '' === trim( (string) $existing_page->post_content ) || $existing_hash === $new_hash;

			if ( $should_overwrite ) {
				wp_update_post(
					array(
						'ID'           => $existing_page->ID,
						'post_title'   => $title,
						'post_content' => $content,
					)
				);
				update_post_meta( $existing_page->ID, '_sahirastha_seed_hash', $new_hash );
			}

			continue;
		}

		$page_id = wp_insert_post(
			array(
				'post_title'   => $title,
				'post_name'    => $slug,
				'post_type'    => 'page',
				'post_status'  => 'publish',
				'post_content' => $content,
			)
		);

		if ( ! is_wp_error( $page_id ) ) {
			$page_ids[ $slug ] = (int) $page_id;
			update_post_meta( (int) $page_id, '_sahirastha_seed_hash', md5( $content ) );
		}
	}

	if ( ! empty( $page_ids['home'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $page_ids['home'] );
	}

	sahirastha_setup_primary_menu( $page_ids );
	update_option( 'sahirastha_seed_version', sahirastha_content_seed_version() );
}

/**
 * Trigger content migration only when needed.
 */
function sahirastha_maybe_run_content_migration(): void {
	if ( ! is_admin() ) {
		return;
	}

	$force_refresh = false;
	if ( current_user_can( 'manage_options' ) && isset( $_GET['sahirastha_force_refresh'] ) ) {
		check_admin_referer( 'sahirastha_force_refresh' );
		$force_refresh = true;
	}

	$already_migrated = get_option( 'sahirastha_seed_version' ) === sahirastha_content_seed_version();
	if ( ! $already_migrated || $force_refresh ) {
		sahirastha_run_content_migration( $force_refresh );
	}
}
add_action( 'after_switch_theme', 'sahirastha_run_content_migration' );
add_action( 'admin_init', 'sahirastha_maybe_run_content_migration' );

/**
 * Create or repair primary menu.
 *
 * @param array<string, int> $page_ids Page IDs keyed by slug.
 */
function sahirastha_setup_primary_menu( array $page_ids ): void {
	$menu_name = 'Primary Navigation';
	$menu = wp_get_nav_menu_object( $menu_name );

	if ( ! $menu ) {
		$menu_id = wp_create_nav_menu( $menu_name );
		$menu = wp_get_nav_menu_object( $menu_id );
	}

	if ( ! $menu || is_wp_error( $menu ) ) {
		return;
	}

	$existing_items = wp_get_nav_menu_items( $menu->term_id );
	if ( is_array( $existing_items ) ) {
		foreach ( $existing_items as $item ) {
			$url = isset( $item->url ) ? strtolower( (string) $item->url ) : '';
			$title = isset( $item->title ) ? strtolower( (string) $item->title ) : '';
			if ( str_contains( $url, 'wa.me' ) || str_contains( $title, 'whatsapp' ) ) {
				wp_delete_post( (int) $item->ID, true );
			}
		}
	}

	$primary_items = array(
		array( 'slug' => 'home', 'title' => 'Home' ),
		array( 'slug' => 'services', 'title' => 'Services' ),
		array( 'slug' => 'about', 'title' => 'About' ),
		array( 'slug' => 'process', 'title' => 'Process' ),
		array( 'slug' => 'pricing', 'title' => 'Pricing' ),
		array( 'slug' => 'faq', 'title' => 'FAQ' ),
		array( 'slug' => 'contact', 'title' => 'Contact' ),
	);

	$existing_items = wp_get_nav_menu_items( $menu->term_id );
	$existing_page_ids = array();
	if ( is_array( $existing_items ) ) {
		foreach ( $existing_items as $item ) {
			if ( isset( $item->object_id ) && 'page' === $item->object ) {
				$existing_page_ids[] = (int) $item->object_id;
			}
		}
	}

	foreach ( $primary_items as $item ) {
		$page_id = $page_ids[ $item['slug'] ] ?? null;
		if ( ! $page_id ) {
			$page = get_page_by_path( $item['slug'], OBJECT, 'page' );
			$page_id = $page instanceof WP_Post ? (int) $page->ID : 0;
		}
		if ( ! $page_id || in_array( $page_id, $existing_page_ids, true ) ) {
			continue;
		}

		wp_update_nav_menu_item(
			$menu->term_id,
			0,
			array(
				'menu-item-title' => $item['title'],
				'menu-item-object-id' => $page_id,
				'menu-item-object' => 'page',
				'menu-item-type' => 'post_type',
				'menu-item-status' => 'publish',
			)
		);
	}

	$locations = get_theme_mod( 'nav_menu_locations', array() );
	$locations['primary'] = (int) $menu->term_id;
	set_theme_mod( 'nav_menu_locations', $locations );
}

/**
 * Render floating WhatsApp CTA button.
 */
function sahirastha_render_whatsapp_floating_cta(): void {
	echo '<a class="sahirastha-whatsapp-float" href="https://wa.me/916364659339" target="_blank" rel="noopener noreferrer" aria-label="Open WhatsApp chat with SahiRastha">WhatsApp</a>';
}
add_action( 'wp_footer', 'sahirastha_render_whatsapp_floating_cta', 30 );
