# Services plugin

Services for October CMS.

## Installation

Run the following to install this plugin:

```
php artisan plugin:install Yamobile.Services
```

To uninstall this plugin:

```
php artisan plugin:remove Yamobile.Services
```

## Using components

This plugin provides 4 components — `CategoryComponent`,`CategoriesComponent`,`ServiceComponent`,`ServicesComponent`.
All components allow you to output information All Components allow you to output information about categories or services to your template. Categories and services added to the backend panel of your site will be available in the template.and information about categories or services in your twig template. Categories and services added to the backend panel of your site will be available in the template.


### CategoriesComponent

This component allows to output information from the backend to your twig template in any form convenient for you. This component supports property `items`, it is responsible for the number of output records. 

```Twig
[CategoriesComponent]
items = "all" or "need count"
==

```

This component provides 1 function - `getAllCategories`. If you need to display all categories, then enter assign to the `items` value the value of `all`, if only a certain number, then enter the required number of records.

```Twig
[CategoriesComponent]
items = "all"
==

{% for category in CategoriesComponent.getAllCategories %}
    <a href="{{'home' | page}}/{{ category.slug }}">{{ category.name }}</a>
{% endfor %}

```
You can output pagination for your list of categories.

```
[CategoriesComponent]
items = "6"
==

<div>
    {% for category in CategoriesComponent.getAllCategories %}
        <div>
            <div>
                <img src="{{ category.image | media }}" alt="{{ service.name }}">
            </div>
                <h4><a href="{{ category.slug }}">{{ service.name }}</a></h3>
                <p>
                    {{category.description}}
                </p>
        </div>
    {% endfor %}
</div>
{{ CategoriesComponent.getAllCategories.render | raw }}
```

### CategoryComponent

This component allows you to output information from the backend to your Twig template to display a specific category by url. This component supports the `slug` property, for part of the url.

To use the component, you must enter `:slug` in the page url when creating the page.

This component provides 1 function - `getDetailCategory`. This function outputs all the information about the category.


```Twig
[ServicesComponent]
slug = "{{ :slug }}"
==
{% set category = DetailServices.getDetailServices %}

{{ category.meta_title }}
{{ category.desctiption }}
{{ category.keywords }}
{{ category.name }}
{{ category.description }}
{{ category.image }}
{{ category.content }}

```
You will also have access to all the services linked to the category, with all their properties.

```Twig
[ServicesComponent]
slug = "{{ :slug }}"
==
{% set category = DetailServices.getDetailServices %}

<ul style="display:flex;flex-wrap: wrap;list-style:none;">
    {% for service in category.service %}
        <li style="width:49%;padding:20px 50px;background:#f5f5f5;margin:5px">
            <a href="{{'home' | page}}/{{ service.slug }}/{{service.slug}}" style="color:#232222;font-weight:700">{{ subservice.name }}</a>
        </li>
    {% endfor %}
</ul>

```

### ServicesComponent

This component allows you to output information from the backend to your twig template in any form convenient for you. This component supports the `items` property, it is responsible for the number of output services.

```Twig
[ServicesComponent]
items = "all" or "need count"
==

```

This component provides 1 function - `getAllServices`. If you need to display all categories, then enter assign to the `items` value the value of `all`, if only a certain number, then enter the required number of records.

```Twig
[ServicesComponent]
items = "all"
==

{% for service in ServicesComponent.getAllServices %}
    <a href="{{'home' | page}}/{{ service.slug }}">{{ service.name }}</a>
{% endfor %}

```


You can output pagination for your list of categories.

```
[ServicesComponent]
items = "6"
==

<div>
    {% for service in ServicesComponent.getAllServices %}
        <div>
            <div>
                <img src="{{ service.image | media }}" alt="{{ service.name }}">
            </div>
                <h4><a href="{{ service.slug }}">{{ service.name }}</a></h3>
        </div>
    {% endfor %}
</div>
{{ ServicesComponent.getAllServices.render | raw }}
```

### ServiceComponent


This component allows you to output information from the backend to your twig template to display a specific service by the `slug` property. This component supports the properties - `slug`, `category_slug'.

To use the component, you must enter `:category_slug/:slug` in the page url when creating the page.

This component provides 1 function - `getDetailService`. This function outputs all the information about the service.

```Twig
[ServicesComponent]
category_slug = "{{ :category_slug }}"
slug = "{{ :slug }}"

==
{% set service = ServiceComponent.getServiceBySlug %}

{{ service.meta_title }}
{{ service.desctiption }}
{{ service.keywords }}
{{ service.name }}
{{ service.image }}
{{ service.content }}

```
Just like the category has access to all the linked services. The service has access to all the properties of the parent category.

```Twig
[ServicesComponent]
category_slug = "{{ :category_slug }}"
slug = "{{ :slug }}"

==
{% set service = ServiceComponent.getServiceBySlug %}

{{ service.category.name }}     // display name of the parent category


```