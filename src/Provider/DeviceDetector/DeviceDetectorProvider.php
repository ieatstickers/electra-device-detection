<?php

namespace Electra\DeviceDetection\Provider\DeviceDetector;

use DeviceDetector\DeviceDetector;
use Electra\Core\Enum\Enum;
use Electra\Core\Exception\ElectraException;
use Electra\DeviceDetection\Enum\BrowserEnum;
use Electra\DeviceDetection\Enum\DeviceTypeEnum;
use Electra\DeviceDetection\Enum\OperatingSystemEnum;
use Electra\DeviceDetection\Provider\DeviceDetectionProviderInterface;

class DeviceDetectorProvider implements DeviceDetectionProviderInterface
{
  /** @var DeviceDetector */
  private $provider;

  /**
   * DeviceDetectorProvider constructor.
   * @param string $userAgent
   */
  public function __construct(string $userAgent)
  {
    $this->initProvider($userAgent);
  }

  /** @param string $userAgent */
  public function initProvider(string $userAgent)
  {
    $deviceDetector = new DeviceDetector($userAgent);
    $deviceDetector->parse();
    $this->provider = $deviceDetector;
  }

  /** @return DeviceDetector */
  private function getProvider()
  {
    return $this->provider;
  }

  /**
   * @return DeviceTypeEnum
   * @throws ElectraException
   */
  public function getDeviceType(): DeviceTypeEnum
  {
    $provider = $this->getProvider();
    $browser = $this->getBrowser();

    if (
      $provider->isDesktop()
      && $browser
    )
    {
      return DeviceTypeEnum::DESKTOP_BROWSER();
    }
    elseif ($provider->isTablet())
    {
      if ($provider->isMobileApp())
      {
        return DeviceTypeEnum::TABLET_APP();
      }

      return DeviceTypeEnum::TABLET_BROWSER();
    }
    elseif ($provider->isMobile())
    {
      if ($provider->isMobileApp())
      {
        return DeviceTypeEnum::MOBILE_APP();
      }

      return DeviceTypeEnum::MOBILE_BROWSER();
    }

    return DeviceTypeEnum::UNKNOWN();
  }

  /**
   * @return OperatingSystemEnum | Enum
   * @throws ElectraException
   */
  public function getOs(): OperatingSystemEnum
  {
    $osDetails = $this->getProvider()->getOs();
    return OperatingSystemEnum::create($osDetails['name']);
  }

  /** @return string */
  public function getOsVersion(): string
  {
    $osDetails = $this->getProvider()->getOs();
    return $osDetails['version'];
  }

  /**
   * Returns null if client is not a browser
   *
   * @return BrowserEnum | Enum | null
   * @throws ElectraException
   */
  public function getBrowser(): ?BrowserEnum
  {
    $clientDetails = $this->getProvider()->getClient();

    if ($clientDetails['type'] !== 'browser') return null;

    return BrowserEnum::create($clientDetails['name']);
  }

  /**
   * Returns null if client is not a browser
   * @return string|null
   */
  public function getBrowserVersion(): ?string
  {
    $clientDetails = $this->getProvider()->getClient();

    if ($clientDetails['type'] !== 'browser') return null;

    return $clientDetails['version'];
  }
}
