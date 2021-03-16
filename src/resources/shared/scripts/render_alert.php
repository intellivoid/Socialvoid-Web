<?php

    use DynamicalWeb\HTML;

    /**
     * Renders a alert in the document
     *
     * @param string $text
     * @param string $type
     * @param string $icon
     */
    function RenderAlert(string $text, string $type, string $icon)
    {
        ?>
        <div class="alert alert-<?PHP HTML::print($type); ?>" role="alert">
            <i class="mdi <?PHP HTML::print($icon); ?>"></i>
            <?PHP HTML::print($text); ?>
        </div>
        <?php
    }