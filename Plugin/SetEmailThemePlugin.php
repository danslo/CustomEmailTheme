<?php

namespace Rubic\CustomEmailTheme\Plugin;

use Magento\Email\Model\Template;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Design\Theme\ThemeProviderInterface;

class SetEmailThemePlugin
{
    const CONFIG_PATH_EMAIL_THEME = 'sales_email/general/email_theme';

    /**
     * @var ThemeProviderInterface
     */
    private $themeProvider;

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @param ThemeProviderInterface $themeProvider
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ThemeProviderInterface $themeProvider, ScopeConfigInterface $scopeConfig)
    {
        $this->themeProvider = $themeProvider;
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Gets email theme ID for theme path specified by configuration.
     *
     * @return int
     */
    private function getEmailThemeId()
    {
        $theme = $this->themeProvider->getThemeByFullPath(
            $this->scopeConfig->getValue(self::CONFIG_PATH_EMAIL_THEME)
        );
        return $theme->getId();
    }

    /**
     * Forces email template to use specified theme.
     *
     * @param Template $template
     * @param $templateId
     */
    public function beforeLoadDefault(Template $template, $templateId)
    {
        $template->setForcedTheme($templateId, $this->getEmailThemeId());
    }
}