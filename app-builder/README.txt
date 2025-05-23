=== App Builder - Create Native Android & iOS Apps On The Flight ===
Contributors: appcheap, rnlab
Donate link: https://1.envato.market/x9JBRR
Tags: app builder, woocommerce app, news app, flutter, mobile builder
Requires at least: 5.6
Tested up to: 6.6.2
Stable tag: 5.5.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Requires PHP: 7.4

The most advanced drag & drop app builder. Create multi templates and app controls.

== Description ==

App builder works the same popular Page Builder in WordPress but it has a special UI/UX for your easy configuration/previews mobile app.

[App source code](https://1.envato.market/x9JBRR)

=== Features ===

- Set up user delete their account
- Brands for products
- Make color, image for attributes
- Set default login method
- On/Off captcha option
- WooCommerce Appointments
- WooCommerce Bookings
- Address Book
- Enable / Disable register
- Enable / Disable add to cart button
- Geo location
- Config Intenet connection notification
- Pickup address from map for checkout
- Chat GPT
- WC Cancel Order
- Wishlist Plugin
- Ajax search pro Plugin
- Cache app builder settings
- Multi-language app
- Share dynamic for product, post
- Cloud translate
- Support deeplink working with Permalink
- Hide Our of Stock
- Smart Coupon
- Add vertical payment method layout
- Cart
- Google fonts
- Add vertical shipping layout
- OneSignal Push Notifications
- Open App Link In Webview
- Sticky banner
- Dynamic form
- Reset password
- Identify App Orders
- Intercom Chat
- Upgrader
- Custom icons
- Captcha

=== Integrations ===

- Woocommerce
- BuddyPress
- BbPress
- Product Add-Ons
- WooCommerce Brands
- WooCommerce Bookings
- Variation Swatches for WooCommerce
- Bookingwp
- Dokan
- WPML
- Polylang
- WCFM Marketplace
- Wcmp
- Photo Reviews for WooCommerce
- Customer Reviews for WooCommerce
- TeraWallet
- Geo My WP
- Advanced Custom Fields
- YITH WooCommerce Featured Video
- Product Video for WooCommerce
- Image Optimizer, Resizer and CDN – Sirv
- Checkout Field Manager (Checkout Manager) for WooCommerce by QuadLayers
- CURCY – Multi Currency for WooCommerce
- WooCommerce Multilingual & Multicurrency with WPML
- Smart Coupons
- Ajax Search Pro
- TI WooCommerce Wishlis
- WC Cancel Order
- B2BKing Pro
- Simple Local Avatars
- Translate Multilingual sites – TranslatePress
- YITH WooCommerce Badge Management
- YITH WooCommerce Order & Shipment Tracking
- WPC Linked Variation for WooCommerce
- WC Vendors
- Coupon Referral Program for WooCommerce

### Enable PHP HTTP Authorization Header

#### Shared Hosts

Most shared hosts have disabled the **HTTP Authorization Header** by default.

To enable this option you'll need to edit your **.htaccess** file by adding the following:

`
    RewriteEngine on
    RewriteCond %{HTTP:Authorization} ^(.*)
    RewriteRule ^(.*) - [E=HTTP_AUTHORIZATION:%1]
`

#### WPEngine

To enable this option you'll need to edit your **.htaccess** file by adding the following (see https://github.com/Tmeister/wp-api-jwt-auth/issues/1):

`
    SetEnvIf Authorization "(.*)" HTTP_AUTHORIZATION=$1
`

== Installation ==

1. Install using the WordPress built-in Plugin installer, or Extract the zip file and drop the contents in the `wp-content/plugins/` directory of your WordPress installation.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to App Builder > Create New Template
4. Press the 'Configure' button.
5. Now you can drag and drop components from the left panel onto the mobile editor area.

== Upgrade Notice ==

Read carefully changelogs before upgrade plugin.

== Frequently Asked Questions ==

** Will App Builder work with RTL or other languages? **

Yeah! The app support multi languages

== Screenshots ==

1. List templates
2. App mode config
3. Layout config
4. Style config
5. Custom screen
6. Sidebar config
7. Theme config
8. Product list screen
9. Category screen
10. Product detail builder
11. Post single
12. Multiple page

== Changelog ==

= 5.5.3 - 10-May-2025 =
Integration: Coupon Referral Program for WooCommerce

= 5.5.2 - 8-Mar-2025 =
Fixed: Icon in app builder don't appear
Fixed: "Order price not validate" in HyperpayGateway

= 5.4.7 - 28-Nov-2024 =
Improved: Setting Checkout Modes of General in Customize a template 

= 5.4.5 - 30-Oct-2024 =
Fixed: Change variable

= 5.4.4 - 30-Oct-2024 =
Added: Cache control feature
Update: WCFM store review

= 5.4.3 - 17-Oct-2024 =
Integration: Translate Multilingual sites – TranslatePress plugin

= 5.4.2 - 16-Oct-2024 =
Added: Filter functionality for WCFM stores by store category.
Fixed: Missing permission warning in the API.

= 5.4.1 - 13-Oct-2024 =
Migrated: Captcha functionality moved to the "Features" tab; implemented Captcha verification for the Forgot Password OTP process.
Added: WCFM review list, review submission, and API for fetching the review form.
Added: Public features setting to App builder setting API
Supported: Cirilla app version 4.1.3 compatibility.

= 5.4.0 - 04-Oct-2024 =
Support: OIDC Token Validation login Facebook in Limited Token

= 5.3.9 - 04-Oct-2024 =
Updated: Replaced PUT and DELETE methods with POST to improve compatibility with servers that do not support PUT and DELETE requests.

= 5.3.8 - 30-Sep-2024 =
* Added: "Max OTP Attempts," "OTP Expiration Time," and "OTP Verification Block Duration" for managing OTP limits and blocking times in the forgot password feature.

= 5.3.7 - 30-Sep-2024 =
* Add: Yith woocommerce Brands Add-on Integration

= 5.3.6 - 28-Sep-2024 =
* Fixed: Save login Firebase phone number

= 5.3.5 - 24-Sep-2024 =
* Update: Change CDN awesome font data to CDN
* Add: Video Shopping Feature
* Add: WPC Linked Variation for WooCommerce Integration
* Add: Progress check_razorpay_response Razorpay

= 5.3.4 - 14-Sep-2024 =
* Update: Stable version

= 5.3.3 - 14-Sep-2024 =
* Add: Yi WooCommerce Barcodes and QR Codes Integration.

= 5.3.2 - 11-Sep-2024 =
* Fix: Login Firebase Phone Number

= 5.3.1 - 31-Aug-2024 =
* Fix: Missing vendor folder

= 5.3.0 - 31-Aug-2024 =
* Breaking change: Remove settings tab
* Breaking change: JWT Authentication to Features tab
* Breaking change: Login Firebase Phone Number to Features tab
* Breaking change: Login Facebook to Feature tab
* Add: Razorpay to Integrations tab
* Add: query filter for list product widget
* Update: new modal for ChatGPT

= 5.1.0 - 27-Aug-2024 =
* Remove all warning and errors in plugin checked.

= 5.0.0 - 23-Aug-2024 =
* Refactoring the plugin.
* Load action, class only need.
* Remove unnecessary code.

= 4.3.4 - 21-Aug-2024 =
* Remove: search by param

= 4.3.3 - 21-Aug-2024 =
* Feat: Add field to enable/disable geo location in product list widgets, shopping video, product widgets
* Integration: PayTM 
* Feat: Add button action in cart screen

= 4.2.6 - 29-Jun-2024 =
* Fixed: Adding to cart with variable product use inline attributes source

= 4.2.4 - 26-Jun-2024 =
* Improved: Verify token iss base on hostname instead full url to avoid dynamic bloginfo generate by WP

= 4.2.1 - 20-Jun-2024 =
* Integrations: Smart coupons

= 4.1.2 - 14-Jun-2024 =
* Fix: Open media file
* Feat: Support sortby random in widget featured and tag product widget

= 4.1.0 - 12-Jun-2024 =
* Feature: Custom Icon
* Chore: Update typo

= 4.0.1 - 10-Jun-2024 =
* Feature: Search bundle ID in Upgrader feature

= 4.0.0 - 31-May-2024 =
* Feature: App Updater

= 3.9.3, 3.9.4 - 11-May-2024 =
* Support: WC Vendors

= 3.9.2 - 26-Apr-2024 =
* Support: Register Product Widget (Product detail screen)

= 3.9.1 - 22-Apr-2024 =
* Support: Query products by category slug
* Support: Query product by tag slug

= 3.9.0 - 27-Mar-2024 =
* Update: Only admin can query search
* Update: Search by roles
* Fix: includes vendor API (Dokan, WCFM, WCMp)
* Add: app_builder_rest_prepare_product_variable_object_meta filter

= 3.8.9 - 15-Mar-2024 =
* Fix: Not esc attribue in ADS shortcode

= 3.8.8 - 17-Feb-2024 =
* Fix: Open Redirect Vulnerabilities (wp_redirect => wp_safe_redirect)

= 3.8.7 - 16-Feb-2024 =
* Support: Sortby random product category, product newest

= 3.8.6 - 27-Jan-2024 =
* Upgrade: Update app builder js to 3.5.4

= 3.8.5 - 05-Jan-2024 =
* Feat: Dynamic form widget

= 3.8.4 - 05-Jan-2024 =
* Feat: Request action REST API
* Chore: Add field product detail page

= 3.8.3 - 04-Dec-2023 =
* Feat: Show data in meta_data product detail screen
* Feat: Update update callback and return url for testing site
* Feat: forgot password by send OTP to Email

= 3.8.2 - 04-Dec-2023 =
* Support: Transplalepress (Required install add-ons: https://github.com/AppCheap/tp-add-on-language-by-get-parameter)

= 3.8.1 - 15-Nov-2023 =
* Update: Widget Form with action
* Update: Test up Wordpress

= 3.8.0 - 14-Nov-2023 =
* Feat: REST API action
* Feat: Widget Dynamic form

= 3.7.0 - 31-Oct-2023 =
* Support: iyzico gateway

= 3.6.0 - 19-Oct-2023 =
* Support: Checkout condition fields
* Support: Checkout additional fields
* Update: Change deprecated action

= 3.5.0 - 06-Sep-2023 =
* Fix: Razorpay payment gateway (Required update Razorpay v4.5.5)
* Fix: Get vendor profile
* Add: On/Off notification, cart, post wishlist, product wishlist, search in profile screen
* Add: The way pass custom data from custom screen to build-in screen

= 3.4.9 - 01-Sep-2023 =
* Fix: Clean cart after checkout

= 3.4.8 - 16-Aug-2023 =
* Support: Cirilla app v3.7.9
* Support: Overwrite custom tab screen
* Add: Layout shipping methods
* Add: Exclude categories in category screen

= 3.4.7 - 04-Aug-2023 =
* Removed: Google fonts not support
* Add: Layout profile screen

= 3.4.6 - 04-Aug-2023 =
* Update: Latest list google fonts

= 3.4.5 - 04-Aug-2023 =
* Support: Hyperpay payment gateway

= 3.4.4 - 24-Jul-2023 =
* Important: Upgrade app builder to 3.4.4 only the Cirilla app >= v3.7.7
* Feat: Query data selector (product, product list)
* Feat: Add Chat GPT model 3.5 and 4
* Feat: Custom widget
* Feat: Do action after login
* Feat: Layout product list
* Feat: Add position aria on product template item
* Improve: Add to Cart

= 3.4.3 - 14-Jul-2023 =
* Chore: Remove print token in error log file

= 3.4.2 - 14-Jul-2023 =
* Feat: Determine current user via cookie

= 3.4.1 - 05-Jul-2023 =
* Fix: Empty active currency

= 3.4.0 - 04-Jul-2023 =
* Add: Dynamic post list layout

= 3.3.2 - 14-Jun-2023 =
* Hotfix: Change CDN Feather icon

= 3.3.0 - 09-Feb-2023 =
* Hotfix: Product list did not display if the site install AFC plugin

= 3.3.0 - 08-Feb-2023 =
* Add: Fields scale banner in category page
* Add: Sticky banner in general config
* Add: Show sub category screen
* Add: Block Divider and Product item in product detail
* Add: Chat GPT widget
* Improved: Config Appbar title
* Fix: Adding to cart
* Fix: Validate first name and last name to one character

= 3.2.2 - 16-Jan-2023 =
* Fix: Login Apple
* Fix: API REQUEST_DENIED get vendors

= 3.2.1 - 12-Dec-2022 =
* Fix: Get geolocation in vendor

= 3.2.0 - 06-Dec-2022 =
* Add: Razorpay confirm payment
* Fix: Conflict Google Ads Listing, REST AUTH API plugin
* Fix: Undefined property: AppBuilder\Vendor\DokanStore: :$base
* Feat: Support WooCommerce Booking
* Feat: add filter app_builder_register_user_data and action after register insert user to database
* Feat: Conditional product block by categories, acf, meta, isLogin
* Feat: Shopping video addon widget

= 3.1.0 - 23-Aug-2022 =
* Add: Api confirm payment gateway

= 3.0.2 - 16-Aug-2022 =
* Fixed: Get billing and shipping with Checkout Field Manager plugin

= 3.0.1 - 16-Aug-2022 =
* Add: Option on/off captcha
* Add: Query vendor store by name and categories

= 3.0.0 - 15-Aug-2022 =
* Add: Show ACF custom field on post item default
* Add: Show progress bar on post item detail
* Add: Captcha login, register, post, comment
* Add: API get course
* Add: API get quiz
* Add: Support query param with taxonomy name
* Add: filter nearby products
* Add: Show distance, duration in store
* Add: Validate captcha
* Improve: Check constant AUTH_KEY not defined
* Improve: Ensure roles data return as array
* Improve: Delete the persistent cart permanently.
* Chore: Rename post_types_to_delete_with_user => app_builder_post_types_to_delete_with_user
* Chore: sanitize_title add-ons label
* Chore: Only logged in customers who have purchased this product may write review

= 2.9.0 - 05-Jul-2022 =
* Add: API delete user
* Add: Login thought webview
* Add: Config Advanced Custom Fields in post
* Add: Block SKU in product detail screen
* Add: Add percent status type
* Add: Handle redirect on Webview
* Add: Enable Barcode and Qrcode on widget search product
* Add: Filter hide Ads and support Paid memberships pro plugin
* Support: CURCY – Multi Currency for WooCommerce PREMIUM version

= 2.8.0 - 26-Feb-2022 =
* Add: Select widget in App mode
* Add: Config auto play video, disable swiper slideshow, play video inline
* Add: Config type stock status ( Text, Progress bar)
* Add: Disable rating in widget vendor and vendor detail page
* Support: get local plugin avatar and default avatar

= 2.7.0 - 26-Feb-2022 =
* Support: API Flutter Store Manager

= 2.6.2 - 26-Feb-2022 =
* Chore: Update some wrong typo
* Improved: Check Woo multi currency active

= 2.6.1 - 25-Feb-2022 =
* Support: Get currencies CURCY - WooCommerce Multi Currency - Currency Switcher plugin
* Add: On/Off Custom flow checkout on App builder

= 2.6.0 - 23-Feb-2022 =
* Fix: Crash on WordPress 5.9.0
* Add: Config Size Admod block and Shortcode
* feat: Support Global Add-ons

= 2.5.2 - 14-Feb-2022 =
* Add: API Delivery app
* Improved: Login/Register Firebase phone number
* Chore: Config render blocks

= 2.5.1 - 11-Feb-2022 =
* Add: Shortcode ADS
* Add: Block ADS
* Chore: add price html in product variable

= 2.5.0 - 09-Feb-2022 =
* Feat: Get category vendor store WCFM, Dokan
* Improved: Config social widget and social in profile page
* Added: Config post related

= 2.4.1 - 25-Jan-2022 =
* Fixed: Get dokan vendor with status
* Chore: Test up to WordPress 5.9

= 2.4.0 - 25-Jan-2022 =
* Support: Digits plugin
* Feat: Update Requires PHP to 7.4
* Feat: Support cached categories
* Feat: Support cached settings
* Feat: Load awesome icon's data
* Add: filter app_builder_pre_categories_response
* Add: filter app_builder_prepare_userdata

= 2.2.2 - 09-Jan-2022 =
* Fixed: function WC() not exits

= 2.2.1 - 07-Jan-2022 =
* Support: Multi-Currency with WooCommerce Payments
* Fixed: Change currency via URL

= 2.2.0 - 07-Jan-2022 =
* Chore: update default layout category page
* Chore: Default off input quantity on product list
* Support: Select thumb size for product list
* Add: Set Currency with URL-Parameter

= 2.1.0 - 06-Jan-2022 =
* Support: Product photo review

= 2.0.2 - 03-Jan-2022 =
* Add: Add filter app_builder_prepare_address_fields_response (Prepare address fields before response)

= 2.0.1 - 22-Dec-2021 =
* Fixed: Convert currency

= 2.0.0 - 22-Dec-2021 =
* Improved: Get template data

= 1.2.2 - 12-Dec-2021 =
* Fixed: Get attribute image

= 1.2.1 - 07-Dec-2021 =
* Chore: Show app version

= 1.2.0 - 03-Dec-2021 =
* Fixed: Add to cart with product variable
* Fixed: Token expired

= 1.1.9 - 25-Nov-2021 =
* Fixed: Change currency in product variable
* Fixed: Token expired

= 1.1.8 - 01-Nov-2021 =
* Support: Define currencies

= 1.1.6 - 01-Nov-2021 =
* Support: Define support languages

= 1.1.5 - 20-Seb-2021 =
* Fix: Banner, avatar vendor did not display in WCMp plugin

= 1.1.4 - 19-Seb-2021 =
* Docs: wp-content/plugins/app-builder/vendor/symfony/polyfill-mbstring/bootstrap80.php.sample => wp-content/plugins/app-builder/vendor/symfony/polyfill-mbstring/bootstrap80.php

= 1.1.3 - 19-Seb-2021 =
* Fixed: Memory size exhausted on PHP Version 8.0.9

= 1.1.1 - 19-Seb-2021 =
* Chore: Update contribute
* Chore: Test up WordPress 5.8.1

= 1.1.0 - 28-Aug-2021 =
* Improved: Get product variation

= 1.0.31 - 20-Aug-2021 =
* add: API clean cart
* fix: navigate user logged in Arabic to check out page

= 1.0.30 - 19-Aug-2021 =
* fix: Translate attribute label
* fix: Product image not exist

= 1.0.29 =
* Improved: make integer value for vendor store id

= 1.0.27 =
* Add: Sync Auth Webview
* Add: Contact default layout without Map
* Add: Force login Add To Cart
* Add: On/Off Quick view
* Add: Screen Quick View builder
* Add: Config Featured Product In Layout product builder

= 1.0.26 =
* Add: Add action register success `app_builder_register_success`

= 1.0.25 =
* Fix: product variation return empty array

= 1.0.23 =
* Feature: Add image, color attribute type to API
* Feature: Restore Country, State, City, Postcode to billing and shipping when checkout

= 1.0.22 =
* Chore: Update caption image

= 1.0.21 =
* Add: API get country locate
* Chore: Test up version Wordpress

= 1.0.20 =
* Feature: Support custom post types

= 1.0.19 =
* Chore: define role and manage option

= 1.0.18 =
* Update: set default role for user register

= 1.0.17 =
* Add: API update customer info
* Add: class to body in checkout page
* Add: API login via token

= 1.0.16 =
* Add-ons: Working together "JWT Authentication for WP REST API" plugin

= 1.0.15 =
* Add: API get vendor WCMp
* Fix: Illegal string offset banner

= 1.0.14 =
* Add: Get products by vendor id

= 1.0.13 =
* Improvement: Get Apple public key
* Add: API get vendor Dokan
* Add: API get vendor WCFM

= 1.0.12 =
* Chore: Get all thumbs size registered

= 1.0.11 =
* Add: Support Content Egg plugin

= 1.0.10 =
* Fix: Get JWT config
* Add: Login via Token

= 1.0.9 =
* Add: Update style checkout page

= 1.0.8 =
* Add: API lost password

= 1.0.7 =
* Fixed: Exhausted memory on PHP8

= 1.0.6 =
* Improved: Ensure attribute turn return in array

= 1.0.5 =
* Improved: List language for site only single language => Help fix issue on app

= 1.0.4 =
* Chore: remove download build when active to reduce time setup
* Added: Prepare currency for product object
* Added: Get default Wc currency

= 1.0.3 =
* Fixed: Download build app

= 1.0.2 =
* Fixed: Decode token

= 1.0.1 =
* Fixed: PHP Notice - Undefined property $plugin_name
* Fixed: Url placeholder image

= 1.0.0 =
* Initial release.
