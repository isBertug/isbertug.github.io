<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'wordpress' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[=sXS5^2v/2-.#f?joa$G;l:T:ag6<0Ob*K9m;5KX/e@4b4?nS>}] MfUVzDTq85' );
define( 'SECURE_AUTH_KEY',  'T0i2P|A)k;f3(=5y>pm5:y(Jq`mm6||j..zKnNs<ydQzoSWLr,HWMAw2ym?7-6Z4' );
define( 'LOGGED_IN_KEY',    'p$c2>d8/! VD7%MySLBzs7iwc3IQ5d{%7nuTIvsGAejT(Va+31H%on;XiZ6F6j[p' );
define( 'NONCE_KEY',        '^:t]Fp:=Rh3$U-FA-o^zOdPGUN(-X;&]m4,i-Os:NWQZ5*/l$92U>j+mOAlb)uaZ' );
define( 'AUTH_SALT',        '6mC@cIy3^#%Vd?4LjZC;lo,*Wzv&D>;!+:1i-,%>_[WVf-Es.>DbZg5J9Q L=tp~' );
define( 'SECURE_AUTH_SALT', 'I3WI6b9il;6uxg`cz<]38j,K*30f<itt{me)1RV}9aqJSPu8:]r=9pn?mH<Db.6Y' );
define( 'LOGGED_IN_SALT',   'LXi#J5@Z*E2=P6|EPn[_IG+(aHA* )qnB^.SP=D?OfR34nzkvsF^.(DBgKs ]xM;' );
define( 'NONCE_SALT',       'Ymcn&]0e=iH:J]5ppZLx4{ jJ-kJDemp(MyN`>R3L=fdF)$r?JbI[b70yAl$5y&(' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';