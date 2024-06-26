<?php

namespace CTXFeed\V5\Merchant;
class TemplateInfo {
	public static function get( $template = 'custom' ) {
		$info = array(
			'default'                                        => array(
				'feed_file_type' => array( 'XML', 'CSV', 'TSV', 'XLS', 'TXT' ),
			),
			'custom'                                         => array(
				'feed_file_type' => array( 'XML', 'CSV', 'TSV', 'XLS', 'TXT', 'JSON' ),
			),
			'custom2'                                         => array(
				'feed_file_type' => array( 'XML'),
				'doc'            => array(
					esc_html__( 'Know about custom Template 2 (XML)?', 'woo-feed' )           => 'https://webappick.com/docs/ctx-feed/configuration/custom-template-2-php-pattern/',
					esc_html__( 'All you need to know about CTX Feed Pro?', 'woo-feed' )        => 'https://webappick.com/docs/ctx-feed/configuration/ctx-feed-pro-include-variations/',
				),
			),
			'google'                                         => array(
				'link'           => 'https://support.google.com/merchants/answer/7052112?hl=en',
				'video'          => 'https://www.youtube.com/playlist?list=PLapCcXJAoEem-eLJTSrCKEiN-Y1QifThH',
				'feed_file_type' => array( 'XML', 'CSV', 'TSV', 'TXT' ),
				'doc'            => array(
					esc_html__( 'How to make google merchant feed?', 'woo-feed' )           => 'https://webappick.com/docs/ctx-feed/basic/make-woocommerce-product-feed/',
					esc_html__( 'How to configure shipping info?', 'woo-feed' )             => 'https://webappick.com/docs/woo-feed/merchants/how-to-configure-google-merchant-shipping-attribute/',
					esc_html__( 'How to set price with tax?', 'woo-feed' )                  => 'https://webappick.com/docs/ctx-feed/configuration/configure-product-price/',
					esc_html__( 'How to configure google product categories?', 'woo-feed' ) => 'https://webappick.com/docs/woo-feed/feed-configuration/how-to-map-store-category-with-merchant-category/',
				),
			), // Google.
			'google_local'                                   => array(
				'link'           => 'https://support.google.com/merchants/answer/3061198?hl=en',
				'feed_file_type' => array( 'XML', 'CSV', 'TXT' ),
			),
			'google_local_inventory'                         => array(
				'link'           => 'https://support.google.com/merchants/answer/3061342?hl=en',
				'video'          => 'https://youtube.com/playlist?list=PLapCcXJAoEem-eLJTSrCKEiN-Y1QifThH',
				'feed_file_type' => array( 'XML', 'CSV', 'TXT' ),
				'doc'            => array( esc_attr__('How to Generate Google Local Inventory Feed', 'woo-feed' ) => 'https://webappick.com/generate-google-local-inventory-feed/#what-are-google%E2%80%99s-free-local-inventory-product-listings?')
			),
			'googlereview'                                   => array(
				'link'           => 'https://developers.google.com/product-review-feeds/sample',
				'feed_file_type' => array( 'XML' ),
			),
			'google_dynamic_ads'                             => array(
				'link'           => '',
				'feed_file_type' => array( 'CSV' ),
			),
			'adwords'                                        => array(
				'link'           => 'https://support.google.com/google-ads/answer/6053288?hl=en',
				'feed_file_type' => array( 'CSV' ),
			),
			'adwords_local_product'                          => array(
				'link'           => 'https://support.google.com/google-ads/answer/9580085?hl=en',
				'feed_file_type' => array( 'CSV' ),
			),
			'facebook'                                       => array(
				'link'           => 'https://www.facebook.com/business/help/120325381656392?id=725943027795860',
				'video'          => 'https://www.youtube.com/watch?v=TH1lcA1uiM8',
				'feed_file_type' => array( 'XML', 'CSV', 'TXT' ),
				'doc'            => array(
					esc_html__( 'How to Generate Facebook XML Product Feed?', 'woo-feed' ) => 'https://webappick.com/generate-facebook-xml-product-feed-woocommerce/#how-to-create-a-facebook-xml-product-feed-for-woocommerce?',
					esc_html__( 'How to Setup Facebook Catalog for WooCommerce?', 'woo-feed' ) => 'https://webappick.com/facebook-catalog-for-woocommerce/#how-to-add-woocommerce-products-to-the-facebook-catalog',
					esc_html__( 'Include Variations: All you need to know about CTX Feed Pro', 'woo-feed' ) => 'https://webappick.com/docs/ctx-feed/configuration/ctx-feed-pro-include-variations/',
				),
			), // Facebook.
			'pinterest'                                      => array(
				'link'           => 'https://help.pinterest.com/en/business/article/before-you-get-started-with-catalogs',
				'video'			 => 'https://www.youtube.com/watch?v=kv1PMdCYy_g&ab_channel=WebAppick',
				'feed_file_type' => array( 'XML', 'CSV', 'TSV', 'TXT' ),
				'doc'            => array(
					esc_html__( 'How to configure google product categories?', 'woo-feed' ) => 'https://webappick.com/docs/woo-feed/feed-configuration/how-to-map-store-category-with-merchant-category/',
				),
			), // Pinterest.
			'pinterest_rss'                                  => array(
				'link'           => 'https://help.pinterest.com/en/business/article/before-you-get-started-with-catalogs',
				'feed_file_type' => array( 'XML' ),
			), // Pinterest.
			'bing'                                           => array(
				'link'           => 'https://help.ads.microsoft.com/apex/index/3/en/51084',
				'feed_file_type' => array( 'CSV', 'TSV', 'XLS', 'TXT' ),
				'doc'            => array(
					esc_attr__('Guide to Bing Smart Shopping', 'woo-feed' ) => 'https://webappick.com/bing-smart-shopping/',
					esc_attr__('How to set up a Bing Shopping Campaign?', 'woo-feed' ) => 'https://webappick.com/set-bing-shopping-campaign/',
				)
			), // Bing.
			'pricespy'                                       => array(
				'link'           => 'https://pricespy.co.nz/info/register-and-feature-your-shop--i10',
				'feed_file_type' => array( 'TXT' ),
			), // PriceSpy.
			'prisjakt'                                       => array(
				'link'           => 'https://www.prisjakt.nu/info/registrera-och-profilera-din-butik--i10',
				'feed_file_type' => array( 'TXT' ),
			), // Prisjakt.
			'idealo'                                         => array(
				'link'           => 'https://connect.idealo.de/import/en/csv/#_attributes_documentation',
				'video'          => 'https://www.youtube.com/watch?v=3r0cTMyUXQo',
				'feed_file_type' => array( 'CSV', 'TXT' ),
				'doc'            => array(
					esc_html__( 'How to Generate Idealo Product Feed?', 'woo-feed' ) => 'https://webappick.com/generate-product-feed-for-idealo-with-the-right-plugin/',
				),
			), // Idealo.
			'yandex_csv'                                     => array(
				'link'           => 'https://yandex.com/support/partnermarket/export/recommendation.html#csv',
				'feed_file_type' => array( 'CSV', 'TXT' ),
			), // Yandex (CSV).
			'yandex_xml'                                     => array(
				'link'           => 'https://yandex.com/support/partnermarket/export/yml.html',
				'feed_file_type' => array( 'XML' ),
			),
			'adroll'                                         => array(
				'link'           => 'https://help.adroll.com/hc/en-us/articles/216673657-Set-Up-Your-Product-Feed',
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // adroll
			'adform'                                         => array(
				'link'           => 'https://www.adformhelp.com/s/topic/0TO3W0000008PC5WAM/good-to-know',
				'feed_file_type' => array( 'XML', 'CSV', 'JSON' ),
			), // adform
			'kelkoo'                                         => array(
				'link'           => 'https://developers.kelkoogroup.com/app/documentation/navigate/_merchant/merchantProductData/_/_/ProductDataSpecs',
				'feed_file_type' => array( 'XML', 'CSV' ),
				'doc'            => array(
					esc_html__( 'How to Generate a Kelkoo Product Feed?', 'woo-feed' ) => 'https://webappick.com/kelkoo-product-feed/',
				),
			), // Kelkoo.
			'shopmania'                                      => array(
				'link'           => 'https://partner.shopmania.com/cp.help/datafeed-specifications',
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Shop Mania.
			'connexity'                                      => array(
				'link'           => 'https://www.operationroi.com/wp-content/downloads/Connexity-Feed-Specs-09-2015.pdf',
				'feed_file_type' => array( 'TXT' ),
			), // Connexity.
			'twenga'                                         => array(
				'link'           => 'https://support.twenga-solutions.com/hc/en-gb/articles/115014901088-Create-a-feed-to-import-your-catalog',
				'feed_file_type' => array( 'XML', 'TXT' ),
			), // Twenga.
			'fruugo'                                         => array(
				'link'           => 'https://fruugo.atlassian.net/wiki/spaces/RR/pages/67608002/Fruugo+Feed',
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Fruugo.
			'fruugo.au'                                      => array(
				'link'           => 'https://fruugo.atlassian.net/wiki/spaces/RR/pages/67608211/Field+Specification',
				'feed_file_type' => array( 'XML', 'CSV' ),
				'doc'            => array(
					esc_html__( 'How Generate Fruugo Product Feed?', 'woo-feed' ) => 'https://webappick.com/fruugo-product-feed/',
				),
			), // Fruugo Australia.
			'goedgeplaatst'                                  => array(
				'feed_file_type' => array( 'CSV' ),
			), // GoedGeplaatst.nl.
			'pricerunner'                                    => array(
				'link'           => 'https://www.pricerunner.com/info/getting-started',
				'feed_file_type' => array( 'XML', 'CSV', 'TXT' ),
			), // Price Runner.
			'bonanza'                                        => array(
				'link'           => 'https://support.bonanza.com/hc/en-us/articles/360000656491',
				'feed_file_type' => array( 'CSV' ),
			), // Bonanza
			'bol'                                            => array(
				'link'           => 'https://partnerblog.bol.com/app/files/2018/02/Kolomnamen_productfeeds-2.2.pdf',
				'feed_file_type' => array( 'XML', 'CSV', 'XLSX' ),
				'doc'            => array(
					esc_html__( 'How to Generate a Bol.com Product Feed?', 'woo-feed' ) => 'https://webappick.com/bol-com-product-feed/',
				),
			), // Bol.
			'wish'                                           => array(
				'link'           => 'https://merchanthelp.wish.com/s/article/mu1260805100070?language=en_US',
				'feed_file_type' => array( 'CSV' ),
				'doc'			 =>array(
					esc_html__('How to Generate a Wish.com Product Feed?', 'woo-feed' ) => 'https://webappick.com/wish-product-feed/'
				)
			), // Wish.com.
			'myshopping.com.au'                              => array(
				'link'           => 'https://merchant.myshopping.com.au/doc/Product_Feed_Specification.pdf',
				'feed_file_type' => array( 'XML', 'CSV', 'TXT' ),
			), // Myshopping.com.au.
			'skinflint.co.uk'                                => array(
				'feed_file_type' => array( 'CSV' ),
			), // SkinFlint.co.uk.
			'yahoo_nfa'                                      => array(
				'feed_file_type' => array( 'XML', 'CSV', 'TXT' ),
			), // Yahoo NFA.
			'comparer.be'                                    => array(
				'link'           => 'https://sc.vergelijk.nl/data/fr_FR/ignore/folders/annexe_3-directives_fichier.pdf',
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Comparer.be.
			'rakuten.de'                                     => array(
				'link'           => 'https://rakutenadvertising.com/product-feed-specification/',
				'feed_file_type' => array( 'CSV', 'TXT' ),
				'doc'            => array(
					esc_html__( 'How To Generate an Optimized Rakuten Product Feed', 'woo-feed' ) => 'https://webappick.com/influence-your-online-customers-with-rakuten-marketing/',
				),
			), // rakuten.
			'avantlink'                                      => array(
				'link'           => 'https://support.avantlink.com/hc/en-us/articles/203883345-All-About-Datafeeds',
				'feed_file_type' => array( 'XML', 'CSV', 'TXT' ),
			), // Avantlink
			'shareasale'                                     => array(
				'link'           => 'https://blog.shareasale.com/2013/07/18/how-to-create-a-product-datafeed/',
				'feed_file_type' => array( 'XML', 'CSV', 'TXT' ),
			), // ShareASale.
			'trovaprezzi'                                    => array(
				'link'           => 'https://www.trovaprezzi.it/manuali/bonsaii_3s30.pdf',
				'feed_file_type' => array( 'XML', 'CSV', 'TXT' ),
				'doc'            => array(
					esc_html__( 'How To Generate Trovaprezzi Product Feed', 'woo-feed' ) => 'https://webappick.com/trovaprezzi-product-feed-generator/#what-is-price-comparison?',
				),
			), // trovaprezzi.it.
			'skroutz'                                        => array(
				'link'           => 'https://developer.skroutz.gr/feedspec/',
				'video'          => 'https://www.youtube.com/watch?v=YC4E9zXF4SE&ab_channel=WebAppick',
				'doc'            => array(
					esc_html__( 'Validator', 'woo-feed' ) => 'https://webappick.com/how-to-generate-woocommerce-product-feed-for-skroutz//',
				),
				'feed_file_type' => array( 'XML' ),
			),
			'bestprice'                                      => array(
				'link'           => 'https://merchants.bestprice.gr/assets/bestprice-xml-specification.pdf',
				'feed_file_type' => array( 'XML' ),
			),
			'google_shopping_action'                         => array(
				'link'           => 'https://support.google.com/merchants/answer/9111285',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Set up return policies for Shopping Actions', 'woo-feed' )  => 'https://support.google.com/merchants/answer/7660817',
					esc_html__( 'Set up a return address for Shopping Actions', 'woo-feed' ) => 'https://support.google.com/merchants/answer/9035057',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Google Shopping Action
			'daisycon'                                       => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001431109-Productfeed-standard-General',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: General
			'daisycon_automotive'                            => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001440805-Productfeed-standard-Automotive',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Automotive
			'daisycon_books'                                 => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001436885-Productfeed-standard-Books',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Books
			'daisycon_cosmetics'                             => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001435825-Productfeed-standard-Cosmetics',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Cosmetics
			'daisycon_daily_offers'                          => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001422549-Productfeed-standard-Daily-offers',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Daily Offers
			'daisycon_electronics'                           => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001401605-Productfeed-standard-Electronics',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Electronics
			'daisycon_food_drinks'                           => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001392409-Productfeed-standard-Food-Drinks',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Food & Drinks
			'daisycon_home_garden'                           => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001406165-Productfeed-standard-House-and-Garden',
				),
				'feed_file_type' => array( 'XML' ),
			), // Daisycon Advertiser: Home & Garden
			'daisycon_housing'                               => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001397509-Productfeed-standard-Housing',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Housing
			'daisycon_fashion'                               => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001410905-Productfeed-standard-Fashion',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Fashion
			'daisycon_studies_trainings'                     => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001376185-Productfeed-standard-Studies-Courses',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Studies & Trainings
			'daisycon_telecom_accessories'                   => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001359405-Productfeed-standard-Telecom-Accessoires',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Telecom: Accessories
			'daisycon_telecom_all_in_one'                    => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000740505-Productfeed-standard-Telecom-All-in-one',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Telecom: All-in-one
			'daisycon_telecom_gsm_subscription'              => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000711709-Productfeed-standard-Telecom-GSM-Subscription',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Telecom: GSM + Subscription
			'daisycon_telecom_gsm'                           => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001359365-Productfeed-standard-GSM-devices',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Telecom: GSM only
			'daisycon_telecom_sim'                           => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001359545-Productfeed-standard-Telecom-Simonly',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Telecom: Sim only
			'daisycon_magazines'                             => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001357309-Productfeed-standard-Magazines',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Magazines
			'daisycon_holidays_accommodations'               => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001346949-Productfeed-standard-Vacation-Accommodations',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Holidays: Accommodations
			'daisycon_holidays_accommodations_and_transport' => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001347069-Productfeed-standard-Vacation-Accommodations-Transport',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Holidays: Accommodations and transport
			'daisycon_holidays_trips'                        => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001360205-Productfeed-standard-Vacation-Trips',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Holidays: Trips
			'daisycon_work_jobs'                             => array(
				'link'           => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000721785--As-an-advertiser-how-do-I-submit-a-product-feed-',
				'video'          => '',
				'doc'            => array(
					esc_html__( 'Feed Field Data Types', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115000727049-Legend-productfeed-field-types',
					esc_html__( 'Product Feed Standard', 'woo-feed' ) => 'https://faq-advertiser.daisycon.com/hc/en-us/articles/115001360329-Productfeed-standard-Work-Jobs',
				),
				'feed_file_type' => array( 'XML', 'CSV' ),
			), // Daisycon Advertiser: Work & Jobs
			'spartoo.fi'                                     => array(
				'feed_file_type' => array( 'CSV' ),
			),
			'shopee'                                         => array(
				'feed_file_type' => array( 'CSV' ),
			),
			'zalando'                                        => array(
				'link'           => 'https://docs.partner-solutions.zalan.do/de/fci/getting-started.html#format',
				'feed_file_type' => array( 'CSV' ),
			),
			'etsy'                                           => array(
				'feed_file_type' => array( 'CSV' ),
			),
			'tweaker_xml'                                    => array(
				'link'           => 'https://webappick.com/wp-content/uploads/2020/08/Specificaties-productfeed-Tweakers-Pricewatch.pdf',
				'feed_file_type' => array( 'XML' ),
			),
			'tweaker_csv'                                    => array(
				'link'           => 'https://webappick.com/wp-content/uploads/2020/08/Specificaties-productfeed-Tweakers-Pricewatch.pdf',
				'feed_file_type' => array( 'CSV' ),
			),
			'profit_share'                                   => array(
				'link'           => 'https://support.profitshare.ro/hc/ro/articles/211436229-Importul-produselor-prin-CSV',
				'feed_file_type' => array( 'CSV' ),
			),
			'heureka.sk'                                     => array(
				'link'           => 'https://sluzby.heureka.sk/napoveda/xml-feed/',
				'feed_file_type' => array( 'XML' ),
				'doc'			 => array(
					esc_html__('How to Generate Heureka Product Feed', 'woo-feed' ) => 'https://webappick.com/heureka-product-feed/'
				)
			),
			'moebel.de'                                      => array(
				'link'           => 'https://feedonomics.com/supported-channels/moebel-de-feed-specifications/',
				'feed_file_type' => array( 'XML', 'CSV', 'TXT' ),
			),
			'zbozi.cz'                                       => array(
				'link'           => 'https://napoveda.sklik.cz/wp-content/uploads/offer_feed_en.pdf',
				'feed_file_type' => array( 'XML' ),
			),
			'catchdotcom'                                    => array(
				'feed_file_type' => array( 'XML' ),
			),
			'fashionchick'                                   => array(
				'feed_file_type' => array( 'CSV', 'TXT' ),
			),
			'wine_searcher'                                  => array(
				'feed_file_type' => array( 'XML', 'TXT' ),
			),
			'modalova'                                       => array(
				'feed_file_type' => array( 'XML' ),
			),
			'ecommerceit'                                    => array(
				'link'           => 'https://media.ecommerce.eu/merchant/templates/catalog.csv',
				'feed_file_type' => array( 'CSV' ),
			),
			'tiktok'                                         => array(
				'link'           => 'https://ads.tiktok.com/help/article/catalog-product-parameters?redirected=2',
				'feed_file_type' => array( 'XML', 'CSV' ),
				'doc'            => array(
					esc_html__( 'How to make tiktok product feed?', 'woo-feed' )           => 'https://webappick.com/create-and-customize-a-tiktok-product-feed/',
				),
			),
			'shopflix'                                       => array(
				'feed_file_type' => array( 'XML' ),
			),
			'admarkt'                                       => array(
				'link'           => 'https://ecg-icas.github.io/icas/doc/prod/feeds.html#file-format',
				'feed_file_type' => array( 'XML' ),
				'doc'            => array(
					esc_html__( 'Marktplaats – The Ultimate Ecommerce Advertising Destination', 'woo-feed' )           => 'https://webappick.com/marktplaats-ultimate-ecommerce-advertising/',
				),
			),
			'glami'                                       => array(
				'link'			 => 'https://www.glami.eco/info/feed/',
				'feed_file_type' => array( 'XML' ),
				'doc'            => array(
					esc_html__( 'How to Generate Glami Product Feed?', 'woo-feed' )           => 'https://webappick.com/glami-product-feed/',
				),
			),
			'snapchat'                                       => array(
				'link'           => 'https://businesshelp.snapchat.com/s/article/product-catalog-specs?language=en_US',
				'feed_file_type' => array( 'XML', 'CSV', 'TSV', 'XLS', 'TXT', 'JSON' ),
				'doc'            => array(
					esc_html__( 'How to make snapchat feed?', 'woo-feed' )           => 'https://webappick.com/snapchat-product-feed/',
				),
			),
			'walmart'                                       => array(
				'link'           => 'https://developer.walmart.com/documentation/item-object-v4-0-2/',
				'feed_file_type' => array( 'XML', 'CSV', 'TSV', 'XLS', 'XLSX', 'TXT', 'JSON' ),
				'doc'            => array(
					esc_html__( 'How to Generate a Walmart Product Feed?', 'woo-feed' )           => 'https://webappick.com/walmart-product-feed/',
				),
			),
			'nextag'                                         => array(
				'link'           => 'https://searchmarketingtools.com/files/Nextag_Feed_Specifications.pdf',
				'feed_file_type' => array( 'XML', 'CSV' ),
				'doc'            => array(
					esc_html__( 'How to Generate Nextag Product Feed?', 'woo-feed' ) => 'https://webappick.com/nextag-search-find-best-value-desired-products-online/',
				),
			),
			'pricegrabber'                                       => array(
				'link'           => 'https://www.operationroi.com/wp-content/downloads/DataFeedRequirements-PriceGrabber.pdf',
				'feed_file_type' => array( 'XML', 'CSV', 'TSV', 'XLS', 'TXT', 'JSON' ),
				'doc'            => array(
					esc_html__( 'How To Generate PriceGrabber Product Feed?', 'woo-feed' )           => 'https://webappick.com/pricegrabber-product-feed/',
				),
			),
		);

		if ( array_key_exists( $template, $info ) ) {
			return $info[ $template ];
		}

		return $info['custom'];
	}

	/**
	 * @param $templates
	 *
	 * @return array
	 */
	public static function getMultiple( $templates = [] ) {
		if ( empty( $templates ) ) {
			return [];
		}

		$templates_data = [];
		foreach ( $templates as $template ) {
			$templates_data[ $template ] = self::get( $template );
		}

		return $templates_data;
	}
}
