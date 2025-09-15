# get_template_directory_uri()
`get_template_directory_uri()` হলো ওয়ার্ডপ্রেসের একটি **বিল্ট-ইন ফাংশন**, যেটি মূলত থিম ডেভেলপমেন্টে সবচেয়ে বেশি ব্যবহৃত হয়।

---

## 📌 কাজ

এটি **Active Theme** (যেটি বর্তমানে চলছে) এর **parent theme directory**-এর URL রিটার্ন করে।

---

## 🖥️ Syntax

```php
get_template_directory_uri();
```

---

## 🔎 উদাহরণ

### 1. CSS ফাইল লিঙ্ক করা

```php
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
```

এখানে `style.css` ফাইলটি parent theme থেকে লোড হবে।

---

### 2. JavaScript ফাইল enqueue করা

```php
function lesson_scripts() {
    wp_enqueue_script(
        'lesson-custom-js',
        get_template_directory_uri() . '/assets/js/custom.js',
        array('jquery'),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'lesson_scripts');
```

---

## ⚡ গুরুত্বপূর্ণ নোট

* **Child Theme ব্যবহার করলে** এই ফাংশন parent theme এর পথ (URL) রিটার্ন করবে, child theme নয়।
* Child Theme এর জন্য `get_stylesheet_directory_uri()` ব্যবহার করতে হবে।

---
[Back](../../README.md)