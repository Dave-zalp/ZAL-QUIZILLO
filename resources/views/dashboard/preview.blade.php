<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<style>
    body {
    background: linear-gradient(135deg, #f5f7ff 0%, #c3e3ff 100%);
    position: relative;
    overflow-x: hidden;
    }

    body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background:
    radial-gradient(circle at 15% 50%, rgba(79, 70, 229, 0.08) 0%, transparent 25%),
    radial-gradient(circle at 85% 30%, rgba(99, 102, 241, 0.08) 0%, transparent 25%);
    pointer-events: none;
    z-index: -1;
    }

    /* Optional: Add subtle animation to the background */
    @keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
    }

    body {
    animation: gradientShift 15s ease infinite;
    background-size: 200% 200%;
    }
</style>



<body class="bg-gray-50">
    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Course Selection</h1>
            <p class="text-gray-600 mt-2">Select your preferred courses to begin the assessment</p>
        </div>

        <!-- Guidelines Section -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Guidelines</h2>
            <ul class="space-y-3">
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-green-500 mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span class="text-gray-600">You are to choose 1 option from each Question</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-green-500 mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-gray-600">Each course contains 40 questions with a 45-minute time limit</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-green-500 mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    <span class="text-gray-600">You can review and change answers before final submission</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-green-500 mt-0.5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <span class="text-gray-600">Results will be sent to email after completion</span>
                </li>
            </ul>
        </div>

        <!-- Course Selection Section -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-900">Available Courses</h2>
                <span class="bg-indigo-100 text-indigo-800 text-sm font-medium px-3 py-1 rounded-full">
                    Selected: <span id="selectedCount">0</span>/4
                </span>
            </div>

            <form method="POST" action="{{ route('exam.active') }}">
              @csrf
            <!-- Course List -->
            <div class="space-y-3">
                <!-- Mathematics Courses -->
                <div class="pb-2 mb-2">
                    <h3 class="text-sm font-medium text-gray-500 mb-3">Select only 4 courses</h3>
                    <div class="space-y-2">

                     @forelse ($data as $course)

                     <label class="flex items-center p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition-colors space-x-4">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-indigo-600 rounded border-gray-300 focus:ring-indigo-500" name="{{ $course->id }}" onclick="updateSelectedCount()">
                        <span class="text-gray-700">{{ $course->name }}</span>
                        <span class="ml-auto text-sm text-gray-500">{{ $course->number_of_questions }} questions</span>
                    </label>

                     @empty

                     @endforelse

                    </div>
                </div>


                <!-- Continue for all 20 courses, grouped by department -->
            </div>

            <!-- Start Button -->
            <div class="mt-8 text-center">
                <button class="px-8 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors disabled:bg-gray-300 disabled:cursor-not-allowed">
                    Start Assessment
                </button>
                <p class="mt-2 text-sm text-gray-500">GOODLUCK !!!</p>
            </div>
            </form>
        </div>
    </div>
</body>
</html>


<script src="{{ asset('dashboard/preview.js') }}"></script>


