<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{ asset('dashboard/index.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
        <!-- Subject Navigation -->
        <nav class="bg-white rounded-xl shadow-sm mb-8">
            <ul class="flex items-center justify-between p-1 text-sm sm:text-base">
                <li class="flex-1">
                    <button class="w-full py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors">
                        English
                    </button>
                </li>
                <li class="flex-1">
                    <button class="w-full py-3 px-4 rounded-lg bg-indigo-600 text-white">
                        Mathematics
                    </button>
                </li>
                <li class="flex-1">
                    <button class="w-full py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors">
                        Chemistry
                    </button>
                </li>
                <li class="flex-1">
                    <button class="w-full py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors">
                        Physics
                    </button>
                </li>
            </ul>
        </nav>

        <!-- Question Card -->
        <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 mb-8">
            <!-- Question Header -->
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center space-x-4">
                    <span class="text-lg font-medium text-gray-700">Question 1/40</span>
                    <button class="p-2 rounded-full bg-indigo-50 hover:bg-indigo-100 transition-colors audio-pulse">
                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                        </svg>
                    </button>
                </div>
                <div class="text-sm font-medium text-indigo-600">Time: 02:45</div>
            </div>

            <!-- Question Content -->
            <div class="mb-8">
                <p class="text-gray-800 text-lg">If the volume of a hemisphere is increasing at a steady rate of 18πm³s⁻¹, at what rate is its radius changing when it is 6m?</p>
            </div>

            <!-- Options -->
            <div class="space-y-4">
                <label class="block">
                    <div class="option-hover flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-indigo-600 cursor-pointer transition-all">
                        <div class="option-circle w-6 h-6 rounded-full border-2 border-gray-300 mr-4 flex-shrink-0"></div>
                        <span class="text-gray-700">2.50ms⁻¹</span>
                    </div>
                </label>
                <label class="block">
                    <div class="option-hover flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-indigo-600 cursor-pointer transition-all">
                        <div class="option-circle w-6 h-6 rounded-full border-2 border-gray-300 mr-4 flex-shrink-0"></div>
                        <span class="text-gray-700">0.20ms⁻¹</span>
                    </div>
                </label>
                <label class="block">
                    <div class="option-hover flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-indigo-600 cursor-pointer transition-all">
                        <div class="option-circle w-6 h-6 rounded-full border-2 border-gray-300 mr-4 flex-shrink-0"></div>
                        <span class="text-gray-700">0.25ms⁻¹</span>
                    </div>
                </label>
                <label class="block">
                    <div class="option-hover flex items-center p-4 rounded-xl border-2 border-gray-200 hover:border-indigo-600 cursor-pointer transition-all">
                        <div class="option-circle w-6 h-6 rounded-full border-2 border-gray-300 mr-4 flex-shrink-0"></div>
                        <span class="text-gray-700">2.00ms⁻¹</span>
                    </div>
                </label>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between mt-8">
                <button class="px-6 py-3 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span>Previous</span>
                </button>
                <button class="px-6 py-3 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 transition-colors flex items-center space-x-2">
                    <span>Next</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Progress Grid -->
        <div>
            <p class="text-sm font-medium text-gray-600 mb-4">Attempted 0/40</p>
            <div class="grid grid-cols-10 sm:grid-cols-20 gap-2">
                <!-- Generate 40 boxes -->
                <div class="aspect-square bg-indigo-100 rounded-lg flex items-center justify-center text-sm font-medium text-indigo-600 cursor-pointer hover:bg-indigo-200 transition-colors">1</div>
                <div class="aspect-square bg-white rounded-lg flex items-center justify-center text-sm font-medium text-gray-600 cursor-pointer hover:bg-gray-50 transition-colors border border-gray-200">2</div>
                <!-- Add more boxes similarly -->
            </div>
        </div>
    </div>
</body>
</html>
