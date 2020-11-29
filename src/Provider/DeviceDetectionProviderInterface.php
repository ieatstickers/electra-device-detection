<?php

namespace Electra\DeviceDetection\Provider;

use Electra\Core\Enum\Enum;
use Electra\Core\Exception\ElectraException;
use Electra\DeviceDetection\Enum\BrowserEnum;
use Electra\DeviceDetection\Enum\DeviceTypeEnum;
use Electra\DeviceDetection\Enum\OperatingSystemEnum;

interface DeviceDetectionProviderInterface
{
  /**
   * @return DeviceTypeEnum
   * @throws ElectraException
   */
  public function getDeviceType(): DeviceTypeEnum;

  /**
   * @return OperatingSystemEnum | Enum
   * @throws ElectraException
   */
  public function getOs(): OperatingSystemEnum;

  /** @return string */
  public function getOsVersion(): string;

  /**
   * Returns null if client is not a browser
   *
   * @return BrowserEnum | Enum | null
   * @throws ElectraException
   */
  public function getBrowser(): ?BrowserEnum;

  /**
   * Returns null if client is not a browser
   * @return string|null
   */
  public function getBrowserVersion(): ?string;
}
