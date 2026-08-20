# Minimalist

WordPress theme.

# About

This is a minimalist WordPress theme focused on managing static pages.

It also allows for the management of posts, just like a blog.

The goal of this theme is to provide the most minimalist foundation possible for building websites.

Currently, it offers only one layout variant, where the content is contained within a box.

A version utilizing the full browser width will be available soon.

# Structure

- Page:
  - page.php
    - header.php
      - template-parts/menu.php
    - content-page.php
    - footer.php
      - template-parts/menu.php

- Blog:
  - index.php
    - header.php
      - template-parts/menu.php
    - searchform.php
    - template-parts/content.php
    - template-parts/navigation.php
    - footer.php
      - template-parts/menu.php

- Post:
  - single.php
    - header.php
      - template-parts/menu.php
    - template-parts/content.php
    - template-parts/content.php
    - footer.php
      - template-parts/menu.php

- Not found page:
  - index.php
    - header.php
      - template-parts/menu.php
    - template-parts/content-none.php
      - searchform.php
    - footer.php
      - template-parts/menu.php
