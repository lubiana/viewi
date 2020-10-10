<?php

use Viewi\PageEngine;
use Viewi\BaseComponent;

function RenderAppComponent(
    Silly\MyApp\AppComponent $_component,
    PageEngine $pageEngine,
    array $slots
    , ...$scope
) {
    $slotContents = [];
    
    $_content = '';

    $slotContents['body'] = 'AppComponent_SlotContent10';

    $slotContents[0] = 'AppComponent_Slot11';
    $_content .= $pageEngine->renderComponent('Layout', $_component, $slotContents, [], ...$scope);
    $slotContents = [];
    return $_content;
   
}
