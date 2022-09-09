# Pustynna Burza

Wordpress theme created for Hufiec ZHP Dąbrowa Górnicza for their's flagship event great return!

## About project

It is a non-profit work and my first project of such a big size. Work is still in progress but key features are already there. Mostly style updates and code clean-up is needed.

## File structure

- _header.php_ and _footer.php_ are used on every page as header and footer appropriately

- _functions.php_ enqueues scripts and styles for every page

- _front-page.php_, as the name suggests, is the front page of the website

- _index.php_ is used as the main post page (every single post is loaded using template-parts/content-archive template)

- _404.php_ is used for 404 error page

- _page.php_ is left as a basic page template, it should only be used as an interim measure when needed and replaced with proper templates (as of release day it isn't used)

- _search.php_ is used to show search results (basically filtered index.php)

- _searchform.php_ replaces the default search bar with a better-looking custom one

- _single.php_ displays a single post (e.g. after clicking post on index page)

- _style.css_ is main stylesheet:
  - In the beggining there are page-wide styles
  - Then you have page-specific styles
  - Most of page-specific styles are using naming covention as below:


```css

/* ### Current edition ### */

#current-edition {
  background-color: var(--white) !important;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.ce-content {
  display: flex;
  flex-direction: column;
  width: 80%;
}
    
```

### Admin guide (polish)

### Po dodaniu motywu do wordpressa niezbędny jest setup:
- Stwórz obydwa menu i dodaj linki do wszystkich stron
- Wybierz stronę startową jako front-page.php i stronę postów jako index.php
- Dodaj logo i favicon za pomocą setupu wordpressa (loga inne niż kwadrat -> hardcode linku do pliku w tagu img w header.php)
- Dodaj customowe bloki kodu (np. dodatek lazyblocks) - lista i kod dostępne w blocks.txt

#### URL stron

Podczas setupu ustaw następujące url (wymagane dla działania niektórych przycisków):
- Aktualności /aktualnosci
- Pustynna Burza 2023 /informacje
- FAQ /faq
- Dla mediów /dla-mediow
- Dla sponsorów /dla-sponsorow
- Kontakt /kontakt
- Kronika /kronika

#### Adding content to pages

Większość contentu który miał się zmieniać na bieżąco jest do zmiany poprzez bloki lub edytor wordpressa - większe zmiany poprzez edytor plików motywu



### Other info

The website was created for ZHP Hufiec Dąbrowa Górnicza (polish non-profit organisation), however feel free to reuse every part of the code however you want!
