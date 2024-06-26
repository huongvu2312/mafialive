<?php

namespace ThemeHouse\UIX\Widget;

class LoginForm extends \XF\Widget\AbstractWidget
{
    public function render()
    {
        $viewParams = ['providers' => $this->repository('XF:ConnectedAccount')->getUsableProviders(true)];
        return $this->renderer('th_widget_login_uix', $viewParams);
    }
}
