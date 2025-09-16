# 🔹 `body_class()` কী?

`body_class()` হলো একটি **WordPress Template Tag (function)** যা `<body>` ট্যাগে **dynamic class attributes** যোগ করে।
এটা মূলত থিম ডেভেলপারদের জন্য সুবিধা তৈরি করে যাতে `<body>` এলিমেন্টে বিভিন্ন কন্ডিশনের উপর ভিত্তি করে CSS ক্লাস যোগ হয়।

---

## 🔹 সাধারণ ব্যবহার

```php
<body <?php body_class(); ?>>
```

👉 এখানে `body_class()` ফাংশন `<body>` ট্যাগে বিভিন্ন ক্লাস অ্যাড করবে।

---

## 🔹 Output উদাহরণ

ধরা যাক তুমি একটা সিঙ্গেল পোস্ট পেজ ওপেন করেছো। তখন HTML এর আউটপুট হবে এরকমঃ

```html
<body class="home blog logged-in admin-bar single single-post postid-123">
```

---

## 🔹 কোন কোন ক্লাস আসতে পারে?

`body_class()` বিভিন্ন কন্ডিশন অনুযায়ী ক্লাস তৈরি করে। যেমনঃ

* **পৃষ্ঠা ভিত্তিক ক্লাস**

  * `home` → যদি Homepage হয়
  * `single` → যদি Single post হয়
  * `page` → যদি Page হয়
  * `archive` → যদি Archive পেজ হয়

* **ইউজার ভিত্তিক ক্লাস**

  * `logged-in` → যদি ইউজার লগইন থাকে
  * `admin-bar` → যদি Admin bar সক্রিয় থাকে

* **পোস্ট ভিত্তিক ক্লাস**

  * `single-post` → Single Post পেজে
  * `postid-123` → নির্দিষ্ট পোস্ট ID

---

## 🔹 Custom Class যোগ করা

তুমি চাইলে নিজের ক্লাসও যোগ করতে পারোঃ

```php
<body <?php body_class( 'custom-layout dark-mode' ); ?>>
```

Output:

```html
<body class="home blog custom-layout dark-mode">
```

---

## 🔹 Hook System এর সাথে ব্যবহার

`body_class` filter hook ব্যবহার করে তুমি চাইলে শর্ত অনুযায়ী আরও ক্লাস যোগ করতে পারোঃ

```php
function my_custom_body_classes( $classes ) {
    if ( is_single() ) {
        $classes[] = 'single-custom-class';
    }
    return $classes;
}
add_filter( 'body_class', 'my_custom_body_classes' );
```

---

✅ **সারাংশ:**

* `body_class()` আসলে একটি **function**।
* এটি `<body>` ট্যাগে **default + custom classes** যোগ করে।
* এগুলো CSS/JS দিয়ে নির্দিষ্ট condition target করতে অনেক কাজে লাগে।

---

[Back](../../README.md)