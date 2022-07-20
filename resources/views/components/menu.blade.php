<div class="py-4 text-gray-500  dark:text-gray-400">
    <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="{{route('dashboard')}}">
        Panel Acomita
    </a>
    <!-- First item in the list -->
    <ul class="mt-6">
        <li class="relative px-6 py-3">
            <!-- Active menu -->
            @if(url()->current() == route('dashboard'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true">
            </span>
            @endif
            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
               href="{{route('dashboard')}}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                </svg>
                <span class="ml-4">Dashboard</span>
            </a>
        </li>
    </ul>

    <!-- First item in the list -->
    <ul class="mt-6">
        <li class="relative px-6 py-3">
            <!-- Active menu -->
            @if(url()->current() == route('associations'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true">
            </span>
            @endif
            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
               href="{{route('associations')}}">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>

                <span class="ml-4">associations</span>
            </a>
        </li>
    </ul>
    <!-- First item in the list -->
    <ul class="mt-6">
        <li class="relative px-6 py-3">
            <!-- Active menu -->
            @if(url()->current() == route('associates'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true">
            </span>
            @endif
            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
               href="{{route('associates')}}">
                <svg width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="team_x2C__crew_x2C__group_1_"><g><g><g><g><path d="M8,9C6.346,9,5,7.654,5,6s1.346-3,3-3s3,1.346,3,3S9.654,9,8,9z M8,4C6.897,4,6,4.897,6,6s0.897,2,2,2       s2-0.897,2-2S9.103,4,8,4z" fill="#263238"/></g></g></g><g><g><g><path d="M5.5,31C5.224,31,5,30.776,5,30.5v-5C5,25.224,5.224,25,5.5,25S6,25.224,6,25.5v5       C6,30.776,5.776,31,5.5,31z" fill="#263238"/></g></g></g><g><g><g><path d="M3.5,21C3.224,21,3,20.776,3,20.5v-7C3,11.882,4.311,10,6,10h4.5c0.276,0,0.5,0.224,0.5,0.5       S10.776,11,10.5,11H6c-1.077,0-2,1.375-2,2.5v7C4,20.776,3.776,21,3.5,21z" fill="#263238"/></g></g></g><g><g><g><g><path d="M5,24H2c-0.551,0-1-0.448-1-1v-2c0-0.552,0.449-1,1-1h3c0.551,0,1,0.448,1,1v2C6,23.552,5.551,24,5,24        z M5,23v0.5V23L5,23L5,23z M2,21v2h2.999L5,21H2z" fill="#263238"/></g></g></g></g></g><g><g><g><g><path d="M26,9c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S27.654,9,26,9z M26,4c-1.103,0-2,0.897-2,2       s0.897,2,2,2s2-0.897,2-2S27.103,4,26,4z" fill="#263238"/></g></g></g><g><g><g><path d="M29.5,31c-0.276,0-0.5-0.224-0.5-0.5v-10c0-0.276,0.224-0.5,0.5-0.5c0.276,0,0.5-0.225,0.5-0.5v-6       c0-1.125-0.923-2.5-2-2.5h-4.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5H28c1.689,0,3,1.882,3,3.5v6       c0,0.652-0.418,1.208-1,1.414V30.5C30,30.776,29.776,31,29.5,31z" fill="#263238"/></g></g></g><g><g><g><g><path d="M24,24h-1.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5H24v-2h-1.5c-0.276,0-0.5-0.224-0.5-0.5        s0.224-0.5,0.5-0.5H24c0.551,0,1,0.448,1,1v2C25,23.552,24.551,24,24,24z" fill="#263238"/></g></g></g></g></g><g><g><g><g><path d="M17,7c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S18.654,7,17,7z M17,2c-1.103,0-2,0.897-2,2       s0.897,2,2,2s2-0.897,2-2S18.103,2,17,2z" fill="#263238"/></g></g></g><g><g><g><path d="M26.5,31c-0.276,0-0.5-0.224-0.5-0.5v-7c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7       C27,30.776,26.776,31,26.5,31z" fill="#263238"/></g></g></g><g><g><g><path d="M8.5,31C8.224,31,8,30.776,8,30.5v-7C8,23.224,8.224,23,8.5,23S9,23.224,9,23.5v7       C9,30.776,8.776,31,8.5,31z" fill="#263238"/></g></g></g><g><g><g><path d="M14.5,31c-0.276,0-0.5-0.224-0.5-0.5v-6c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6       C15,30.776,14.776,31,14.5,31z" fill="#263238"/></g></g></g><g><g><g><path d="M20.5,31c-0.276,0-0.5-0.224-0.5-0.5v-11c0-0.276,0.224-0.5,0.5-0.5c0.276,0,0.5-0.225,0.5-0.5v-7       c0-1.125-0.923-2.5-2-2.5h-4c-1.077,0-2.063,1.386-2.114,2.521L12.5,19.524c-0.013,0.275-0.266,0.498-0.523,0.475       c-0.276-0.013-0.489-0.247-0.476-0.523l0.387-8.002C11.961,9.835,13.309,8,15,8h4c1.689,0,3,1.882,3,3.5v7       c0,0.652-0.418,1.208-1,1.414V30.5C21,30.776,20.776,31,20.5,31z" fill="#263238"/></g></g></g><g><g><g><path d="M17.5,30.5v-9V30.5z" fill="#263238"/></g></g><g><g><path d="M17.5,31c-0.276,0-0.5-0.224-0.5-0.5v-9c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v9       C18,30.776,17.776,31,17.5,31z" fill="#263238"/></g></g></g><g><g><g><g><path d="M14,23h-3c-0.551,0-1-0.448-1-1v-2c0-0.552,0.449-1,1-1h3c0.551,0,1,0.448,1,1v2        C15,22.552,14.551,23,14,23z M14,22v0.5V22L14,22L14,22z M11,20v2h2.999L14,20H11z" fill="#263238"/></g></g></g></g></g></g></svg>

                <span class="ml-4">asociados</span>
            </a>
        </li>
    </ul>
    <!-- First item in the list -->
    <ul class="mt-6">
        <li class="relative px-6 py-3">
            <!-- Active menu -->
            @if(url()->current() == route('activities'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true">
            </span>
            @endif
            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
               href="{{route('activities')}}">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>

                <span class="ml-4">Actividades</span>
            </a>
        </li>
    </ul>
    <!-- First item in the list -->
    <ul class="mt-6">
        <li class="relative px-6 py-3">
            <!-- Active menu -->
            @if(url()->current() == route('assistences'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true">
            </span>
            @endif
            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
               href="{{route('assistences')}}">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="25px" height="25px" viewBox="0 0 256 256" enable-background="new 0 0 256 256" xml:space="preserve"><path d="M192.498,124.8c9.278,0,16.8,7.522,16.8,16.8s-7.522,16.8-16.8,16.8s-16.8-7.522-16.8-16.8S183.22,124.8,192.498,124.8zM171.798,166.6c9.278,0,16.8,7.522,16.8,16.8s-7.522,16.8-16.8,16.8s-16.8-7.522-16.8-16.8S162.52,166.6,171.798,166.6zM144.998,203.3h-18.9h-18.9c-11.5,0-18.7,9.5-18.7,21.4V254h12.9v-25.9c0-1.2,1-2,2-2c1.2,0,2,0.8,2,2v25.8h41.5v-25.8c0-1.2,1-2,2-2c1.2,0,2,1,2,2v25.8h12.9v-29.1C163.998,212.8,156.698,203.3,144.998,203.3z M149.698,124.8c9.278,0,16.8,7.522,16.8,16.8s-7.522,16.8-16.8,16.8s-16.8-7.522-16.8-16.8S140.42,124.8,149.698,124.8z M199.098,183.4c0,9.3,7.5,16.8,16.8,16.8s16.8-7.5,16.8-16.8s-7.5-16.8-16.8-16.8S199.098,174.1,199.098,183.4z M197.398,203.3c-11.5,0-18.7,9.5-18.7,21.4V254h12.9v-25.9c0-1.2,1-2,2-2c1.2,0,2,0.8,2,2v25.8h41.5v-25.8c0-1.2,1-2,2-2c1.2,0,2,1,2,2v25.8h12.9v-29.1c0.2-12.1-7.1-21.6-18.7-21.6h-18.9h-19V203.3z M39.798,166.6c9.278,0,16.8,7.522,16.8,16.8s-7.522,16.8-16.8,16.8s-16.8-7.522-16.8-16.8S30.52,166.6,39.798,166.6z M14.798,253.9v-25.8c0-1.2,1-2,2-2c1.2,0,2,0.8,2,2v25.8h41.5v-25.8c0-1.2,1-2,2-2c1.2,0,2,1,2,2v25.8h12.9v-29.1c0.2-12.1-7.1-21.6-18.7-21.6h-18.9h-18.9c-11.5,0-18.7,9.5-18.7,21.4v29.3L14.798,253.9L14.798,253.9z M109.298,183.4c0,9.3,7.5,16.8,16.8,16.8c9.3,0,16.8-7.5,16.8-16.8s-7.5-16.8-16.8-16.8S109.298,174.1,109.298,183.4z M61.298,124.8c9.278,0,16.8,7.522,16.8,16.8s-7.522,16.8-16.8,16.8s-16.8-7.522-16.8-16.8S52.02,124.8,61.298,124.8z M106.698,124.8c9.278,0,16.8,7.522,16.8,16.8s-7.522,16.8-16.8,16.8s-16.8-7.522-16.8-16.8S97.42,124.8,106.698,124.8z M84.098,166.6c9.278,0,16.8,7.522,16.8,16.8s-7.522,16.8-16.8,16.8s-16.8-7.522-16.8-16.8S74.82,166.6,84.098,166.6z M96.289,2v26.079H82.163v55.236c0,5.94,4.636,10.685,10.613,10.685h70.449c5.976,0,10.613-4.745,10.613-10.685V2H96.289z M167.281,83.134h-0.072c0,2.173-1.775,3.984-3.912,3.984H92.776c-2.137,0-4.093-1.666-4.093-3.803V34.961h7.606v42.378c0,1.847,1.485,3.405,3.441,3.405c1.956,0,3.441-1.449,3.441-3.405V8.882h64.11V83.134z M160.399,41.48h-50.709V15.402h50.709V41.48z M131.061,55.244h-21.37v-6.52h21.37V55.244z M139.391,48.724h21.008v6.52h-21.008V48.724z M131.061,67.921h-21.37v-6.52h21.37V67.921z M139.391,61.402h21.008v6.52h-21.008V61.402z M139.391,74.441h21.008v6.52h-21.008V74.441z M131.061,80.961h-21.37v-6.52h21.37V80.961z"/></svg>

                <span class="ml-4">Asistencia</span>
            </a>
        </li>
    </ul>
    <!-- First item in the list -->
    <ul class="mt-6">
        <li class="relative px-6 py-3">
            <!-- Active menu -->
            @if(url()->current() == route('stands'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true">
            </span>
            @endif
            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
               href="{{route('stands')}}">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px" viewBox="0 0 500 500" version="1.1">
                <title>booth</title>
                <g id="booth" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path d="M100,450 L400,450 L400,330 L100,330 L100,450 Z M70,319.994199 C70,308.951708 80.7496289,300 94.0043182,300 L405.995682,300 C419.252901,300 430,308.956997 430,319.994199 L430,460.005801 C430,471.048292 419.250371,480 405.995682,480 L94.0043182,480 C80.7470993,480 70,471.043003 70,460.005801 L70,319.994199 Z M100,100 L400,100 L400,51 L100,51 L100,100 Z M70,40.99228 C70,29.9508486 80.7496289,21 94.0043182,21 L405.995682,21 C419.252901,21 430,29.9546555 430,40.99228 L430,110.00772 C430,121.049151 419.250371,130 405.995682,130 L94.0043182,130 C80.7470993,130 70,121.045345 70,110.00772 L70,40.99228 Z M370,140 L400,140 L400,290 L370,290 L370,140 Z M130,140 L130,290 L100,290 L100,140 L130,140 Z M249.50214,237.696148 C275.879457,237.696148 297.338879,258.752161 297.989102,284.972881 C297.9992,285.380124 298.00428,290 298.00428,290 L201,290 L201.000759,289.532123 C201.002866,288.323308 201.009357,285.163911 201.020183,284.785433 C201.76775,258.651882 223.187708,237.696148 249.50214,237.696148 Z M249.259629,155 C269.349873,155 285.636234,171.286361 285.636234,191.376605 C285.636234,211.466849 269.349873,227.75321 249.259629,227.75321 C229.169385,227.75321 212.883024,211.466849 212.883024,191.376605 C212.883024,171.286361 229.169385,155 249.259629,155 Z" id="Shape" fill="#000000" fill-rule="nonzero"/>
                </g>
            </svg>
                <span class="ml-4">stands</span>
            </a>
        </li>
    </ul>
    <!-- First item in the list -->
    <ul class="mt-6">
        <li class="relative px-6 py-3">
            <!-- Active menu -->
            @if(url()->current() == route('periods'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true">
            </span>
            @endif
            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
               href="{{route('periods')}}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" height="24" id="svg958" version="1.1" viewBox="0 0 6.3499999 6.3500002" width="24"><defs id="defs952"/><g id="layer1"><path d="M 1.5856425,0.79421825 V 1.0577163 H 0.79277259 c -0.146148,5.819e-4 -0.264159,0.1194736 -0.263601,0.2655647 v 4.2314692 c -8.47e-4,0.1462924 0.11725,0.2654978 0.263601,0.2660812 H 5.5551606 C 5.7023194,5.821387 5.8216775,5.7018504 5.8208285,5.5547502 V 1.323281 C 5.8213845,1.1763822 5.7021165,1.0571563 5.5551606,1.0577163 h -0.79287 V 0.79421825 c -0.0046,-0.3554151 -0.533567,-0.3513831 -0.5297861,0 V 1.0577163 H 2.1149115 V 0.79421825 c 5.451e-4,-0.3536541 -0.52862,-0.3531411 -0.529269,0 z M 1.0584406,1.5867791 h 0.5272019 v 0.2660812 c 0,0.3539807 0.529269,0.3489553 0.529269,0 V 1.5867791 h 2.117593 v 0.2660812 c 0,0.3571489 0.5297861,0.3487308 0.5297861,0 V 1.5867791 h 0.529269 v 0.7951442 h -4.233119 z m 0,1.3221405 h 4.233119 V 5.291252 h -4.233119 z m 0.5272019,0.2655646 c -0.3299719,0 -0.3510829,0.5295794 0,0.5295794 h 0.529269 c 0.360394,5.557e-4 0.368686,-0.5284972 0,-0.5295794 z m 1.324723,0 c -0.352377,0.00103 -0.360659,0.530147 0,0.5295794 h 0.529269 c 0.354453,5.557e-4 0.3751231,-0.5284708 0,-0.5295794 z m 1.322139,0 c -0.347477,0.00102 -0.351613,0.5301343 0,0.5295794 h 0.5297861 c 0.3507978,0 0.3712498,-0.5284832 0,-0.5295794 z m -2.646862,1.0586421 c -0.345646,0 -0.3456439,0.529063 0,0.529063 h 0.529269 c 0.347176,9.525e-4 0.358879,-0.5282872 0,-0.529063 z m 1.324723,0 c -0.36534,0 -0.359107,0.529063 0,0.529063 h 0.529269 c 0.339507,9.525e-4 0.345395,-0.529063 0,-0.529063 z m 1.322139,0 c -0.3524811,7.673e-4 -0.3525189,0.529063 0,0.529063 h 0.5297861 c 0.3504969,9.789e-4 0.3638629,-0.5282719 0,-0.529063 z" id="path2546" style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;vector-effect:none;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#000000;stop-opacity:1"/></g></svg>
                <span class="ml-4">periods</span>
            </a>
        </li>
    </ul>
    <!-- First item in the list -->
    <ul class="mt-6">
        <li class="relative px-6 py-3">
            <!-- Active menu -->
            @if(url()->current() == route('payments'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true">
            </span>
            @endif
            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
               href="{{route('payments')}}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" height="24" id="svg958" version="1.1" viewBox="0 0 6.3499999 6.3500002" width="24"><defs id="defs952"/><g id="layer1"><path d="M 1.5856425,0.79421825 V 1.0577163 H 0.79277259 c -0.146148,5.819e-4 -0.264159,0.1194736 -0.263601,0.2655647 v 4.2314692 c -8.47e-4,0.1462924 0.11725,0.2654978 0.263601,0.2660812 H 5.5551606 C 5.7023194,5.821387 5.8216775,5.7018504 5.8208285,5.5547502 V 1.323281 C 5.8213845,1.1763822 5.7021165,1.0571563 5.5551606,1.0577163 h -0.79287 V 0.79421825 c -0.0046,-0.3554151 -0.533567,-0.3513831 -0.5297861,0 V 1.0577163 H 2.1149115 V 0.79421825 c 5.451e-4,-0.3536541 -0.52862,-0.3531411 -0.529269,0 z M 1.0584406,1.5867791 h 0.5272019 v 0.2660812 c 0,0.3539807 0.529269,0.3489553 0.529269,0 V 1.5867791 h 2.117593 v 0.2660812 c 0,0.3571489 0.5297861,0.3487308 0.5297861,0 V 1.5867791 h 0.529269 v 0.7951442 h -4.233119 z m 0,1.3221405 h 4.233119 V 5.291252 h -4.233119 z m 0.5272019,0.2655646 c -0.3299719,0 -0.3510829,0.5295794 0,0.5295794 h 0.529269 c 0.360394,5.557e-4 0.368686,-0.5284972 0,-0.5295794 z m 1.324723,0 c -0.352377,0.00103 -0.360659,0.530147 0,0.5295794 h 0.529269 c 0.354453,5.557e-4 0.3751231,-0.5284708 0,-0.5295794 z m 1.322139,0 c -0.347477,0.00102 -0.351613,0.5301343 0,0.5295794 h 0.5297861 c 0.3507978,0 0.3712498,-0.5284832 0,-0.5295794 z m -2.646862,1.0586421 c -0.345646,0 -0.3456439,0.529063 0,0.529063 h 0.529269 c 0.347176,9.525e-4 0.358879,-0.5282872 0,-0.529063 z m 1.324723,0 c -0.36534,0 -0.359107,0.529063 0,0.529063 h 0.529269 c 0.339507,9.525e-4 0.345395,-0.529063 0,-0.529063 z m 1.322139,0 c -0.3524811,7.673e-4 -0.3525189,0.529063 0,0.529063 h 0.5297861 c 0.3504969,9.789e-4 0.3638629,-0.5282719 0,-0.529063 z" id="path2546" style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;vector-effect:none;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#000000;stop-opacity:1"/></g></svg>
                <span class="ml-4">payments</span>
            </a>
        </li>
    </ul>
    <!-- First item in the list -->
    <ul class="mt-6">
        <li class="relative px-6 py-3">
            <!-- Active menu -->
            @if(url()->current() == route('debits'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true">
            </span>
            @endif
            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
               href="{{route('debits')}}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" height="24" id="svg958" version="1.1" viewBox="0 0 6.3499999 6.3500002" width="24"><defs id="defs952"/><g id="layer1"><path d="M 1.5856425,0.79421825 V 1.0577163 H 0.79277259 c -0.146148,5.819e-4 -0.264159,0.1194736 -0.263601,0.2655647 v 4.2314692 c -8.47e-4,0.1462924 0.11725,0.2654978 0.263601,0.2660812 H 5.5551606 C 5.7023194,5.821387 5.8216775,5.7018504 5.8208285,5.5547502 V 1.323281 C 5.8213845,1.1763822 5.7021165,1.0571563 5.5551606,1.0577163 h -0.79287 V 0.79421825 c -0.0046,-0.3554151 -0.533567,-0.3513831 -0.5297861,0 V 1.0577163 H 2.1149115 V 0.79421825 c 5.451e-4,-0.3536541 -0.52862,-0.3531411 -0.529269,0 z M 1.0584406,1.5867791 h 0.5272019 v 0.2660812 c 0,0.3539807 0.529269,0.3489553 0.529269,0 V 1.5867791 h 2.117593 v 0.2660812 c 0,0.3571489 0.5297861,0.3487308 0.5297861,0 V 1.5867791 h 0.529269 v 0.7951442 h -4.233119 z m 0,1.3221405 h 4.233119 V 5.291252 h -4.233119 z m 0.5272019,0.2655646 c -0.3299719,0 -0.3510829,0.5295794 0,0.5295794 h 0.529269 c 0.360394,5.557e-4 0.368686,-0.5284972 0,-0.5295794 z m 1.324723,0 c -0.352377,0.00103 -0.360659,0.530147 0,0.5295794 h 0.529269 c 0.354453,5.557e-4 0.3751231,-0.5284708 0,-0.5295794 z m 1.322139,0 c -0.347477,0.00102 -0.351613,0.5301343 0,0.5295794 h 0.5297861 c 0.3507978,0 0.3712498,-0.5284832 0,-0.5295794 z m -2.646862,1.0586421 c -0.345646,0 -0.3456439,0.529063 0,0.529063 h 0.529269 c 0.347176,9.525e-4 0.358879,-0.5282872 0,-0.529063 z m 1.324723,0 c -0.36534,0 -0.359107,0.529063 0,0.529063 h 0.529269 c 0.339507,9.525e-4 0.345395,-0.529063 0,-0.529063 z m 1.322139,0 c -0.3524811,7.673e-4 -0.3525189,0.529063 0,0.529063 h 0.5297861 c 0.3504969,9.789e-4 0.3638629,-0.5282719 0,-0.529063 z" id="path2546" style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;vector-effect:none;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#000000;stop-opacity:1"/></g></svg>
                <span class="ml-4">debits</span>
            </a>
        </li>
    </ul>




    <!-- rest of the menu -->
    <ul>

            <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="{{route('profile.show')}}">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="ml-4">Profile</span>
                </a>
            </li>
            @can('user_management_access')
            <li class="relative px-6 py-3"
            @if(url()->current() == route('admin.users.index')
            || url()->current() == route('admin.roles.index')
            || url()->current() == route('admin.permissions.index')
            || url()->current() == route('admin.users.create')
            || url()->current() == route('admin.roles.create')
            || url()->current() == route('admin.permissions.create')
            )
                x-data="{isUsersMenuOpen : true}">

                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true">
                 </span>
                 @else
                 >
                 @endif
                <button
                    class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 focus:outline-none "
                    @click="toggleUsersMenu" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span class="ml-4">User Management</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isUsersMenuOpen">
                    <ul x-transition:enter="transition-transform transition-opacity ease-in-out duration-700"
                        x-transition:enter-start="opacity-0 transform translate-y-4"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-end="opacity-0 transform -translate-y-2"
                        class="p-2 mt-2 space-y-2 overflow-hidden text-xs font-medium tracking-wide text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                        aria-label="submenu">

                        @can('permission_access')
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200
                        @if(url()->current() == route('admin.permissions.index')) bg-white border-l-2 border-blue-600 rounded-sm ring-1 ring-gray-300 @endif ">
                            <a class="w-full" href="{{route('admin.permissions.index')}}">Permissions</a>
                        </li>
                        @endcan

                        @can('role_access')
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200
                        @if(url()->current() == route('admin.roles.index')) bg-white border-l-2 border-blue-600 rounded-sm ring-1 ring-gray-300 @endif">
                            <a class="w-full" href="{{route('admin.roles.index')}}">Roles</a>
                        </li>
                        @endcan

                        @can('user_access')
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200
                        @if(url()->current() == route('admin.users.index')) bg-white border-l-2 border-blue-600 rounded-sm ring-1 ring-gray-300 @endif">
                            <a class="w-full" href="{{route('admin.users.index')}}">Users</a>
                        </li>
                        @endcan

                    </ul>
                </template>
            </li>
            @endcan
        <x-logout />
    </ul>
</div>
