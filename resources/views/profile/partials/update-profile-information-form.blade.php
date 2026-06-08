<section>
    <div class="bg-white rounded-xl border border-gray-200 p-6 mb-6">
        <h2 class="text-base font-semibold text-gray-900">Profile information</h2>
        <p class="text-sm text-gray-500 mt-1 mb-5">Update your account's profile information and email address.</p>
        <hr class="border-gray-100 mb-5">
    
        <form method="POST" action="#">
            @csrf
            @method('PUT')
    
            <div class="mb-4">
                <label class="block text-sm text-gray-600 mb-1">Name</label>
                <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-800
                           focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent" />
                @error('name')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="mb-5">
                <label class="block text-sm text-gray-600 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-800
                           focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent" />
                @error('email')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <button type="submit" class="bg-gray-900 text-white text-xs font-semibold tracking-widest px-4 py-2
                       rounded-lg hover:bg-gray-700 transition">
                SAVE
            </button>
        </form>
    </div>
</section>