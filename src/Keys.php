<?php /** @noinspection PhpUnused */

namespace Jawira\PhpIniSettings;

/**
 * php.ini keys
 *
 * This class contains constants that can be used to modify configuration settings.
 *
 * Some constants have been marked as deprecated, but it's only a hack. Configuration settings marked as deprecated
 * cannot be changed at runtime, but have been marked as such to be easily identifiable on your IDE.
 *
 * @see       https://www.php.net/manual/en/ini.list.php
 * @see       https://www.php.net/manual/en/configuration.changes.modes.php
 * @author    Jawira Portugal <dev@tugal.be>
 * @package   Jawira\PhpIniSettings
 */
abstract class Keys
{
    /**
     * allow_call_time_pass_reference
     *
     * - Default: "1"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Removed in PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.allow-call-time-pass-reference
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ALLOW_CALL_TIME_PASS_REFERENCE = 'allow_call_time_pass_reference';

    /**
     * allow_url_fopen
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/filesystem.configuration.php#ini.allow-url-fopen
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ALLOW_URL_FOPEN = 'allow_url_fopen';

    /**
     * allow_url_include
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.2.0.
     *
     * @see        https://www.php.net/manual/en/filesystem.configuration.php#ini.allow-url-include
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ALLOW_URL_INCLUDE = 'allow_url_include';

    /**
     * always_populate_raw_post_data
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.always-populate-raw-post-data
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ALWAYS_POPULATE_RAW_POST_DATA = 'always_populate_raw_post_data';

    /**
     * apc.cache_by_default
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: PHP_INI_SYSTEM in APC <= 3.0.12. Available since APC 3.0.0.
     *
     * @see https://www.php.net/manual/en/apc.configuration.php#ini.apc.cache-by-default
     */
    const APC_CACHE_BY_DEFAULT = 'apc.cache_by_default';

    /**
     * apc.enabled
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: PHP_INI_SYSTEM in APC 2. PHP_INI_ALL in APC <= 3.0.12.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.enabled
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_ENABLED = 'apc.enabled';

    /**
     * apc.enable_cli
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.7.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.enable-cli
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_ENABLE_CLI = 'apc.enable_cli';

    /**
     * apc.file_update_protection
     *
     * - Default: "2"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.6.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.file-update-protection
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_FILE_UPDATE_PROTECTION = 'apc.file_update_protection';

    /**
     * apc.filters
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.filters
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_FILTERS = 'apc.filters';

    /**
     * apc.gc_ttl
     *
     * - Default: "3600"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.gc-ttl
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_GC_TTL = 'apc.gc_ttl';

    /**
     * apc.include_once_override
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.12.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.include-once-override
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_INCLUDE_ONCE_OVERRIDE = 'apc.include_once_override';

    /**
     * apc.localcache
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.14.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.localcache
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_LOCALCACHE = 'apc.localcache';

    /**
     * apc.localcache.size
     *
     * - Default: "512"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.14.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.localcache.size
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_LOCALCACHE_SIZE = 'apc.localcache.size';

    /**
     * apc.max_file_size
     *
     * - Default: "1M"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.7.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.max-file-size
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_MAX_FILE_SIZE = 'apc.max_file_size';

    /**
     * apc.mmap_file_mask
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.mmap-file-mask
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_MMAP_FILE_MASK = 'apc.mmap_file_mask';

    /**
     * apc.num_files_hint
     *
     * - Default: "1000"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.num-files-hint
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_NUM_FILES_HINT = 'apc.num_files_hint';

    /**
     * apc.optimization
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: PHP_INI_SYSTEM in APC 2. Removed in APC 3.0.13.
     *
     * @see https://www.php.net/manual/en/apc.configuration.php#ini.apc.optimization
     */
    const APC_OPTIMIZATION = 'apc.optimization';

    /**
     * apc.report_autofilter
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.11.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.report-autofilter
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_REPORT_AUTOFILTER = 'apc.report_autofilter';

    /**
     * apc.rfc1867
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.13.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.rfc1867
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_RFC1867 = 'apc.rfc1867';

    /**
     * apc.rfc1867_freq
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.rfc1867-freq
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_RFC1867_FREQ = 'apc.rfc1867_freq';

    /**
     * apc.rfc1867_name
     *
     * - Default: "APC_UPLOAD_PROGRESS"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.rfc1867-name
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_RFC1867_NAME = 'apc.rfc1867_name';

    /**
     * apc.rfc1867_prefix
     *
     * - Default: "upload_"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.rfc1867-prefix
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_RFC1867_PREFIX = 'apc.rfc1867_prefix';

    /**
     * apc.shm_segments
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.shm-segments
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_SHM_SEGMENTS = 'apc.shm_segments';

    /**
     * apc.shm_size
     *
     * - Default: "30"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.shm-size
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_SHM_SIZE = 'apc.shm_size';

    /**
     * apc.slam_defense
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.0.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.slam-defense
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_SLAM_DEFENSE = 'apc.slam_defense';

    /**
     * apc.stat
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.10.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.stat
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_STAT = 'apc.stat';

    /**
     * apc.stat_ctime
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.13.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.stat-ctime
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_STAT_CTIME = 'apc.stat_ctime';

    /**
     * apc.ttl
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.0.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.ttl
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_TTL = 'apc.ttl';

    /**
     * apc.user_entries_hint
     *
     * - Default: "4096"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.0.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.user-entries-hint
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_USER_ENTRIES_HINT = 'apc.user_entries_hint';

    /**
     * apc.user_ttl
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.0.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.user-ttl
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_USER_TTL = 'apc.user_ttl';

    /**
     * apc.write_lock
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since APC 3.0.11.
     *
     * @see        https://www.php.net/manual/en/apc.configuration.php#ini.apc.write-lock
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const APC_WRITE_LOCK = 'apc.write_lock';

    /**
     * apd.bitmask
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in apd 0.9.
     */
    const APD_BITMASK = 'apd.bitmask';

    /**
     * apd.dumpdir
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/apd.configuration.php#ini.apd.dumpdir
     */
    const APD_DUMPDIR = 'apd.dumpdir';

    /**
     * apd.statement_tracing
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since apd 0.9.
     *
     * @see https://www.php.net/manual/en/apd.configuration.php#ini.apd.statement-tracing
     */
    const APD_STATEMENT_TRACING = 'apd.statement_tracing';

    /**
     * arg_separator.input
     *
     * - Default: "&"
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.arg-separator.input
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ARG_SEPARATOR_INPUT = 'arg_separator.input';

    /**
     * arg_separator.output
     *
     * - Default: "&"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.arg-separator.output
     */
    const ARG_SEPARATOR_OUTPUT = 'arg_separator.output';

    /**
     * asp_tags
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.asp-tags
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ASP_TAGS = 'asp_tags';

    /**
     * assert.active
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/info.configuration.php#ini.assert.active
     */
    const ASSERT_ACTIVE = 'assert.active';

    /**
     * assert.bail
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/info.configuration.php#ini.assert.bail
     */
    const ASSERT_BAIL = 'assert.bail';

    /**
     * assert.callback
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/info.configuration.php#ini.assert.callback
     */
    const ASSERT_CALLBACK = 'assert.callback';

    /**
     * assert.exception
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 7.0.0.
     *
     * @see https://www.php.net/manual/en/info.configuration.php#ini.assert.exception
     */
    const ASSERT_EXCEPTION = 'assert.exception';

    /**
     * assert.quiet_eval
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/info.configuration.php#ini.assert.quiet-eval
     */
    const ASSERT_QUIET_EVAL = 'assert.quiet_eval';

    /**
     * assert.warning
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/info.configuration.php#ini.assert.warning
     */
    const ASSERT_WARNING = 'assert.warning';

    /**
     * auto_append_file
     *
     * - Default: NULL
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.auto-append-file
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const AUTO_APPEND_FILE = 'auto_append_file';

    /**
     * auto_detect_line_endings
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/filesystem.configuration.php#ini.auto-detect-line-endings
     */
    const AUTO_DETECT_LINE_ENDINGS = 'auto_detect_line_endings';

    /**
     * auto_globals_jit
     *
     * - Default: "1"
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.auto-globals-jit
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const AUTO_GLOBALS_JIT = 'auto_globals_jit';

    /**
     * auto_prepend_file
     *
     * - Default: NULL
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.auto-prepend-file
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const AUTO_PREPEND_FILE = 'auto_prepend_file';

    /**
     * axis2.client_home
     *
     * - Default: "~/work/axisc/c/deply"
     * - Changeable: PHP_INI_ALL
     */
    const AXIS2_CLIENT_HOME = 'axis2.client_home';

    /**
     * axis2.enable_exception
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     */
    const AXIS2_ENABLE_EXCEPTION = 'axis2.enable_exception';

    /**
     * axis2.enable_trace
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     */
    const AXIS2_ENABLE_TRACE = 'axis2.enable_trace';

    /**
     * axis2.log_path
     *
     * - Default: "/tmp"
     * - Changeable: PHP_INI_ALL
     */
    const AXIS2_LOG_PATH = 'axis2.log_path';

    /**
     * bcmath.scale
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/bc.configuration.php#ini.bcmath.scale
     */
    const BCMATH_SCALE = 'bcmath.scale';

    /**
     * bcompiler.enabled
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since bcompiler 0.8.
     */
    const BCOMPILER_ENABLED = 'bcompiler.enabled';

    /**
     * blenc.key_file
     *
     * - Default: "/usr/local/etc/blenckeys"
     * - Changeable: PHP_INI_ALL
     */
    const BLENC_KEY_FILE = 'blenc.key_file';

    /**
     * browscap
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/misc.configuration.php#ini.browscap
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const BROWSCAP = 'browscap';

    /**
     * cgi.check_shebang_line
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.2.1.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.cgi.check-shebang-line
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const CGI_CHECK_SHEBANG_LINE = 'cgi.check_shebang_line';

    /**
     * cgi.discard_path
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.3.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.cgi.discard-path
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const CGI_DISCARD_PATH = 'cgi.discard_path';

    /**
     * cgi.fix_pathinfo
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: PHP_INI_ALL in PHP <= 5.2.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.cgi.fix-pathinfo
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const CGI_FIX_PATHINFO = 'cgi.fix_pathinfo';

    /**
     * cgi.force_redirect
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: PHP_INI_ALL in PHP <= 5.2.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.cgi.force-redirect
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const CGI_FORCE_REDIRECT = 'cgi.force_redirect';

    /**
     * cgi.nph
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.cgi.nph
     */
    const CGI_NPH = 'cgi.nph';

    /**
     * cgi.redirect_status_env
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: PHP_INI_ALL in PHP <= 5.2.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.cgi.redirect-status-env
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const CGI_REDIRECT_STATUS_ENV = 'cgi.redirect_status_env';

    /**
     * cgi.rfc2616_headers
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.cgi.rfc2616-headers
     */
    const CGI_RFC2616_HEADERS = 'cgi.rfc2616_headers';

    /**
     * child_terminate
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/apache.configuration.php#ini.child-terminate
     */
    const CHILD_TERMINATE = 'child_terminate';

    /**
     * cli.pager
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see https://www.php.net/manual/en/readline.configuration.php#ini.cli.pager
     */
    const CLI_PAGER = 'cli.pager';

    /**
     * cli.prompt
     *
     * - Default: "\\b \\> "
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see https://www.php.net/manual/en/readline.configuration.php#ini.cli.prompt
     */
    const CLI_PROMPT = 'cli.prompt';

    /**
     * cli_server.color
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see https://www.php.net/manual/en/features.commandline.ini.php#ini.cli-server.color
     */
    const CLI_SERVER_COLOR = 'cli_server.color';

    /**
     * coin_acceptor.autoreset
     *
     * - Default: "On"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in coin_acceptor 0.2.
     */
    const COIN_ACCEPTOR_AUTORESET = 'coin_acceptor.autoreset';

    /**
     * coin_acceptor.auto_initialize
     *
     * - Default: "Off"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since coin_acceptor 0.2.
     */
    const COIN_ACCEPTOR_AUTO_INITIALIZE = 'coin_acceptor.auto_initialize';

    /**
     * coin_acceptor.auto_reset
     *
     * - Default: "On"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since coin_acceptor 0.2.
     */
    const COIN_ACCEPTOR_AUTO_RESET = 'coin_acceptor.auto_reset';

    /**
     * coin_acceptor.command_function
     *
     * - Default: "Off"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since coin_acceptor 0.3.
     */
    const COIN_ACCEPTOR_COMMAND_FUNCTION = 'coin_acceptor.command_function';

    /**
     * coin_acceptor.delay
     *
     * - Default: "53132"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in coin_acceptor 0.2.
     */
    const COIN_ACCEPTOR_DELAY = 'coin_acceptor.delay';

    /**
     * coin_acceptor.delay_coins
     *
     * - Default: "53132"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since coin_acceptor 0.2.
     */
    const COIN_ACCEPTOR_DELAY_COINS = 'coin_acceptor.delay_coins';

    /**
     * coin_acceptor.delay_prom
     *
     * - Default: "55748"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since coin_acceptor 0.2.
     */
    const COIN_ACCEPTOR_DELAY_PROM = 'coin_acceptor.delay_prom';

    /**
     * coin_acceptor.device
     *
     * - Default: "/dev/ttyS1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in coin_acceptor 0.2.
     */
    const COIN_ACCEPTOR_DEVICE = 'coin_acceptor.device';

    /**
     * coin_acceptor.lock_on_close
     *
     * - Default: "Off"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since coin_acceptor 0.2.
     */
    const COIN_ACCEPTOR_LOCK_ON_CLOSE = 'coin_acceptor.lock_on_close';

    /**
     * coin_acceptor.start_unlocked
     *
     * - Default: "On"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since coin_acceptor 0.2.
     */
    const COIN_ACCEPTOR_START_UNLOCKED = 'coin_acceptor.start_unlocked';

    /**
     * com.allow_dcom
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/com.configuration.php#ini.com.allow-dcom
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const COM_ALLOW_DCOM = 'com.allow_dcom';

    /**
     * com.autoregister_casesensitive
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/com.configuration.php#ini.com.autoregister-casesensitive
     */
    const COM_AUTOREGISTER_CASESENSITIVE = 'com.autoregister_casesensitive';

    /**
     * com.autoregister_typelib
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/com.configuration.php#ini.com.autoregister-typelib
     */
    const COM_AUTOREGISTER_TYPELIB = 'com.autoregister_typelib';

    /**
     * com.autoregister_verbose
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/com.configuration.php#ini.com.autoregister-verbose
     */
    const COM_AUTOREGISTER_VERBOSE = 'com.autoregister_verbose';

    /**
     * com.code_page
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/com.configuration.php#ini.com.code-page
     */
    const COM_CODE_PAGE = 'com.code_page';

    /**
     * com.typelib_file
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/com.configuration.php#ini.com.typelib-file
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const COM_TYPELIB_FILE = 'com.typelib_file';

    /**
     * curl.cainfo
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.3.7.
     *
     * @see        https://www.php.net/manual/en/curl.configuration.php#ini.curl.cainfo
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const CURL_CAINFO = 'curl.cainfo';

    /**
     * daffodildb.default_host
     *
     * - Default: "localhost"
     * - Changeable: PHP_INI_ALL
     */
    const DAFFODILDB_DEFAULT_HOST = 'daffodildb.default_host';

    /**
     * daffodildb.default_password
     *
     * - Default: "daffodil"
     * - Changeable: PHP_INI_ALL
     */
    const DAFFODILDB_DEFAULT_PASSWORD = 'daffodildb.default_password';

    /**
     * daffodildb.default_socket
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     */
    const DAFFODILDB_DEFAULT_SOCKET = 'daffodildb.default_socket';

    /**
     * daffodildb.default_user
     *
     * - Default: "DAFFODIL"
     * - Changeable: PHP_INI_ALL
     */
    const DAFFODILDB_DEFAULT_USER = 'daffodildb.default_user';

    /**
     * daffodildb.port
     *
     * - Default: "3456"
     * - Changeable: PHP_INI_ALL
     */
    const DAFFODILDB_PORT = 'daffodildb.port';

    /**
     * date.default_latitude
     *
     * - Default: "31.7667"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/datetime.configuration.php#ini.date.default-latitude
     */
    const DATE_DEFAULT_LATITUDE = 'date.default_latitude';

    /**
     * date.default_longitude
     *
     * - Default: "35.2333"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/datetime.configuration.php#ini.date.default-longitude
     */
    const DATE_DEFAULT_LONGITUDE = 'date.default_longitude';

    /**
     * date.sunrise_zenith
     *
     * - Default: "90.583333"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/datetime.configuration.php#ini.date.sunrise-zenith
     */
    const DATE_SUNRISE_ZENITH = 'date.sunrise_zenith';

    /**
     * date.sunset_zenith
     *
     * - Default: "90.583333"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/datetime.configuration.php#ini.date.sunset-zenith
     */
    const DATE_SUNSET_ZENITH = 'date.sunset_zenith';

    /**
     * date.timezone
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.1.0.
     *
     * @see https://www.php.net/manual/en/datetime.configuration.php#ini.date.timezone
     */
    const DATE_TIMEZONE = 'date.timezone';

    /**
     * dba.default_handler
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     */
    const DBA_DEFAULT_HANDLER = 'dba.default_handler';

    /**
     * dbx.colnames_case
     *
     * - Default: "unchanged"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 5.1.0.
     *
     * @see        https://www.php.net/manual/en/dbx.configuration.php#ini.dbx.colnames-case
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const DBX_COLNAMES_CASE = 'dbx.colnames_case';

    /**
     * default_charset
     *
     * - Default: "UTF-8"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Default to "UTF-8" since PHP >= 5.6.0, empty for PHP < 5.6.0.
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.default-charset
     */
    const DEFAULT_CHARSET = 'default_charset';

    /**
     * default_mimetype
     *
     * - Default: "text/html"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.default-mimetype
     */
    const DEFAULT_MIMETYPE = 'default_mimetype';

    /**
     * default_socket_timeout
     *
     * - Default: "60"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/filesystem.configuration.php#ini.default-socket-timeout
     */
    const DEFAULT_SOCKET_TIMEOUT = 'default_socket_timeout';

    /**
     * define_syslog_variables
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.4.0.
     *
     * @see https://www.php.net/manual/en/network.configuration.php#ini.define-syslog-variables
     */
    const DEFINE_SYSLOG_VARIABLES = 'define_syslog_variables';

    /**
     * detect_unicode
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.1.0. Renamed to  since PHP 5.4.0.
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.zend.detect-unicode
     */
    const DETECT_UNICODE = 'detect_unicode';

    /**
     * disable_classes
     *
     * - Default: ""
     * - Changeable:  only
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.disable-classes
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const DISABLE_CLASSES = 'disable_classes';

    /**
     * disable_functions
     *
     * - Default: ""
     * - Changeable:  only
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.disable-functions
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const DISABLE_FUNCTIONS = 'disable_functions';

    /**
     * display_errors
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.display-errors
     */
    const DISPLAY_ERRORS = 'display_errors';

    /**
     * display_startup_errors
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.display-startup-errors
     */
    const DISPLAY_STARTUP_ERRORS = 'display_startup_errors';

    /**
     * docref_ext
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.docref-ext
     */
    const DOCREF_EXT = 'docref_ext';

    /**
     * docref_root
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.docref-root
     */
    const DOCREF_ROOT = 'docref_root';

    /**
     * doc_root
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.doc-root
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const DOC_ROOT = 'doc_root';

    /**
     * enable_dl
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: This deprecated feature
     * certainly be  in the future.
     *
     * @see        https://www.php.net/manual/en/info.configuration.php#ini.enable-dl
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ENABLE_DL = 'enable_dl';

    /**
     * enable_post_data_reading
     *
     * - Default: On
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.enable-post-data-reading
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ENABLE_POST_DATA_READING = 'enable_post_data_reading';

    /**
     * engine
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/apache.configuration.php#ini.engine
     */
    const ENGINE = 'engine';

    /**
     * error_append_string
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.error-append-string
     */
    const ERROR_APPEND_STRING = 'error_append_string';

    /**
     * error_log
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.error-log
     */
    const ERROR_LOG = 'error_log';

    /**
     * error_prepend_string
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.error-prepend-string
     */
    const ERROR_PREPEND_STRING = 'error_prepend_string';

    /**
     * error_reporting
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.error-reporting
     */
    const ERROR_REPORTING = 'error_reporting';

    /**
     * exif.decode_jis_intel
     *
     * - Default: "JIS"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/exif.configuration.php#ini.exif.decode-jis-intel
     */
    const EXIF_DECODE_JIS_INTEL = 'exif.decode_jis_intel';

    /**
     * exif.decode_jis_motorola
     *
     * - Default: "JIS"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/exif.configuration.php#ini.exif.decode-jis-motorola
     */
    const EXIF_DECODE_JIS_MOTOROLA = 'exif.decode_jis_motorola';

    /**
     * exif.decode_unicode_intel
     *
     * - Default: "UCS-2LE"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/exif.configuration.php#ini.exif.decode-unicode-intel
     */
    const EXIF_DECODE_UNICODE_INTEL = 'exif.decode_unicode_intel';

    /**
     * exif.decode_unicode_motorola
     *
     * - Default: "UCS-2BE"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/exif.configuration.php#ini.exif.decode-unicode-motorola
     */
    const EXIF_DECODE_UNICODE_MOTOROLA = 'exif.decode_unicode_motorola';

    /**
     * exif.encode_jis
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/exif.configuration.php#ini.exif.encode-jis
     */
    const EXIF_ENCODE_JIS = 'exif.encode_jis';

    /**
     * exif.encode_unicode
     *
     * - Default: "ISO-8859-15"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/exif.configuration.php#ini.exif.encode-unicode
     */
    const EXIF_ENCODE_UNICODE = 'exif.encode_unicode';

    /**
     * exit_on_timeout
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.3.0
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.exit-on-timeout
     */
    const EXIT_ON_TIMEOUT = 'exit_on_timeout';

    /**
     * expect.logfile
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/expect.configuration.php#ini.expect.logfile
     */
    const EXPECT_LOGFILE = 'expect.logfile';

    /**
     * expect.loguser
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/expect.configuration.php#ini.expect.loguser
     */
    const EXPECT_LOGUSER = 'expect.loguser';

    /**
     * expect.timeout
     *
     * - Default: "10"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/expect.configuration.php#ini.expect.timeout
     */
    const EXPECT_TIMEOUT = 'expect.timeout';

    /**
     * expose_php
     *
     * - Default: "1"
     * - Changeable:  only
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.expose-php
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const EXPOSE_PHP = 'expose_php';

    /**
     * extension
     *
     * - Default: NULL
     * - Changeable:  only
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.extension
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const EXTENSION = 'extension';

    /**
     * extension_dir
     *
     * - Default: "/path/to/php"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.extension-dir
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const EXTENSION_DIR = 'extension_dir';

    /**
     * fastcgi.impersonate
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: PHP_INI_ALL in PHP <= 5.2.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.fastcgi.impersonate
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FASTCGI_IMPERSONATE = 'fastcgi.impersonate';

    /**
     * fastcgi.logging
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: PHP_INI_ALL in PHP <= 5.2.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.fastcgi.logging
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FASTCGI_LOGGING = 'fastcgi.logging';

    /**
     * fbsql.allow_persistent
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FBSQL_ALLOW_PERSISTENT = 'fbsql.allow_persistent';

    /**
     * fbsql.autocommit
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FBSQL_AUTOCOMMIT = 'fbsql.autocommit';

    /**
     * fbsql.batchSize
     *
     * - Default: "1000"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 5.1.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FBSQL_BATCHSIZE_LEGACY = 'fbsql.batchSize';

    /**
     * fbsql.batchsize
     *
     * - Default: "1000"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.1.0.
     */
    const FBSQL_BATCHSIZE = 'fbsql.batchsize';

    /**
     * fbsql.default_database
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FBSQL_DEFAULT_DATABASE = 'fbsql.default_database';

    /**
     * fbsql.default_database_password
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FBSQL_DEFAULT_DATABASE_PASSWORD = 'fbsql.default_database_password';

    /**
     * fbsql.default_host
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FBSQL_DEFAULT_HOST = 'fbsql.default_host';

    /**
     * fbsql.default_password
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FBSQL_DEFAULT_PASSWORD = 'fbsql.default_password';

    /**
     * fbsql.default_user
     *
     * - Default: "_SYSTEM"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FBSQL_DEFAULT_USER = 'fbsql.default_user';

    /**
     * fbsql.generate_warnings
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FBSQL_GENERATE_WARNINGS = 'fbsql.generate_warnings';

    /**
     * fbsql.max_connections
     *
     * - Default: "128"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FBSQL_MAX_CONNECTIONS = 'fbsql.max_connections';

    /**
     * fbsql.max_links
     *
     * - Default: "128"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FBSQL_MAX_LINKS = 'fbsql.max_links';

    /**
     * fbsql.max_persistent
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FBSQL_MAX_PERSISTENT = 'fbsql.max_persistent';

    /**
     * fbsql.max_results
     *
     * - Default: "128"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FBSQL_MAX_RESULTS = 'fbsql.max_results';

    /**
     * fbsql.show_timestamp_decimals
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.1.5.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FBSQL_SHOW_TIMESTAMP_DECIMALS = 'fbsql.show_timestamp_decimals';

    /**
     * file_uploads
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.file-uploads
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FILE_UPLOADS = 'file_uploads';

    /**
     * filter.default
     *
     * - Default: "unsafe_raw"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: PHP_INI_ALL in filter <= 0.9.4. Available since PHP 5.2.0.
     *
     * @see        https://www.php.net/manual/en/filter.configuration.php#ini.filter.default
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FILTER_DEFAULT = 'filter.default';

    /**
     * filter.default_flags
     *
     * - Default: NULL
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: PHP_INI_ALL in filter <= 0.9.4. Available since PHP 5.2.0.
     *
     * @see        https://www.php.net/manual/en/filter.configuration.php#ini.filter.default-flags
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const FILTER_DEFAULT_FLAGS = 'filter.default_flags';

    /**
     * from
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/filesystem.configuration.php#ini.from
     */
    const FROM = 'from';

    /**
     * gd.jpeg_ignore_warning
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.1.3.
     *
     * @see https://www.php.net/manual/en/image.configuration.php#ini.gd.jpeg-ignore-warning
     */
    const GD_JPEG_IGNORE_WARNING = 'gd.jpeg_ignore_warning';

    /**
     * geoip.custom_directory
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since geoip 1.0.1.
     */
    const GEOIP_CUSTOM_DIRECTORY = 'geoip.custom_directory';

    /**
     * geoip.database_standard
     *
     * - Default: "GeoIP.dat"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in geoip 1.0.1.
     */
    const GEOIP_DATABASE_STANDARD = 'geoip.database_standard';

    /**
     * hard_timeout
     *
     * - Default: "2"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 7.1.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HARD_TIMEOUT = 'hard_timeout';

    /**
     * hidef.ini_path
     *
     * - Default: (char*)default_ini_path
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HIDEF_INI_PATH = 'hidef.ini_path';

    /**
     * highlight.bg
     *
     * - Default: "#FFFFFF"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.4.0.
     *
     * @see https://www.php.net/manual/en/misc.configuration.php#ini.syntax-highlighting
     */
    const HIGHLIGHT_BG = 'highlight.bg';

    /**
     * highlight.comment
     *
     * - Default: "#FF8000"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/misc.configuration.php#ini.syntax-highlighting
     */
    const HIGHLIGHT_COMMENT = 'highlight.comment';

    /**
     * highlight.default
     *
     * - Default: "#0000BB"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/misc.configuration.php#ini.syntax-highlighting
     */
    const HIGHLIGHT_DEFAULT = 'highlight.default';

    /**
     * highlight.html
     *
     * - Default: "#000000"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/misc.configuration.php#ini.syntax-highlighting
     */
    const HIGHLIGHT_HTML = 'highlight.html';

    /**
     * highlight.keyword
     *
     * - Default: "#007700"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/misc.configuration.php#ini.syntax-highlighting
     */
    const HIGHLIGHT_KEYWORD = 'highlight.keyword';

    /**
     * highlight.string
     *
     * - Default: "#DD0000"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/misc.configuration.php#ini.syntax-highlighting
     */
    const HIGHLIGHT_STRING = 'highlight.string';

    /**
     * html_errors
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.html-errors
     */
    const HTML_ERRORS = 'html_errors';

    /**
     * htscanner.config_file
     *
     * - Default: ".htaccess"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/htscanner.configuration.php#ini.htscanner.config-file
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HTSCANNER_CONFIG_FILE = 'htscanner.config_file';

    /**
     * htscanner.default_docroot
     *
     * - Default: "/"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/htscanner.configuration.php#ini.htscanner.default-docroot
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HTSCANNER_DEFAULT_DOCROOT = 'htscanner.default_docroot';

    /**
     * htscanner.default_ttl
     *
     * - Default: "300"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since htscanner 0.6.0.
     *
     * @see        https://www.php.net/manual/en/htscanner.configuration.php#ini.htscanner.default-ttl
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HTSCANNER_DEFAULT_TTL = 'htscanner.default_ttl';

    /**
     * htscanner.stop_on_error
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since htscanner 0.7.0.
     *
     * @see        https://www.php.net/manual/en/htscanner.configuration.php#ini.htscanner.stop-on-error
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HTSCANNER_STOP_ON_ERROR = 'htscanner.stop_on_error';

    /**
     * http.allowed_methods
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 0.4.0. Removed in pecl_http 1.0.0.
     */
    const HTTP_ALLOWED_METHODS = 'http.allowed_methods';

    /**
     * http.allowed_methods_log
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 0.12.0. Removed in pecl_http 1.0.0.
     */
    const HTTP_ALLOWED_METHODS_LOG = 'http.allowed_methods_log';

    /**
     * http.cache_log
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 0.8.0. Removed in pecl_http 1.0.0.
     */
    const HTTP_CACHE_LOG = 'http.cache_log';

    /**
     * http.composite_log
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 0.12.0. Removed in pecl_http 1.0.0.
     */
    const HTTP_COMPOSITE_LOG = 'http.composite_log';

    /**
     * http.etag.mode
     *
     * - Default: "MD5"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 1.0.0.
     */
    const HTTP_ETAG_MODE = 'http.etag.mode';

    /**
     * http.etag_mode
     *
     * - Default: "MD5"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 0.12.0. Removed in pecl_http 1.0.0.
     */
    const HTTP_ETAG_MODE_LEGACY = 'http.etag_mode';

    /**
     * http.force_exit
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 0.18.0.
     */
    const HTTP_FORCE_EXIT = 'http.force_exit';

    /**
     * http.log.allowed_methods
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 1.0.0.
     */
    const HTTP_LOG_ALLOWED_METHODS = 'http.log.allowed_methods';

    /**
     * http.log.cache
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 1.0.0.
     */
    const HTTP_LOG_CACHE = 'http.log.cache';

    /**
     * http.log.composite
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 1.0.0.
     */
    const HTTP_LOG_COMPOSITE = 'http.log.composite';

    /**
     * http.log.not_found
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 1.0.0.
     */
    const HTTP_LOG_NOT_FOUND = 'http.log.not_found';

    /**
     * http.log.redirect
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 1.0.0.
     */
    const HTTP_LOG_REDIRECT = 'http.log.redirect';

    /**
     * http.ob_deflate_auto
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since pecl_http 0.21.0. Removed in pecl_http 1.0.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HTTP_OB_DEFLATE_AUTO = 'http.ob_deflate_auto';

    /**
     * http.ob_deflate_flags
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 0.21.0. Removed in pecl_http 1.0.0.
     */
    const HTTP_OB_DEFLATE_FLAGS = 'http.ob_deflate_flags';

    /**
     * http.ob_inflate_auto
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since pecl_http 0.21.0. Removed in pecl_http 1.0.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HTTP_OB_INFLATE_AUTO = 'http.ob_inflate_auto';

    /**
     * http.ob_inflate_flags
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 0.21.0. Removed in pecl_http 1.0.0.
     */
    const HTTP_OB_INFLATE_FLAGS = 'http.ob_inflate_flags';

    /**
     * http.only_exceptions
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 0.11.0.
     */
    const HTTP_ONLY_EXCEPTIONS = 'http.only_exceptions';

    /**
     * http.persistent.handles.ident
     *
     * - Default: "GLOBAL"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 1.5.0.
     */
    const HTTP_PERSISTENT_HANDLES_IDENT = 'http.persistent.handles.ident';

    /**
     * http.persistent.handles.limit
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since pecl_http 1.5.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HTTP_PERSISTENT_HANDLES_LIMIT = 'http.persistent.handles.limit';

    /**
     * http.redirect_log
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 0.12.0. Removed in pecl_http 1.0.0.
     */
    const HTTP_REDIRECT_LOG = 'http.redirect_log';

    /**
     * http.request.datashare.connect
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since pecl_http 1.3.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HTTP_REQUEST_DATASHARE_CONNECT = 'http.request.datashare.connect';

    /**
     * http.request.datashare.cookie
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since pecl_http 1.3.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HTTP_REQUEST_DATASHARE_COOKIE = 'http.request.datashare.cookie';

    /**
     * http.request.datashare.dns
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since pecl_http 1.3.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HTTP_REQUEST_DATASHARE_DNS = 'http.request.datashare.dns';

    /**
     * http.request.datashare.ssl
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since pecl_http 1.3.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HTTP_REQUEST_DATASHARE_SSL = 'http.request.datashare.ssl';

    /**
     * http.request.methods.allowed
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 1.0.0.
     */
    const HTTP_REQUEST_METHODS_ALLOWED = 'http.request.methods.allowed';

    /**
     * http.request.methods.custom
     *
     * - Default: ""
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since pecl_http 1.0.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HTTP_REQUEST_METHODS_CUSTOM = 'http.request.methods.custom';

    /**
     * http.send.deflate.start_auto
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since pecl_http 1.0.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HTTP_SEND_DEFLATE_START_AUTO = 'http.send.deflate.start_auto';

    /**
     * http.send.deflate.start_flags
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 1.0.0.
     */
    const HTTP_SEND_DEFLATE_START_FLAGS = 'http.send.deflate.start_flags';

    /**
     * http.send.inflate.start_auto
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since pecl_http 1.0.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const HTTP_SEND_INFLATE_START_AUTO = 'http.send.inflate.start_auto';

    /**
     * http.send.inflate.start_flags
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 1.0.0.
     */
    const HTTP_SEND_INFLATE_START_FLAGS = 'http.send.inflate.start_flags';

    /**
     * http.send.not_found_404
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since pecl_http 1.0.0.
     */
    const HTTP_SEND_NOT_FOUND_404 = 'http.send.not_found_404';

    /**
     * ibase.allow_persistent
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/ibase.configuration.php#ini.ibase.allow-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IBASE_ALLOW_PERSISTENT = 'ibase.allow_persistent';

    /**
     * ibase.dateformat
     *
     * - Default: "%Y-%m-%d"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/ibase.configuration.php#ini.ibase.dateformat
     */
    const IBASE_DATEFORMAT = 'ibase.dateformat';

    /**
     * ibase.default_charset
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/ibase.configuration.php#ini.ibase.default-charset
     */
    const IBASE_DEFAULT_CHARSET = 'ibase.default_charset';

    /**
     * ibase.default_db
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/ibase.configuration.php#ini.ibase.default-db
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IBASE_DEFAULT_DB = 'ibase.default_db';

    /**
     * ibase.default_password
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/ibase.configuration.php#ini.ibase.default-password
     */
    const IBASE_DEFAULT_PASSWORD = 'ibase.default_password';

    /**
     * ibase.default_user
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/ibase.configuration.php#ini.ibase.default-user
     */
    const IBASE_DEFAULT_USER = 'ibase.default_user';

    /**
     * ibase.max_links
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/ibase.configuration.php#ini.ibase.max-links
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IBASE_MAX_LINKS = 'ibase.max_links';

    /**
     * ibase.max_persistent
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/ibase.configuration.php#ini.ibase.max-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IBASE_MAX_PERSISTENT = 'ibase.max_persistent';

    /**
     * ibase.timeformat
     *
     * - Default: "%H:%M:%S"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/ibase.configuration.php#ini.ibase.timeformat
     */
    const IBASE_TIMEFORMAT = 'ibase.timeformat';

    /**
     * ibase.timestampformat
     *
     * - Default: "%Y-%m-%d %H:%M:%S"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/ibase.configuration.php#ini.ibase.timestampformat
     */
    const IBASE_TIMESTAMPFORMAT = 'ibase.timestampformat';

    /**
     * ibm_db2.binmode
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/ibm-db2.configuration.php#ini.ibm-db2.binmode
     */
    const IBM_DB2_BINMODE = 'ibm_db2.binmode';

    /**
     * ibm_db2.i5_all_pconnect
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since ibm_db2 1.6.5.
     *
     * @see        https://www.php.net/manual/en/ibm-db2.configuration.php#ini.ibm-db2.i5-all-pconnect
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IBM_DB2_I5_ALL_PCONNECT = 'ibm_db2.i5_all_pconnect';

    /**
     * ibm_db2.i5_allow_commit
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since ibm_db2 1.4.9.
     *
     * @see        https://www.php.net/manual/en/ibm-db2.configuration.php#ini.ibm-db2.i5-allow-commit
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IBM_DB2_I5_ALLOW_COMMIT = 'ibm_db2.i5_allow_commit';

    /**
     * ibm_db2.i5_dbcs_alloc
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since ibm_db2 1.5.0.
     *
     * @see        https://www.php.net/manual/en/ibm-db2.configuration.php#ini.ibm-db2.i5-dbcs-alloc
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IBM_DB2_I5_DBCS_ALLOC = 'ibm_db2.i5_dbcs_alloc';

    /**
     * ibm_db2.instance_name
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since ibm_db2 1.0.2.
     *
     * @see        https://www.php.net/manual/en/ibm-db2.configuration.php#ini.ibm-db2.instance-name
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IBM_DB2_INSTANCE_NAME = 'ibm_db2.instance_name';

    /**
     * ibm_db2.i5_ignore_userid
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since ibm_db2 1.8.0.
     *
     * @see        https://www.php.net/manual/en/ibm-db2.configuration.php#ini.ibm-db2.i5-ignore-userid
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IBM_DB2_I5_IGNORE_USERID = 'ibm_db2.i5_ignore_userid';

    /**
     * iconv.input_encoding
     *
     * - Default: "ISO-8859-1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/iconv.configuration.php#ini.iconv.input-encoding
     */
    const ICONV_INPUT_ENCODING = 'iconv.input_encoding';

    /**
     * iconv.internal_encoding
     *
     * - Default: "ISO-8859-1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/iconv.configuration.php#ini.iconv.internal-encoding
     */
    const ICONV_INTERNAL_ENCODING = 'iconv.internal_encoding';

    /**
     * iconv.output_encoding
     *
     * - Default: "ISO-8859-1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/iconv.configuration.php#ini.iconv.output-encoding
     */
    const ICONV_OUTPUT_ENCODING = 'iconv.output_encoding';

    /**
     * ifx.allow_persistent
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 5.2.1.
     *
     * @see        https://www.php.net/manual/en/ifx.configuration.php#ini.ifx.allow-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IFX_ALLOW_PERSISTENT = 'ifx.allow_persistent';

    /**
     * ifx.blobinfile
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.2.1.
     *
     * @see https://www.php.net/manual/en/ifx.configuration.php#ini.ifx.blobinfile
     */
    const IFX_BLOBINFILE = 'ifx.blobinfile';

    /**
     * ifx.byteasvarchar
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.2.1.
     *
     * @see https://www.php.net/manual/en/ifx.configuration.php#ini.ifx.byteasvarchar
     */
    const IFX_BYTEASVARCHAR = 'ifx.byteasvarchar';

    /**
     * ifx.charasvarchar
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.2.1.
     *
     * @see https://www.php.net/manual/en/ifx.configuration.php#ini.ifx.charasvarchar
     */
    const IFX_CHARASVARCHAR = 'ifx.charasvarchar';

    /**
     * ifx.default_host
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 5.2.1.
     *
     * @see        https://www.php.net/manual/en/ifx.configuration.php#ini.ifx.default-host
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IFX_DEFAULT_HOST = 'ifx.default_host';

    /**
     * ifx.default_password
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 5.2.1.
     *
     * @see        https://www.php.net/manual/en/ifx.configuration.php#ini.ifx.default-password
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IFX_DEFAULT_PASSWORD = 'ifx.default_password';

    /**
     * ifx.default_user
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 5.2.1.
     *
     * @see        https://www.php.net/manual/en/ifx.configuration.php#ini.ifx.default-user
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IFX_DEFAULT_USER = 'ifx.default_user';

    /**
     * ifx.max_links
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 5.2.1.
     *
     * @see        https://www.php.net/manual/en/ifx.configuration.php#ini.ifx.max-links
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IFX_MAX_LINKS = 'ifx.max_links';

    /**
     * ifx.max_persistent
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 5.2.1.
     *
     * @see        https://www.php.net/manual/en/ifx.configuration.php#ini.ifx.max-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const IFX_MAX_PERSISTENT = 'ifx.max_persistent';

    /**
     * ifx.nullformat
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.2.1.
     *
     * @see https://www.php.net/manual/en/ifx.configuration.php#ini.ifx.nullformat
     */
    const IFX_NULLFORMAT = 'ifx.nullformat';

    /**
     * ifx.textasvarchar
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.2.1.
     *
     * @see https://www.php.net/manual/en/ifx.configuration.php#ini.ifx.textasvarchar
     */
    const IFX_TEXTASVARCHAR = 'ifx.textasvarchar';

    /**
     * ignore_repeated_errors
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.ignore-repeated-errors
     */
    const IGNORE_REPEATED_ERRORS = 'ignore_repeated_errors';

    /**
     * ignore_repeated_source
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.ignore-repeated-source
     */
    const IGNORE_REPEATED_SOURCE = 'ignore_repeated_source';

    /**
     * ignore_user_abort
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/misc.configuration.php#ini.ignore-user-abort
     */
    const IGNORE_USER_ABORT = 'ignore_user_abort';

    /**
     * imlib2.font_cache_max_size
     *
     * - Default: "524288"
     * - Changeable: PHP_INI_ALL
     */
    const IMLIB2_FONT_CACHE_MAX_SIZE = 'imlib2.font_cache_max_size';

    /**
     * imlib2.font_path
     *
     * - Default: "/usr/share/php/fonts/"
     * - Changeable: PHP_INI_ALL
     */
    const IMLIB2_FONT_PATH = 'imlib2.font_path';

    /**
     * implicit_flush
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/outcontrol.configuration.php#ini.implicit-flush
     */
    const IMPLICIT_FLUSH = 'implicit_flush';

    /**
     * include_path
     *
     * - Default: ".;/path/to/php/pear"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.include-path
     */
    const INCLUDE_PATH = 'include_path';

    /**
     * intl.default_locale
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.3.0.
     *
     * @see https://www.php.net/manual/en/intl.configuration.php#ini.intl.default-locale
     */
    const INTL_DEFAULT_LOCALE = 'intl.default_locale';

    /**
     * intl.error_level
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.3.0.
     */
    const INTL_ERROR_LEVEL = 'intl.error_level';

    /**
     * intl.use_exceptions
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.5.0.
     */
    const INTL_USE_EXCEPTIONS = 'intl.use_exceptions';

    /**
     * ingres.allow_persistent
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since ingres 1.0.0
     *
     * @see        https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.allow-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const INGRES_ALLOW_PERSISTENT = 'ingres.allow_persistent';

    /**
     * ingres.array_index_start
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since ingres 1.4.0.
     *
     * @see https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.array-index-start
     */
    const INGRES_ARRAY_INDEX_START = 'ingres.array_index_start';

    /**
     * ingres.auto
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since ingres 2.0.0.
     *
     * @see https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.auto
     */
    const INGRES_AUTO = 'ingres.auto';

    /**
     * ingres.blob_segment_length
     *
     * - Default: "4096"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since ingres 1.2.0.
     *
     * @see https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.blob-segment-length
     */
    const INGRES_BLOB_SEGMENT_LENGTH = 'ingres.blob_segment_length';

    /**
     * ingres.cursor_mode
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since ingres 1.1.0.
     *
     * @see https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.cursor-mode
     */
    const INGRES_CURSOR_MODE = 'ingres.cursor_mode';

    /**
     * ingres.default_database
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since ingres 1.0.0
     *
     * @see https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.default-database
     */
    const INGRES_DEFAULT_DATABASE = 'ingres.default_database';

    /**
     * ingres.default_password
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since ingres 1.0.0
     *
     * @see https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.default-password
     */
    const INGRES_DEFAULT_PASSWORD = 'ingres.default_password';

    /**
     * ingres.default_user
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since ingres 1.0.0
     *
     * @see https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.default-user
     */
    const INGRES_DEFAULT_USER = 'ingres.default_user';

    /**
     * ingres.describe
     *
     * - Default: 1
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since ingres 2.1.0
     *
     * @see https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.describe
     */
    const INGRES_DESCRIBE = 'ingres.describe';

    /**
     * ingres.fetch_buffer_size
     *
     * - Default: 100
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since ingres 2.1.0
     *
     * @see https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.fetch-buffer-size
     */
    const INGRES_FETCH_BUFFER_SIZE = 'ingres.fetch_buffer_size';

    /**
     * ingres.max_links
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since ingres 1.0.0
     *
     * @see        https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.max-links
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const INGRES_MAX_LINKS = 'ingres.max_links';

    /**
     * ingres.max_persistent
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since ingres 1.0.0
     *
     * @see        https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.max-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const INGRES_MAX_PERSISTENT = 'ingres.max_persistent';

    /**
     * ingres.reuse_connection
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since ingres 2.0.0
     *
     * @see https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.reuse-connection
     */
    const INGRES_REUSE_CONNECTION = 'ingres.reuse_connection';

    /**
     * ingres.scrollable
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since ingres 2.0.0.
     *
     * @see https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.scrollable
     */
    const INGRES_SCROLLABLE = 'ingres.scrollable';

    /**
     * ingres.trace
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since ingres 2.0.0.
     *
     * @see https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.trace
     */
    const INGRES_TRACE = 'ingres.trace';

    /**
     * ingres.trace_connect
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since ingres 1.2.1.
     *
     * @see https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.trace-connect
     */
    const INGRES_TRACE_CONNECT = 'ingres.trace_connect';

    /**
     * ingres.utf8
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since ingres 2.0.0.
     *
     * @see https://www.php.net/manual/en/ingres.configuration.php#ini.ingres.utf8
     */
    const INGRES_UTF8 = 'ingres.utf8';

    /**
     * last_modified
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/apache.configuration.php#ini.last-modified
     */
    const LAST_MODIFIED = 'last_modified';

    /**
     * ldap.max_links
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/ldap.configuration.php#ini.ldap.max_links
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const LDAP_MAX_LINKS = 'ldap.max_links';

    /**
     * log_errors
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.log-errors
     */
    const LOG_ERRORS = 'log_errors';

    /**
     * log_errors_max_len
     *
     * - Default: "1024"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.log-errors-max-len
     */
    const LOG_ERRORS_MAX_LEN = 'log_errors_max_len';

    /**
     * magic_quotes_gpc
     *
     * - Default: "1"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Deprecated in PHP 5.3.0. Removed in PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/info.configuration.php#ini.magic-quotes-gpc
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MAGIC_QUOTES_GPC = 'magic_quotes_gpc';

    /**
     * magic_quotes_runtime
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.4.0.
     *
     * @see https://www.php.net/manual/en/info.configuration.php#ini.magic-quotes-runtime
     */
    const MAGIC_QUOTES_RUNTIME = 'magic_quotes_runtime';

    /**
     * magic_quotes_sybase
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.4.0.
     *
     * @see https://www.php.net/manual/en/sybase.configuration.php#ini.magic-quotes-sybase
     */
    const MAGIC_QUOTES_SYBASE = 'magic_quotes_sybase';

    /**
     * mail.add_x_header
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since PHP 5.3.0.
     *
     * @see        https://www.php.net/manual/en/mail.configuration.php#ini.mail.add-x-header
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MAIL_ADD_X_HEADER = 'mail.add_x_header';

    /**
     * mail.force_extra_parameters
     *
     * - Default: NULL
     * - Changeable:  only
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MAIL_FORCE_EXTRA_PARAMETERS = 'mail.force_extra_parameters';

    /**
     * mail.log
     *
     * - Default: ""
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since PHP 5.3.0 (PHP_INI_SYSTEM|PHP_INI_PERDIR)
     *
     * @see        https://www.php.net/manual/en/mail.configuration.php#ini.mail.log
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MAIL_LOG = 'mail.log';

    /**
     * maxdb.default_db
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/maxdb.configuration.php#ini.maxdb.default-db
     */
    const MAXDB_DEFAULT_DB = 'maxdb.default_db';

    /**
     * maxdb.default_host
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/maxdb.configuration.php#ini.maxdb.default-host
     */
    const MAXDB_DEFAULT_HOST = 'maxdb.default_host';

    /**
     * maxdb.default_pw
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/maxdb.configuration.php#ini.maxdb.default-pw
     */
    const MAXDB_DEFAULT_PW = 'maxdb.default_pw';

    /**
     * maxdb.default_user
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/maxdb.configuration.php#ini.maxdb.default-user
     */
    const MAXDB_DEFAULT_USER = 'maxdb.default_user';

    /**
     * maxdb.long_readlen
     *
     * - Default: "200"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/maxdb.configuration.php#ini.maxdb.long-readlen
     */
    const MAXDB_LONG_READLEN = 'maxdb.long_readlen';

    /**
     * max_execution_time
     *
     * - Default: "30"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/info.configuration.php#ini.max-execution-time
     */
    const MAX_EXECUTION_TIME = 'max_execution_time';

    /**
     * max_input_nesting_level
     *
     * - Default: "64"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since PHP 5.2.3.
     *
     * @see        https://www.php.net/manual/en/info.configuration.php#ini.max-input-nesting-level
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MAX_INPUT_NESTING_LEVEL = 'max_input_nesting_level';

    /**
     * max_input_vars
     *
     * - Default: 1000
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since PHP 5.3.9.
     *
     * @see        https://www.php.net/manual/en/info.configuration.php#ini.max-input-vars
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MAX_INPUT_VARS = 'max_input_vars';

    /**
     * max_input_time
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/info.configuration.php#ini.max-input-time
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MAX_INPUT_TIME = 'max_input_time';

    /**
     * mbstring.detect_order
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mbstring.configuration.php#ini.mbstring.detect-order
     */
    const MBSTRING_DETECT_ORDER = 'mbstring.detect_order';

    /**
     * mbstring.encoding_translation
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/mbstring.configuration.php#ini.mbstring.encoding-translation
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MBSTRING_ENCODING_TRANSLATION = 'mbstring.encoding_translation';

    /**
     * mbstring.func_overload
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: PHP_INI_SYSTEM | PHP_INI_PERDIR PHP <= 5.2.6
     *
     * @see        https://www.php.net/manual/en/mbstring.configuration.php#ini.mbstring.func-overload
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MBSTRING_FUNC_OVERLOAD = 'mbstring.func_overload';

    /**
     * mbstring.http_input
     *
     * - Default: "pass"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mbstring.configuration.php#ini.mbstring.http-input
     */
    const MBSTRING_HTTP_INPUT = 'mbstring.http_input';

    /**
     * mbstring.http_output
     *
     * - Default: "pass"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mbstring.configuration.php#ini.mbstring.http-output
     */
    const MBSTRING_HTTP_OUTPUT = 'mbstring.http_output';

    /**
     * mbstring.internal_encoding
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mbstring.configuration.php#ini.mbstring.internal-encoding
     */
    const MBSTRING_INTERNAL_ENCODING = 'mbstring.internal_encoding';

    /**
     * mbstring.language
     *
     * - Default: "neutral"
     * - Changeable: PHP_INI_ALL
     * - Changelog: PHP_INI_PERDIR in PHP <= 5.2.6
     *
     * @see https://www.php.net/manual/en/mbstring.configuration.php#ini.mbstring.language
     */
    const MBSTRING_LANGUAGE = 'mbstring.language';

    /**
     * mbstring.script_encoding
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.4.0. Use  instead.
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.zend.script-encoding
     */
    const MBSTRING_SCRIPT_ENCODING = 'mbstring.script_encoding';

    /**
     * mbstring.http_output_conv_mimetypes
     *
     * - Default: "^(text/|application/xhtml\+xml)"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.3.0.
     *
     * @see https://www.php.net/manual/en/mbstring.configuration.php#ini.mbstring.http-output-conv-mimetypes
     */
    const MBSTRING_HTTP_OUTPUT_CONV_MIMETYPES = 'mbstring.http_output_conv_mimetypes';

    /**
     * mbstring.strict_detection
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.1.2.
     *
     * @see https://www.php.net/manual/en/mbstring.configuration.php#ini.mbstring.strict-detection
     */
    const MBSTRING_STRICT_DETECTION = 'mbstring.strict_detection';

    /**
     * mbstring.substitute_character
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mbstring.configuration.php#ini.mbstring.substitute-character
     */
    const MBSTRING_SUBSTITUTE_CHARACTER = 'mbstring.substitute_character';

    /**
     * mcrypt.algorithms_dir
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mcrypt.configuration.php#ini.mcrypt.algorithms-dir
     */
    const MCRYPT_ALGORITHMS_DIR = 'mcrypt.algorithms_dir';

    /**
     * mcrypt.modes_dir
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mcrypt.configuration.php#ini.mcrypt.modes-dir
     */
    const MCRYPT_MODES_DIR = 'mcrypt.modes_dir';

    /**
     * memcache.allow_failover
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since memcache 2.0.2.
     *
     * @see https://www.php.net/manual/en/memcache.ini.php#ini.memcache.allow-failover
     */
    const MEMCACHE_ALLOW_FAILOVER = 'memcache.allow_failover';

    /**
     * memcache.chunk_size
     *
     * - Default: "8192"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since memcache 2.0.2.
     *
     * @see https://www.php.net/manual/en/memcache.ini.php#ini.memcache.chunk-size
     */
    const MEMCACHE_CHUNK_SIZE = 'memcache.chunk_size';

    /**
     * memcache.default_port
     *
     * - Default: "11211"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since memcache 2.0.2.
     *
     * @see https://www.php.net/manual/en/memcache.ini.php#ini.memcache.default-port
     */
    const MEMCACHE_DEFAULT_PORT = 'memcache.default_port';

    /**
     * memcache.hash_function
     *
     * - Default: "crc32"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since memcache 2.2.0.
     *
     * @see https://www.php.net/manual/en/memcache.ini.php#ini.memcache.hash-function
     */
    const MEMCACHE_HASH_FUNCTION = 'memcache.hash_function';

    /**
     * memcache.hash_strategy
     *
     * - Default: "standard"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since memcache 2.2.0.
     *
     * @see https://www.php.net/manual/en/memcache.ini.php#ini.memcache.hash-strategy
     */
    const MEMCACHE_HASH_STRATEGY = 'memcache.hash_strategy';

    /**
     * memcache.max_failover_attempts
     *
     * - Default: "20"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since memcache 2.1.0.
     *
     * @see https://www.php.net/manual/en/memcache.ini.php#ini.memcache.max-failover-attempts
     */
    const MEMCACHE_MAX_FAILOVER_ATTEMPTS = 'memcache.max_failover_attempts';

    /**
     * memory_limit
     *
     * - Default: "128M"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.memory-limit
     */
    const MEMORY_LIMIT = 'memory_limit';

    /**
     * mime_magic.debug
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mime-magic.configuration.php#ini.mime-magic.debug
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MIME_MAGIC_DEBUG = 'mime_magic.debug';

    /**
     * mime_magic.magicfile
     *
     * - Default: "/path/to/php/magic.mime"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mime-magic.configuration.php#ini.mime-magic.magicfile
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MIME_MAGIC_MAGICFILE = 'mime_magic.magicfile';

    /**
     * mongo.allow_empty_keys
     *
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mongo.configuration.php#ini.mongo.allow-empty-keys
     */
    const MONGO_ALLOW_EMPTY_KEYS = 'mongo.allow_empty_keys';

    /**
     * mongo.allow_persistent
     *
     * - Default: 1
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in 1.2.0
     *
     * @see https://www.php.net/manual/en/mongo.configuration.php#ini.mongo.allow-persistent
     */
    const MONGO_ALLOW_PERSISTENT = 'mongo.allow_persistent';

    /**
     * mongo.chunk_size
     *
     * - Default: 262144
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mongo.configuration.php#ini.mongo.chunk-size
     */
    const MONGO_CHUNK_SIZE = 'mongo.chunk_size';

    /**
     * mongo.cmd
     *
     * - Default: "$"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mongo.configuration.php#ini.mongo.cmd
     */
    const MONGO_CMD = 'mongo.cmd';

    /**
     * mongo.default_host
     *
     * - Default: "localhost"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mongo.configuration.php#ini.mongo.default-host
     */
    const MONGO_DEFAULT_HOST = 'mongo.default_host';

    /**
     * mongo.default_port
     *
     * - Default: 27017
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mongo.configuration.php#ini.mongo.default-port
     */
    const MONGO_DEFAULT_PORT = 'mongo.default_port';

    /**
     * mongo.is_master_interval
     *
     * - Default: 15
     * - Changeable: PHP_INI_ALL
     * - Changelog: Added in 1.2.10, before 1.3.0 the default value was 60.
     *
     * @see https://www.php.net/manual/en/mongo.configuration.php#ini.mongo.is-master-interval
     */
    const MONGO_IS_MASTER_INTERVAL = 'mongo.is_master_interval';

    /**
     * mongo.long_as_object
     *
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mongo.configuration.php#ini.mongo.long-as-object
     */
    const MONGO_LONG_AS_OBJECT = 'mongo.long_as_object';

    /**
     * mongo.native_long
     *
     * - Default: 1
     * - Changeable: PHP_INI_ALL
     * - Changelog: Before 1.5.0, the default value was 0.
     *
     * @see https://www.php.net/manual/en/mongo.configuration.php#ini.mongo.native-long
     */
    const MONGO_NATIVE_LONG = 'mongo.native_long';

    /**
     * mongo.ping_interval
     *
     * - Default: 5
     * - Changeable: PHP_INI_ALL
     * - Changelog: Added in 1.2.10
     *
     * @see https://www.php.net/manual/en/mongo.configuration.php#ini.mongo.ping-interval
     */
    const MONGO_PING_INTERVAL = 'mongo.ping_interval';

    /**
     * mongo.utf8
     *
     * - Default: 1
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mongo.configuration.php#ini.mongo.utf8
     */
    const MONGO_UTF8 = 'mongo.utf8';

    /**
     * msql.allow_persistent
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/msql.configuration.php#ini.msql.allow-persistent
     */
    const MSQL_ALLOW_PERSISTENT = 'msql.allow_persistent';

    /**
     * msql.max_links
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/msql.configuration.php#ini.msql.max-links
     */
    const MSQL_MAX_LINKS = 'msql.max_links';

    /**
     * msql.max_persistent
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/msql.configuration.php#ini.msql.max-persistent
     */
    const MSQL_MAX_PERSISTENT = 'msql.max_persistent';

    /**
     * mssql.allow_persistent
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MSSQL_ALLOW_PERSISTENT = 'mssql.allow_persistent';

    /**
     * mssql.batchsize
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     */
    const MSSQL_BATCHSIZE = 'mssql.batchsize';

    /**
     * mssql.charset
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.1.2.
     */
    const MSSQL_CHARSET = 'mssql.charset';

    /**
     * mssql.compatability_mode
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     */
    const MSSQL_COMPATABILITY_MODE = 'mssql.compatability_mode';

    /**
     * mssql.connect_timeout
     *
     * - Default: "5"
     * - Changeable: PHP_INI_ALL
     */
    const MSSQL_CONNECT_TIMEOUT = 'mssql.connect_timeout';

    /**
     * mssql.datetimeconvert
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     */
    const MSSQL_DATETIMECONVERT = 'mssql.datetimeconvert';

    /**
     * mssql.max_links
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MSSQL_MAX_LINKS = 'mssql.max_links';

    /**
     * mssql.max_persistent
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MSSQL_MAX_PERSISTENT = 'mssql.max_persistent';

    /**
     * mssql.max_procs
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_ALL
     */
    const MSSQL_MAX_PROCS = 'mssql.max_procs';

    /**
     * mssql.min_error_severity
     *
     * - Default: "10"
     * - Changeable: PHP_INI_ALL
     */
    const MSSQL_MIN_ERROR_SEVERITY = 'mssql.min_error_severity';

    /**
     * mssql.min_message_severity
     *
     * - Default: "10"
     * - Changeable: PHP_INI_ALL
     */
    const MSSQL_MIN_MESSAGE_SEVERITY = 'mssql.min_message_severity';

    /**
     * mssql.secure_connection
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MSSQL_SECURE_CONNECTION = 'mssql.secure_connection';

    /**
     * mssql.textlimit
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_ALL
     */
    const MSSQL_TEXTLIMIT = 'mssql.textlimit';

    /**
     * mssql.textsize
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_ALL
     */
    const MSSQL_TEXTSIZE = 'mssql.textsize';

    /**
     * mssql.timeout
     *
     * - Default: "60"
     * - Changeable: PHP_INI_ALL
     */
    const MSSQL_TIMEOUT = 'mssql.timeout';

    /**
     * mysql.allow_local_infile
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysql.configuration.php#ini.mysql.allow-local-infile
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQL_ALLOW_LOCAL_INFILE = 'mysql.allow_local_infile';

    /**
     * mysql.allow_persistent
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysql.configuration.php#ini.mysql.allow-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQL_ALLOW_PERSISTENT = 'mysql.allow_persistent';

    /**
     * mysql.max_persistent
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysql.configuration.php#ini.mysql.max-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQL_MAX_PERSISTENT = 'mysql.max_persistent';

    /**
     * mysql.max_links
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysql.configuration.php#ini.mysql.max-links
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQL_MAX_LINKS = 'mysql.max_links';

    /**
     * mysql.trace_mode
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysql.configuration.php#ini.mysql.trace-mode
     */
    const MYSQL_TRACE_MODE = 'mysql.trace_mode';

    /**
     * mysql.default_port
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysql.configuration.php#ini.mysql.default-port
     */
    const MYSQL_DEFAULT_PORT = 'mysql.default_port';

    /**
     * mysql.default_socket
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysql.configuration.php#ini.mysql.default-socket
     */
    const MYSQL_DEFAULT_SOCKET = 'mysql.default_socket';

    /**
     * mysql.default_host
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysql.configuration.php#ini.mysql.default-host
     */
    const MYSQL_DEFAULT_HOST = 'mysql.default_host';

    /**
     * mysql.default_user
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysql.configuration.php#ini.mysql.default-user
     */
    const MYSQL_DEFAULT_USER = 'mysql.default_user';

    /**
     * mysql.default_password
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysql.configuration.php#ini.mysql.default-password
     */
    const MYSQL_DEFAULT_PASSWORD = 'mysql.default_password';

    /**
     * mysql.connect_timeout
     *
     * - Default: "60"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysql.configuration.php#ini.mysql.connect-timeout
     */
    const MYSQL_CONNECT_TIMEOUT = 'mysql.connect_timeout';

    /**
     * mysqli.allow_local_infile
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of PHP 5.2.4. Before PHP 7.2.16 and 7.3.3 the default was "1".
     *
     * @see        https://www.php.net/manual/en/mysqli.configuration.php#ini.mysqli.allow-local-infile
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLI_ALLOW_LOCAL_INFILE = 'mysqli.allow_local_infile';

    /**
     * mysqli.allow_persistent
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of PHP 5.3.0.
     *
     * @see        https://www.php.net/manual/en/mysqli.configuration.php#ini.mysqli.allow-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLI_ALLOW_PERSISTENT = 'mysqli.allow_persistent';

    /**
     * mysqli.max_persistent
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of PHP 5.3.0.
     *
     * @see        https://www.php.net/manual/en/mysqli.configuration.php#ini.mysqli.max-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLI_MAX_PERSISTENT = 'mysqli.max_persistent';

    /**
     * mysqli.max_links
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqli.configuration.php#ini.mysqli.max-links
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLI_MAX_LINKS = 'mysqli.max_links';

    /**
     * mysqli.default_port
     *
     * - Default: "3306"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqli.configuration.php#ini.mysqli.default-port
     */
    const MYSQLI_DEFAULT_PORT = 'mysqli.default_port';

    /**
     * mysqli.default_socket
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqli.configuration.php#ini.mysqli.default-socket
     */
    const MYSQLI_DEFAULT_SOCKET = 'mysqli.default_socket';

    /**
     * mysqli.default_host
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqli.configuration.php#ini.mysqli.default-host
     */
    const MYSQLI_DEFAULT_HOST = 'mysqli.default_host';

    /**
     * mysqli.default_user
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqli.configuration.php#ini.mysqli.default-user
     */
    const MYSQLI_DEFAULT_USER = 'mysqli.default_user';

    /**
     * mysqli.default_pw
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqli.configuration.php#ini.mysqli.default-pw
     */
    const MYSQLI_DEFAULT_PW = 'mysqli.default_pw';

    /**
     * mysqli.reconnect
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqli.configuration.php#ini.mysqli.reconnect
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLI_RECONNECT = 'mysqli.reconnect';

    /**
     * mysqli.rollback_on_cached_plink
     *
     * - Default: TRUE
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of PHP 5.6.0.
     *
     * @see        https://www.php.net/manual/en/mysqli.configuration.php#ini.mysqli.rollback-on-cached-plink
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLI_ROLLBACK_ON_CACHED_PLINK = 'mysqli.rollback_on_cached_plink';

    /**
     * mysqlnd.collect_memory_statistics
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.3.0.
     *
     * @see        https://www.php.net/manual/en/mysqlnd.config.php#ini.mysqlnd.collect-memory-statistics
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_COLLECT_MEMORY_STATISTICS = 'mysqlnd.collect_memory_statistics';

    /**
     * mysqlnd.collect_statistics
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.3.0.
     *
     * @see https://www.php.net/manual/en/mysqlnd.config.php#ini.mysqlnd.collect-statistics
     */
    const MYSQLND_COLLECT_STATISTICS = 'mysqlnd.collect_statistics';

    /**
     * mysqlnd.debug
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.3.0.
     *
     * @see        https://www.php.net/manual/en/mysqlnd.config.php#ini.mysqlnd.debug
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_DEBUG = 'mysqlnd.debug';

    /**
     * mysqlnd.log_mask
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.4.0.
     */
    const MYSQLND_LOG_MASK = 'mysqlnd.log_mask';

    /**
     * mysqlnd.mempool_default_size
     *
     * - Default: "16000"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.4.0.
     */
    const MYSQLND_MEMPOOL_DEFAULT_SIZE = 'mysqlnd.mempool_default_size';

    /**
     * mysqlnd.net_cmd_buffer_size
     *
     * - Default: "4096"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see https://www.php.net/manual/en/mysqlnd.config.php#ini.mysqlnd.net-cmd-buffer-size
     */
    const MYSQLND_NET_CMD_BUFFER_SIZE = 'mysqlnd.net_cmd_buffer_size';

    /**
     * mysqlnd.net_read_buffer_size
     *
     * - Default: "32768"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.3.0.
     *
     * @see https://www.php.net/manual/en/mysqlnd.config.php#ini.mysqlnd.net-read-buffer-size
     */
    const MYSQLND_NET_READ_BUFFER_SIZE = 'mysqlnd.net_read_buffer_size';

    /**
     * mysqlnd.net_read_timeout
     *
     * - Default: "31536000"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/mysqlnd.config.php#ini.mysqlnd.net-read-timeout
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_NET_READ_TIMEOUT = 'mysqlnd.net_read_timeout';

    /**
     * mysqlnd.sha256_server_public_key
     *
     * - Default: ""
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since PHP 5.5.0.
     *
     * @see        https://www.php.net/manual/en/mysqlnd.config.php#ini.mysqlnd.sha256-server-public-key
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_SHA256_SERVER_PUBLIC_KEY = 'mysqlnd.sha256_server_public_key';

    /**
     * mysqlnd.trace_alloc
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.5.0.
     *
     * @see        https://www.php.net/manual/en/mysqlnd.config.php#ini.mysqlnd.trace-alloc
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_TRACE_ALLOC = 'mysqlnd.trace_alloc';

    /**
     * mysqlnd_memcache.enable
     *
     * - Default: 1
     * - Changelog: Available since 1.0.0
     *
     * @see        https://www.php.net/manual/en/mysqlnd-memcache.configuration.php#ini.mysqlnd-memcache.enable
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_MEMCACHE_ENABLE = 'mysqlnd_memcache.enable';

    /**
     * mysqlnd_ms.enable
     *
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-ms.configuration.php#ini.mysqlnd-ms.enable
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_MS_ENABLE = 'mysqlnd_ms.enable';

    /**
     * mysqlnd_ms.force_config_usage
     *
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-ms.configuration.php#ini.mysqlnd-ms.force-config-usage
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_MS_FORCE_CONFIG_USAGE = 'mysqlnd_ms.force_config_usage';

    /**
     * mysqlnd_ms.ini_file
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-ms.configuration.php#ini.mysqlnd-ms.ini-file
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_MS_INI_FILE = 'mysqlnd_ms.ini_file';

    /**
     * mysqlnd_ms.config_file
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-ms.configuration.php#ini.mysqlnd-ms.config-file
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_MS_CONFIG_FILE = 'mysqlnd_ms.config_file';

    /**
     * mysqlnd_ms.collect_statistics
     *
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-ms.configuration.php#ini.mysqlnd-ms.collect-statistics
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_MS_COLLECT_STATISTICS = 'mysqlnd_ms.collect_statistics';

    /**
     * mysqlnd_ms.multi_master
     *
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-ms.configuration.php#ini.mysqlnd-ms.multi-master
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_MS_MULTI_MASTER = 'mysqlnd_ms.multi_master';

    /**
     * mysqlnd_ms.disable_rw_split
     *
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-ms.configuration.php#ini.mysqlnd-ms.disable-rw-split
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_MS_DISABLE_RW_SPLIT = 'mysqlnd_ms.disable_rw_split';

    /**
     * mysqlnd_mux.enable
     *
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-mux.configuration.php#ini.mysqlnd-mux.enable
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_MUX_ENABLE = 'mysqlnd_mux.enable';

    /**
     * mysqlnd_qc.enable_qc
     *
     * - Default: 1
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.enable-qc
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_QC_ENABLE_QC = 'mysqlnd_qc.enable_qc';

    /**
     * mysqlnd_qc.ttl
     *
     * - Default: 30
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.ttl
     */
    const MYSQLND_QC_TTL = 'mysqlnd_qc.ttl';

    /**
     * mysqlnd_qc.cache_by_default
     *
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.cache-by-default
     */
    const MYSQLND_QC_CACHE_BY_DEFAULT = 'mysqlnd_qc.cache_by_default';

    /**
     * mysqlnd_qc.cache_no_table
     *
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.cache-no-table
     */
    const MYSQLND_QC_CACHE_NO_TABLE = 'mysqlnd_qc.cache_no_table';

    /**
     * mysqlnd_qc.use_request_time
     *
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.use-request-time
     */
    const MYSQLND_QC_USE_REQUEST_TIME = 'mysqlnd_qc.use_request_time';

    /**
     * mysqlnd_qc.time_statistics
     *
     * - Default: 1
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.time-statistics
     */
    const MYSQLND_QC_TIME_STATISTICS = 'mysqlnd_qc.time_statistics';

    /**
     * mysqlnd_qc.collect_statistics
     *
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.collect-statistics
     */
    const MYSQLND_QC_COLLECT_STATISTICS = 'mysqlnd_qc.collect_statistics';

    /**
     * mysqlnd_qc.collect_statistics_log_file
     *
     * - Default: /tmp/mysqlnd_qc.stats
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.collect-statistics-log-file
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_QC_COLLECT_STATISTICS_LOG_FILE = 'mysqlnd_qc.collect_statistics_log_file';

    /**
     * mysqlnd_qc.collect_query_trace
     *
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.collect-query-trace
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_QC_COLLECT_QUERY_TRACE = 'mysqlnd_qc.collect_query_trace';

    /**
     * mysqlnd_qc.query_trace_bt_depth
     *
     * - Default: 3
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.query-trace-bt-depth
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_QC_QUERY_TRACE_BT_DEPTH = 'mysqlnd_qc.query_trace_bt_depth';

    /**
     * mysqlnd_qc.collect_normalized_query_trace
     *
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.collect-normalized-query-trace
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_QC_COLLECT_NORMALIZED_QUERY_TRACE = 'mysqlnd_qc.collect_normalized_query_trace';

    /**
     * mysqlnd_qc.ignore_sql_comments
     *
     * - Default: 1
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.ignore-sql-comments
     */
    const MYSQLND_QC_IGNORE_SQL_COMMENTS = 'mysqlnd_qc.ignore_sql_comments';

    /**
     * mysqlnd_qc.slam_defense
     *
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.slam-defense
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_QC_SLAM_DEFENSE = 'mysqlnd_qc.slam_defense';

    /**
     * mysqlnd_qc.slam_defense_ttl
     *
     * - Default: 30
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.slam-defense-ttl
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_QC_SLAM_DEFENSE_TTL = 'mysqlnd_qc.slam_defense_ttl';

    /**
     * mysqlnd_qc.std_data_copy
     *
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.std-data-copy
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_QC_STD_DATA_COPY = 'mysqlnd_qc.std_data_copy';

    /**
     * mysqlnd_qc.apc_prefix
     *
     * - Default: qc_
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.apc-prefix
     */
    const MYSQLND_QC_APC_PREFIX = 'mysqlnd_qc.apc_prefix';

    /**
     * mysqlnd_qc.memc_server
     *
     * - Default: 127.0.0.1
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.memc-server
     */
    const MYSQLND_QC_MEMC_SERVER = 'mysqlnd_qc.memc_server';

    /**
     * mysqlnd_qc.memc_port
     *
     * - Default: 11211
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.memc-port
     */
    const MYSQLND_QC_MEMC_PORT = 'mysqlnd_qc.memc_port';

    /**
     * mysqlnd_qc.sqlite_data_file
     *
     * - Default: :memory:
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqlnd-qc.configuration.php#ini.mysqlnd-qc.sqlite-data-file
     */
    const MYSQLND_QC_SQLITE_DATA_FILE = 'mysqlnd_qc.sqlite_data_file';

    /**
     * mysqlnd_uh.enable
     *
     * - Default: 1
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mysqlnd-uh.configuration.php#ini.mysqlnd-uh.enable
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MYSQLND_UH_ENABLE = 'mysqlnd_uh.enable';

    /**
     * mysqlnd_uh.report_wrong_types
     *
     * - Default: 1
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mysqlnd-uh.configuration.php#ini.mysqlnd-uh.report-wrong-types
     */
    const MYSQLND_UH_REPORT_WRONG_TYPES = 'mysqlnd_uh.report_wrong_types';

    /**
     * nsapi.read_timeout
     *
     * - Default: "60"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/nsapi.configuration.php#ini.nsapi.read-timeout
     */
    const NSAPI_READ_TIMEOUT = 'nsapi.read_timeout';

    /**
     * oci8.connection_class
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.3 (PECL OCI8 1.3).
     *
     * @see https://www.php.net/manual/en/oci8.configuration.php#ini.oci8.connection-class
     */
    const OCI8_CONNECTION_CLASS = 'oci8.connection_class';

    /**
     * oci8.default_prefetch
     *
     * - Default: "10"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.1.2.
     *
     * @see        https://www.php.net/manual/en/oci8.configuration.php#ini.oci8.default-prefetch
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OCI8_DEFAULT_PREFETCH = 'oci8.default_prefetch';

    /**
     * oci8.events
     *
     * - Default: Off
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.3 (PECL OCI8 1.3).
     *
     * @see        https://www.php.net/manual/en/oci8.configuration.php#ini.oci8.events
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OCI8_EVENTS = 'oci8.events';

    /**
     * oci8.max_persistent
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.1.2.
     *
     * @see        https://www.php.net/manual/en/oci8.configuration.php#ini.oci8.max-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OCI8_MAX_PERSISTENT = 'oci8.max_persistent';

    /**
     * oci8.old_oci_close_semantics
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.1.2.
     *
     * @see        https://www.php.net/manual/en/oci8.configuration.php#ini.oci8.old-oci-close-semantics
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OCI8_OLD_OCI_CLOSE_SEMANTICS = 'oci8.old_oci_close_semantics';

    /**
     * oci8.persistent_timeout
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.1.2.
     *
     * @see        https://www.php.net/manual/en/oci8.configuration.php#ini.oci8.persistent-timeout
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OCI8_PERSISTENT_TIMEOUT = 'oci8.persistent_timeout';

    /**
     * oci8.ping_interval
     *
     * - Default: "60"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.1.2.
     *
     * @see        https://www.php.net/manual/en/oci8.configuration.php#ini.oci8.ping-interval
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OCI8_PING_INTERVAL = 'oci8.ping_interval';

    /**
     * oci8.privileged_connect
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.1.2.
     *
     * @see        https://www.php.net/manual/en/oci8.configuration.php#ini.oci8.privileged-connect
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OCI8_PRIVILEGED_CONNECT = 'oci8.privileged_connect';

    /**
     * oci8.statement_cache_size
     *
     * - Default: "20"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.1.2.
     *
     * @see        https://www.php.net/manual/en/oci8.configuration.php#ini.oci8.statement-cache-size
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OCI8_STATEMENT_CACHE_SIZE = 'oci8.statement_cache_size';

    /**
     * odbc.allow_persistent
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/odbc.configuration.php#ini.uodbc.allow-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ODBC_ALLOW_PERSISTENT = 'odbc.allow_persistent';

    /**
     * odbc.check_persistent
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/odbc.configuration.php#ini.uodbc.check-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ODBC_CHECK_PERSISTENT = 'odbc.check_persistent';

    /**
     * odbc.defaultbinmode
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/odbc.configuration.php#ini.uodbc.defaultbinmode
     */
    const ODBC_DEFAULTBINMODE = 'odbc.defaultbinmode';

    /**
     * odbc.defaultlrl
     *
     * - Default: "4096"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/odbc.configuration.php#ini.uodbc.defaultlrl
     */
    const ODBC_DEFAULTLRL = 'odbc.defaultlrl';

    /**
     * odbc.default_db
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/odbc.configuration.php#ini.uodbc.default-db
     */
    const ODBC_DEFAULT_DB = 'odbc.default_db';

    /**
     * odbc.default_cursortype
     *
     * - Default: "3"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.3.0.
     */
    const ODBC_DEFAULT_CURSORTYPE = 'odbc.default_cursortype';

    /**
     * odbc.default_pw
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/odbc.configuration.php#ini.uodbc.default-pw
     */
    const ODBC_DEFAULT_PW = 'odbc.default_pw';

    /**
     * odbc.default_user
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/odbc.configuration.php#ini.uodbc.default-user
     */
    const ODBC_DEFAULT_USER = 'odbc.default_user';

    /**
     * odbc.max_links
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/odbc.configuration.php#ini.uodbc.max-links
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ODBC_MAX_LINKS = 'odbc.max_links';

    /**
     * odbc.max_persistent
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/odbc.configuration.php#ini.uodbc.max-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ODBC_MAX_PERSISTENT = 'odbc.max_persistent';

    /**
     * odbtp.datetime_format
     *
     * - Default: "object"
     * - Changeable: PHP_INI_ALL
     */
    const ODBTP_DATETIME_FORMAT = 'odbtp.datetime_format';

    /**
     * odbtp.detach_default_queries
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     */
    const ODBTP_DETACH_DEFAULT_QUERIES = 'odbtp.detach_default_queries';

    /**
     * odbtp.guid_format
     *
     * - Default: "string"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since odbtp 1.1.3.
     */
    const ODBTP_GUID_FORMAT = 'odbtp.guid_format';

    /**
     * odbtp.interface_file
     *
     * - Default: "/usr/local/share/odbtp.conf"
     * - Changeable: PHP_INI_ALL
     */
    const ODBTP_INTERFACE_FILE = 'odbtp.interface_file';

    /**
     * odbtp.truncation_errors
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     */
    const ODBTP_TRUNCATION_ERRORS = 'odbtp.truncation_errors';

    /**
     * opcache.enable
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.enable
     */
    const OPCACHE_ENABLE = 'opcache.enable';

    /**
     * opcache.enable_cli
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.enable-cli
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_ENABLE_CLI = 'opcache.enable_cli';

    /**
     * opcache.memory_consumption
     *
     * - Default: "128"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Before PHP 7.0.0 the default was "64"
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.memory-consumption
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_MEMORY_CONSUMPTION = 'opcache.memory_consumption';

    /**
     * opcache.interned_strings_buffer
     *
     * - Default: "8"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Before PHP 7.0.0 the default was "4"
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.interned-strings-buffer
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_INTERNED_STRINGS_BUFFER = 'opcache.interned_strings_buffer';

    /**
     * opcache.max_accelerated_files
     *
     * - Default: "10000"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Before PHP 7.0.0 the default was "2000"
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.max-accelerated-files
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_MAX_ACCELERATED_FILES = 'opcache.max_accelerated_files';

    /**
     * opcache.max_wasted_percentage
     *
     * - Default: "5"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.max-wasted-percentage
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_MAX_WASTED_PERCENTAGE = 'opcache.max_wasted_percentage';

    /**
     * opcache.use_cwd
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.use-cwd
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_USE_CWD = 'opcache.use_cwd';

    /**
     * opcache.validate_timestamps
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.validate-timestamps
     */
    const OPCACHE_VALIDATE_TIMESTAMPS = 'opcache.validate_timestamps';

    /**
     * opcache.revalidate_freq
     *
     * - Default: "2"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.revalidate-freq
     */
    const OPCACHE_REVALIDATE_FREQ = 'opcache.revalidate_freq';

    /**
     * opcache.revalidate_path
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.revalidate-path
     */
    const OPCACHE_REVALIDATE_PATH = 'opcache.revalidate_path';

    /**
     * opcache.save_comments
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_SAVE_COMMENTS = 'opcache.save_comments';

    /**
     * opcache.load_comments
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 7.0.0.
     *
     * @see https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.load-comments
     */
    const OPCACHE_LOAD_COMMENTS = 'opcache.load_comments';

    /**
     * opcache.fast_shutdown
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 7.2.0
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.fast-shutdown
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_FAST_SHUTDOWN = 'opcache.fast_shutdown';

    /**
     * opcache.enable_file_override
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.enable-file-override
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_ENABLE_FILE_OVERRIDE = 'opcache.enable_file_override';

    /**
     * opcache.optimization_level
     *
     * - Default: "0x7FFFBFFF"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Changed from 0xFFFFFFFF in PHP 5.6.18
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.optimization-level
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_OPTIMIZATION_LEVEL = 'opcache.optimization_level';

    /**
     * opcache.inherited_hack
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 7.3.0
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.inherited-hack
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_INHERITED_HACK = 'opcache.inherited_hack';

    /**
     * opcache.dups_fix
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.dups-fix
     */
    const OPCACHE_DUPS_FIX = 'opcache.dups_fix';

    /**
     * opcache.blacklist_filename
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.blacklist-filename
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_BLACKLIST_FILENAME = 'opcache.blacklist_filename';

    /**
     * opcache.max_file_size
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.max-file-size
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_MAX_FILE_SIZE = 'opcache.max_file_size';

    /**
     * opcache.consistency_checks
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.consistency-checks
     */
    const OPCACHE_CONSISTENCY_CHECKS = 'opcache.consistency_checks';

    /**
     * opcache.force_restart_timeout
     *
     * - Default: "180"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.force-restart-timeout
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_FORCE_RESTART_TIMEOUT = 'opcache.force_restart_timeout';

    /**
     * opcache.error_log
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.error-log
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_ERROR_LOG = 'opcache.error_log';

    /**
     * opcache.log_verbosity_level
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.log-verbosity-level
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_LOG_VERBOSITY_LEVEL = 'opcache.log_verbosity_level';

    /**
     * opcache.preferred_memory_model
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.preferred-memory-model
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_PREFERRED_MEMORY_MODEL = 'opcache.preferred_memory_model';

    /**
     * opcache.protect_memory
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.protect-memory
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_PROTECT_MEMORY = 'opcache.protect_memory';

    /**
     * opcache.mmap_base
     *
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.mmap-base
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_MMAP_BASE = 'opcache.mmap_base';

    /**
     * opcache.restrict_api
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.restrict-api
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_RESTRICT_API = 'opcache.restrict_api';

    /**
     * opcache.file_update_protection
     *
     * - Default: "2"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.file_update_protection
     */
    const OPCACHE_FILE_UPDATE_PROTECTION = 'opcache.file_update_protection';

    /**
     * opcache.huge_code_pages
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.huge_code_pages
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_HUGE_CODE_PAGES = 'opcache.huge_code_pages';

    /**
     * opcache.lockfile_path
     *
     * - Default: "/tmp"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.lockfile_path
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_LOCKFILE_PATH = 'opcache.lockfile_path';

    /**
     * opcache.opt_debug_level
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.opt_debug_level
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_OPT_DEBUG_LEVEL = 'opcache.opt_debug_level';

    /**
     * opcache.file_cache
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of PHP 7.0.0
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.file-cache
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_FILE_CACHE = 'opcache.file_cache';

    /**
     * opcache.file_cache_only
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of PHP 7.0.0
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.file-cache-only
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_FILE_CACHE_ONLY = 'opcache.file_cache_only';

    /**
     * opcache.file_cache_consistency_checks
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of PHP 7.0.0
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.file-cache-consistency-checks
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_FILE_CACHE_CONSISTENCY_CHECKS = 'opcache.file_cache_consistency_checks';

    /**
     * opcache.file_cache_fallback
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Windows only. Available as of PHP 7.0.0
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.file-cache-fallback
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_FILE_CACHE_FALLBACK = 'opcache.file_cache_fallback';

    /**
     * opcache.validate_permission
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of PHP 7.0.14
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.validate-permission
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_VALIDATE_PERMISSION = 'opcache.validate_permission';

    /**
     * opcache.validate_root
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of PHP 7.0.14
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.validate-root
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_VALIDATE_ROOT = 'opcache.validate_root';

    /**
     * opcache.preload
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of PHP 7.4.0
     *
     * @see        https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.preload
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OPCACHE_PRELOAD = 'opcache.preload';

    /**
     * opendirectory.default_separator
     *
     * - Default: "/"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in opendirectory 0.2.2.
     */
    const OPENDIRECTORY_DEFAULT_SEPARATOR = 'opendirectory.default_separator';

    /**
     * opendirectory.max_refs
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_ALL
     */
    const OPENDIRECTORY_MAX_REFS = 'opendirectory.max_refs';

    /**
     * opendirectory.separator
     *
     * - Default: "/"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since opendirectory 0.2.2.
     */
    const OPENDIRECTORY_SEPARATOR = 'opendirectory.separator';

    /**
     * open_basedir
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     * - Changelog: PHP_INI_SYSTEM in PHP < 5.2.3.
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.open-basedir
     */
    const OPEN_BASEDIR = 'open_basedir';

    /**
     * oracle.allow_persistent
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.1.0.
     */
    const ORACLE_ALLOW_PERSISTENT = 'oracle.allow_persistent';

    /**
     * oracle.max_links
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.1.0.
     */
    const ORACLE_MAX_LINKS = 'oracle.max_links';

    /**
     * oracle.max_persistent
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.1.0.
     */
    const ORACLE_MAX_PERSISTENT = 'oracle.max_persistent';

    /**
     * output_buffering
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/outcontrol.configuration.php#ini.output-buffering
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OUTPUT_BUFFERING = 'output_buffering';

    /**
     * output_handler
     *
     * - Default: NULL
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/outcontrol.configuration.php#ini.output-handler
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const OUTPUT_HANDLER = 'output_handler';

    /**
     * pam.servicename
     *
     * - Default: "php"
     * - Changeable: PHP_INI_ALL
     */
    const PAM_SERVICENAME = 'pam.servicename';

    /**
     * pcre.backtrack_limit
     *
     * - Default: "1000000"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.2.0.
     *
     * @see https://www.php.net/manual/en/pcre.configuration.php#ini.pcre.backtrack-limit
     */
    const PCRE_BACKTRACK_LIMIT = 'pcre.backtrack_limit';

    /**
     * pcre.recursion_limit
     *
     * - Default: "100000"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.2.0.
     *
     * @see https://www.php.net/manual/en/pcre.configuration.php#ini.pcre.recursion-limit
     */
    const PCRE_RECURSION_LIMIT = 'pcre.recursion_limit';

    /**
     * pcre.jit
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 7.0.0.
     *
     * @see https://www.php.net/manual/en/pcre.configuration.php#ini.pcre.jit
     */
    const PCRE_JIT = 'pcre.jit';

    /**
     * pdo_odbc.connection_pooling
     *
     * - Default: "strict"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.1.0.
     *
     * @see https://www.php.net/manual/en/ref.pdo-odbc.php#ini.pdo-odbc.connection-pooling
     */
    const PDO_ODBC_CONNECTION_POOLING = 'pdo_odbc.connection_pooling';

    /**
     * pdo_odbc.db2_instance_name
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.1.1. This deprecated feature
     * certainly be  in the future.
     *
     * @see        https://www.php.net/manual/en/ref.pdo-odbc.php#ini.pdo-odbc.db2-instance-name
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const PDO_ODBC_DB2_INSTANCE_NAME = 'pdo_odbc.db2_instance_name';

    /**
     * pfpro.defaulthost
     *
     * - Default: "test-payflow.verisign.com"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.1.0.
     */
    const PFPRO_DEFAULTHOST = 'pfpro.defaulthost';

    /**
     * pfpro.defaultport
     *
     * - Default: "443"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.1.0.
     */
    const PFPRO_DEFAULTPORT = 'pfpro.defaultport';

    /**
     * pfpro.defaulttimeout
     *
     * - Default: "30"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.1.0.
     */
    const PFPRO_DEFAULTTIMEOUT = 'pfpro.defaulttimeout';

    /**
     * pfpro.proxyaddress
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.1.0.
     */
    const PFPRO_PROXYADDRESS = 'pfpro.proxyaddress';

    /**
     * pfpro.proxylogon
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.1.0.
     */
    const PFPRO_PROXYLOGON = 'pfpro.proxylogon';

    /**
     * pfpro.proxypassword
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.1.0.
     */
    const PFPRO_PROXYPASSWORD = 'pfpro.proxypassword';

    /**
     * pfpro.proxyport
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.1.0.
     */
    const PFPRO_PROXYPORT = 'pfpro.proxyport';

    /**
     * pgsql.allow_persistent
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/pgsql.configuration.php#ini.pgsql.allow-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const PGSQL_ALLOW_PERSISTENT = 'pgsql.allow_persistent';

    /**
     * pgsql.auto_reset_persistent
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/pgsql.configuration.php#ini.pgsql.auto-reset-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const PGSQL_AUTO_RESET_PERSISTENT = 'pgsql.auto_reset_persistent';

    /**
     * pgsql.ignore_notice
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/pgsql.configuration.php#ini.pgsql.ignore-notice
     */
    const PGSQL_IGNORE_NOTICE = 'pgsql.ignore_notice';

    /**
     * pgsql.log_notice
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/pgsql.configuration.php#ini.pgsql.log-notice
     */
    const PGSQL_LOG_NOTICE = 'pgsql.log_notice';

    /**
     * pgsql.max_links
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/pgsql.configuration.php#ini.pgsql.max-links
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const PGSQL_MAX_LINKS = 'pgsql.max_links';

    /**
     * pgsql.max_persistent
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/pgsql.configuration.php#ini.pgsql.max-persistent
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const PGSQL_MAX_PERSISTENT = 'pgsql.max_persistent';

    /**
     * phar.cache_list
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/phar.configuration.php#ini.phar.cache-list
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const PHAR_CACHE_LIST = 'phar.cache_list';

    /**
     * phar.extract_list
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since phar 1.1.0.
     *
     * @see https://www.php.net/manual/en/phar.configuration.php#ini.phar.extract-list
     */
    const PHAR_EXTRACT_LIST = 'phar.extract_list';

    /**
     * phar.readonly
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/phar.configuration.php#ini.phar.readonly
     */
    const PHAR_READONLY = 'phar.readonly';

    /**
     * phar.require_hash
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/phar.configuration.php#ini.phar.require-hash
     */
    const PHAR_REQUIRE_HASH = 'phar.require_hash';

    /**
     * post_max_size
     *
     * - Default: "8M"
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.post-max-size
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const POST_MAX_SIZE = 'post_max_size';

    /**
     * precision
     *
     * - Default: "14"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.precision
     */
    const PRECISION = 'precision';

    /**
     * python.append_path
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     */
    const PYTHON_APPEND_PATH = 'python.append_path';

    /**
     * python.prepend_path
     *
     * - Default: "."
     * - Changeable: PHP_INI_ALL
     */
    const PYTHON_PREPEND_PATH = 'python.prepend_path';

    /**
     * realpath_cache_size
     *
     * - Default: "16K"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.1.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.realpath-cache-size
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const REALPATH_CACHE_SIZE = 'realpath_cache_size';

    /**
     * realpath_cache_ttl
     *
     * - Default: "120"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.1.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.realpath-cache-ttl
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const REALPATH_CACHE_TTL = 'realpath_cache_ttl';

    /**
     * register_argc_argv
     *
     * - Default: "1"
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.register-argc-argv
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const REGISTER_ARGC_ARGV = 'register_argc_argv';

    /**
     * register_globals
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Deprecated in PHP 5.3.0. Removed in PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.register-globals
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const REGISTER_GLOBALS = 'register_globals';

    /**
     * register_long_arrays
     *
     * - Default: "1"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Deprecated in PHP 5.3.0. Removed in PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.register-long-arrays
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const REGISTER_LONG_ARRAYS = 'register_long_arrays';

    /**
     * report_memleaks
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.report-memleaks
     */
    const REPORT_MEMLEAKS = 'report_memleaks';

    /**
     * report_zend_debug
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     */
    const REPORT_ZEND_DEBUG = 'report_zend_debug';

    /**
     * request_order
     *
     * - Default: ""
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Added in PHP 5.3.0
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.request-order
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const REQUEST_ORDER = 'request_order';

    /**
     * runkit.internal_override
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/runkit.configuration.php#ini.runkit.internal-override
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const RUNKIT_INTERNAL_OVERRIDE = 'runkit.internal_override';

    /**
     * runkit.superglobal
     *
     * - Default: ""
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/runkit.configuration.php#ini.runkit.superglobal
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const RUNKIT_SUPERGLOBAL = 'runkit.superglobal';

    /**
     * safe_mode
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/ini.sect.safe-mode.php#ini.safe-mode
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SAFE_MODE = 'safe_mode';

    /**
     * safe_mode_allowed_env_vars
     *
     * - Default: "PHP_"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/ini.sect.safe-mode.php#ini.safe-mode-allowed-env-vars
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SAFE_MODE_ALLOWED_ENV_VARS = 'safe_mode_allowed_env_vars';

    /**
     * safe_mode_exec_dir
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/ini.sect.safe-mode.php#ini.safe-mode-exec-dir
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SAFE_MODE_EXEC_DIR = 'safe_mode_exec_dir';

    /**
     * safe_mode_gid
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/ini.sect.safe-mode.php#ini.safe-mode-gid
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SAFE_MODE_GID = 'safe_mode_gid';

    /**
     * safe_mode_include_dir
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/ini.sect.safe-mode.php#ini.safe-mode-include-dir
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SAFE_MODE_INCLUDE_DIR = 'safe_mode_include_dir';

    /**
     * safe_mode_protected_env_vars
     *
     * - Default: "LD_LIBRARY_PATH"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Removed in PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/ini.sect.safe-mode.php#ini.safe-mode-protected-env-vars
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SAFE_MODE_PROTECTED_ENV_VARS = 'safe_mode_protected_env_vars';

    /**
     * sendmail_from
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mail.configuration.php#ini.sendmail-from
     */
    const SENDMAIL_FROM = 'sendmail_from';

    /**
     * sendmail_path
     *
     * - Default: "/usr/sbin/sendmail -t -i"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/mail.configuration.php#ini.sendmail-path
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SENDMAIL_PATH = 'sendmail_path';

    /**
     * serialize_precision
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_ALL
     * - Changelog:
     * Before PHP 5.3.6, the default value was 100.
     * Before PHP 7.1.0, the default value was 17.
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.serialize-precision
     */
    const SERIALIZE_PRECISION = 'serialize_precision';

    /**
     * session.auto_start
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: PHP_INI_ALL in PHP <= 5.4.19 and in PHP <= 5.5.1.
     *
     * @see        https://www.php.net/manual/en/session.configuration.php#ini.session.auto-start
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_AUTO_START = 'session.auto_start';

    /**
     * session.bug_compat_42
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.4.0.
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.bug-compat-42
     */
    const SESSION_BUG_COMPAT_42 = 'session.bug_compat_42';

    /**
     * session.bug_compat_warn
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.4.0.
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.bug-compat-warn
     */
    const SESSION_BUG_COMPAT_WARN = 'session.bug_compat_warn';

    /**
     * session.cache_expire
     *
     * - Default: "180"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.cache-expire
     */
    const SESSION_CACHE_EXPIRE = 'session.cache_expire';

    /**
     * session.cache_limiter
     *
     * - Default: "nocache"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.cache-limiter
     */
    const SESSION_CACHE_LIMITER = 'session.cache_limiter';

    /**
     * session.cookie_domain
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.cookie-domain
     */
    const SESSION_COOKIE_DOMAIN = 'session.cookie_domain';

    /**
     * session.cookie_httponly
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.2.0.
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.cookie-httponly
     */
    const SESSION_COOKIE_HTTPONLY = 'session.cookie_httponly';

    /**
     * session.cookie_lifetime
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.cookie-lifetime
     */
    const SESSION_COOKIE_LIFETIME = 'session.cookie_lifetime';

    /**
     * session.cookie_path
     *
     * - Default: "/"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.cookie-path
     */
    const SESSION_COOKIE_PATH = 'session.cookie_path';

    /**
     * session.cookie_secure
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.cookie-secure
     */
    const SESSION_COOKIE_SECURE = 'session.cookie_secure';

    /**
     * session.entropy_file
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 7.1.0.
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.entropy-file
     */
    const SESSION_ENTROPY_FILE = 'session.entropy_file';

    /**
     * session.entropy_length
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 7.1.0.
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.entropy-length
     */
    const SESSION_ENTROPY_LENGTH = 'session.entropy_length';

    /**
     * session.gc_divisor
     *
     * - Default: "100"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.gc-divisor
     */
    const SESSION_GC_DIVISOR = 'session.gc_divisor';

    /**
     * session.gc_maxlifetime
     *
     * - Default: "1440"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.gc-maxlifetime
     */
    const SESSION_GC_MAXLIFETIME = 'session.gc_maxlifetime';

    /**
     * session.gc_probability
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.gc-probability
     */
    const SESSION_GC_PROBABILITY = 'session.gc_probability';

    /**
     * session.sid_bits_per_character
     *
     * - Default: "4"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 7.1.0.
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.sid-bits-per-character
     */
    const SESSION_SID_BITS_PER_CHARACTER = 'session.sid_bits_per_character';

    /**
     * session.sid_length
     *
     * - Default: "32"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 7.1.0.
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.sid-length
     */
    const SESSION_SID_LENGTH = 'session.sid_length';

    /**
     * session.hash_bits_per_character
     *
     * - Default: "5"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 7.1.0.
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.hash-bits-per-character
     */
    const SESSION_HASH_BITS_PER_CHARACTER = 'session.hash_bits_per_character';

    /**
     * session.hash_function
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 7.1.0.
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.hash-function
     */
    const SESSION_HASH_FUNCTION = 'session.hash_function';

    /**
     * session.lazy_write
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 7.0.0.
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.lazy-write
     */
    const SESSION_LAZY_WRITE = 'session.lazy_write';

    /**
     * session.name
     *
     * - Default: "PHPSESSID"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.name
     */
    const SESSION_NAME = 'session.name';

    /**
     * session.referer_check
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.referer-check
     */
    const SESSION_REFERER_CHECK = 'session.referer_check';

    /**
     * session.save_handler
     *
     * - Default: "files"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.save-handler
     */
    const SESSION_SAVE_HANDLER = 'session.save_handler';

    /**
     * session.save_path
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.save-path
     */
    const SESSION_SAVE_PATH = 'session.save_path';

    /**
     * session.serialize_handler
     *
     * - Default: "php"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.serialize-handler
     */
    const SESSION_SERIALIZE_HANDLER = 'session.serialize_handler';

    /**
     * session.upload_progress.cleanup
     *
     * - Default: "1"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/session.configuration.php#ini.session.upload-progress.cleanup
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_UPLOAD_PROGRESS_CLEANUP = 'session.upload_progress.cleanup';

    /**
     * session.upload_progress.enabled
     *
     * - Default: "1"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/session.configuration.php#ini.session.upload-progress.enabled
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_UPLOAD_PROGRESS_ENABLED = 'session.upload_progress.enabled';

    /**
     * session.upload_progress.freq
     *
     * - Default: "1%"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/session.configuration.php#ini.session.upload-progress.freq
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_UPLOAD_PROGRESS_FREQ = 'session.upload_progress.freq';

    /**
     * session.upload_progress.min_freq
     *
     * - Default: "1"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/session.configuration.php#ini.session.upload-progress.min-freq
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_UPLOAD_PROGRESS_MIN_FREQ = 'session.upload_progress.min_freq';

    /**
     * session.upload_progress.name
     *
     * - Default: "PHP_SESSION_UPLOAD_PROGRESS"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/session.configuration.php#ini.session.upload-progress.name
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_UPLOAD_PROGRESS_NAME = 'session.upload_progress.name';

    /**
     * session.upload_progress.prefix
     *
     * - Default: "upload_progress_"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/session.configuration.php#ini.session.upload-progress.prefix
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_UPLOAD_PROGRESS_PREFIX = 'session.upload_progress.prefix';

    /**
     * session.use_strict_mode
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.5.2.
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.use-strict-mode
     */
    const SESSION_USE_STRICT_MODE = 'session.use_strict_mode';

    /**
     * session.use_cookies
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.use-cookies
     */
    const SESSION_USE_COOKIES = 'session.use_cookies';

    /**
     * session.use_only_cookies
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.use-only-cookies
     */
    const SESSION_USE_ONLY_COOKIES = 'session.use_only_cookies';

    /**
     * session.use_trans_sid
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/session.configuration.php#ini.session.use-trans-sid
     */
    const SESSION_USE_TRANS_SID = 'session.use_trans_sid';

    /**
     * session_pgsql.create_table
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_PGSQL_CREATE_TABLE = 'session_pgsql.create_table';

    /**
     * session_pgsql.db
     *
     * - Default: "host=localhost dbname=php_session user=nobody"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_PGSQL_DB = 'session_pgsql.db';

    /**
     * session_pgsql.disable
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_PGSQL_DISABLE = 'session_pgsql.disable';

    /**
     * session_pgsql.failover_mode
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_PGSQL_FAILOVER_MODE = 'session_pgsql.failover_mode';

    /**
     * session_pgsql.gc_interval
     *
     * - Default: "3600"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_PGSQL_GC_INTERVAL = 'session_pgsql.gc_interval';

    /**
     * session_pgsql.keep_expired
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_PGSQL_KEEP_EXPIRED = 'session_pgsql.keep_expired';

    /**
     * session_pgsql.sem_file_name
     *
     * - Default: "/tmp/php_session_pgsql"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_PGSQL_SEM_FILE_NAME = 'session_pgsql.sem_file_name';

    /**
     * session_pgsql.serializable
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_PGSQL_SERIALIZABLE = 'session_pgsql.serializable';

    /**
     * session_pgsql.short_circuit
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_PGSQL_SHORT_CIRCUIT = 'session_pgsql.short_circuit';

    /**
     * session_pgsql.use_app_vars
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_PGSQL_USE_APP_VARS = 'session_pgsql.use_app_vars';

    /**
     * session_pgsql.vacuum_interval
     *
     * - Default: "21600"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SESSION_PGSQL_VACUUM_INTERVAL = 'session_pgsql.vacuum_interval';

    /**
     * short_open_tag
     *
     * - Default: "1"
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.short-open-tag
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SHORT_OPEN_TAG = 'short_open_tag';

    /**
     * SMTP
     *
     * - Default: "localhost"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mail.configuration.php#ini.smtp
     */
    const SMTP = 'SMTP';

    /**
     * smtp_port
     *
     * - Default: "25"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/mail.configuration.php#ini.smtp-port
     */
    const SMTP_PORT = 'smtp_port';

    /**
     * soap.wsdl_cache
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.1.5.
     *
     * @see https://www.php.net/manual/en/soap.configuration.php#ini.soap.wsdl-cache
     */
    const SOAP_WSDL_CACHE = 'soap.wsdl_cache';

    /**
     * soap.wsdl_cache_dir
     *
     * - Default: "/tmp"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/soap.configuration.php#ini.soap.wsdl-cache-dir
     */
    const SOAP_WSDL_CACHE_DIR = 'soap.wsdl_cache_dir';

    /**
     * soap.wsdl_cache_enabled
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/soap.configuration.php#ini.soap.wsdl-cache-enabled
     */
    const SOAP_WSDL_CACHE_ENABLED = 'soap.wsdl_cache_enabled';

    /**
     * soap.wsdl_cache_limit
     *
     * - Default: "5"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.1.5.
     *
     * @see https://www.php.net/manual/en/soap.configuration.php#ini.soap.wsdl-cache-limit
     */
    const SOAP_WSDL_CACHE_LIMIT = 'soap.wsdl_cache_limit';

    /**
     * soap.wsdl_cache_ttl
     *
     * - Default: "86400"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/soap.configuration.php#ini.soap.wsdl-cache-ttl
     */
    const SOAP_WSDL_CACHE_TTL = 'soap.wsdl_cache_ttl';

    /**
     * sql.safe_mode
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.sql.safe-mode
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SQL_SAFE_MODE = 'sql.safe_mode';

    /**
     * sqlite.assoc_case
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/sqlite.configuration.php#ini.sqlite.assoc-case
     */
    const SQLITE_ASSOC_CASE = 'sqlite.assoc_case';

    /**
     * sqlite3.extension_dir
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of PHP 5.3.11.
     *
     * @see        https://www.php.net/manual/en/sqlite3.configuration.php#ini.sqlite3.extension-dir
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SQLITE3_EXTENSION_DIR = 'sqlite3.extension_dir';

    /**
     * sqlite3.defensive
     *
     * - Default: 1
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of PHP 7.2.17 and 7.3.4 for libsqlite ≥ 3.26.0.
     *
     * @see        https://www.php.net/manual/en/sqlite3.configuration.php#ini.sqlite3.defensive
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SQLITE3_DEFENSIVE = 'sqlite3.defensive';

    /**
     * sybase.allow_persistent
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/sybase.configuration.php#ini.sybase.allow-persistent
     */
    const SYBASE_ALLOW_PERSISTENT = 'sybase.allow_persistent';

    /**
     * sybase.interface_file
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     */
    const SYBASE_INTERFACE_FILE = 'sybase.interface_file';

    /**
     * sybase.max_links
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/sybase.configuration.php#ini.sybase.max-links
     */
    const SYBASE_MAX_LINKS = 'sybase.max_links';

    /**
     * sybase.max_persistent
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/sybase.configuration.php#ini.sybase.max-persistent
     */
    const SYBASE_MAX_PERSISTENT = 'sybase.max_persistent';

    /**
     * sybase.min_error_severity
     *
     * - Default: "10"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/sybase.configuration.php#ini.sybase.min-error-severity
     */
    const SYBASE_MIN_ERROR_SEVERITY = 'sybase.min_error_severity';

    /**
     * sybase.min_message_severity
     *
     * - Default: "10"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/sybase.configuration.php#ini.sybase.min-message-severity
     */
    const SYBASE_MIN_MESSAGE_SEVERITY = 'sybase.min_message_severity';

    /**
     * sybct.deadlock_retry_count
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/sybase.configuration.php#ini.sybct.deadlock-retry-count
     */
    const SYBCT_DEADLOCK_RETRY_COUNT = 'sybct.deadlock_retry_count';

    /**
     * sybct.login_timeout
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/sybase.configuration.php#ini.sybct.login-timeout
     */
    const SYBCT_LOGIN_TIMEOUT = 'sybct.login_timeout';

    /**
     * sybct.packet_size
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     */
    const SYBCT_PACKET_SIZE = 'sybct.packet_size';

    /**
     * sybct.timeout
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/sybase.configuration.php#ini.sybct.timeout
     */
    const SYBCT_TIMEOUT = 'sybct.timeout';

    /**
     * syslog.facility
     *
     * - Default: "LOG_USER"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of PHP 7.3.0.
     *
     * @see        https://www.php.net/manual/en/errorfunc.configuration.php#ini.syslog.facility
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SYSLOG_FACILITY = 'syslog.facility';

    /**
     * syslog.filter
     *
     * - Default: "no-ctrl"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available as of PHP 7.3.0.
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.syslog.filter
     */
    const SYSLOG_FILTER = 'syslog.filter';

    /**
     * syslog.ident
     *
     * - Default: "php"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of PHP 7.3.0.
     *
     * @see        https://www.php.net/manual/en/errorfunc.configuration.php#ini.syslog.ident
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SYSLOG_IDENT = 'syslog.ident';

    /**
     * sys_temp_dir
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.5.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const SYS_TEMP_DIR = 'sys_temp_dir';

    /**
     * sysvshm.init_mem
     *
     * - Default: "10000"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/sem.configuration.php#ini.sysvshm.init-mem
     */
    const SYSVSHM_INIT_MEM = 'sysvshm.init_mem';

    /**
     * tidy.clean_output
     *
     * - Default: "0"
     * - Changeable: PHP_INI_USER
     * - Changelog: PHP_INI_PERDIR in PHP 5.
     *
     * @see https://www.php.net/manual/en/tidy.configuration.php#ini.tidy.clean-output
     */
    const TIDY_CLEAN_OUTPUT = 'tidy.clean_output';

    /**
     * tidy.default_config
     *
     * - Default: ""
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/tidy.configuration.php#ini.tidy.default-config
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const TIDY_DEFAULT_CONFIG = 'tidy.default_config';

    /**
     * track_errors
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.track-errors
     */
    const TRACK_ERRORS = 'track_errors';

    /**
     * unserialize_callback_func
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/var.configuration.php#ini.unserialize-callback-func
     */
    const UNSERIALIZE_CALLBACK_FUNC = 'unserialize_callback_func';

    /**
     * uploadprogress.file.filename_template
     *
     * - Default: "/tmp/upt_%s.txt"
     * - Changeable: PHP_INI_ALL
     */
    const UPLOADPROGRESS_FILE_FILENAME_TEMPLATE = 'uploadprogress.file.filename_template';

    /**
     * upload_max_filesize
     *
     * - Default: "2M"
     * - Changeable: PHP_INI_PERDIR
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const UPLOAD_MAX_FILESIZE = 'upload_max_filesize';

    /**
     * max_file_uploads
     *
     * - Default: 20
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.2.12.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.max-file-uploads
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const MAX_FILE_UPLOADS = 'max_file_uploads';

    /**
     * upload_tmp_dir
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.upload-tmp-dir
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const UPLOAD_TMP_DIR = 'upload_tmp_dir';

    /**
     * url_rewriter.tags
     *
     * - Default: "a=href,area=href,frame=src,form=,fieldset="
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/outcontrol.configuration.php#ini.url-rewriter.tags
     */
    const URL_REWRITER_TAGS = 'url_rewriter.tags';

    /**
     * user_agent
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/filesystem.configuration.php#ini.user-agent
     */
    const USER_AGENT = 'user_agent';

    /**
     * user_dir
     *
     * - Default: NULL
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.user-dir
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const USER_DIR = 'user_dir';

    /**
     * user_ini.cache_ttl
     *
     * - Default: "300"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.3.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.user-ini.cache-ttl
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const USER_INI_CACHE_TTL = 'user_ini.cache_ttl';

    /**
     * user_ini.filename
     *
     * - Default: ".user.ini"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.3.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.user-ini.filename
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const USER_INI_FILENAME = 'user_ini.filename';

    /**
     * uopz.disable
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of uopz 5.0.2
     *
     * @see        https://www.php.net/manual/en/uopz.configuration.php#ini.uopz.disable
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const UOPZ_DISABLE = 'uopz.disable';

    /**
     * uopz.exit
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available as of uopz 6.0.1
     *
     * @see        https://www.php.net/manual/en/uopz.configuration.php#ini.uopz.exit
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const UOPZ_EXIT = 'uopz.exit';

    /**
     * valkyrie.auto_validate
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     */
    const VALKYRIE_AUTO_VALIDATE = 'valkyrie.auto_validate';

    /**
     * valkyrie.config_path
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     */
    const VALKYRIE_CONFIG_PATH = 'valkyrie.config_path';

    /**
     * variables_order
     *
     * - Default: "EGPCS"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: PHP_INI_ALL in PHP <= 5.0.5.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.variables-order
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const VARIABLES_ORDER = 'variables_order';

    /**
     * vld.active
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const VLD_ACTIVE = 'vld.active';

    /**
     * vld.execute
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since vld 0.8.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const VLD_EXECUTE = 'vld.execute';

    /**
     * vld.skip_append
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since vld 0.8.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const VLD_SKIP_APPEND = 'vld.skip_append';

    /**
     * vld.skip_prepend
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since vld 0.8.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const VLD_SKIP_PREPEND = 'vld.skip_prepend';

    /**
     * windows.show_crt_warning
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.windows-show-crt-warning
     */
    const WINDOWS_SHOW_CRT_WARNING = 'windows.show_crt_warning';

    /**
     * xbithack
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/apache.configuration.php#ini.xbithack
     */
    const XBITHACK = 'xbithack';

    /**
     * xdebug.auto_profile
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in Xdebug 2.0.0.
     */
    const XDEBUG_AUTO_PROFILE = 'xdebug.auto_profile';

    /**
     * xdebug.auto_profile_mode
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in Xdebug 2.0.0.
     */
    const XDEBUG_AUTO_PROFILE_MODE = 'xdebug.auto_profile_mode';

    /**
     * xdebug.auto_trace
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_AUTO_TRACE = 'xdebug.auto_trace';

    /**
     * xdebug.collect_includes
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_COLLECT_INCLUDES = 'xdebug.collect_includes';

    /**
     * xdebug.collect_params
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_COLLECT_PARAMS = 'xdebug.collect_params';

    /**
     * xdebug.collect_return
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_COLLECT_RETURN = 'xdebug.collect_return';

    /**
     * xdebug.collect_vars
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_COLLECT_VARS = 'xdebug.collect_vars';

    /**
     * xdebug.default_enable
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: PHP_INI_SYSTEM in Xdebug 1.
     */
    const XDEBUG_DEFAULT_ENABLE = 'xdebug.default_enable';

    /**
     * xdebug.dump.COOKIE
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_DUMP_COOKIE = 'xdebug.dump.COOKIE';

    /**
     * xdebug.dump.ENV
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_DUMP_ENV = 'xdebug.dump.ENV';

    /**
     * xdebug.dump.FILES
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_DUMP_FILES = 'xdebug.dump.FILES';

    /**
     * xdebug.dump.GET
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_DUMP_GET = 'xdebug.dump.GET';

    /**
     * xdebug.dump.POST
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_DUMP_POST = 'xdebug.dump.POST';

    /**
     * xdebug.dump.REQUEST
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_DUMP_REQUEST = 'xdebug.dump.REQUEST';

    /**
     * xdebug.dump.SERVER
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_DUMP_SERVER = 'xdebug.dump.SERVER';

    /**
     * xdebug.dump.SESSION
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_DUMP_SESSION = 'xdebug.dump.SESSION';

    /**
     * xdebug.dump_globals
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_DUMP_GLOBALS = 'xdebug.dump_globals';

    /**
     * xdebug.dump_once
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_DUMP_ONCE = 'xdebug.dump_once';

    /**
     * xdebug.dump_undefined
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_DUMP_UNDEFINED = 'xdebug.dump_undefined';

    /**
     * xdebug.extended_info
     *
     * - Default: "1"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since Xdebug 2.0.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const XDEBUG_EXTENDED_INFO = 'xdebug.extended_info';

    /**
     * xdebug.idekey
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_IDEKEY = 'xdebug.idekey';

    /**
     * xdebug.manual_url
     *
     * - Default: "http://www.php.net"
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_MANUAL_URL = 'xdebug.manual_url';

    /**
     * xdebug.max_nesting_level
     *
     * - Default: "100"
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_MAX_NESTING_LEVEL = 'xdebug.max_nesting_level';

    /**
     * xdebug.output_dir
     *
     * - Default: "/tmp"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: PHP_INI_SYSTEM in Xdebug <= 1.2.0. Removed in Xdebug 2.0.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const XDEBUG_OUTPUT_DIR = 'xdebug.output_dir';

    /**
     * xdebug.profiler_aggregate
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since Xdebug 2.0.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const XDEBUG_PROFILER_AGGREGATE = 'xdebug.profiler_aggregate';

    /**
     * xdebug.profiler_append
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since Xdebug 2.0.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const XDEBUG_PROFILER_APPEND = 'xdebug.profiler_append';

    /**
     * xdebug.profiler_enable
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since Xdebug 2.0.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const XDEBUG_PROFILER_ENABLE = 'xdebug.profiler_enable';

    /**
     * xdebug.profiler_enable_trigger
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since Xdebug 2.0.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const XDEBUG_PROFILER_ENABLE_TRIGGER = 'xdebug.profiler_enable_trigger';

    /**
     * xdebug.profiler_output_dir
     *
     * - Default: "/tmp"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since Xdebug 2.0.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const XDEBUG_PROFILER_OUTPUT_DIR = 'xdebug.profiler_output_dir';

    /**
     * xdebug.profiler_output_name
     *
     * - Default: "cachegrind.out.%p"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since Xdebug 2.0.0.
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const XDEBUG_PROFILER_OUTPUT_NAME = 'xdebug.profiler_output_name';

    /**
     * xdebug.remote_autostart
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_REMOTE_AUTOSTART = 'xdebug.remote_autostart';

    /**
     * xdebug.remote_enable
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     *
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const XDEBUG_REMOTE_ENABLE = 'xdebug.remote_enable';

    /**
     * xdebug.remote_handler
     *
     * - Default: "dbgp"
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_REMOTE_HANDLER = 'xdebug.remote_handler';

    /**
     * xdebug.remote_host
     *
     * - Default: "localhost"
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_REMOTE_HOST = 'xdebug.remote_host';

    /**
     * xdebug.remote_log
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_REMOTE_LOG = 'xdebug.remote_log';

    /**
     * xdebug.remote_mode
     *
     * - Default: "req"
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_REMOTE_MODE = 'xdebug.remote_mode';

    /**
     * xdebug.remote_port
     *
     * - Default: "9000"
     * - Changeable: PHP_INI_ALL
     */
    const XDEBUG_REMOTE_PORT = 'xdebug.remote_port';

    /**
     * xdebug.show_exception_trace
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_SHOW_EXCEPTION_TRACE = 'xdebug.show_exception_trace';

    /**
     * xdebug.show_local_vars
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_SHOW_LOCAL_VARS = 'xdebug.show_local_vars';

    /**
     * xdebug.show_mem_delta
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_SHOW_MEM_DELTA = 'xdebug.show_mem_delta';

    /**
     * xdebug.trace_format
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_TRACE_FORMAT = 'xdebug.trace_format';

    /**
     * xdebug.trace_options
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_TRACE_OPTIONS = 'xdebug.trace_options';

    /**
     * xdebug.trace_output_dir
     *
     * - Default: "/tmp"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_TRACE_OUTPUT_DIR = 'xdebug.trace_output_dir';

    /**
     * xdebug.trace_output_name
     *
     * - Default: "trace.%c"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_TRACE_OUTPUT_NAME = 'xdebug.trace_output_name';

    /**
     * xdebug.var_display_max_children
     *
     * - Default: "128"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_VAR_DISPLAY_MAX_CHILDREN = 'xdebug.var_display_max_children';

    /**
     * xdebug.var_display_max_data
     *
     * - Default: "512"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_VAR_DISPLAY_MAX_DATA = 'xdebug.var_display_max_data';

    /**
     * xdebug.var_display_max_depth
     *
     * - Default: "3"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since Xdebug 2.0.0.
     */
    const XDEBUG_VAR_DISPLAY_MAX_DEPTH = 'xdebug.var_display_max_depth';

    /**
     * xmlrpc_errors
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     *
     * @see        https://www.php.net/manual/en/errorfunc.configuration.php#ini.xmlrpc-errors
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const XMLRPC_ERRORS = 'xmlrpc_errors';

    /**
     * xmlrpc_error_number
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/errorfunc.configuration.php#ini.xmlrpc-error-number
     */
    const XMLRPC_ERROR_NUMBER = 'xmlrpc_error_number';

    /**
     * xmms.path
     *
     * - Default: "/usr/bin/xmms"
     * - Changeable: PHP_INI_ALL
     */
    const XMMS_PATH = 'xmms.path';

    /**
     * xmms.session
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     */
    const XMMS_SESSION = 'xmms.session';

    /**
     * xsl.security_prefs
     *
     * - Default: "44"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.5.0.
     */
    const XSL_SECURITY_PREFS = 'xsl.security_prefs';

    /**
     * y2k_compliance
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Removed in PHP 5.4.0.
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.y2k-compliance
     */
    const Y2K_COMPLIANCE = 'y2k_compliance';

    /**
     * yami.response.timeout
     *
     * - Default: "5"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since yami 1.0.1.
     */
    const YAMI_RESPONSE_TIMEOUT = 'yami.response.timeout';

    /**
     * yaz.keepalive
     *
     * - Default: "120"
     * - Changeable: PHP_INI_ALL
     */
    const YAZ_KEEPALIVE = 'yaz.keepalive';

    /**
     * yaz.log_mask
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since yaz 1.0.3.
     */
    const YAZ_LOG_MASK = 'yaz.log_mask';

    /**
     * zend.assertions
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 7.0.0.
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.zend.assertions
     */
    const ZEND_ASSERTIONS = 'zend.assertions';

    /**
     * zend.detect_unicode
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.zend.detect-unicode
     */
    const ZEND_DETECT_UNICODE = 'zend.detect_unicode';

    /**
     * zend.enable_gc
     *
     * - Default: "1"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.3.0.
     *
     * @see https://www.php.net/manual/en/info.configuration.php#ini.zend.enable-gc
     */
    const ZEND_ENABLE_GC = 'zend.enable_gc';

    /**
     * zend.multibyte
     *
     * - Default: "0"
     * - Changeable: PHP_INI_PERDIR
     * - Changelog: Available since PHP 5.4.0.
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.zend.multibyte
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ZEND_MULTIBYTE = 'zend.multibyte';

    /**
     * zend.script_encoding
     *
     * - Default: NULL
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.4.0
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.zend.script-encoding
     */
    const ZEND_SCRIPT_ENCODING = 'zend.script_encoding';

    /**
     * zend.signal_check
     *
     * - Default: "0"
     * - Changeable: PHP_INI_SYSTEM
     * - Changelog: Available since PHP 5.4.0
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.zend.signal-check
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ZEND_SIGNAL_CHECK = 'zend.signal_check';

    /**
     * zend.ze1_compatibility_mode
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     * - Changelog: Available since PHP 5.0.0. Removed in PHP 5.3.0.
     *
     * @see https://www.php.net/manual/en/ini.core.php#ini.zend.ze1-compatibility-mode
     */
    const ZEND_ZE1_COMPATIBILITY_MODE = 'zend.ze1_compatibility_mode';

    /**
     * zend_extension
     *
     * - Default: NULL
     * - Changeable:  only
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.zend-extension
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ZEND_EXTENSION = 'zend_extension';

    /**
     * zend_extension_debug
     *
     * - Default: NULL
     * - Changeable:  only
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.zend-extension-debug
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ZEND_EXTENSION_DEBUG = 'zend_extension_debug';

    /**
     * zend_extension_debug_ts
     *
     * - Default: NULL
     * - Changeable:  only
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.zend-extension-debug-ts
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ZEND_EXTENSION_DEBUG_TS = 'zend_extension_debug_ts';

    /**
     * zend_extension_ts
     *
     * - Default: NULL
     * - Changeable:  only
     *
     * @see        https://www.php.net/manual/en/ini.core.php#ini.zend-extension-ts
     * @deprecated This configuration setting cannot be set at Runtime
     */
    const ZEND_EXTENSION_TS = 'zend_extension_ts';

    /**
     * zlib.output_compression
     *
     * - Default: "0"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/zlib.configuration.php#ini.zlib.output-compression
     */
    const ZLIB_OUTPUT_COMPRESSION = 'zlib.output_compression';

    /**
     * zlib.output_compression_level
     *
     * - Default: "-1"
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/zlib.configuration.php#ini.zlib.output-compression-level
     */
    const ZLIB_OUTPUT_COMPRESSION_LEVEL = 'zlib.output_compression_level';

    /**
     * zlib.output_handler
     *
     * - Default: ""
     * - Changeable: PHP_INI_ALL
     *
     * @see https://www.php.net/manual/en/zlib.configuration.php#ini.zlib.output-handler
     */
    const ZLIB_OUTPUT_HANDLER = 'zlib.output_handler';
}
