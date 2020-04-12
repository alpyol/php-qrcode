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

/* /css/base.css.twig */
class __TwigTemplate_201f2a351c3889bf2a5b09a37c23d1a2c60f2952be8ed24a571c423c6e07815a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ":root {
    /* Typography */
    --font-primary: 'Source Sans Pro', Helvetica, Arial, sans-serif;
    --font-secondary: 'Source Sans Pro', Helvetica, Arial, sans-serif;
    --line-height--primary: 1.6;
    --letter-spacing--primary: .05rem;
    --text-base-size: 1em;
    --text-scale-ratio: 1.2;

    --text-xxs: calc(var(--text-base-size) / var(--text-scale-ratio) / var(--text-scale-ratio) / var(--text-scale-ratio));
    --text-xs: calc(var(--text-base-size) / var(--text-scale-ratio) / var(--text-scale-ratio));
    --text-sm: calc(var(--text-base-size) / var(--text-scale-ratio));
    --text-md: var(--text-base-size);
    --text-lg: calc(var(--text-base-size) * var(--text-scale-ratio));
    --text-xl: calc(var(--text-base-size) * var(--text-scale-ratio) * var(--text-scale-ratio));
    --text-xxl: calc(var(--text-base-size) * var(--text-scale-ratio) * var(--text-scale-ratio) * var(--text-scale-ratio));
    --text-xxxl: calc(var(--text-base-size) * var(--text-scale-ratio) * var(--text-scale-ratio) * var(--text-scale-ratio) * var(--text-scale-ratio));
    --text-xxxxl: calc(var(--text-base-size) * var(--text-scale-ratio) * var(--text-scale-ratio) * var(--text-scale-ratio) * var(--text-scale-ratio) * var(--text-scale-ratio));
    --text-xxxxxl: calc(var(--text-base-size) * var(--text-scale-ratio) * var(--text-scale-ratio) * var(--text-scale-ratio) * var(--text-scale-ratio) * var(--text-scale-ratio) * var(--text-scale-ratio));

    /* Colors */
    --primary-color: hsl(96, 57%, 60%);
    --primary-color-darken: hsl(96, 57%, 40%);
    --primary-color-darker: hsl(96, 57%, 20%);
    --primary-color-lighten: hsl(96, 57%, 80%);
    --primary-color-lighter: hsl(96, 57%, 97%);

    --text-color: #4b3b40;

    --top-header-bg-color: var(--primary-color-lighter); /* #d1f5be; */
    --top-header-text-color: var(--text-color);
    --header-bg-color: var(--primary-color);
    --code-background-color: var(--primary-color-lighter);
    --code-border-color: var(--primary-color-darken);
    --button-border-color: var(--primary-color-darken);
    --button-color: transparent;
    --button-color-primary: var(--primary-color);
    --button-text-color: #555;
    --button-text-color-primary: white;
    --popover-background-color: hsla(96, 57%, 95%, 0.9);
    --link-color-primary: var(--primary-color-darken);
    --link-hover-color-primary: var(--primary-color-darker);
    --form-field-border-color: #D1D1D1;
    --form-field-color: #fff;
    --admonition-success-color: var(--primary-color);
    --admonition-border-color: silver;
    --table-separator-color: var(--primary-color-lighten);
    --title-text-color: white;
    --title-text-shadow-color: var(--primary-color-darker);

    /* Grid */
    --container-width: 960px;
    --top-header-height: calc(var(--text-lg) + 2 * var(--spacing-sm));

    /* Spacing */
    --spacing-base-size: 1rem;
    --spacing-scale-ratio: 1.5;

    --spacing-xxxs: calc(var(--spacing-base-size) / var(--spacing-scale-ratio) / var(--spacing-scale-ratio) / var(--spacing-scale-ratio) / var(--spacing-scale-ratio));
    --spacing-xxs: calc(var(--spacing-base-size) / var(--spacing-scale-ratio) / var(--spacing-scale-ratio) / var(--spacing-scale-ratio));
    --spacing-xs: calc(var(--spacing-base-size) / var(--spacing-scale-ratio) / var(--spacing-scale-ratio));
    --spacing-sm: calc(var(--spacing-base-size) / var(--spacing-scale-ratio));
    --spacing-md: var(--spacing-base-size);
    --spacing-lg: calc(var(--spacing-base-size) * var(--spacing-scale-ratio));
    --spacing-xl: calc(var(--spacing-base-size) * var(--spacing-scale-ratio) * var(--spacing-scale-ratio));
    --spacing-xxl: calc(var(--spacing-base-size) * var(--spacing-scale-ratio) * var(--spacing-scale-ratio) * var(--spacing-scale-ratio));
    --spacing-xxxl: calc(var(--spacing-base-size) * var(--spacing-scale-ratio) * var(--spacing-scale-ratio) * var(--spacing-scale-ratio) * var(--spacing-scale-ratio));

    --border-radius-base-size: 3px;
}

/* Grid
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.phpdocumentor-section {
    box-sizing: border-box;
    margin: 0 auto;
    max-width: var(--container-width);
    padding: 0 var(--spacing-lg);
    position: relative;
    width: 100%;
}

.phpdocumentor-column,
.phpdocumentor-columns {
    box-sizing: border-box;
    float: left;
    width: 100%;
}

/* For devices larger than 400px */
@media (min-width: 400px) {
    .phpdocumentor-section {
        padding: 0;
        width: 85%;
    }
}

/* For devices larger than 550px */
@media (min-width: 550px) {
    .phpdocumentor-section {
        width: 80%;
    }

    .phpdocumentor-column,
    .phpdocumentor-columns {
        margin-left: 4%;
    }

    .phpdocumentor-column:first-child,
    .phpdocumentor-columns:first-child {
        margin-left: 0;
    }

    .one.phpdocumentor-column,
    .one.phpdocumentor-columns {
        width: 4.66666666667%;
    }

    .two.phpdocumentor-columns {
        width: 13.3333333333%;
    }

    .three.phpdocumentor-columns {
        width: 22%;
    }

    .four.phpdocumentor-columns {
        width: 30.6666666667%;
    }

    .five.phpdocumentor-columns {
        width: 39.3333333333%;
    }

    .six.phpdocumentor-columns {
        width: 48%;
    }

    .seven.phpdocumentor-columns {
        width: 56.6666666667%;
    }

    .eight.phpdocumentor-columns {
        width: 65.3333333333%;
    }

    .nine.phpdocumentor-columns {
        width: 74.0%;
    }

    .ten.phpdocumentor-columns {
        width: 82.6666666667%;
    }

    .eleven.phpdocumentor-columns {
        width: 91.3333333333%;
    }

    .twelve.phpdocumentor-columns {
        margin-left: 0;
        width: 100%;
    }

    .one-third.phpdocumentor-column {
        width: 30.6666666667%;
    }

    .two-thirds.phpdocumentor-column {
        width: 65.3333333333%;
    }

    .one-half.phpdocumentor-column {
        width: 48%;
    }

    /* Offsets */
    .offset-by-one.phpdocumentor-column,
    .offset-by-one.phpdocumentor-columns {
        margin-left: 8.66666666667%;
    }

    .offset-by-two.phpdocumentor-column,
    .offset-by-two.phpdocumentor-columns {
        margin-left: 17.3333333333%;
    }

    .offset-by-three.phpdocumentor-column,
    .offset-by-three.phpdocumentor-columns {
        margin-left: 26%;
    }

    .offset-by-four.phpdocumentor-column,
    .offset-by-four.phpdocumentor-columns {
        margin-left: 34.6666666667%;
    }

    .offset-by-five.phpdocumentor-column,
    .offset-by-five.phpdocumentor-columns {
        margin-left: 43.3333333333%;
    }

    .offset-by-six.phpdocumentor-column,
    .offset-by-six.phpdocumentor-columns {
        margin-left: 52%;
    }

    .offset-by-seven.phpdocumentor-column,
    .offset-by-seven.phpdocumentor-columns {
        margin-left: 60.6666666667%;
    }

    .offset-by-eight.phpdocumentor-column,
    .offset-by-eight.phpdocumentor-columns {
        margin-left: 69.3333333333%;
    }

    .offset-by-nine.phpdocumentor-column,
    .offset-by-nine.phpdocumentor-columns {
        margin-left: 78.0%;
    }

    .offset-by-ten.phpdocumentor-column,
    .offset-by-ten.phpdocumentor-columns {
        margin-left: 86.6666666667%;
    }

    .offset-by-eleven.phpdocumentor-column,
    .offset-by-eleven.phpdocumentor-columns {
        margin-left: 95.3333333333%;
    }

    .offset-by-one-third.phpdocumentor-column,
    .offset-by-one-third.phpdocumentor-columns {
        margin-left: 34.6666666667%;
    }

    .offset-by-two-thirds.phpdocumentor-column,
    .offset-by-two-thirds.phpdocumentor-columns {
        margin-left: 69.3333333333%;
    }

    .offset-by-one-half.phpdocumentor-column,
    .offset-by-one-half.phpdocumentor-columns {
        margin-left: 52%;
    }
}

/* Base Styles
–––––––––––––––––––––––––––––––––––––––––––––––––– */
body {
    color: var(--text-color);
    font-family: var(--font-primary);
    font-size: var(--text-md);
    letter-spacing: var(--letter-spacing--primary);
    line-height: var(--line-height--primary);
}

/* Used for screen readers and such */
.visually-hidden {
    display: none;
}

/* Typography
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.phpdocumentor h1,
.phpdocumentor h2,
.phpdocumentor h3,
.phpdocumentor h4,
.phpdocumentor h5,
.phpdocumentor h6 {
    margin-bottom: var(--spacing-lg);
    margin-top: var(--spacing-lg);
}

.phpdocumentor h1 {
    font-size: var(--text-xxxxl);
    letter-spacing: var(--letter-spacing--primary);
    line-height: 1.2;
    margin-top: 0;
}

.phpdocumentor h2 {
    font-size: var(--text-xxxl);
    letter-spacing: var(--letter-spacing--primary);
    line-height: 1.25;
    margin-top: 0;
}

.phpdocumentor h3 {
    font-size: var(--text-xxl);
    letter-spacing: var(--letter-spacing--primary);
    line-height: 1.3;
}

.phpdocumentor h4 {
    font-size: var(--text-xl);
    letter-spacing: calc(var(--letter-spacing--primary) / 2);
    line-height: 1.35;
    margin-bottom: var(--spacing-md);
}

.phpdocumentor h5 {
    font-size: var(--text-lg);
    letter-spacing: calc(var(--letter-spacing--primary) / 4);
    line-height: 1.5;
    margin-bottom: var(--spacing-md);
    margin-top: var(--spacing-md);
}

.phpdocumentor h6 {
    font-size: var(--text-md);
    letter-spacing: 0;
    line-height: var(--line-height--primary);
    margin-bottom: var(--spacing-md);
    margin-top: var(--spacing-md);
}

.phpdocumentor p {
    margin-top: 0;
}

/* Links
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.phpdocumentor a {
    color: var(--link-color-primary);
}

.phpdocumentor a:hover {
    color: var(--link-hover-color-primary);
}

/* Buttons
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.phpdocumentor-button {
    background-color: var(--button-color);
    border: 1px solid var(--button-border-color);
    border-radius: var(--border-radius-base-size);
    box-sizing: border-box;
    color: var(--button-text-color);
    cursor: pointer;
    display: inline-block;
    font-size: var(--text-sm);
    font-weight: 600;
    height: 38px;
    letter-spacing: .1rem;
    line-height: 38px;
    padding: 0 var(--spacing-xxl);
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    white-space: nowrap;
}

.phpdocumentor-button--wide {
    width: 100%;
}

.phpdocumentor-button:hover,
.phpdocumentor-button:focus {
    border-color: #888;
    color: #333;
    outline: 0;
}

.phpdocumentor-button.button-primary {
    background-color: var(--button-color-primary);
    border-color: var(--button-color-primary);
    color: var(--button-text-color-primary);
}

.phpdocumentor-button.phpdocumentor-button--primary:hover,
.phpdocumentor-button.phpdocumentor-button--primary:focus {
    background-color: var(--link-color-primary);
    border-color: var(--link-color-primary);
    color: var(--button-text-color-primary);
}

/* Forms
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.phpdocumentor-field {
    background-color: var(--form-field-color);
    border: 1px solid var(--form-field-border-color);
    border-radius: var(--border-radius-base-size);
    box-shadow: none;
    box-sizing: border-box;
    height: 38px;
    padding: var(--spacing-xxxs) var(--spacing-xxs); /* The 6px vertically centers text on FF, ignored by Webkit */
}

/* Removes awkward default styles on some inputs for iOS */
input[type=\"email\"],
input[type=\"number\"],
input[type=\"search\"],
input[type=\"text\"],
input[type=\"tel\"],
input[type=\"url\"],
input[type=\"password\"],
textarea {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
}

.phpdocumentor-textarea {
    min-height: 65px;
    padding-bottom: var(--spacing-xxxs);
    padding-top: var(--spacing-xxxs);
}

.phpdocumentor-field:focus {
    border: 1px solid var(--button-color-primary);
    outline: 0;
}

.phpdocumentor-label {
    display: block;
    margin-bottom: var(--spacing-xs);
}

.phpdocumentor-fieldset {
    border-width: 0;
    padding: 0;
}

input[type=\"checkbox\"].phpdocumentor-field,
input[type=\"radio\"].phpdocumentor-field {
    display: inline;
}

.phpdocumentor-label > .phpdocumentor-label--body {
    display: inline-block;
    font-weight: normal;
    margin-left: var(--spacing-xs);
}

/* Lists
–––––––––––––––––––––––––––––––––––––––––––––––––– */
div.phpdocumentor-list > ul,
ul.phpdocumentor-list {
    list-style: circle inside;
}

ol.phpdocumentor-list {
    list-style: decimal inside;
}

div.phpdocumentor-list > ul,
ol.phpdocumentor-list,
ul.phpdocumentor-list {
    margin-top: 0;
    padding-left: 0;
}

div.phpdocumentor-list > ul ul,
ul.phpdocumentor-list ul.phpdocumentor-list,
ul.phpdocumentor-list ol.phpdocumentor-list,
ol.phpdocumentor-list ol.phpdocumentor-list,
ol.phpdocumentor-list ul.phpdocumentor-list {
    font-size: var(--text-sm);
    margin: var(--spacing-xs) 0 var(--spacing-xs) calc(var(--spacing-xs) * 2);
}

li.phpdocumentor-list {
    margin-bottom: var(--spacing-md);
}

ul.phpdocumentor-breadcrumbs {
    font-size: var(--text-sm);
    list-style: none;
    margin: 0;
    padding: 0;
}

ul.phpdocumentor-breadcrumbs > li {
    display: inline-block;
    margin: 0;
}

ul.phpdocumentor-breadcrumbs > li + li:before {
    color: #ccc;
    content: \"\\\\\\A0\";
    padding: 0 var(--spacing-xxs);
}

/* Code
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.phpdocumentor-code {
    background: var(--code-background-color);
    border: 1px solid var(--code-border-color);
    border-radius: var(--border-radius-base-size);
    font-size: var(--text-sm);
    padding: var(--spacing-xs) var(--spacing-sm);
}

pre > .phpdocumentor-code {
    display: block;
    white-space: pre;
}

/* Tables
–––––––––––––––––––––––––––––––––––––––––––––––––– */
th.phpdocumentor-heading,
td.phpdocumentor-cell {
    border-bottom: 1px solid var(--table-separator-color);
    padding: var(--spacing-sm) var(--spacing-md);
    text-align: left;
}

th.phpdocumentor-heading:first-child,
td.phpdocumentor-cell:first-child {
    padding-left: 0;
}

th.phpdocumentor-heading:last-child,
td.phpdocumentor-cell:last-child {
    padding-right: 0;
}

/* Spacing
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.phpdocumentor-button {
    margin-bottom: var(--spacing-md);
}

.phpdocumentor-field {
    margin-bottom: var(--spacing-md);
}

.phpdocumentor pre,
.phpdocumentor blockquote,
.phpdocumentor dl,
.phpdocumentor figure,
.phpdocumentor table,
.phpdocumentor p,
.phpdocumentor ul,
.phpdocumentor ol,
.phpdocumentor form {
    margin-bottom: var(--spacing-md);
}

/* Utilities
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.phpdocumentor-full-width {
    box-sizing: border-box;
    width: 100%;
}

.phpdocumentor-max-full-width {
    box-sizing: border-box;
    max-width: 100%;
}

.phpdocumentor-pull-right {
    float: right;
}

.phpdocumentor-pull-left {
    float: left;
}

/* Misc
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.phpdocumentor-line {
    border-top: 1px solid #E1E1E1;
    border-width: 0;
    margin-bottom: var(--spacing-xxl);
    margin-top: var(--spacing-xxl);
}

.phpdocumentor-admonition {
    border: 1px solid var(--admonition-border-color);
    border-radius: var(--border-radius-base-size);
    padding: var(--spacing-sm) var(--spacing-md);
}

.phpdocumentor-admonition--success {
    border-color: var(--admonition-success-color);
}

/* Clearing
–––––––––––––––––––––––––––––––––––––––––––––––––– */

/* Self Clearing Goodness */
.phpdocumentor-section:after,
.phpdocumentor-row:after,
.phpdocumentor-cf {
    clear: both;
    content: \"\";
    display: table;
}

/* Elements
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.phpdocumentor-top-header {
    align-items: center;
    background: var(--top-header-bg-color);
    color: var(--top-header-text-color);
    display: flex;
    flex-direction: row;
    font-size: var(--text-md);
    min-height: var(--top-header-height);
    padding: 0 var(--spacing-sm);
    text-align: right;
}

.phpdocumentor-top-header a {
    color: var(--primary-color-darker);
    display: inline-block;
    text-decoration: none;
}
.phpdocumentor-top-header a span {
    border-bottom: 1px solid transparent;
    transition: border-bottom-color .2s ease-in-out;
}
.phpdocumentor-top-header a:hover {
    color: var(--text-color);
}
.phpdocumentor-top-header a:hover span {
    border-bottom: 1px solid var(--text-color);
}
.phpdocumentor-top-header a:not(:first-of-type):before {
    display: inline-block;
    color: #ccc;
    content: \"/\";
    padding: 0 var(--spacing-xxs);
}

.phpdocumentor-header {
    background: var(--header-bg-color);
    display: flex;
    margin-bottom: var(--spacing-xl);
    position: relative;
}

.phpdocumentor-header:after {
    border-bottom: 3px solid var(--header-bg-color);
    bottom: -8px;
    content: '';
    left: 0;
    position: absolute;
    right: 0;
}

.phpdocumentor-header p {
    color: white;
    font-size: var(--text-lg);
}

.phpdocumentor-logo__link {
    text-decoration: none;
}

.phpdocumentor-logo {
    display: inline-block;
    float: left;
    width: 80px;
    border: 5px solid white;
    border-radius: 15px;
    margin: 20px 20px 20px 0;
}

.phpdocumentor-title {
    color: var(--title-text-color);
    font-size: var(--text-xxxxl);
    letter-spacing: .05rem;
    line-height: 1.2;
    text-shadow: 0 0 2px var(--title-text-shadow-color);
}
.phpdocumentor-title small {
    text-shadow: none;
    font-size: var(--text-xxs);
    display: block;
    margin: var(--spacing-sm) 0;
}

.phpdocumentor .phpdocumentor-sidebar li {
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}

.phpdocumentor .phpdocumentor-sidebar__category {
    margin-bottom: var(--spacing-lg);
}

.phpdocumentor .phpdocumentor-sidebar__category-header {
    font-size: var(--text-lg);
    margin-bottom: var(--spacing-xs);
}

.phpdocumentor .phpdocumentor-sidebar__root-package,
.phpdocumentor .phpdocumentor-sidebar__root-namespace {
    font-size: var(--text-md);
    margin-top: var(--spacing-xs);
    margin-bottom: var(--spacing-xs);
}

.phpdocumentor-content {
    position: relative;
}

/* Other
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.phpdocumentor-content h1 .headerlink,
.phpdocumentor-content h2 .headerlink,
.phpdocumentor-content h3 .headerlink,
.phpdocumentor-content h4 .headerlink,
.phpdocumentor-content h5 .headerlink,
.phpdocumentor-content h6 .headerlink
{
    display: none;
    padding-left: 10px;
    text-decoration: none;
    color: silver;
}

.phpdocumentor-content h1:hover .headerlink,
.phpdocumentor-content h2:hover .headerlink,
.phpdocumentor-content h3:hover .headerlink,
.phpdocumentor-content h4:hover .headerlink,
.phpdocumentor-content h5:hover .headerlink,
.phpdocumentor-content h6:hover .headerlink
{
    display: initial;
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
    }

    public function getTemplateName()
    {
        return "/css/base.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/css/base.css.twig", "/css/base.css.twig");
    }
}
