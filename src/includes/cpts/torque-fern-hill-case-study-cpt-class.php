<?php
/**
 * Register the torque cpt and it's meta boxes
 */
class Fern_Hill_Case_Study_CPT {

  public static $CASE_STUDY_TYPE_TAX_SLUG = 'fern_hill_case_study_type';

	/**
	 * Holds the listing cpt object
	 *
	 * @var Object
	 */
	protected $case_study = null;

	/**
	 * Holds the labels needed to build the listing custom post type.
	 *
	 * @var array
	 */
	public static $case_study_labels = array(
			'singular'       => 'Case Study',
			'plural'         => 'Case Studies',
			'slug'           => 'case-study',
			'post_type_name' => 'torque_case_study',
	);

	/**
	 * Holds options for the listing custom post type
	 *
	 * @var array
	 */
	protected $case_study_options = array(
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'author',
			'excerpt'
		),
		'menu_icon'           => 'dashicons-analytics',
    'show_in_rest'        => true
	);

	/**
	 * register our post type and meta boxes
	 */
	function __construct() {
		if ( class_exists( 'PremiseCPT' ) ) {
			new PremiseCPT( self::$case_study_labels, $this->case_study_options );
		}

		add_action( 'init', array( $this, 'add_case_study_taxonomies' ) );
		add_action('acf/init', array( $this, 'add_acf_metaboxes' ) );
		add_action( 'restrict_manage_posts', array( $this, 'filter_case_studies_by_taxonomies' ) , 10, 2);
	}

	/**
	 * Define CPT taxonomies
	 */
	public function add_case_study_taxonomies() {
		register_taxonomy(
			self::$CASE_STUDY_TYPE_TAX_SLUG,
			self::$case_study_labels['post_type_name'],
			array(
			'label'        => 'Case Study Types',
			'labels'       => array(
				'singular_name'   => 'Case Study Type'
			),
			'hierarchical' => true,
			'show_admin_column' => true,
			'show_in_rest' => true
			)
		);

	}

	/**
	 * Render the CPT filters on the admin UI
	 */
	function filter_case_studies_by_taxonomies( $post_type, $which ) {
		// Apply this only on a specific post type
		if ( 'torque_case_study' !== $post_type )
			return;

		// A list of taxonomy slugs to filter by
		$taxonomies = array( 'fern_hill_case_study_type' );

		foreach ( $taxonomies as $taxonomy_slug ) {

			// Retrieve taxonomy data
			$taxonomy_obj = get_taxonomy( $taxonomy_slug );
			$taxonomy_name = $taxonomy_obj->labels->name;

			// Retrieve taxonomy terms
			$terms = get_terms( $taxonomy_slug );

			// Display filter HTML
			echo "<select name='{$taxonomy_slug}' id='{$taxonomy_slug}' class='postform'>";
			echo '<option value="">' . sprintf( esc_html__( 'Show All %s', 'text_domain' ), $taxonomy_name ) . '</option>';
			foreach ( $terms as $term ) {
				printf(
					'<option value="%1$s" %2$s>%3$s (%4$s)</option>',
					$term->slug,
					( ( isset( $_GET[$taxonomy_slug] ) && ( $_GET[$taxonomy_slug] == $term->slug ) ) ? ' selected="selected"' : '' ),
					$term->name,
					$term->count
				);
			}
			echo '</select>';
		}
	}

	/**
	 * Define ACF fields here
	 */
	public function add_acf_metaboxes() {
		if( function_exists('acf_add_local_field_group') ):

			// TODO: Add case-study ACF fields to class....

			endif;
	}
}

?>
