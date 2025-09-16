# Lesson LMS
## Learning WrodPress Theme Development from Scratch

![Alt text](Screenshot.png)

[Figma Template](https://www.figma.com/design/1CfKy91QC3l813rP0C8TIu/RRF-landing-page?node-id=28-2&p=f&t=fHDCqbjwEakzcw2z-0)

[HTML Source Code](https://github.com/nayemspecial/HTML-CSS-Projects/tree/main/templates/lms-one)

### Class 01: Understanding Core Concepts | Table Prefix | Custom Theme
- Addingn Theme Folder, and Essentials Files 
    - style.css, 
    - index.php, 
    - function.php, 
    - screenshot.png
### Class 02: Understanding Core Concepts | WP Config | Info | .htaccess
- Explaining different files 
    - wp-config.php, 
    - .htaccess, 
    - wp-config-sample.php,
    - function.php
- Other Concepts Covered
    - Upload Folder
    - Child Theme

### Class 03: Asset Link | Classic, Block, Child Theme | Text Domain, Hook
- Screen Options
- [get_template_directory_uri()](ref/functions/get_template_directory_uri.md)
- [Type of Themes](ref/theme-types.md)
    - [Block Theme](ref/block-theme.md)
    - [Classic Theme](ref/clasic-theme.md)
        - [Hybrid Theme](ref/hybrid-themes.md)
- [Child Theme](ref/child-theme.md)
- [Text Domain](ref/text-domain.md)
- [function.php](ref/function.php.md)
- Hooks
    -[wp_enqueue_scripts()](ref/hooks/action/wp_enqueue_scripts.md)

### Class 04: Create Header & Footer | How to Load CSS, JS, Fonts in Theme
- [language_attributes()](ref/functions/language_attributes().md)
- [bloginfo()](ref/functions/bloginfo().md)
    - Character Set - [bloginfo('charset')](ref/functions/bloginfo().md#3%EF%B8%8F⃣-charset-html-meta-tag-এর-জন্য) 
    - Site Title - [bloginfo('name')](ref/functions/bloginfo().md#1%EF%B8%8F⃣-সাইটের-নাম-দেখানো) 
    - Tagline - [bloginfo('description')](ref/functions/bloginfo().md#2%EF%B8%8F⃣-সাইটের-বর্ণনা-tagline-দেখানো) 
    - Site URL - [bloginfo('url')](ref/functions/bloginfo().md#4%EF%B8%8F⃣-সাইটের-url) 
- [wp_head()](ref/functions/wp_head().md)
- [body_class()](ref/functions/body_class().md)
- [wp_enqueue _style()](ref/functions/wp_enqueue _style().md)
