<!-- script js cdn -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

{{-- include script init  --}}
<script src="{{ asset('assets/js/admin/init-alpine.js') }}"></script>

{{-- include script main  --}}
<script src="{{ asset('assets/js/admin/main.js') }}"></script>

<!-- script chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>

{{-- cdn iziToast "alerts" --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
    integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- include scripts livewire --}}
<script src="{{ asset('vendor/livewire/livewire.min.js') }}"
    data-csrf="y8KH7nAAO9qytd3Va8ly5DtLWnllPl0DJA6wAJSO" data-update-uri="/livewire/update" data-navigate-once="true">
</script>

<script src="{{ asset('vendor/livewire/livewire.min.js.map') }}" data-csrf="y8KH7nAAO9qytd3Va8ly5DtLWnllPl0DJA6wAJSO"
    data-update-uri="/livewire/update" data-navigate-once="true"></script>

<script src="{{ asset('vendor/livewire/livewire.js') }}" data-csrf="y8KH7nAAO9qytd3Va8ly5DtLWnllPl0DJA6wAJSO"
    data-update-uri="/livewire/update" data-navigate-once="true"></script>

<script src="{{ asset('vendor/livewire/livewire.min.js.map') }}" data-csrf="y8KH7nAAO9qytd3Va8ly5DtLWnllPl0DJA6wAJSO"
    data-update-uri="/livewire/update" data-navigate-once="true"></script>

<script src="{{ asset('vendor/livewire/livewire.esm.js') }}" data-csrf="y8KH7nAAO9qytd3Va8ly5DtLWnllPl0DJA6wAJSO"
    data-update-uri="/livewire/update" data-navigate-once="true"></script>

<script>
    Livewire.onPageExpired((response, message) => {})
</script>

<script>
    document.addEventListener('livewire:load', () => {
        Livewire.onPageExpired((response, message) => {})
    })
</script>

<livewire:scripts />
