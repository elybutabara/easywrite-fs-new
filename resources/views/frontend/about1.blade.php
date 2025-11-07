<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Social Media Manager/VA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">
    <div class="p-6">
        <!-- Section 1: Cover -->
        <section class="grid md:grid-cols-2 bg-white shadow-[0_5px_10px_rgba(0,0,0,0.5)]">
            <div class="h-full">
                <img src="/images/video-poster.jpg" alt="Working team" class="w-full h-full object-cover">
            </div>
            <div class="flex flex-col justify-center items-center bg-[#B8C8CC] p-8 text-center">
                <div class="rounded-full w-16 h-16 bg-white flex items-center justify-center mb-4">
                    <img src="/images/favicon.png" alt="">
                </div>
                <h1 class="text-4xl font-bold tracking-wide text-white">PORTFOLIO</h1>
                <p class="text-lg mt-2 text-white">Social Media Manager / VA</p>
            </div>
        </section>

        <!-- Section 2 & 3 in one row -->
        <section class="grid md:grid-cols-2 gap-8 px-8 pt-8 pb-4">
        
            <!-- Section 2: About -->
            <div class="bg-white rounded-lg shadow-[0_4px_10px_rgba(0,0,0,0.4)] overflow-hidden">
                <div class="bg-[#6B8C8E] p-6 flex justify-between items-center">
                    <div>
                        <h2 class="text-2xl font-bold text-white">COMPANY NAME</h2>
                        <p class="text-white mt-1 text-sm">Social Media Manager/VA</p>
                        <div class="flex gap-3 mt-4 text-white">
                            <span>🌐</span>
                            <span>📧</span>
                            <span>📱</span>
                        </div>
                    </div>
                    <img src="/images/kristine.png" alt="Your Photo" 
                    class="w-32 h-32 object-cover rounded-lg border-4 border-white">
                </div>
                <div class="p-6">
                    <blockquote class="italic text-gray-600">
                        "Helping businesses grow their social media presence and increase conversions now!"
                    </blockquote>
                    <h3 class="mt-4 font-bold text-gray-800">WHAT WE DO</h3>
                    <ul class="mt-2 text-gray-600 list-disc list-inside">
                        <li>Social Media Strategy</li>
                        <li>Content Creation</li>
                        <li>Analytics & Reporting</li>
                    </ul>
                </div>
            </div>

            <!-- Section 3: Services -->
            <div class="bg-white rounded-lg p-10 max-w-6xl w-full flex shadow-[0_4px_10px_rgba(0,0,0,0.4)]">
        
                <!-- Left: Title -->
                <div class="w-1/3 flex items-center justify-center">
                    <h1 class="text-4xl text-blue-900 font-light italic border-l-8 pl-4 border-[#6B8C8E]">
                        Our Services
                    </h1>
                </div>

                <!-- Right: Services -->
                <div class="w-2/3 space-y-6">
                
                <!-- Service Item -->
                <div class="flex items-start space-x-4">
                    <div class="bg-[#6B8C8E] p-3 rounded">
                        🎨
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">CONTENT CREATION</h3>
                        <p class="text-gray-600 text-sm">
                            Design and create social media posts that are aligned with your company brand.
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="bg-[#6B8C8E] p-3 rounded">
                        💡
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">SOCIAL MEDIA STRATEGY</h3>
                        <p class="text-gray-600 text-sm">We help to create and audit success pillars based on your business.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="bg-[#6B8C8E] p-3 rounded">
                        ⭐
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">COPY WRITING</h3>
                        <p class="text-gray-600 text-sm">We write with a purpose to convert your ideal clients.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="bg-[#6B8C8E] p-3 rounded">
                        📈
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">ANALYTICS REPORTING</h3>
                        <p class="text-gray-600 text-sm">
                            We audit your success and provide a detailed monthly report for your insights.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4 & 5 in one row -->
        <section class="grid md:grid-cols-2 gap-8 p-8">
            <div class="bg-white shadow-[0_4px_10px_rgba(0,0,0,0.4)] rounded-lg w-full max-w-6xl flex flex-col md:flex-row overflow-hidden">

                <!-- Vision Box -->
                <div class="md:w-1/2 bg-[#6B8C8E] flex items-center justify-center p-10">
                    <div class="bg-white text-center p-10 w-full max-w-md shadow-md">
                        <!-- Icon placeholder -->
                        <div class="text-4xl mb-4 text-blue-500">🌿</div>
                        <h2 class="text-2xl text-blue-800 font-light mb-2">Vision</h2>
                        <p class="text-gray-600 text-sm">Insert your vision statement here to show your client you are the right one.</p>
                    </div>
                </div>

                <!-- Mission Text -->
                <div class="md:w-1/2 p-10 flex flex-col justify-center">
                    <h2 class="text-3xl text-blue-800 font-light mb-4">Mission</h2>
                    <p class="text-gray-700 text-sm mb-4">
                        Insert your mission statement and elaborate how you are different from the rest. Highlight your brand values or 
                        stand out.
                    </p>
                    <p class="text-gray-700 text-sm">
                        Describe the second mission of your company and explain briefly why this is important to you or your company. 
                        This makes your client trust your brand and services.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-[0_4px_10px_rgba(0,0,0,0.4)] max-w-6xl w-full p-8 space-y-10">
    
                <!-- Meet The Team Header -->
                <div class="relative h-64 w-full rounded-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d" alt="Team Background" 
                    class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-[#6B8C8E] bg-opacity-80 flex items-center justify-center">
                        <h2 class="text-4xl font-light text-white text-center leading-snug">
                        Meet<br>The<br>Team
                        </h2>
                    </div>
                </div>

                <!-- Team Members Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Team Member 1 -->
                <div class="text-center bg-gray-50 p-6 rounded shadow-sm">
                    <img src="/images/sven.png" alt="Member" class="mx-auto mb-4 rounded-md shadow-md max-h-[80px]">
                    <div class="text-2xl mb-2">💼</div>
                    <h3 class="font-semibold">SVEN INGE HENNINGSEN:</h3>
                    <p class="text-sm font-medium text-gray-600 mb-2">SOCIAL MARKETING SPECIALIST</p>
                    <p class="text-sm text-gray-700">
                        Conduct social media experiences and come up with strategy to grow your business.
                    </p>
                </div>

                <!-- Team Member 2 -->
                <div class="text-center bg-gray-50 p-6 rounded shadow-sm">
                    <img src="/images/user.png" alt="Member" class="mx-auto mb-4 rounded-md shadow-md max-h-[80px]">
                    <div class="text-2xl mb-2">✒️</div>
                    <h3 class="font-semibold">ELY BUTABARA:</h3>
                    <p class="text-sm font-medium text-gray-600 mb-2">WEB DEVELOPER</p>
                    <p class="text-sm text-gray-700">
                        <ul>
                            <li>PHP/Laravel</li>
                            <li>CSS/Bootstrap/Tailwind</li>
                            <li>React</li>
                            <li>Vue/Inertia</li>
                            <li>MySQL/NoSQL</li>
                            <li>Node.js/Express</li>
                            <li>Docker/GitHub Actions</li>
                        </ul>
                    </p>
                </div>

                </div>
            </div>
        </section>

        <section class="px-8 pt-4">
            <div class="bg-white shadow-[0_4px_10px_rgba(0,0,0,0.4)] rounded-lg w-full flex flex-col md:flex-row overflow-hidden">

                <!-- Left Side: Package Info -->
                <div class="bg-[#6B8C8E] md:w-1/3 p-10 flex flex-col items-center justify-center text-center space-y-4 text-white">
                    <div class="text-4xl text-blue-500">🍃</div> <!-- Icon placeholder -->
                    <h2 class="text-3xl font-light">Package</h2>
                    <p class="text-sm">
                        Describe your package. Highlight the USP (Unique Selling Point) and make it clear why this service suits your clients’ needs.
                    </p>
                </div>

                <!-- Right Side: Comparison Table -->
                <div class="md:w-2/3 p-8">
                
                    <!-- Header Row -->
                    <div class="grid grid-cols-3 mb-6 text-center font-semibold text-gray-800">
                        <div></div>
                        <div>Basic</div>
                        <div class="relative">
                        Premium
                        <span class="absolute -top-2 right-1 text-blue-500 text-xl">⭐</span>
                        </div>
                    </div>

                <!-- Service Rows -->
                <div class="space-y-4">
                    <!-- Row 1 -->
                    <div class="grid grid-cols-3 items-center p-4 bg-gray-100 rounded">
                    <div>
                        <h4 class="font-semibold text-sm">Service Type 1</h4>
                        <p class="text-xs text-gray-600">Describe briefly what is included in this service.</p>
                    </div>
                    <div class="flex justify-center">
                        <input type="checkbox" checked class="form-checkbox h-4 w-4 text-blue-600" disabled/>
                    </div>
                    <div class="flex justify-center">
                        <input type="checkbox" checked class="form-checkbox h-4 w-4 text-blue-600" disabled/>
                    </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="grid grid-cols-3 items-center p-4">
                    <div>
                        <h4 class="font-semibold text-sm">Service Type 2</h4>
                        <p class="text-xs text-gray-600">Describe briefly what is included in this service.</p>
                    </div>
                    <div class="flex justify-center">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" disabled/>
                    </div>
                    <div class="flex justify-center">
                        <input type="checkbox" checked class="form-checkbox h-4 w-4 text-blue-600" disabled/>
                    </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="grid grid-cols-3 items-center p-4 bg-gray-100 rounded">
                    <div>
                        <h4 class="font-semibold text-sm">Service Type 3</h4>
                        <p class="text-xs text-gray-600">Describe briefly what is included in this service.</p>
                    </div>
                    <div class="flex justify-center">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" disabled/>
                    </div>
                    <div class="flex justify-center">
                        <input type="checkbox" checked class="form-checkbox h-4 w-4 text-blue-600" disabled/>
                    </div>
                    </div>

                    <!-- Row 4 -->
                    <div class="grid grid-cols-3 items-center p-4">
                    <div>
                        <h4 class="font-semibold text-sm">Service Type 4</h4>
                        <p class="text-xs text-gray-600">Describe briefly what is included in this service.</p>
                    </div>
                    <div class="flex justify-center">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" disabled/>
                    </div>
                    <div class="flex justify-center">
                        <input type="checkbox" checked class="form-checkbox h-4 w-4 text-blue-600"disabled />
                    </div>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="mt-6">
                    <h4 class="font-semibold text-sm">Terms and Conditions</h4>
                    <p class="text-xs text-gray-600 mt-1">(Include details of legal terms and conditions or disclaimers as needed.)</p>
                </div>

                </div>
            </div>
        </section>
    </div>
</body>
</html>