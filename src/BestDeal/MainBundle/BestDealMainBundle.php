<?php

namespace BestDeal\MainBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BestDealMainBundle extends Bundle
{
     public function getParent()
    {
        return 'FOSUserBundle';
    }
}
