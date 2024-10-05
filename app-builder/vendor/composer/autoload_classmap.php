<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'AppBuilder\\Activator' => $baseDir . '/includes/Activator.php',
    'AppBuilder\\Addons' => $baseDir . '/includes/Addons.php',
    'AppBuilder\\Admin\\Api' => $baseDir . '/includes/Admin/Api.php',
    'AppBuilder\\AdvancedRestApi\\Order' => $baseDir . '/includes/AdvancedRestApi/Order.php',
    'AppBuilder\\AdvancedRestApi\\Product' => $baseDir . '/includes/AdvancedRestApi/Product.php',
    'AppBuilder\\Api' => $baseDir . '/includes/Api.php',
    'AppBuilder\\Api\\Base' => $baseDir . '/includes/Api/Base.php',
    'AppBuilder\\Api\\Captcha' => $baseDir . '/includes/Api/Captcha.php',
    'AppBuilder\\Api\\Cart' => $baseDir . '/includes/Api/Cart.php',
    'AppBuilder\\Api\\Checkout' => $baseDir . '/includes/Api/Checkout.php',
    'AppBuilder\\Api\\Comment' => $baseDir . '/includes/Api/Comment.php',
    'AppBuilder\\Api\\Country' => $baseDir . '/includes/Api/Country.php',
    'AppBuilder\\Api\\Customer' => $baseDir . '/includes/Api/Customer.php',
    'AppBuilder\\Api\\Delivery' => $baseDir . '/includes/Api/Delivery.php',
    'AppBuilder\\Api\\Post' => $baseDir . '/includes/Api/Post.php',
    'AppBuilder\\Api\\Product' => $baseDir . '/includes/Api/Product.php',
    'AppBuilder\\Api\\Review' => $baseDir . '/includes/Api/Review.php',
    'AppBuilder\\Api\\Search' => $baseDir . '/includes/Api/Search.php',
    'AppBuilder\\Api\\Setting' => $baseDir . '/includes/Api/Setting.php',
    'AppBuilder\\Api\\User' => $baseDir . '/includes/Api/User.php',
    'AppBuilder\\Classs\\BuilderTemplate' => $baseDir . '/includes/Classs/BuilderTemplate.php',
    'AppBuilder\\Classs\\GooglePlayInfo' => $baseDir . '/includes/Classs/GooglePlayInfo.php',
    'AppBuilder\\Classs\\ItunesSearchApi' => $baseDir . '/includes/Classs/ItunesSearchApi.php',
    'AppBuilder\\Classs\\PhoneNumber' => $baseDir . '/includes/Classs/PhoneNumber.php',
    'AppBuilder\\Classs\\PublicKey' => $baseDir . '/includes/Classs/PublicKey.php',
    'AppBuilder\\Classs\\RawQuery' => $baseDir . '/includes/Classs/RawQuery.php',
    'AppBuilder\\Classs\\Token' => $baseDir . '/includes/Classs/Token.php',
    'AppBuilder\\Deactivator' => $baseDir . '/includes/Deactivator.php',
    'AppBuilder\\Di\\App\\Container' => $baseDir . '/includes/Di/App/Container.php',
    'AppBuilder\\Di\\App\\Exception\\DiException' => $baseDir . '/includes/Di/App/Exception/DiException.php',
    'AppBuilder\\Di\\App\\Exception\\ExceptionAbstract' => $baseDir . '/includes/Di/App/Exception/ExceptionAbstract.php',
    'AppBuilder\\Di\\App\\Exception\\ExceptionInterface' => $baseDir . '/includes/Di/App/Exception/ExceptionInterface.php',
    'AppBuilder\\Di\\App\\Exception\\FeatureException' => $baseDir . '/includes/Di/App/Exception/FeatureException.php',
    'AppBuilder\\Di\\App\\Exception\\HttpException' => $baseDir . '/includes/Di/App/Exception/HttpException.php',
    'AppBuilder\\Di\\App\\Http\\HttpClientFactory' => $baseDir . '/includes/Di/App/Http/HttpClientFactory.php',
    'AppBuilder\\Di\\App\\Http\\HttpClientInterface' => $baseDir . '/includes/Di/App/Http/HttpClientInterface.php',
    'AppBuilder\\Di\\App\\Http\\WpHttpClient' => $baseDir . '/includes/Di/App/Http/WpHttpClient.php',
    'AppBuilder\\Di\\Service\\Admin\\Admin' => $baseDir . '/includes/Di/Service/Admin/Admin.php',
    'AppBuilder\\Di\\Service\\Admin\\Editor' => $baseDir . '/includes/Di/Service/Admin/Editor.php',
    'AppBuilder\\Di\\Service\\Auth\\Auth' => $baseDir . '/includes/Di/Service/Auth/Auth.php',
    'AppBuilder\\Di\\Service\\Auth\\AuthInterface' => $baseDir . '/includes/Di/Service/Auth/AuthInterface.php',
    'AppBuilder\\Di\\Service\\Auth\\AuthTrails' => $baseDir . '/includes/Di/Service/Auth/AuthTrails.php',
    'AppBuilder\\Di\\Service\\Auth\\ChangePassword' => $baseDir . '/includes/Di/Service/Auth/ChangePassword.php',
    'AppBuilder\\Di\\Service\\Auth\\CurrentAuth' => $baseDir . '/includes/Di/Service/Auth/CurrentAuth.php',
    'AppBuilder\\Di\\Service\\Auth\\DeleteAuth' => $baseDir . '/includes/Di/Service/Auth/DeleteAuth.php',
    'AppBuilder\\Di\\Service\\Auth\\DetermineAuth' => $baseDir . '/includes/Di/Service/Auth/DetermineAuth.php',
    'AppBuilder\\Di\\Service\\Auth\\ForgotPassword' => $baseDir . '/includes/Di/Service/Auth/ForgotPassword.php',
    'AppBuilder\\Di\\Service\\Auth\\LoginAuth' => $baseDir . '/includes/Di/Service/Auth/LoginAuth.php',
    'AppBuilder\\Di\\Service\\Auth\\LoginToken' => $baseDir . '/includes/Di/Service/Auth/LoginToken.php',
    'AppBuilder\\Di\\Service\\Auth\\Login\\LoginApple' => $baseDir . '/includes/Di/Service/Auth/Login/LoginApple.php',
    'AppBuilder\\Di\\Service\\Auth\\Login\\LoginEmail' => $baseDir . '/includes/Di/Service/Auth/Login/LoginEmail.php',
    'AppBuilder\\Di\\Service\\Auth\\Login\\LoginFacebook' => $baseDir . '/includes/Di/Service/Auth/Login/LoginFacebook.php',
    'AppBuilder\\Di\\Service\\Auth\\Login\\LoginFactory' => $baseDir . '/includes/Di/Service/Auth/Login/LoginFactory.php',
    'AppBuilder\\Di\\Service\\Auth\\Login\\LoginGoogle' => $baseDir . '/includes/Di/Service/Auth/Login/LoginGoogle.php',
    'AppBuilder\\Di\\Service\\Auth\\Login\\LoginInterface' => $baseDir . '/includes/Di/Service/Auth/Login/LoginInterface.php',
    'AppBuilder\\Di\\Service\\Auth\\Login\\LoginPhoneNumber' => $baseDir . '/includes/Di/Service/Auth/Login/LoginPhoneNumber.php',
    'AppBuilder\\Di\\Service\\Auth\\LostPassword' => $baseDir . '/includes/Di/Service/Auth/LostPassword.php',
    'AppBuilder\\Di\\Service\\Auth\\RegisterAuth' => $baseDir . '/includes/Di/Service/Auth/RegisterAuth.php',
    'AppBuilder\\Di\\Service\\Auth\\Register\\RegisterEmail' => $baseDir . '/includes/Di/Service/Auth/Register/RegisterEmail.php',
    'AppBuilder\\Di\\Service\\Auth\\Register\\RegisterFactory' => $baseDir . '/includes/Di/Service/Auth/Register/RegisterFactory.php',
    'AppBuilder\\Di\\Service\\Auth\\Register\\RegisterInterface' => $baseDir . '/includes/Di/Service/Auth/Register/RegisterInterface.php',
    'AppBuilder\\Di\\Service\\Auth\\Register\\RegisterPhoneNumber' => $baseDir . '/includes/Di/Service/Auth/Register/RegisterPhoneNumber.php',
    'AppBuilder\\Di\\Service\\Feature\\CustomIconFeature' => $baseDir . '/includes/Di/Service/Feature/CustomIconFeature.php',
    'AppBuilder\\Di\\Service\\Feature\\FeatureAbstract' => $baseDir . '/includes/Di/Service/Feature/FeatureAbstract.php',
    'AppBuilder\\Di\\Service\\Feature\\FeatureFactory' => $baseDir . '/includes/Di/Service/Feature/FeatureFactory.php',
    'AppBuilder\\Di\\Service\\Feature\\JwtAuthentication' => $baseDir . '/includes/Di/Service/Feature/JwtAuthentication.php',
    'AppBuilder\\Di\\Service\\Feature\\JwtLogin' => $baseDir . '/includes/Di/Service/Feature/JwtLogin.php',
    'AppBuilder\\Di\\Service\\Feature\\LoginFacebook' => $baseDir . '/includes/Di/Service/Feature/LoginFacebook.php',
    'AppBuilder\\Di\\Service\\Feature\\LoginFirebasePhoneNumber' => $baseDir . '/includes/Di/Service/Feature/LoginFirebasePhoneNumber.php',
    'AppBuilder\\Di\\Service\\Feature\\SampleFeature' => $baseDir . '/includes/Di/Service/Feature/SampleFeature.php',
    'AppBuilder\\Di\\Service\\Feature\\UpgraderFeature' => $baseDir . '/includes/Di/Service/Feature/UpgraderFeature.php',
    'AppBuilder\\Di\\Service\\Frontend\\Frontend' => $baseDir . '/includes/Di/Service/Frontend/Frontend.php',
    'AppBuilder\\Di\\Service\\Integration\\IntegrationInterface' => $baseDir . '/includes/Di/Service/Integration/IntegrationInterface.php',
    'AppBuilder\\Di\\Service\\Integration\\IntegrationTraits' => $baseDir . '/includes/Di/Service/Integration/IntegrationTraits.php',
    'AppBuilder\\Di\\Service\\Integration\\Integrations' => $baseDir . '/includes/Di/Service/Integration/Integrations.php',
    'AppBuilder\\Di\\Service\\Integration\\PaytmIntegration' => $baseDir . '/includes/Di/Service/Integration/PaytmIntegration.php',
    'AppBuilder\\Di\\Service\\Integration\\RazorpayIntegration' => $baseDir . '/includes/Di/Service/Integration/RazorpayIntegration.php',
    'AppBuilder\\Di\\Service\\Integration\\SmartCouponIntegration' => $baseDir . '/includes/Di/Service/Integration/SmartCouponIntegration.php',
    'AppBuilder\\Di\\Service\\Vendor\\BaseStore' => $baseDir . '/includes/Di/Service/Vendor/BaseStore.php',
    'AppBuilder\\Di\\Service\\Vendor\\DokanStore' => $baseDir . '/includes/Di/Service/Vendor/DokanStore.php',
    'AppBuilder\\Di\\Service\\Vendor\\StoreFactory' => $baseDir . '/includes/Di/Service/Vendor/StoreFactory.php',
    'AppBuilder\\Di\\Service\\Vendor\\StorePermission' => $baseDir . '/includes/Di/Service/Vendor/StorePermission.php',
    'AppBuilder\\Di\\Service\\Vendor\\WCFMStore' => $baseDir . '/includes/Di/Service/Vendor/WCFMStore.php',
    'AppBuilder\\Di\\Service\\Vendor\\WCMpStore' => $baseDir . '/includes/Di/Service/Vendor/WCMpStore.php',
    'AppBuilder\\Di\\Service\\Vendor\\WCVendors' => $baseDir . '/includes/Di/Service/Vendor/WCVendors.php',
    'AppBuilder\\Gateway\\FlutterWaveGateway\\FlutterWaveGateway' => $baseDir . '/includes/Gateway/FlutterWaveGateway/FlutterWaveGateway.php',
    'AppBuilder\\Gateway\\HyperpayGateway' => $baseDir . '/includes/Gateway/HyperpayGateway.php',
    'AppBuilder\\Gateway\\IyzicoGateway' => $baseDir . '/includes/Gateway/IyzicoGateway.php',
    'AppBuilder\\Gateway\\MercadopagoGateway' => $baseDir . '/includes/Gateway/MercadopagoGateway.php',
    'AppBuilder\\Gateway\\MyFatoorahV2Gateway' => $baseDir . '/includes/Gateway/MyFatoorahV2Gateway.php',
    'AppBuilder\\Gateway\\PayStackGateway' => $baseDir . '/includes/Gateway/PayStackGateway.php',
    'AppBuilder\\Gateway\\PayTabsGateway' => $baseDir . '/includes/Gateway/PayTabsGateway.php',
    'AppBuilder\\Gateway\\VnpayGateway' => $baseDir . '/includes/Gateway/VnpayGateway.php',
    'AppBuilder\\Hook' => $baseDir . '/includes/Hook.php',
    'AppBuilder\\Hooks\\AdsHook' => $baseDir . '/includes/Hooks/AdsHook.php',
    'AppBuilder\\Hooks\\AvatarHook' => $baseDir . '/includes/Hooks/AvatarHook.php',
    'AppBuilder\\Hooks\\CaptchaHook' => $baseDir . '/includes/Hooks/CaptchaHook.php',
    'AppBuilder\\Hooks\\CategoryHook' => $baseDir . '/includes/Hooks/CategoryHook.php',
    'AppBuilder\\Hooks\\DigitsHook' => $baseDir . '/includes/Hooks/DigitsHook.php',
    'AppBuilder\\Hooks\\ShortcodeHook' => $baseDir . '/includes/Hooks/ShortcodeHook.php',
    'AppBuilder\\Hooks\\StoreHook' => $baseDir . '/includes/Hooks/StoreHook.php',
    'AppBuilder\\Hooks\\TemplateHook' => $baseDir . '/includes/Hooks/TemplateHook.php',
    'AppBuilder\\Hooks\\UserHook' => $baseDir . '/includes/Hooks/UserHook.php',
    'AppBuilder\\Hooks\\VendorHook' => $baseDir . '/includes/Hooks/VendorHook.php',
    'AppBuilder\\Hooks\\WooHook' => $baseDir . '/includes/Hooks/WooHook.php',
    'AppBuilder\\Hooks\\WpHook' => $baseDir . '/includes/Hooks/WpHook.php',
    'AppBuilder\\I18n' => $baseDir . '/includes/I18n.php',
    'AppBuilder\\Lms\\LmsApi' => $baseDir . '/includes/Lms/LmsApi.php',
    'AppBuilder\\Lms\\LmsHooks' => $baseDir . '/includes/Lms/LmsHooks.php',
    'AppBuilder\\Lms\\LmsPermission' => $baseDir . '/includes/Lms/LmsPermission.php',
    'AppBuilder\\Lms\\MasterStudy\\Api' => $baseDir . '/includes/Lms/MasterStudy/Api.php',
    'AppBuilder\\Lms\\MasterStudy\\Helper' => $baseDir . '/includes/Lms/MasterStudy/Helper.php',
    'AppBuilder\\Lms\\MasterStudy\\Hooks' => $baseDir . '/includes/Lms/MasterStudy/Hooks.php',
    'AppBuilder\\Lms\\MasterStudy\\Main' => $baseDir . '/includes/Lms/MasterStudy/Main.php',
    'AppBuilder\\Main' => $baseDir . '/includes/Main.php',
    'AppBuilder\\Plugin\\WooCommerceBooking' => $baseDir . '/includes/Plugin/WooCommerceBooking.php',
    'AppBuilder\\PostTypes' => $baseDir . '/includes/PostTypes.php',
    'AppBuilder\\Setting' => $baseDir . '/includes/Setting.php',
    'AppBuilder\\Traits\\Feature' => $baseDir . '/includes/Traits/Feature.php',
    'AppBuilder\\Traits\\Permission' => $baseDir . '/includes/Traits/Permission.php',
    'AppBuilder\\Utils' => $baseDir . '/includes/Utils.php',
    'Attribute' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Firebase\\JWT\\BeforeValidException' => $vendorDir . '/firebase/php-jwt/src/BeforeValidException.php',
    'Firebase\\JWT\\CachedKeySet' => $vendorDir . '/firebase/php-jwt/src/CachedKeySet.php',
    'Firebase\\JWT\\ExpiredException' => $vendorDir . '/firebase/php-jwt/src/ExpiredException.php',
    'Firebase\\JWT\\JWK' => $vendorDir . '/firebase/php-jwt/src/JWK.php',
    'Firebase\\JWT\\JWT' => $vendorDir . '/firebase/php-jwt/src/JWT.php',
    'Firebase\\JWT\\JWTExceptionWithPayloadInterface' => $vendorDir . '/firebase/php-jwt/src/JWTExceptionWithPayloadInterface.php',
    'Firebase\\JWT\\Key' => $vendorDir . '/firebase/php-jwt/src/Key.php',
    'Firebase\\JWT\\SignatureInvalidException' => $vendorDir . '/firebase/php-jwt/src/SignatureInvalidException.php',
    'Gregwar\\Captcha\\CaptchaBuilder' => $vendorDir . '/gregwar/captcha/src/Gregwar/Captcha/CaptchaBuilder.php',
    'Gregwar\\Captcha\\CaptchaBuilderInterface' => $vendorDir . '/gregwar/captcha/src/Gregwar/Captcha/CaptchaBuilderInterface.php',
    'Gregwar\\Captcha\\ImageFileHandler' => $vendorDir . '/gregwar/captcha/src/Gregwar/Captcha/ImageFileHandler.php',
    'Gregwar\\Captcha\\PhraseBuilder' => $vendorDir . '/gregwar/captcha/src/Gregwar/Captcha/PhraseBuilder.php',
    'Gregwar\\Captcha\\PhraseBuilderInterface' => $vendorDir . '/gregwar/captcha/src/Gregwar/Captcha/PhraseBuilderInterface.php',
    'PhpToken' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
    'Stringable' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
    'Symfony\\Component\\Finder\\Comparator\\Comparator' => $vendorDir . '/symfony/finder/Comparator/Comparator.php',
    'Symfony\\Component\\Finder\\Comparator\\DateComparator' => $vendorDir . '/symfony/finder/Comparator/DateComparator.php',
    'Symfony\\Component\\Finder\\Comparator\\NumberComparator' => $vendorDir . '/symfony/finder/Comparator/NumberComparator.php',
    'Symfony\\Component\\Finder\\Exception\\AccessDeniedException' => $vendorDir . '/symfony/finder/Exception/AccessDeniedException.php',
    'Symfony\\Component\\Finder\\Exception\\DirectoryNotFoundException' => $vendorDir . '/symfony/finder/Exception/DirectoryNotFoundException.php',
    'Symfony\\Component\\Finder\\Finder' => $vendorDir . '/symfony/finder/Finder.php',
    'Symfony\\Component\\Finder\\Gitignore' => $vendorDir . '/symfony/finder/Gitignore.php',
    'Symfony\\Component\\Finder\\Glob' => $vendorDir . '/symfony/finder/Glob.php',
    'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator' => $vendorDir . '/symfony/finder/Iterator/CustomFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator' => $vendorDir . '/symfony/finder/Iterator/DateRangeFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator' => $vendorDir . '/symfony/finder/Iterator/DepthRangeFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator' => $vendorDir . '/symfony/finder/Iterator/ExcludeDirectoryFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\FileTypeFilterIterator' => $vendorDir . '/symfony/finder/Iterator/FileTypeFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator' => $vendorDir . '/symfony/finder/Iterator/FilecontentFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator' => $vendorDir . '/symfony/finder/Iterator/FilenameFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\LazyIterator' => $vendorDir . '/symfony/finder/Iterator/LazyIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\MultiplePcreFilterIterator' => $vendorDir . '/symfony/finder/Iterator/MultiplePcreFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\PathFilterIterator' => $vendorDir . '/symfony/finder/Iterator/PathFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\RecursiveDirectoryIterator' => $vendorDir . '/symfony/finder/Iterator/RecursiveDirectoryIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator' => $vendorDir . '/symfony/finder/Iterator/SizeRangeFilterIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\SortableIterator' => $vendorDir . '/symfony/finder/Iterator/SortableIterator.php',
    'Symfony\\Component\\Finder\\Iterator\\VcsIgnoredFilterIterator' => $vendorDir . '/symfony/finder/Iterator/VcsIgnoredFilterIterator.php',
    'Symfony\\Component\\Finder\\SplFileInfo' => $vendorDir . '/symfony/finder/SplFileInfo.php',
    'Symfony\\Polyfill\\Php80\\Php80' => $vendorDir . '/symfony/polyfill-php80/Php80.php',
    'Symfony\\Polyfill\\Php80\\PhpToken' => $vendorDir . '/symfony/polyfill-php80/PhpToken.php',
    'UnhandledMatchError' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
    'ValueError' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
);