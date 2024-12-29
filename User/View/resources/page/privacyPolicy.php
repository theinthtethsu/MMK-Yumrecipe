<?php
$user_path = "/yumrecipe/User/View/resources/page/";
$blog_path = "/yumrecipe/User/View/resources/page/Blog/";
$images_path = "/yumrecipe/User/View/resources/img/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Privacy Policy</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-white">
  <!-- Header -->
  <?php require_once '../../common/header-after-login.php'; ?>
  <?php require_once '../../common/nav.php'; ?>
        
  </header>

  <!-- Full-Screen Privacy Policy Section -->
  <main class="w-full h-96 bg-cover bg-center bg-no-repeat relative" style="background-image: url('http://localhost/yumrecipe/User/View/resources/images/privacy-policy.jpg');">
    <!-- Dark Overlay -->
   
    <!-- Privacy Policy Title -->
    <div class="relative z-10 flex items-center justify-center h-full">
      <h2 class="text-6xl font-bold text-red-500">Privacy Policy</h2>
    </div>
  </main>

  <!-- Full-Width Privacy Content -->
  <section class="w-full bg-white text-gray-700 py-20 px-10 dark:bg-gray-900 dark:text-white">
    <div class="max-w-4xl mx-auto space-y-10">
      <!-- Section 1 -->
      <div>
        <h3 class="text-3xl font-semibold">1. Information we collect</h3>
        <p class="mt-4 text-lg leading-relaxed">
          We collect personal information such as name, email address, and password when users create an account, along with optional profile details like profile pictures or food preferences. Additionally, we gather data on recipes saved or submitted by users, usage details like pages visited and features used, and device information such as IP address, browser type, and operating system. We also use cookies and tracking data to enhance user experience and remember preferences.
        </p>
      </div>

      <!-- Section 2 -->
      <div>
        <h3 class="text-3xl font-semibold">2. How We Use Your Information</h3>
        <p class="mt-4 text-lg leading-relaxed">
          We use the collected information to manage user accounts, enable recipe-saving features, and provide personalized recommendations. It helps us improve the website by analyzing user interactions and enhancing the experience. We also use the data to communicate updates, respond to inquiries, and ensure security by protecting against unauthorized access or fraud.
        </p>
      </div>

      <!-- Section 3 -->
      <div>
        <h3 class="text-3xl font-semibold">3. How We Share Your Information</h3>
        <p class="mt-4 text-lg leading-relaxed">
          We respect your privacy and do not sell your personal information. However, we may share it with trusted service providers, such as those handling hosting, analytics, or email services, to support our website's functionality. If required by law or to comply with legal obligations, we may disclose information to authorities. In the event of a business merger, acquisition, or sale, user data may be transferred to the new entity. Additionally, we may share anonymized, aggregated data, such as website usage trends, which cannot identify individual users.
        </p>
      </div>

      <!-- Section 4 -->
      <div>
        <h3 class="text-3xl font-semibold">4. Data Security</h3>
        <p class="mt-4 text-lg leading-relaxed">
          We prioritize the security of your personal information by using SSL encryption to protect data transmitted between your device and our servers. Access to user information is restricted to authorized personnel only, and all data is stored on secure servers safeguarded against unauthorized access. Additionally, we regularly monitor our systems for vulnerabilities and update our software to prevent potential security breaches.
        </p>
      </div>

      <!-- Section 5 -->
      <div>
        <h3 class="text-3xl font-semibold">5. Cookies and Tracking</h3>
        <p class="mt-4 text-lg leading-relaxed">
          We use cookies and similar technologies to improve your experience on our website. Essential cookies enable core functions like logging in and saving recipes, while analytics cookies help us track user interactions to enhance performance. Preference cookies store settings like language or display preferences for convenience. Users can manage cookie preferences through their browser settings, though disabling them may impact functionality. Additionally, we use third-party services, such as Google Analytics, which may use their own cookies to gather data on user behavior.
        </p>
      </div>

      <!-- Section 6 -->
      <div>
        <h3 class="text-3xl font-semibold">6. Your Rights</h3>
        <p class="mt-4 text-lg leading-relaxed">
          Depending on your location, you may have several rights regarding your personal data. You can request a copy of the information we hold about you, update any inaccuracies, or ask us to delete your data ("Right to Be Forgotten"). You can also withdraw consent to receive newsletters or promotional emails and request that we transfer your data to another service provider, where applicable.
        </p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="bg-gray-900">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/yumrecipe/User/View/common/footer.php'); ?>
    </div>
  </footer>
</body>
</html>
