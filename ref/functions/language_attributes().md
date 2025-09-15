# language_attributes()

`language_attributes()` হলো একটি **WordPress ফাংশন**, যা HTML `<html>` ট্যাগে **ভাষা (language) এবং direction (ltr/rtl)** সম্পর্কিত অ্যাট্রিবিউট যোগ করার জন্য ব্যবহার করা হয়।

---

### Syntax

```php
language_attributes( $doctype );
```

* `$doctype` (optional) – HTML ডকটাইপ নির্ধারণ করতে ব্যবহার হয়।

  * সাধারণত: `'html'` বা `'xhtml'`
  * ডিফল্ট: `'html'`

---

### 🔎 কাজ কী?

* HTML `<html>` ট্যাগে **ভাষা এবং direction attribute** যোগ করে।
* এটি **ব্রাউজার ও সার্চ ইঞ্জিনকে** সঠিক ভাষা এবং রাইট-টু-লেফট (RTL) বা লেফট-টু-রাইট (LTR) নির্দেশ দেয়।

---

### 🏗️ উদাহরণ

#### 1️⃣ সাধারণ ব্যবহার

```php
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(); ?></title>
</head>
<body>
```

* আউটপুট হতে পারে (English site-এর জন্য):

```html
<html lang="en-US">
```

#### 2️⃣ RTL (বাংলা বা আরবি) সাপোর্টের জন্য

* যদি সাইটের ভাষা বাংলা বা আরবি হয়, আউটপুট হবে:

```html
<html lang="bn-BD" dir="rtl">
```

---

### ⚡ গুরুত্বপূর্ণ নোট

1. এটি **header.php** ফাইলে `<html>` ট্যাগে ব্যবহার করা হয়।
2. WordPress **Settings > General > Site Language** এর উপর ভিত্তি করে স্বয়ংক্রিয়ভাবে ভাষা ও direction নির্ধারণ করে।
3. **SEO এবং accessibility** এর জন্য এটি গুরুত্বপূর্ণ।

---

✅ সংক্ষেপে:
`language_attributes()` হলো একটি **helper ফাংশন**, যা `<html>` ট্যাগে সঠিক **language ও direction attribute** যোগ করে, ফলে সাইট **সঠিকভাবে ব্রাউজারে ও সার্চ ইঞ্জিনে প্রদর্শিত হয়**।

---
[Back](../../README.md)
