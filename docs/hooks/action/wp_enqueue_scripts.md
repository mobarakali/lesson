# `wp_enqueue_scripts` Hook

* **`wp_enqueue_scripts`** হলো **সঠিক হুক**, যখন তুমি থিম বা প্লাগইনের জন্য **ফ্রন্ট-এন্ডে স্ক্রিপ্ট এবং স্টাইলস লোড করাতে চাও**।
* নামটি শুধু “scripts” দেখালেও, এটি **উভয়ই—CSS স্টাইল এবং JS স্ক্রিপ্ট—enqueue করতে ব্যবহার করা হয়**।

---

### উদাহরণ

```php
function lessonlms_enqueue_assets() {
    // CSS লোড
    wp_enqueue_style( 'lessonlms-style', get_stylesheet_uri() );

    // JS লোড
    wp_enqueue_script( 'lessonlms-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'lessonlms_enqueue_assets' );
```

* এখানে `add_action('wp_enqueue_scripts', ...)` ব্যবহার করে আমরা নিশ্চিত করছি, স্ক্রিপ্ট ও স্টাইল **সঠিক সময়ে এবং সঠিক জায়গায় লোড হচ্ছে**।

---

✅ সংক্ষেপে:

* **ফ্রন্ট-এন্ডে স্ক্রিপ্ট ও স্টাইল লোড করার জন্য সর্বদা `wp_enqueue_scripts` হুক ব্যবহার করো।**
* এটি থিম বা প্লাগইনের **সব enqueue কাজের জন্য standard practice**।

---

[Back](../../../README.md)
