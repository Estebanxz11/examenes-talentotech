<div class="pt-6 sm:pt-0">
    <header>
        <nav class="flex items-center justify-between p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <img src="{{ asset('images/logo_potenciadelavida.svg') }}" class="w-1/9">
            </div>
            <div class="w-full block flex-grow flex items-center w-auto">
                <div class="text-sm flex-grow"></div>
                <div>
                    <img src="{{ asset('images/logo_mintic.svg') }}" class="w-1/9">
                </div>
            </div>
        </nav>
    </header>
    <div class="intro-container">
        <div class="w-full mt-6 px-6 py-4 overflow-hidden">
            {{ $slot }}
        </div>
        <div>
            {{ $logo }}
        </div>
    </div>
</div>
<script
    type="text/javascript"
    src="https://code.jquery.com/jquery-3.6.0.min.js"
></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r78/three.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>