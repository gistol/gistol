# ZurbInkBundle (Foundation for Emails 2)
Creating email templates is hard.
This Symfony Bundle provides some help:

* [Foundation for Emails 2](https://github.com/zurb/foundation-emails) Integration for awesome and responsive emails. Checkout  their [documentation](http://foundation.zurb.com/emails.html).
* Use normal CSS files for styling, add them via `{{ zurb_ink_styles.add("@YourBundle/Resources/public/css/styles.css") }}`.
* Automatic inline styles via the `{% ìnlinestyle %}` tag (powered by [Tijs Verkoyen's CssToInlineStyles](https://github.com/tijsverkoyen/CssToInlineStyles)).
* Imports your CSS rules also in html head via `{{ includeStyles(zurb_ink_styles) }}`
* **New in 2.0:** [Inky](https://github.com/zurb/inky)-Template Support via the `{% inky %}` tag (powered by [https://github.com/thampe/inky](https://github.com/thampe/inky)) 


## Installation

You can install this bundle using composer

    composer require hampe/zurb-ink-bundle
or add the package to your `composer.json` file directly.

Php 5.4 is now required. Make sure your composer.json, does not set the platform to php 5.3.*:

    "config": {
       "bin-dir": "bin",
       "platform": {
           "php": "5.4.0" 
       }
    },



After you have installed the package, you just need to add the bundle to your AppKernel.php file:

    // in AppKernel::registerBundles()
    $bundles = array(
        // ...
        new Hampe\Bundle\ZurbInkBundle\HampeZurbInkBundle(),
        // ...
    );

## Usage

### Option A: Extend the base.html.twig
If you want to use the zurb ink framework, extend the `HampeZurbInkBundle::base.html.twig`.

    {% extends 'HampeZurbInkBundle:FoundationForEmails:2/base.html.twig' %}
    {% block preHtml %}
            {# add your css files here, please use a bundle relative path #}
            {{ zurb_ink_styles.add("@YourBundle/Resources/public/css/style1.css") }}
            {{ zurb_ink_styles.add("@YourBundle/Resources/public/css/style2.css") }}
            ...
        {% endblock %}
    {% block content %}
        {# html #}
    {% endblock %}
    {% extends 'HampeZurbInkBundle::base.html.twig' %}

---  

*Note:* If you prefer not to have the CSS-Styles also in the `<head>` of your HTML-Document, you can override the `headStyles`-Block: `{% block headStyles %}{% endblock %}`. Be aware that some CSS-Rules can't be realized with inline-styles, like `:hover`-States or `@media`-Queries (both uesed by ZURB Ink Framework)!

### Option B: Write your own template from scratch

    {% spaceless %}
    {# add your styles before the inlinestyle tag #}
    {{ zurb_ink_styles.add("@YourBUndle/Resources/public/css/style.css") }}
    {% inlinestyle %}
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>
        {% block headStyles %}
            <style type="text/css">
                {% autoescape false %}
                {{ includeStyles(zurb_ink_styles) }}
                {% endautoescape %}
            </style>
        {% endblock %}
    </head>
    {% inky %} {# inky-tag for inky-template support  #}
        <body>
        {% block body %}
            <table class="body">
                <tr>
                    <td class="center" align="center" valign="top">
                        <center>
                            {% block content %}

                            {% endblock %}
                        </center>
                    </td>
                </tr>
            </table>
            <!-- prevent Gmail on iOS font size manipulation -->
            <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
        {% endblock %}
        </body>
    {% endinky %}
    </html>
    {% endinlinestyle %}
    {% endspaceless %}
    
## License
See the [LICENSE](LICENSE) file for license info (it's the MIT license).
