## 🔹 `wp_enqueue_style()` কী?

`wp_enqueue_style()` হলো WordPress-এর একটি **function** যেটা সঠিকভাবে CSS ফাইল (stylesheet) লোড করার জন্য ব্যবহার করা হয়।

👉 অনেক ডেভেলপার ভুলভাবে সরাসরি `<link>` ট্যাগ ব্যবহার করে স্টাইলশিট অ্যাড করেন, কিন্তু **WordPress-এ সেটা best practice না**।
**Correct way হলো enqueue করা।**

---

## 🔹 Basic Syntax

```php
wp_enqueue_style( $handle, $src, $deps, $ver, $media );
```

### Parameters:

1. **\$handle** (string) → স্টাইলশিটের জন্য ইউনিক নাম (mandatory)
2. **\$src** (string) → স্টাইলশিটের URL (optional, যদি পূর্বে register করা থাকে তবে লাগবে না)
3. **\$deps** (array) → dependencies (অন্য stylesheet আগে লোড হবে কিনা)
4. **\$ver** (string|bool|null) → version number (cache busting এর জন্য)
5. **\$media** (string) → কোন media এর জন্য (all, screen, print ইত্যাদি)

---

## 🔹 উদাহরণ ১: Simple CSS enqueue

```php
function my_theme_enqueue_styles() {
    wp_enqueue_style(
        'my-style', // handle
        get_stylesheet_uri() // src (style.css)
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
```

👉 এটি থিমের `style.css` লোড করবে।

---

## 🔹 উদাহরণ ২: Custom CSS file enqueue

```php
function my_theme_enqueue_custom_styles() {
    wp_enqueue_style(
        'custom-style', // handle
        get_template_directory_uri() . '/assets/css/custom.css', // src
        array(), // dependency
        '1.0.0', // version
        'all' // media
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_custom_styles' );
```

👉 এখানে `custom.css` ফাইল লোড হবে।

---

## 🔹 উদাহরণ ৩: Dependency সহ

```php
function my_theme_enqueue_with_deps() {
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/child.css',
        array( 'parent-style' ), // dependency
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_with_deps' );
```

👉 এখানে `child.css` লোড হবে **parent-style এর পরে**।

---

## 🔹 wp\_enqueue\_style() কোথায় ব্যবহার হয়?

* সবসময় `wp_enqueue_scripts` hook এর ভিতরে ব্যবহার করতে হবে।

  ```php
  add_action( 'wp_enqueue_scripts', 'your_function_name' );
  ```
* কখনোই সরাসরি header.php বা অন্য template ফাইলে `<link>` ট্যাগ লিখা উচিত না।

---

✅ **সারসংক্ষেপ:**

* `wp_enqueue_style()` = CSS সঠিকভাবে enqueue করার function।
* Hook: `wp_enqueue_scripts`
* এতে dependency, versioning, media query সাপোর্ট করে।
* WordPress best practice মেনে চলার জন্য এটি অবশ্যই ব্যবহার করা উচিত।

---
[Back](../../README.md)
