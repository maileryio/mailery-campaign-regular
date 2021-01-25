<?php

namespace Mailery\Campaign\Regular\Model;

use Mailery\Campaign\Model\CampaignTypeInterface;

class RegularCampaignType implements CampaignTypeInterface
{
    /**
     * @inheritdoc
     */
    public function getLabel(): string
    {
        return 'Regular campaign';
    }

    /**
     * @inheritdoc
     */
    public function getShortLabel(): string
    {
        return 'Regular campaign';
    }

    /**
     * @inheritdoc
     */
    public function getCreateRouteName(): ?string
    {
        return '/campaign/regular/create';
    }

    /**
     * @inheritdoc
     */
    public function getCreateRouteParams(): array
    {
        return [];
    }
}
