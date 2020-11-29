<?php

namespace Electra\DeviceDetection;

use Electra\Core\Exception\ElectraException;
use Electra\DeviceDetection\Enum\BrowserEnum;
use Electra\DeviceDetection\Enum\DeviceTypeEnum;
use Electra\DeviceDetection\Enum\OperatingSystemEnum;
use Electra\DeviceDetection\Provider\DeviceDetectionProviderInterface;
use Electra\DeviceDetection\Provider\DeviceDetector\DeviceDetectorProvider;
use Electra\Utility\Arrays;

class DeviceDetection
{
  /** @var DeviceDetectionProviderInterface */
  protected static $provider;
  /** @var string */
  protected static $userAgent;

  /**
   * @param string|null $userAgent
   * @throws ElectraException
   */
  public static function init(?string $userAgent = null)
  {
    if (!$userAgent)
    {
      $userAgent = Arrays::getByKey('HTTP_USER_AGENT', $_SERVER);
    }

    if (!$userAgent)
    {
      throw new ElectraException('Cannot use DeviceDetection. No user agent found.');
    }

    self::$userAgent = $userAgent;
    self::$provider = new DeviceDetectorProvider($userAgent);
  }

  /**
   * @return DeviceDetectionProviderInterface
   * @throws ElectraException
   */
  private static function getProvider(): DeviceDetectionProviderInterface
  {
    if (!self::$provider)
    {
      self::init();
    }

    return self::$provider;
  }

  /**
   * @return string
   * @throws ElectraException
   */
  public static function getUserAgent(): string
  {
    if (self::$userAgent)
    {
      return self::$userAgent;
    }

    self::init();

    return self::$userAgent;
  }

  /**
   * @return DeviceTypeEnum
   * @throws ElectraException
   */
  public static function getDeviceType(): DeviceTypeEnum
  {
    return self::getProvider()->getDeviceType();
  }

  /**
   * @return OperatingSystemEnum
   * @throws ElectraException
   */
  public static function getOs(): OperatingSystemEnum
  {
    return self::getProvider()->getOs();
  }

  /**
   * @return string
   * @throws ElectraException
   */
  public static function getOsVersion(): string
  {
    return self::getProvider()->getOsVersion();
  }

  /**
   * @return BrowserEnum | null
   * @throws ElectraException
   */
  public static function getBrowser(): ?BrowserEnum
  {
    return self::getProvider()->getBrowser();
  }

  /**
   * @return string|null
   * @throws ElectraException
   */
  public static function getBrowserVersion(): ?string
  {
    return self::getProvider()->getBrowserVersion();
  }
}
