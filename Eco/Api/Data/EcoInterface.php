<?php

namespace My\Eco\Api\Data;

interface EcoInterface {
  const PRODUCT_ID = 'product_id';
  const MATERIAL = 'material';
  const COLOR = 'color';

  /**
   * @return int
   */
  public function getProductId(): int;

  /**
   * @param int $productId
   *
   * @return mixed
   */
  public function setProductId(int $productId);

  /**
   * @return string
   */
  public function getMaterial(): string;

  /**
   * @param string $material
   *
   * @return mixed
   */
  public function setMaterial(string $material);

  /**
   * @return string
   */
  public function getColor(): string;

  /**
   * @param string $color
   *
   * @return mixed
   */
  public function setColor(string $color);
}