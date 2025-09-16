# **`wp_head()`** ফাংশন নিয়ে বিস্তারিত।

---

## 📌 `wp_head()` কী?

* **`wp_head()`** হলো WordPress-এর একটি **hook point (action hook)**।
* এটি সাধারণত **থিমের `header.php` ফাইলে `</head>` ট্যাগের ঠিক আগে** রাখা হয়।
* এর মাধ্যমে WordPress এবং প্লাগইন/থিমগুলো তাদের প্রয়োজনীয় কোড (CSS, JS, meta tag ইত্যাদি) `<head>` সেকশনে **ডাইনামিক্যালি ইনজেক্ট** করতে পারে।

---

## 🏗️ Syntax

```php
<?php wp_head(); ?>
```

---

## 🔎 কাজ কী করে?

1. **WordPress core** এখানে অনেক কিছু আউটপুট করে:

   * Stylesheets (যেগুলো `wp_enqueue_style()` দিয়ে enqueue করা হয়েছে)
   * JavaScript (যেগুলো `wp_enqueue_script()` দিয়ে enqueue করা হয়েছে)
   * Meta tags (যেমন charset, generator, REST API links ইত্যাদি)

2. **Plugins** প্রয়োজনীয় CSS, JS, বা meta data এখানে ইনসার্ট করতে পারে।

3. **Themes** ও custom কোড চাইলে এখানে hook করতে পারে।

---

## 🖥️ উদাহরণ

### 1️⃣ header.php এ ব্যবহার

```php
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
```

👉 এখানে `wp_head();` দিলে WordPress সমস্ত registered scripts/styles/meta `<head>`-এ যোগ করবে।

---


## ⚡ যদি না দাও কী হবে?

* প্লাগইন বা থিমের অনেক ফিচার (যেমন Gutenberg styles, WooCommerce scripts, SEO plugins-এর meta tags, responsive CSS ইত্যাদি) কাজ করবে না।
* তাই **`wp_head()` অবশ্যই header.php তে থাকতে হবে।**

---

✅ সংক্ষেপে:
`wp_head()` হলো WordPress থিমের **সবচেয়ে গুরুত্বপূর্ণ হুকগুলির একটি**, যা `<head>` সেকশনে WordPress, প্লাগইন, ও থিমের প্রয়োজনীয় ডাইনামিক আউটপুট যুক্ত করে।

---

## wp_head() ফাংশন ও wp_head হুক-এর মাঝে পার্থ‍্যক‍্য

`wp_head()` দেখতে সত্যিই **একটা ফাংশনের মত**, কারণ শেষে `()` আছে। তাহলে এটাকে **hook** কেন বলা হয়?

---

## 🏗️ আসল ব্যাপারটা কী?

👉 WordPress core-এ `wp_head()` আসলে একটি **ফাংশন** যেটি নিম্নে দেয়া হলো :

```php
function wp_head() {
    do_action( 'wp_head' );
}
```

* এখানে দেখা যাচ্ছে, `wp_head()` নামের ফাংশন **কোনো কাজ সরাসরি করে না**।
* বরং সে **`do_action( 'wp_head' )`** কল করছে।
* আর `do_action()` হলো সেই মেকানিজম যেটা WordPress-এর **Action Hook system** চালায়।

---

## 🔎 কাজ করার প্রক্রিয়া

1. থিমে তুমি `<?php wp_head(); ?>` লিখলে → এটা ফাংশন কল।
2. সেই ফাংশন ভেতরে গিয়ে **`do_action( 'wp_head' )`** চালায়।
3. এখন WordPress core, প্লাগইন বা থিম যদি আগে থেকে এই হুকের সাথে **add\_action( 'wp\_head', 'my\_function' )** দিয়ে কিছু জুড়ে দেয়, তাহলে সেইসব ফাংশনগুলো execute হবে।

---

## 📌 তাই পার্থক্যটা হলো

* **`wp_head()`** → ফাংশন (যেটা call করলে action hook ফায়ার হয়)
* **`'wp_head'`** → action hook-এর নাম

---

## 🖥️ ছোট উদাহরণ

```php
// header.php
<?php wp_head(); ?>
```

```php
// functions.php
function lessonlms_custom_meta() {
    echo '<meta name="author" content="Mobarak Ali">';
}
add_action( 'wp_head', 'lessonlms_custom_meta' );
```

👉 এখন `wp_head()` ফাংশন কল হলে → ভেতরে `do_action( 'wp_head' )` → তারপর `lessonlms_custom_meta()` রান করবে।

---

✅ সংক্ষেপে:

* `wp_head()` হলো ফাংশন ✅
* যেটা ভেতরে গিয়ে **`wp_head` action hook** ট্রিগার করে ✅
* তাই এটাকে আমরা সাধারণত **hook point** বলি।

---


[Back](../../README.md)