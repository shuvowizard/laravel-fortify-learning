<section>
    <div class="bg-white rounded-xl border border-gray-200 p-6 mb-6">
        <h2 class="text-base font-semibold text-gray-900">Update password</h2>
        <p class="text-sm text-gray-500 mt-1 mb-5">Ensure your account is using a long, random password to stay secure.
        </p>
        <hr class="border-gray-100 mb-5">

        @if(session('status') === 'password-updated')
            <div class="mb-4 text-sm text-green-700 bg-green-50 border border-green-200 rounded-lg px-4 py-3">
                Password updated successfully.
            </div>
        @endif

        <form method="POST" action=" {{ route('user-password.update') }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm text-gray-600 mb-1">Current password</label>
                <input type="password" name="current_password" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-800
                           focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent" />
                @if($errors->updatePassword->has('current_password'))
                    <p class="text-xs text-red-500 mt-1">{{ $errors->updatePassword->first('current_password') }}</p>
                @endif
            </div>

            <div class="mb-4">
                <label class="block text-sm text-gray-600 mb-1">New password</label>
                <input type="password" name="password" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-800
                           focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent" />
                @if($errors->updatePassword->has('password'))
                    <p class="text-xs text-red-500 mt-1">{{ $errors->updatePassword->first('password') }}</p>
                @endif
            </div>

            <div class="mb-5">
                <label class="block text-sm text-gray-600 mb-1">Confirm password</label>
                <input type="password" name="password_confirmation" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-800
                           focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent" />
                @if($errors->updatePassword->has('password_confirmation'))
                    <p class="text-xs text-red-500 mt-1">{{ $errors->updatePassword->first('password_confirmation') }}</p>
                @endif
            </div>

            <button type="submit" class="bg-gray-900 text-white text-xs font-semibold tracking-widest px-4 py-2
                       rounded-lg hover:bg-gray-700 transition">
                SAVE
            </button>
        </form>
    </div>
</section>