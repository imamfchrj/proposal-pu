<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


define('CACHE_VERSION', '201907221');


define('APP_NAME', 'Proposal PU');
define('VENDOR', 'Redcloud Project');
define('VENDOR_URL', 'http://redcloud-project.com/');
define('DEFAULT_PAGE_USER','airminum/insert');


/**
 * Constant for air minum
 */

define('PROPOSAL_AIR_MINUM', "Evaluasi Infrastruktur SPAM");
define('KEY_AIR_MINUM', "air_minum");
define('SUBKEY_AIR_MINUM_DISTRIBUSI', "unit_distribusi");
define('SUBKEY_AIR_MINUM_PELAYANAN', "unit_pelayanan");
define('SUBKEY_AIR_MINUM_BANGUNAN', "bangunan_penunjang");
define('PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3_71', 12); // unused
define('PROPOSAL_AIR_MINUM_UNIT_AIR_BAKU_2_1', 8);
define('PROPOSAL_AIR_MINUM_UNIT_PRODUKSI_2_2', 14);
define('PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3', 30);
define('PROPOSAL_AIR_MINUM_UNIT_PELAYANAN_2_4', 4);

define('PROPOSAL_AIR_MINUM_UNIT_AIR_BAKU_2_1_OPTION', array(
    1 => array("unit_air_baku", "bangunan_pengambilan", "Bangunan Pengambilan"),
    2 => array("unit_air_baku", "mekanikal_dan_elektrikal", "Mekanikal dan Elektrikal"),
    3 => array("unit_air_baku", "pipa_transmisi", "Pipa Transmisi"),
    4 => array("unit_air_baku", "bangunan_penunjang", "Bangunan Penunjang"),
    5 => array("unit_air_baku", "bangunan_pengambilan", "Bangunan Pengambilan"),
    // 5 => array("unit_air_baku", "pekerjaan_lain_lain"),
));

define('PROPOSAL_AIR_MINUM_UNIT_PRODUKSI_2_2_OPTION', array(
    1 => array("unit_produksi", "pra_pengolahan", "Pra Pengolahan"),
    2 => array("unit_produksi", "instalasi_pengolahan", "Instalasi Pengolahan"),
    3 => array("unit_produksi", "keandalan_ipa", "Keandalan IPA"),
    4 => array("unit_produksi", "pengolahan_lumpur", "Pengolahan Lumpur"),
    5 => array("unit_produksi", "reservoir", "Reservoir"),
    6 => array("unit_produksi", "mekanikal_dan_elektrikal", "Mekanikal dan Elektrikal"),
    7 => array("unit_produksi", "bangunan_penunjang", "Bangunan Penunjang"),
));

define('PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3_OPTION', array(
    1 => array("unit_distribusi", "pipa_distribusi_utama", "Pipa Distribusi Utama"),
    2 => array("unit_distribusi", "pipa_distribusi_utama", "Pipa Distribusi Utama"),
    3 => array("unit_distribusi", "pipa_distribusi_utama", "Pipa Distribusi Utama"),
    4 => array("unit_distribusi", "pipa_distribusi_utama", "Pipa Distribusi Utama"),
    5 => array("unit_distribusi", "pipa_distribusi_utama", "Pipa Distribusi Utama"),
    6 => array("unit_distribusi", "pipa_distribusi_sekunder", "Pipa Distribusi Sekunder"),
    7 => array("unit_distribusi", "pipa_distribusi_sekunder", "Pipa Distribusi Sekunder"),
    8 => array("unit_distribusi", "pipa_distribusi_sekunder", "Pipa Distribusi Sekunder"),
    9 => array("unit_distribusi", "pipa_distribusi_sekunder", "Pipa Distribusi Sekunder"),
    10 => array("unit_distribusi", "pipa_distribusi_sekunder", "Pipa Distribusi Sekunder"),
    11 => array("unit_distribusi", "pipa_distribusi_tersier", "Pipa Distribusi Tersier"),
    12 => array("unit_distribusi", "pipa_distribusi_tersier", "Pipa Distribusi Tersier"),
    13 => array("unit_distribusi", "pipa_distribusi_tersier", "Pipa Distribusi Tersier"),
    14 => array("unit_distribusi", "pipa_distribusi_tersier", "Pipa Distribusi Tersier"),
    15 => array("unit_distribusi", "pipa_distribusi_tersier", "Pipa Distribusi Tersier"),
    16 => array("unit_distribusi", "crossing_jaringan", "Crossing Jaringan"),
    17 => array("unit_distribusi", "crossing_jaringan", "Crossing Jaringan"),
    18 => array("unit_distribusi", "crossing_jaringan", "Crossing Jaringan"),
    19 => array("unit_distribusi", "crossing_jaringan", "Crossing Jaringan"),
    20 => array("unit_distribusi", "crossing_jaringan", "Crossing Jaringan"),
    21 => array("unit_distribusi", "perlengkapan_jaringan", "Perlengkapan Jaringan"),
    22 => array("unit_distribusi", "perlengkapan_jaringan", "Perlengkapan Jaringan"),
    23 => array("unit_distribusi", "perlengkapan_jaringan", "Perlengkapan Jaringan"),
    24 => array("unit_distribusi", "perlengkapan_jaringan", "Perlengkapan Jaringan"),
    25 => array("unit_distribusi", "perlengkapan_jaringan", "Perlengkapan Jaringan"),
    // 6 => array("unit_distribusi", "pekerjaan_lain_lain"),
));

define('PROPOSAL_AIR_MINUM_UNIT_PELAYANAN_2_4_OPTION', array(
    1 => array("unit_pelayanan", "pipa_retikulasi", "Pipa Retikulasi"),
    2 => array("unit_pelayanan", "sambungan_pelanggan", "Sambungan pelanggan"),
));

define('SETTER', array(
    "unit_air_baku_2_1_2" => array(
        "from" => "unit_air_baku_2_1_1B",
        "to" => "unit_air_baku_2_1_2B",
        "satuan" => "",
    ), 
    "unit_produksi_2_2_1" => array(
        "from" => "unit_air_baku_2_1_2B",
        "to" => "unit_produksi_2_2_1B",
        "satuan" => "",
    ), 
    "unit_produksi_2_2_2" => array(
        "from" => "unit_produksi_1_4_2",
        "to" => "unit_produksi_2_2_2B",
        "satuan" => "",
    ), 
    "unit_produksi_2_2_5" => array(
        "from" => "unit_distribusi_1_5_1",
        "to" => "unit_produksi_2_2_5B",
        "satuan" => "m3",
    ), 
    "unit_produksi_2_2_4" => array(
        "from" => "unit_produksi_2_2_3B",
        "to" => "unit_produksi_2_2_4B",
        "satuan" => "lt/dt",
    ),
    "unit_air_baku_2_1_1" => array(
        "from" => "unit_air_baku_1_3_1",
        "to" => "unit_air_baku_2_1_1B",
        "satuan" => "",
    ),
    "unit_air_baku_2_1_3"=> array(
        "from" => "unit_air_baku_1_3_5",
        "to" => "unit_air_baku_2_1_3B",
        "satuan" => "",
    ),
));


define('MEMO' , array(
    "unit_produksi_2_2_3B" => "1 sampai dengan 5",
));
