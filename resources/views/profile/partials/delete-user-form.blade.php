<section>
    <div class="bg-white rounded-xl border border-gray-200 p-6 mb-6">
        <h2 class="text-base font-semibold text-gray-900">Delete account</h2>
        <p class="text-sm text-gray-500 mt-1 mb-5">
            Once your account is deleted, all of its resources and data will be permanently deleted.
        </p>
        <hr class="border-gray-100 mb-5">

        {{-- Delete button — opens modal --}}
        <button onclick="showModal()"
            class="bg-white border border-red-400 text-red-600 text-sm font-medium px-4 py-2 rounded-lg hover:bg-red-50 transition">
            Delete Account
        </button>
    </div>

    {{-- Modal --}}
    <div id="delete-modal"
        class="hidden fixed inset-0 bg-black/40 backdrop-blur-sm items-center justify-center z-50 p-4">

        <div class="bg-white rounded-xl border border-gray-200 w-full max-w-md shadow-2xl">
            <div class="p-6">
                <h3 class="text-base font-semibold text-gray-900 mb-1">Are you sure?</h3>
                <p class="text-sm text-gray-500 mb-5">
                    Please enter your password to confirm you would like to permanently delete your account.
                </p>

                <form method="POST" action="#">
                    @csrf
                    @method('DELETE')

                    <div class="mb-5">
                        <label class="block text-sm text-gray-600 mb-1">Password</label>
                        <input type="password" name="password" placeholder="••••••••"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-red-300 focus:border-transparent" />
                        @error('password')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end gap-3">
                        <button type="button" onclick="hideModal()"
                            class="px-4 py-2 text-sm border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 text-sm bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition">
                            Delete Account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        // Modal show function
        function showModal() {
            const modal = document.getElementById('delete-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
        
        // Modal hide function
        function hideModal() {
            const modal = document.getElementById('delete-modal');
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }
        
        // Optional: Close modal when clicking outside
        document.getElementById('delete-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                hideModal();
            }
        });
        
        // Optional: Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                hideModal();
            }
        });
    </script>
@endpush