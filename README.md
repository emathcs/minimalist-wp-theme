# Minimalist

WordPress theme.

# About

This is a minimalist WordPress theme focused on managing static pages.

It also allows to manage posts, just like a blog.

The goal of this theme is providing the most minimalist foundation possible for building websites.

Currently, it offers two template variants:

- Default
- Full width

# Structure

- Page:
  - page.php
    - header.php
      - template-parts/menu/menu-{template}.php
        - template-parts/menu/nav/content.php
    - content-page.php
    - footer.php
      - template-parts/menu/menu-defautl.php
        - template-parts/menu/nav/content.php

- Blog:
  - index.php
    - header.php
      - template-parts/menu/menu-{template}.php
        - template-parts/menu/nav/content.php
    - searchform.php
    - template-parts/content.php
    - template-parts/navigation.php
    - footer.php
      - template-parts/menu/menu-defautl.php
        - template-parts/menu/nav/content.php

- Post:
  - single.php
    - header.php
      - template-parts/menu/menu-{template}.php
        - template-parts/menu/nav/content.php
    - template-parts/content.php
    - footer.php
      - template-parts/menu/menu-defautl.php
        - template-parts/menu/nav/content.php

- Not found page:
  - index.php
    - header.php
      - template-parts/menu/menu-{template}.php
        - template-parts/menu/nav/content.php
    - template-parts/content-none.php
      - searchform.php
    - footer.php
      - template-parts/menu/menu-defautl.php
        - template-parts/menu/nav/content.php
