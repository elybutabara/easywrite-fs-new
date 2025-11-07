<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DevTeam Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <header class="bg-white shadow">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-indigo-600">DevTeam</h1>
      <nav class="space-x-6">
        <a href="#about" class="hover:text-indigo-600">About Us</a>
        <a href="#services" class="hover:text-indigo-600">Services</a>
        <a href="#contact" class="hover:text-indigo-600">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-indigo-600 text-white py-20">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold mb-4">We Build Modern Websites</h2>
      <p class="text-lg mb-6">Custom, responsive, and fast websites for businesses of all sizes.</p>
      <a href="#contact" class="bg-white text-indigo-600 font-semibold px-6 py-3 rounded shadow hover:bg-gray-100">
        Get in Touch
      </a>
    </div>
  </section>

  <!-- About Us -->
<section id="about" class="py-20 bg-white">
  <div class="container mx-auto px-6 lg:px-24">
    <h3 class="text-3xl font-bold mb-12 text-center text-gray-800">About Us</h3>

    <!-- Team Member 1: Marketing -->
    <div class="flex flex-col md:flex-row items-center mb-16">
      <div class="md:w-1/2 mb-6 md:mb-0 flex justify-center">
        <img src="/images/avatar_lg.jpg" alt="Team Member - Marketing"
          class="rounded-lg shadow-md w-full max-w-md h-auto">
      </div>
      <div class="md:w-1/2 md:pl-12 text-center md:text-left px-4">
        <h4 class="text-2xl font-semibold mb-2">Sven</h4>
        <p class="text-gray-600">
          Sven leads our marketing efforts with a deep understanding of digital platforms and consumer behavior. 
          He specializes in creating content strategies tailored for platforms like Facebook, TikTok, and Instagram, 
          helping brands connect with their audiences through engaging campaigns and consistent messaging. 
          With years of experience in social media growth, advertising, and brand positioning, Sven ensures our clients’ 
          online presence is not only seen but remembered. His data-driven approach combined with creative insight allows us 
          to launch high-impact marketing strategies that drive real results.
        </p>
      </div>
    </div>

    <!-- Team Member 2: Developer -->
    <div class="flex flex-col md:flex-row-reverse items-center">
      <div class="md:w-1/2 mb-6 md:mb-0 flex justify-center">
        <img src="/images/avatar_lg.jpg" alt="Team Member - Developer"
          class="rounded-lg shadow-md w-full max-w-md h-auto">
      </div>
      <div class="md:w-1/2 md:pr-12 text-center md:text-left px-4">
        <h4 class="text-2xl font-semibold mb-2">Ely</h4>
        <p class="text-gray-600">
          Ely is a full-stack developer with a comprehensive background in building modern, scalable web applications. 
          With strong expertise in both frontend and backend technologies, he ensures that every project is not only visually 
          appealing but also secure, efficient, and maintainable. Ely has experience working with various frameworks and languages, 
          from React and Tailwind CSS on the frontend to Node.js, Express, and PostgreSQL on the backend. His approach to development 
          is focused on clarity, performance, and long-term sustainability—allowing our clients to scale with confidence and deliver 
          seamless user experiences across all devices.
        </p>
      </div>
    </div>
  </div>
</section>




  <!-- Services -->
  <section id="services" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
      <h3 class="text-3xl font-bold mb-6 text-gray-800">Our Services</h3>
      <div class="grid md:grid-cols-3 gap-10">
        <div class="bg-white p-6 rounded shadow-md">
          <h4 class="text-xl font-semibold mb-2">Custom Web Development</h4>
          <p>Tailor-made websites built with modern tools and technologies.</p>
        </div>
        <div class="bg-white p-6 rounded shadow-md">
          <h4 class="text-xl font-semibold mb-2">Responsive Design</h4>
          <p>Mobile-first layouts that look great on any screen size.</p>
        </div>
        <div class="bg-white p-6 rounded shadow-md">
          <h4 class="text-xl font-semibold mb-2">Performance Optimization</h4>
          <p>Fast-loading websites optimized for speed and SEO.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-20 bg-indigo-600 text-white">
    <div class="container mx-auto px-6 text-center">
      <h3 class="text-3xl font-bold mb-6">Let's Build Something Great</h3>
      <p class="mb-8">Have a project in mind? We'd love to help you bring it to life.</p>
      <a href="mailto:contact@devteam.com" class="bg-white text-indigo-600 font-semibold px-6 py-3 rounded hover:bg-gray-100">
        Email Us
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white text-center py-6 text-sm text-gray-600">
    &copy; 2025 DevTeam. All rights reserved.
  </footer>

</body>
</html>
