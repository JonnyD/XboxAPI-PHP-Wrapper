<?php

namespace XboxAPI\API;

use XboxAPI\Response\Me\ProfileResponse;

class Me extends AbstractAPI
{
    /**
     * @return ProfileResponse
     */
    public function profile()
    {
        return $this->getRequest('profile', ProfileResponse::class);
    }
}