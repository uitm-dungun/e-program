<x-layout class="mx-12 flex gap-12">
<div class="flex flex-col space-y-3">
        <div class="flex-grow ">
            <button class="btn btn-outline btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
            </svg>
            </button>
            <b>Tidak Lulus</b>
        </div>
    <div class="text-center hero-content">
        <div class="max-w-md">
            <div class="form-control py-5">
            <!-- $('#textareatunamadiaapa').removeClass('hidden')l-->
                <div class="alert alert-warning">
                    <div class="flex-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                        <label>Perkataan Tidak Lebih Dari 400!</label>
                    </div>
                </div>
                <label class="label">
                    <span class="label-text">Ulasan</span>
                </label>
                <!-- textarea class="textarea h-24 textarea-bordered" placeholder="ulasan_ program"></textarea -->
                <textarea class="max" name="coverLetterText" id="coverLetterText" cols="80" rows="12" background placeholder="Make a Pitch not more than 400 words"></textarea>
            </div>
        </div>
    </div>
    <div class="flex flex-nowrap gap-x-2">
        <div>
        <button class="btn btn-outline btn-primary shadow-lg">Hantar</button>
        </div>
        <div>
        <button class="btn btn-outline btn-accent shadow-lg">Batal</button>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="/js/components/datepicker.js"></script>
    @endpush
</x-layout>
