<?php

namespace Maxpay\Lib\Model;

/**
 * Class SubscriptionProduct
 * @package Maxpay\Lib\Model
 */
class SubscriptionProduct extends BaseProduct
{
    /**
     * @param string $productId
     * @param string $productName
     * @param float $amount
     * @param string $currency
     * @param int $subscriptionLength
     * @param string $subscriptionPeriod Allowed types - 24H, 7D, 30D, 365D
     * @param float|null $subscriptionTrialPrice
     * @param float|null $subscriptionTrialStart
     * @param float|null $subscriptionTrialEnd
     * @param int|null $subscriptionBillingCycles
     * @param float|null $subscriptionEndDate
     * @param float|null $discount
     * @param string|null $discountType
     * @param string|null $productDescription
     * @throws \Maxpay\Lib\Exception\GeneralMaxpayException
     */
    public function __construct(
        string $productId,
        string $productName,
        float $amount,
        string $currency,
        int $subscriptionLength,
        string $subscriptionPeriod,
        float $subscriptionTrialPrice = null,
        float $subscriptionTrialStart = null,
        float $subscriptionTrialEnd = null,
        int $subscriptionBillingCycles = null,
        float $subscriptionEndDate = null,
        float $discount = null,
        string $discountType = null,
        string $productDescription = null
    ) {
        parent::__construct(
            self::TYPE_SUBSCRIPTION,
            $productId,
            $productName,
            $currency,
            $amount,
            $discount,
            $discountType,
            $productDescription,
            $subscriptionLength,
            $subscriptionPeriod,
            $subscriptionBillingCycles,
            $subscriptionEndDate,
            null,
            null,
            null,           
            $subscriptionTrialPrice,
            $subscriptionTrialStart,
            $subscriptionTrialEnd    
        );
    }
}
