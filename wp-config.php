<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'testwp' );

/** Username của database */
define( 'DB_USER', 'testwp' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'admin' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uTenbN9)ld_{R{%@~z9:H. w@v NkA<-z)D2fGkxRE?!_Z>0+wPbdA>1D/eR50#,' );
define( 'SECURE_AUTH_KEY',  '|yL:8=MBQP{qpI5snI8a,C/I2-;#$V7m!Y&h]E(I!L#c)Xs3%v*;SAPStJsBa^|z' );
define( 'LOGGED_IN_KEY',    ',/hgh[RDHiA3ypdAmlH_ZUyL-qGWN<TgAJMmmcJ&<6dP$)NWzYN-+zH~6KFFC9Jn' );
define( 'NONCE_KEY',        't0MQ)_]ncp4?$rURw>~6MAq-{m,MC9K)<TmmzN`$e$O$py*,7Aw,7x(L~&0P;}um' );
define( 'AUTH_SALT',        'W7T1ev_cL5>7Uxl?sem2B] WVj0:IZVBYCs/h *l}:bWPr3M1yb;JdPLcV;n,c n' );
define( 'SECURE_AUTH_SALT', 'c|DRrl5+?efH;H.@P;2zO|A|j,60}39vH5Toc{b,g;aR/ch|H(,N:x~gp|t`qn[a' );
define( 'LOGGED_IN_SALT',   '8]r-*a9WB[;[pDl4ADQ,% pMrtGspG/y~E8Z[*9urX7%|wqq[~#*Xm<VC~zTjmPF' );
define( 'NONCE_SALT',       'O|{MQ,&2|`Pox?>O@c@[hYaMZ:V{3o^C  x5ZOP}FwLilaimK8(gaZB_=|Q(UiXZ' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
