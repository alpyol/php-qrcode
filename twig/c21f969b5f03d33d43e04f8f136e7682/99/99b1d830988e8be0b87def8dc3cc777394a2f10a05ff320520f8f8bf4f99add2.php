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

/* /search.js.twig */
class __TwigTemplate_3f16ab8854632600eb67950c14f3aaa6a49879254bcd40aeccf9b9608d8ab2c1 extends \Twig\Template
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
        echo "// Search module for phpDocumentor
//
// This module is a wrapper around fuse.js that will use a given index and attach itself to a
// search form and to a search results pane identified by the following data attributes:
//
// 1. data-search-form
// 2. data-search-results
//
// The data-search-form is expected to have a single input element of type 'search' that will trigger searching for
// a series of results, were the data-search-results pane is expected to have a direct UL child that will be populated
// with rendered results.
//
// The search has various stages, upon loading this stage the data-search-form receives the CSS class
// 'phpdocumentor-search--enabled'; this indicates that JS is allowed and indices are being loaded. It is recommended
// to hide the form by default and show it when it receives this class to achieve progressive enhancement for this
// feature.
//
// After loading this module, it is expected to load a search index asynchronously, for example:
//
//         <script defer src=\"js/searchIndex.js\"></script>
//
// In this script the generated index should attach itself to the search module using the `appendIndex` function. By
// doing it like this the page will continue loading, unhindered by the loading of the search.
//
// After the page has fully loaded, and all these deferred indexes loaded, the initialization of the search module will
// be called and the form will receive the class 'phpdocumentor-search--active', indicating search is ready. At this
// point, the input field will also have it's 'disabled' attribute removed.
var Search = (function () {
    var fuse;
    var index = [];
    var options = {
        shouldSort: true,
        threshold: 0.6,
        location: 0,
        distance: 100,
        maxPatternLength: 32,
        minMatchCharLength: 1,
        keys: [
            \"fqsen\",
            \"name\",
            \"summary\",
            \"url\"
        ]
    };

    // Credit David Walsh (https://davidwalsh.name/javascript-debounce-function)
    // Returns a function, that, as long as it continues to be invoked, will not
    // be triggered. The function will be called after it stops being called for
    // N milliseconds. If `immediate` is passed, trigger the function on the
    // leading edge, instead of the trailing.
    function debounce(func, wait, immediate) {
        var timeout;

        return function executedFunction() {
            var context = this;
            var args = arguments;

            var later = function () {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };

            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    }

    function close() {
        var form = document.querySelector('[data-search-form]');
        var searchResults = document.querySelector('[data-search-results]');

        form.classList.toggle('phpdocumentor-search--has-results', false);
        searchResults.classList.add('phpdocumentor-search-results--hidden');
    }

    function search(event) {
        // prevent enter's from autosubmitting
        event.stopPropagation();

        var form = document.querySelector('[data-search-form]');
        var searchResults = document.querySelector('[data-search-results]');
        var searchResultEntries = document.querySelector('[data-search-results] > ul');

        searchResultEntries.innerHTML = '';

        if (!event.target.value) {
            close();
            return;
        }

        form.classList.toggle('phpdocumentor-search--has-results', true);
        searchResults.classList.remove('phpdocumentor-search-results--hidden');
        var results = fuse.search(event.target.value);

        results.forEach(function (result) {
            var entry = document.createElement(\"li\");
            entry.classList.add(\"phpdocumentor-search-results__entry\");
            entry.innerHTML += '<h3><a href=\"' + result.url + '\">' + result.name + \"</h3>\\n\";
            entry.innerHTML += '<small>' + result.fqsen + \"</small>\\n\";
            entry.innerHTML += '<div class=\"phpdocumentor-summary\">' + result.summary + '</div>';
            searchResultEntries.appendChild(entry)
        });
    }

    function appendIndex(added) {
        index = index.concat(added);

        // re-initialize search engine when appending an index after initialisation
        if (typeof fuse !== 'undefined') {
            fuse = new Fuse(index, options);
        }
    }

    function init() {
        fuse = new Fuse(index, options);

        var form = document.querySelector('[data-search-form]');
        var searchField = document.querySelector('[data-search-form] input[type=\"search\"');

        form.classList.add('phpdocumentor-search--active');

        searchField.setAttribute('placeholder', 'Search for ..');
        searchField.removeAttribute('disabled');
        searchField.addEventListener('keyup', debounce(search, 300));

        window.addEventListener('keyup', function (event) {
            if (event.code === 'Escape') {
                close();
            }
        });
    }

    return {
        appendIndex,
        init
    }
})();

window.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('[data-search-form]');

    // When JS is supported; show search box. Must be before including the search for it to take effect immediately
    form.classList.add('phpdocumentor-search--enabled');
});

window.addEventListener('load', function () {
    Search.init();
});
";
    }

    public function getTemplateName()
    {
        return "/search.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/search.js.twig", "/search.js.twig");
    }
}
