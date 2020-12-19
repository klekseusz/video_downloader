<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'athlon1600/youtube-downloader' => 'v2.1.1@a595645dec6fc2975caaf8f37dafa3ca303ea2c4',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'composer/semver' => '3.2.4@a02fdf930a3c1c3ed3a49b5f63859c0c20e10464',
  'composer/xdebug-handler' => '1.4.5@f28d44c286812c714741478d968104c5e604a1d4',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.0@9f3e3f3cc5399604c0325d5ffa92609d694d950d',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/doctrine-bundle' => '2.2.2@044d33eeffdb236d5013b6b4af99f87519e10751',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => '2.8.1@242cf1a33df1b8bc5e1b86c3ebd01db07851c833',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'friendsofphp/php-cs-fixer' => 'v2.17.1@5198b7308ed63f26799387fd7f3901c3db6bd7fd',
  'laminas/laminas-code' => '3.5.1@b549b70c0bb6e935d497f84f750c82653326ac77',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'nikic/php-parser' => 'v4.10.3@dbe56d23de8fcb157bbc0cfb3ad7c7de0cfb0984',
  'ocramius/proxy-manager' => '2.10.0@f65ae0f9dcbdd9d6ad3abb721a9e09c3d7d868a4',
  'php-cs-fixer/diff' => 'v1.3.1@dbd31aeb251639ac0b9e7e29405c1441907f5759',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v5.2.0@19c59713f750642206b21a1edec5c18dea80f979',
  'symfony/cache' => 'v5.2.0@c15fd2b3dcf2bd7d5ee3265874870d6cc694306b',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.2.0@fa1219ecbf96bb5db59f2599cba0960a0d9c3aea',
  'symfony/console' => 'v5.2.0@3e0564fb08d44a98bd5f1960204c958e57bd586b',
  'symfony/debug-bundle' => 'v5.2.0@c79722fc3d430810d7a764fbc84fe212e532e004',
  'symfony/dependency-injection' => 'v5.2.0@98cec9b9f410a4832e239949a41d47182862c3a4',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.2.0@b3ea1749ef47c3d2ad6018d05837758bae91f5cf',
  'symfony/dotenv' => 'v5.2.0@264ca18dd6e4ab3cfa525ee52cceff9540a1019e',
  'symfony/error-handler' => 'v5.2.0@289008c5be039e39908d33ae0a8ac99be1210bba',
  'symfony/event-dispatcher' => 'v5.2.0@aa13a09811e6d2ad43f8fb336bebdb7691d85d3c',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/filesystem' => 'v5.2.0@bb92ba7f38b037e531908590a858a04d85c0e238',
  'symfony/finder' => 'v5.2.0@fd8305521692f27eae3263895d1ef1571c71a78d',
  'symfony/flex' => 'v1.11.0@ceb2b4e612bd0b4bb36a4d7fb2e800c861652f48',
  'symfony/form' => 'v5.2.0@b01ac08da313b892e028b0aa77c89ccb610d139a',
  'symfony/framework-bundle' => 'v5.2.0@c5eedac1a2a07419d1d35f81a6b63cfccd91ea1d',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.2.0@e4576271ee99123aa59a40564c7b5405f0ebd1e6',
  'symfony/http-kernel' => 'v5.2.0@38907e5ccb2d9d371191a946734afc83c7a03160',
  'symfony/intl' => 'v5.2.0@eaac169bf64d307d48daef7e349729d670df6659',
  'symfony/maker-bundle' => 'v1.25.0@6d2da12632f5c8b9aa7b159f0bb46f245289434a',
  'symfony/monolog-bridge' => 'v5.2.0@6634bc516d914f25f04e9138743313ba8b10aef5',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/options-resolver' => 'v5.2.0@87a2a4a766244e796dd9cb9d6f58c123358cd986',
  'symfony/polyfill-intl-grapheme' => 'v1.20.0@c7cf3f858ec7d70b89559d6e6eb1f7c2517d479c',
  'symfony/polyfill-intl-icu' => 'v1.20.0@c44d5bf6a75eed79555c6bf37505c6d39559353e',
  'symfony/polyfill-intl-normalizer' => 'v1.20.0@727d1096295d807c309fb01a851577302394c897',
  'symfony/polyfill-mbstring' => 'v1.20.0@39d483bdf39be819deabf04ec872eb0b2410b531',
  'symfony/polyfill-php70' => 'v1.20.0@5f03a781d984aae42cebd18e7912fa80f02ee644',
  'symfony/polyfill-php73' => 'v1.20.0@8ff431c517be11c78c48a39a66d37431e26a6bed',
  'symfony/polyfill-php80' => 'v1.20.0@e70aa8b064c5b72d3df2abd5ab1e90464ad009de',
  'symfony/process' => 'v5.2.0@240e74140d4d956265048f3025c0aecbbc302d54',
  'symfony/property-access' => 'v5.2.0@5cf86761edaf58376845a96ea6c0d28d475d5ad3',
  'symfony/property-info' => 'v5.2.0@69ca096d096a0a58457818a5a2d1ce51f5f14909',
  'symfony/routing' => 'v5.2.0@130ac5175ad2fd417978baebd8062e2e6b2bc28b',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.2.0@2b105c0354f39a63038a1d8bf776ee92852813af',
  'symfony/string' => 'v5.2.0@40e975edadd4e32cd16f3753b3bad65d9ac48242',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.2.0@909d736d0413a072ebd5db8e0f87b8808efd4849',
  'symfony/twig-bundle' => 'v5.2.0@954b642ce585c7f20795f30aba53eb27eeb1a91f',
  'symfony/validator' => 'v5.2.0@7b2583e2c4cb82b23fcb37730981c868efefd2c0',
  'symfony/var-dumper' => 'v5.2.0@173a79c462b1c81e1fa26129f71e41333d846b26',
  'symfony/var-exporter' => 'v5.2.0@fbc3507f23d263d75417e09a12d77c009f39676c',
  'symfony/web-profiler-bundle' => 'v5.2.0@a1f3f170e785d3c371396ac4935c27504fcfca16',
  'symfony/webpack-encore-bundle' => 'v1.8.0@c879bc50c69f6b4f2984b2bb5fe8190bbc5befdd',
  'symfony/yaml' => 'v5.2.0@bb73619b2ae5121bbbcd9f191dfd53ded17ae598',
  'twig/extra-bundle' => 'v3.1.1@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/twig' => 'v3.1.1@b02fa41f3783a2616eccef7b92fbc2343ffed737',
  'webimpress/safe-writer' => '2.1.0@5cfafdec5873c389036f14bf832a5efc9390dcdd',
  'symfony/polyfill-ctype' => '*@7a931d587e65c970766ab214b2939d387c1da2c5',
  'symfony/polyfill-iconv' => '*@7a931d587e65c970766ab214b2939d387c1da2c5',
  'symfony/polyfill-php72' => '*@7a931d587e65c970766ab214b2939d387c1da2c5',
  '__root__' => 'dev-master@7a931d587e65c970766ab214b2939d387c1da2c5',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
