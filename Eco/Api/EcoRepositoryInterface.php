<?php

namespace My\Eco\Api;

interface EcoRepositoryInterface {

  /**
   * @param int $productId
   *
   * @return object
   */
  public function getEcoByProductId(int $productId): object;

  /**
   * @param int $productId
   *
   * @return object
   */
  public function getEcoProducts(int $productId): array;
}