# 📌 `bloginfo()`

`bloginfo()` হলো WordPress-এর একটি **বিল্ট-ইন ফাংশন**, যা সাইটের বিভিন্ন তথ্য **retrieve বা দেখানোর জন্য** ব্যবহার করা হয়।

---

## 🖥️ Syntax

```php
bloginfo( $show, $filter );
```

* `$show` – কোন তথ্যটি দেখাতে চাই তা নির্ধারণ করতে ব্যবহার হয়। উদাহরণ: `'name'`, `'description'`, `'url'`, `'charset'` ইত্যাদি।
* `$filter` (optional) – ডেটা ফিল্টার করার জন্য। সাধারণত `'display'` ডিফল্ট থাকে।

---

## 🔎 কাজ কী?

* এটি **WordPress সাইটের বিভিন্ন সেটিংস/ইনফরমেশন** রিটার্ন বা ইকো করে।
* সাধারণত **header.php, footer.php বা sidebar.php** এ ব্যবহার করা হয়।

---

## 🏗️ উদাহরণ

### 1️⃣ সাইটের নাম দেখানো

```php
<h1><?php bloginfo( 'name' ); ?></h1>
```

* আউটপুট হতে পারে:

```html
<h1>Lesson LMS</h1>
```

### 2️⃣ সাইটের বর্ণনা (Tagline) দেখানো

```php
<p><?php bloginfo( 'description' ); ?></p>
```

* আউটপুট হতে পারে:

```html
<p>A simple LMS WordPress theme</p>
```

### 3️⃣ Charset (HTML meta tag) এর জন্য

```php
<meta charset="<?php bloginfo( 'charset' ); ?>">
```

* আউটপুট হতে পারে:

```html
<meta charset="UTF-8">
```

### 4️⃣ সাইটের URL

```php
<a href="<?php bloginfo( 'url' ); ?>">Home</a>
```

* আউটপুট হতে পারে:

```html
<a href="https://example.com">Home</a>
```

---

### ⚡ গুরুত্বপূর্ণ নোট

1. `bloginfo()` সাধারণত **ইকো করে** (directly output)।
2. যদি রিটার্ন করতে চাও (echo না করে), তবে `get_bloginfo()` ব্যবহার করো।

```php
$site_name = get_bloginfo('name');
```

---

✅ সংক্ষেপে:
`bloginfo()` হলো WordPress-এর **helper ফাংশন**, যা **সাইট সম্পর্কিত তথ্য** সহজে **ইকো বা রিটার্ন** করতে দেয়।

---
[Back](../../README.md)
