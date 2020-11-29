<?php

namespace Electra\DeviceDetection\Enum;

use Electra\Core\Enum\Enum;

/**
 * @method static $this UNKNOWN
 * @method static $this DESKTOP_BROWSER
 * @method static $this TABLET_BROWSER
 * @method static $this MOBILE_BROWSER
 * @method static $this DESKTOP_APP
 * @method static $this TABLET_APP
 * @method static $this MOBILE_APP
 */
class DeviceTypeEnum extends Enum
{
  const UNKNOWN         = 'unknown';
  const DESKTOP_BROWSER = 'desktop_browser';
  const TABLET_BROWSER  = 'tablet_browser';
  const MOBILE_BROWSER  = 'mobile_browser';
  const DESKTOP_APP     = 'desktop_app';
  const TABLET_APP      = 'tablet_app';
  const MOBILE_APP      = 'mobile_app';

  /** @return bool */
  public function isUnknown(): bool
  {
    return $this->getValue() == self::UNKNOWN;
  }

  /** @return bool */
  public function isDesktopBrowser(): bool
  {
    return $this->getValue() == self::DESKTOP_BROWSER;
  }

  /** @return bool */
  public function isTabletBrowser(): bool
  {
    return $this->getValue() == self::TABLET_BROWSER;
  }

  /** @return bool */
  public function isMobileBrowser(): bool
  {
    return $this->getValue() == self::MOBILE_BROWSER;
  }

  /** @return bool */
  public function isDesktopApp(): bool
  {
    return $this->getValue() == self::DESKTOP_APP;
  }

  /** @return bool */
  public function isTabletApp(): bool
  {
    return $this->getValue() == self::TABLET_APP;
  }

  /** @return bool */
  public function isMobileApp(): bool
  {
    return $this->getValue() == self::MOBILE_APP;
  }
}
