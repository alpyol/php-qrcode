<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /css/template.css.twig */
class __TwigTemplate_c480e8d422ece27a2b78c035c81b009c6f0d5ad9bc3736cf4328b25fe2de28cc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'custom' => [$this, 'block_custom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ".phpdocumentor-summary,
.phpdocumentor-class__summary,
.phpdocumentor-trait__summary,
.phpdocumentor-interface__summary {
    font-style: italic;
}

.phpdocumentor-element__package,
.phpdocumentor-interface__extends,
.phpdocumentor-class__extends,
.phpdocumentor-class__implements {
    display: block;
    font-size: var(--text-xxs);
    font-weight: normal;
    opacity: .7;
}

.phpdocumentor-element__package .phpdocumentor-breadcrumbs {
    display: inline;
}

.phpdocumentor-description {
    margin-bottom: var(--spacing-md);
}

.phpdocumentor-element,
.phpdocumentor-function,
.phpdocumentor-constant,
.phpdocumentor-property,
.phpdocumentor-method {
    position: relative;
}

.phpdocumentor-element--deprecated .phpdocumentor-function__name,
.phpdocumentor-element--deprecated .phpdocumentor-method__name,
.phpdocumentor-element--deprecated .phpdocumentor-constant__name,
.phpdocumentor-element--deprecated .phpdocumentor-property__name,
.phpdocumentor-signature--deprecated .phpdocumentor-signature__name {
    text-decoration: line-through;
}

.phpdocumentor-signature {
    display: inline-block;
    font-size: var(--text-sm);
    margin-bottom: var(--spacing-md);
}

.phpdocumentor-table_of_contents {
    font-size: var(--text-sm);
}

.phpdocumentor-constant:not(:last-child),
.phpdocumentor-function:not(:last-child),
.phpdocumentor-method:not(:last-child),
.phpdocumentor-property:not(:last-child) {
    border-bottom: 1px solid var(--primary-color-lighten);
    padding-bottom: var(--spacing-lg);
}

.phpdocumentor-functions__header,
.phpdocumentor-constants__header,
.phpdocumentor-properties__header,
.phpdocumentor-methods__header {
    border-bottom: 2px solid var(--primary-color-darken);
    padding-bottom: var(--spacing-md);
}

.phpdocumentor-search-results {
    backdrop-filter: blur(5px);
    background: var(--popover-background-color);
    min-height: 100%;
    left: calc(var(--spacing-lg) * -1);
    position: absolute;
    right: calc(var(--spacing-lg) * -1);
    top: 0;
    padding: 0 var(--spacing-lg);
    opacity: 1;
    pointer-events: all;

    transition: opacity .3s, background .3s;
}

.phpdocumentor-search-results--hidden {
    background: transparent;
    backdrop-filter: blur(0);
    opacity: 0;
    pointer-events: none;
}

.phpdocumentor-search-results__entries {
    list-style: none;
    padding: 0;
}

.phpdocumentor-search-results__entry {
    border-bottom: 1px solid var(--table-separator-color);
    padding: var(--spacing-sm) var(--spacing-md);
    text-align: left;
}

.phpdocumentor-search-results__entry a {
    display: block;
}

.phpdocumentor-search-results__entry small {
    margin-top: var(--spacing-xs);
    margin-bottom: var(--spacing-md);
    color: var(--primary-color-darker);
    display: block;
}
.phpdocumentor-search-results__entry h3 {
    margin: 0;
}

.phpdocumentor-search {
    position: relative;
    display: none; /** disable by default for non-js flow */
    opacity: .3; /** white-out default for loading indication */
    transition: opacity .3s, background .3s;
}
.phpdocumentor-search:before {
    content: '';
    background: transparent;
    left: calc(-1 * var(--spacing-md));
    height: 100%;
    position: absolute;
    right: -15px;
    z-index: -1;
    opacity: 0;
    transition: opacity .3s, background .3s;
}

.phpdocumentor-search--enabled {
    display: block;
}

.phpdocumentor-search--active {
    opacity: 1;
}
.phpdocumentor-search--has-results:before {
    background: var(--popover-background-color);
    opacity: 1;
}

.phpdocumentor-search input:disabled {
    background-color: lightgray;
}

.phpdocumentor-element-found-in {
    position: absolute;
    top: 0;
    right: 0;
    font-size: var(--text-sm);
    color: gray;
}

.phpdocumentor-class-graph {
    width: 100%; height: 600px; border:1px solid black; overflow: hidden
}

.phpdocumentor-class-graph__graph {
    width: 100%;
}

.phpdocumentor-tag-list__definition {
    display: flex;
}

.phpdocumentor-tag-link {
    margin-right: var(--spacing-sm);
}

/* Media Queries
–––––––––––––––––––––––––––––––––––––––––––––––––– */
/*
Note: The best way to structure the use of media queries is to create the queries
near the relevant code. For example, if you wanted to change the styles for buttons
on small devices, paste the mobile query code up in the buttons section and style it
there.
*/

/* Larger than mobile */
@media (min-width: 400px) {
}

/* Larger than phablet (also point when grid becomes active) */
@media (min-width: 550px) {
}

/* Larger than tablet */
@media (min-width: 750px) {
}

/* Larger than desktop */
@media (min-width: 1000px) {
}

/* Larger than Desktop HD */
@media (min-width: 1200px) {
}

";
        // line 202
        $this->displayBlock('custom', $context, $blocks);
    }

    public function block_custom($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "/css/template.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  241 => 202,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/css/template.css.twig", "/css/template.css.twig");
    }
}
