<?php
/**
 * Copyright © 2019 MultiSafepay, Inc. All rights reserved.
 * See DISCLAIMER.md for disclaimer details.
 */

namespace MultiSafepay\Client;

interface ApiKeyInterface
{

    /**
     * @return string
     */
    public function get(): string;
}
