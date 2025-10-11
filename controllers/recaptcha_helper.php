<?php
/**
 * Helper functions for Google reCAPTCHA
 */

/**
 * Obtiene la clave del sitio de reCAPTCHA
 */
function getRecaptchaSiteKey() {
    $configPath = __DIR__ . '/../config/recaptcha.php';
    
    if (!file_exists($configPath)) {
        error_log('reCAPTCHA config file not found: ' . $configPath);
        return '';
    }
    
    $recaptchaConfig = include($configPath);
    
    if (!isset($recaptchaConfig['site_key']) || empty($recaptchaConfig['site_key'])) {
        error_log('reCAPTCHA site_key not configured');
        return '';
    }
    
    return $recaptchaConfig['site_key'];
}

/**
 * Obtiene la clave secreta de reCAPTCHA
 */
function getRecaptchaSecretKey() {
    $configPath = __DIR__ . '/../config/recaptcha.php';
    
    if (!file_exists($configPath)) {
        error_log('reCAPTCHA config file not found: ' . $configPath);
        return '';
    }
    
    $recaptchaConfig = include($configPath);
    
    if (!isset($recaptchaConfig['secret_key']) || empty($recaptchaConfig['secret_key'])) {
        error_log('reCAPTCHA secret_key not configured');
        return '';
    }
    
    return $recaptchaConfig['secret_key'];
}