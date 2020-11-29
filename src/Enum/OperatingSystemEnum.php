<?php

namespace Electra\DeviceDetection\Enum;

use Electra\Core\Enum\Enum;

/**
 * * Hydrated from Device Detector: https://github.com/matomo-org/device-detector
 *
 * @method static $this AIX
 * @method static $this ANDROID
 * @method static $this AMIGA_OS
 * @method static $this APPLE_TV
 * @method static $this ARCH_LINUX
 * @method static $this BACKTRACK
 * @method static $this BADA
 * @method static $this BE_OS
 * @method static $this BLACKBERRY_OS
 * @method static $this BLACKBERRY_TABLET_OS
 * @method static $this BREW
 * @method static $this CENTOS
 * @method static $this CHROME_OS
 * @method static $this CYANOGEN_MOD
 * @method static $this DEBIAN
 * @method static $this DRAGON_FLY
 * @method static $this FEDORA
 * @method static $this FIREFOX_OS
 * @method static $this FIRE_OS
 * @method static $this FREE_BSD
 * @method static $this GENTOO
 * @method static $this GOOGLE_TV
 * @method static $this HP_UX
 * @method static $this HAIKU_OS
 * @method static $this IRIX
 * @method static $this INFERNO
 * @method static $this KAI_OS
 * @method static $this KNOPPIX
 * @method static $this KUBUNTU
 * @method static $this GNU_LINUX
 * @method static $this LUBUNTU
 * @method static $this VECTORLINUX
 * @method static $this MAC
 * @method static $this MAEMO
 * @method static $this MANDRIVA
 * @method static $this MEEGO
 * @method static $this MOCOR_DROID
 * @method static $this MINT
 * @method static $this MILD_WILD
 * @method static $this MORPH_OS
 * @method static $this NET_BSD
 * @method static $this MTK_NUCLEUS
 * @method static $this NINTENDO
 * @method static $this NINTENDO_MOBILE
 * @method static $this OS_2
 * @method static $this OSF1
 * @method static $this ORDISSIMO
 * @method static $this OPEN_BSD
 * @method static $this PLAYSTATION_PORTABLE
 * @method static $this PLAYSTATION
 * @method static $this RED_HAT
 * @method static $this RISC_OS
 * @method static $this REMIX_OS
 * @method static $this RAZODROID
 * @method static $this SUSE
 * @method static $this SABAYON
 * @method static $this SAILFISH_OS
 * @method static $this SLACKWARE
 * @method static $this SOLARIS
 * @method static $this SYLLABLE
 * @method static $this SYMBIAN
 * @method static $this SYMBIAN_OS
 * @method static $this SYMBIAN_OS_SERIES_40
 * @method static $this SYMBIAN_OS_SERIES_60
 * @method static $this SYMBIAN_3
 * @method static $this THREADX
 * @method static $this TIZEN
 * @method static $this UBUNTU
 * @method static $this WEB_TV
 * @method static $this WINDOWS
 * @method static $this WINDOWS_CE
 * @method static $this WINDOWS_IOT
 * @method static $this WINDOWS_MOBILE
 * @method static $this WINDOWS_PHONE
 * @method static $this WINDOWS_RT
 * @method static $this XBOX
 * @method static $this XUBUNTU
 * @method static $this YUN_OS
 * @method static $this IOS
 * @method static $this PALM_OS
 * @method static $this WEB_OS
 */
class OperatingSystemEnum extends Enum
{
  const AIX                  = 'AIX';
  const ANDROID              = 'Android';
  const AMIGA_OS             = 'AmigaOS';
  const APPLE_TV             = 'Apple TV';
  const ARCH_LINUX           = 'Arch Linux';
  const BACKTRACK            = 'BackTrack';
  const BADA                 = 'Bada';
  const BE_OS                = 'BeOS';
  const BLACKBERRY_OS        = 'BlackBerry OS';
  const BLACKBERRY_TABLET_OS = 'BlackBerry Tablet OS';
  const BREW                 = 'Brew';
  const CENTOS               = 'CentOS';
  const CHROME_OS            = 'Chrome OS';
  const CYANOGEN_MOD         = 'CyanogenMod';
  const DEBIAN               = 'Debian';
  const DRAGON_FLY           = 'DragonFly';
  const FEDORA               = 'Fedora';
  const FIREFOX_OS           = 'Firefox OS';
  const FIRE_OS              = 'Fire OS';
  const FREE_BSD             = 'FreeBSD';
  const GENTOO               = 'Gentoo';
  const GOOGLE_TV            = 'Google TV';
  const HP_UX                = 'HP-UX';
  const HAIKU_OS             = 'Haiku OS';
  const IRIX                 = 'IRIX';
  const INFERNO              = 'Inferno';
  const KAI_OS               = 'KaiOS';
  const KNOPPIX              = 'Knoppix';
  const KUBUNTU              = 'Kubuntu';
  const GNU_LINUX            = 'GNU/Linux';
  const LUBUNTU              = 'Lubuntu';
  const VECTORLINUX          = 'VectorLinux';
  const MAC                  = 'Mac';
  const MAEMO                = 'Maemo';
  const MANDRIVA             = 'Mandriva';
  const MEEGO                = 'MeeGo';
  const MOCOR_DROID          = 'MocorDroid';
  const MINT                 = 'Mint';
  const MILD_WILD            = 'MildWild';
  const MORPH_OS             = 'MorphOS';
  const NET_BSD              = 'NetBSD';
  const MTK_NUCLEUS          = 'MTK / Nucleus';
  const NINTENDO             = 'Nintendo';
  const NINTENDO_MOBILE      = 'Nintendo Mobile';
  const OS_2                 = 'OS/2';
  const OSF1                 = 'OSF1';
  const ORDISSIMO            = 'Ordissimo';
  const OPEN_BSD             = 'OpenBSD';
  const PLAYSTATION_PORTABLE = 'PlayStation Portable';
  const PLAYSTATION          = 'PlayStation';
  const RED_HAT              = 'Red Hat';
  const RISC_OS              = 'RISC OS';
  const REMIX_OS             = 'Remix OS';
  const RAZODROID            = 'RazoDroiD';
  const SUSE                 = 'SUSE';
  const SABAYON              = 'Sabayon';
  const SAILFISH_OS          = 'Sailfish OS';
  const SLACKWARE            = 'Slackware';
  const SOLARIS              = 'Solaris';
  const SYLLABLE             = 'Syllable';
  const SYMBIAN              = 'Symbian';
  const SYMBIAN_OS           = 'Symbian OS';
  const SYMBIAN_OS_SERIES_40 = 'Symbian OS Series 40';
  const SYMBIAN_OS_SERIES_60 = 'Symbian OS Series 60';
  const SYMBIAN_3            = 'Symbian^3';
  const THREADX              = 'ThreadX';
  const TIZEN                = 'Tizen';
  const UBUNTU               = 'Ubuntu';
  const WEB_TV               = 'WebTV';
  const WINDOWS              = 'Windows';
  const WINDOWS_CE           = 'Windows CE';
  const WINDOWS_IOT          = 'Windows IoT';
  const WINDOWS_MOBILE       = 'Windows Mobile';
  const WINDOWS_PHONE        = 'Windows Phone';
  const WINDOWS_RT           = 'Windows RT';
  const XBOX                 = 'Xbox';
  const XUBUNTU              = 'Xubuntu';
  const YUN_OS               = 'YunOs';
  const IOS                  = 'iOS';
  const PALM_OS              = 'palmOS';
  const WEB_OS               = 'webOS';

  public function isMobile()
  {

  }
}
