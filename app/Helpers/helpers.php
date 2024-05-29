<?php

/**
 * get supported languages
 * @return array
 */
function supportedLanguages(): array
{
    return ['en', 'ar'];
}

function getColumn($model, string $column)
{
    if (!$model) {
        return '';
    }
    
    if (app()->isLocale('en')) {
        return $model[$column . '_en'];
    } elseif (app()->isLocale('sw')) {
        return $model[$column . '_sw'];
    } elseif (app()->isLocale('sp')) {
        return $model[$column . '_sp'];
    } else {
        return $model[$column . '_ar'];
    }
}
