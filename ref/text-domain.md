# Text Domain
ওয়ার্ডপ্রেস থিম বা প্লাগইন ডেভেলপমেন্টে **Text Domain** একটি অত্যন্ত গুরুত্বপূর্ণ বিষয়, বিশেষ করে **অনুবাদ (translation / i18n)** এর জন্য।

---

## 📌 Text Domain কী?

* **Text Domain** হলো একটি **unique identifier** (একক পরিচয়), যা দিয়ে ওয়ার্ডপ্রেস বুঝতে পারে কোন থিম/প্লাগইনের **অনুবাদ ফাইল (.mo/.po)** ব্যবহার করতে হবে।
* এক কথায়, এটি থিম/প্লাগইনের জন্য একটি **translation namespace**।

---

## 🖥️ কোথায় ব্যবহার হয়?

সাধারণত `style.css` ফাইলের **থিম হেডারে** Text Domain ঘোষণা করা হয়।

```css
/*
Theme Name: Lesson LMS
Text Domain: lessonlms
*/
```

---

## 🔎 উদাহরণ

ধরা যাক, তোমার থিমের নাম **Lesson LMS** এবং Text Domain সেট করা হয়েছে `lessonlms`।
এখন তুমি যদি কোডে কোনো টেক্সট অনুবাদযোগ্য করতে চাও:

```php
<?php _e( 'Read More', 'lessonlms' ); ?>
```

👉 এখানে `'lessonlms'` হলো Text Domain।
ওয়ার্ডপ্রেস বুঝবে যে `"Read More"` স্ট্রিংটির অনুবাদ `lessonlms` থিমের **translation ফাইল** (`lessonlms-bn_BD.po/.mo`) থেকে নিতে হবে।

---

## ⚡ গুরুত্বপূর্ণ নিয়ম

1. **Text Domain থিমের ফোল্ডারের নামের সাথে মিল থাকতে হবে।**

   * যেমন, থিম ফোল্ডারের নাম যদি `lessonlms`, তবে Text Domain-ও `lessonlms` হওয়া উচিত।

2. **সঠিক ফাংশন ব্যবহার করতে হবে**:

   * `__()` → টেক্সট রিটার্ন করে
   * `_e()` → টেক্সট ইকো করে
   * `_n()` → plural/singular হ্যান্ডেল করে

3. অনুবাদ ফাইল রাখতে হবে →

   ```
   wp-content/themes/lessonlms/languages/
   lessonlms-bn_BD.po
   lessonlms-bn_BD.mo
   ```

---

✅ সংক্ষেপে: Text Domain হলো একটি ট্যাগ, যেটি দিয়ে ওয়ার্ডপ্রেস ঠিক করে কোন থিম বা প্লাগইনের অনুবাদ ফাইল ব্যবহার হবে।

---
 ওয়ার্ডপ্রেস থিম ডেভেলপমেন্টে **ফোল্ডার বা Text Domain নামের সাথে ফাংশনের নামকরণ** একটি সাধারণ **best practice**। 

---

## কেন ফাংশনের নাম Text Domain বা থিম ফোল্ডারের সাথে মিলিয়ে রাখি?

1. **নেমক্ল্যাশ (Name Collision) এড়ানোর জন্য**

   * ওয়ার্ডপ্রেসে একাধিক থিম বা প্লাগইন একসাথে চলতে পারে।
   * যদি একই নামের ফাংশন অন্য থিম/প্লাগইনেও থাকে, তবে PHP **“function already declared” error** দেখাবে।
   * উদাহরণ:

     ```php
     function custom_header() { ... }  // সমস্যা হতে পারে অন্য থিমে একই নাম থাকলে
     ```
   * সমাধান: **Text Domain/ফোল্ডার নাম প্রিফিক্স হিসেবে ব্যবহার করা**

     ```php
     function lessonlms_custom_header() { ... }
     ```

2. **কোডের অর্গানাইজেশন সহজ হয়**

   * ফাংশনের নাম দেখলেই বোঝা যায় কোন থিম বা প্লাগইনের সাথে সম্পর্কিত।
   * উদাহরণ: `lessonlms_enqueue_scripts()` → এই ফাংশন “lesson” থিমের জন্য।

3. **Hooks ও Actions এ সুবিধা**

   * থিম বা প্লাগইনের হুকের সাথে ফাংশন যুক্ত করার সময় নামকরণ স্পষ্ট থাকলে conflicts কম হয়।
   * উদাহরণ:

     ```php
     add_action('wp_enqueue_scripts', 'lessonlms_enqueue_scripts');
     ```

---

## ⚡ Best Practices

1. **সদা থিম/প্লাগইন নামকে প্রিফিক্স হিসেবে ব্যবহার করো**

   * ফোল্ডার নাম: `lessonlms`
   * ফাংশন: `lessonlms_` দিয়ে শুরু

2. **কমপ্লেক্স ফাংশনের নামকরণে underscores ব্যবহার**

   * উদাহরণ: `lessonlms_register_custom_post_types()`

3. **Avoid generic names**

   * যেমন `header_scripts()` → conflict হতে পারে
   * পরিবর্তে: `lessonlms_header_scripts()`

---

✅ সংক্ষেপে:

* Text Domain বা থিম ফোল্ডারের নামকে ফাংশন নামের প্রিফিক্স হিসেবে ব্যবহার করলে **নেমক্ল্যাশ এড়ানো যায়**, **কোড আরও পরিচ্ছন্ন হয়**, এবং **ওয়ার্ডপ্রেস হুকের সাথে conflict কম হয়**।

---


[Back](../README.md)

