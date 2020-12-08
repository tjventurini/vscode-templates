{{#def.prompt('TITLE', 'Enter the title of this article.')}}
{{#def.prompt('TAGS', 'Enter the tags of this article.')}}
{{ var SLUG = $.TITLE.toString().toLowerCase().replace(/\s+/g, '-').replace('ö', 'oe').replace('ä','ae').replace('ü','ue').replace(/&/g, '-and-').replace(/[^\w\-]+/g, '').replace(/\-\-+/g, '-').replace(/^-+/, '').replace(/-+$/, ''); }}
{{ var TAGS = $.TAGS.split(',').map(tag => tag.trim()); }}
---
title: {{=$.TITLE}}
description: {{=$.TITLE.charAt(0).toUpperCase() + $.TITLE.slice(1).toLowerCase() }}.
date: {{=$.DIR.split('/').slice(-1)[0] }}
permalink: articles/{{=SLUG}}
image: /covers/{{=SLUG}}.png
tags: 
{{~TAGS :tag:index}}
    - {{=tag}}
{{~}}
publish: true
---

Some introduction ...

<!-- more -->

The actual content ...