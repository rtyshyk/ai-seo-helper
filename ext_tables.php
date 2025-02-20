<?php

defined('TYPO3') or die();

$GLOBALS['TBE_STYLES']['skins']['ai_seo_helper']['stylesheetDirectories']['css'] = 'EXT:ai_seo_helper/Resources/Public/Css/';

$pageRenderer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Page\PageRenderer::class);
if(new \TYPO3\CMS\Core\Information\Typo3Version() < 12 && empty($pageRenderer->getCharSet())) {
    $pageRenderer->setCharSet('utf-8');
}
$pageRenderer->addInlineLanguageLabelFile('EXT:ai_seo_helper/Resources/Private/Language/backend.xlf');

// Allow Custom Records on Standard Pages
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_aiseohelper_domain_model_customlanguage');
