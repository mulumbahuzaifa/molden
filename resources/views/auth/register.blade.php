<x-guest-layout>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="row justify-content-center w-100">
            <div class="col-md-6">
                <div class="card p-4">
                    <!-- Logo Section with Small Logo -->
                    <div class="card-header text-center">
                        <x-jet-authentication-card-logo style="width: 20px; height: 20px;" />
                    </div>

                    <!-- Register Form Heading -->
                    <h3 class="text-center mb-4">Register Form</h3>

                    <div class="card-body">
                        <!-- Validation Errors -->
                        <x-jet-validation-errors class="alert alert-danger" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="form-group mb-3">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label for="email">{{ __('Email') }}</label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required>
                            </div>

                            <!-- Password -->
                            <div class="form-group mb-3">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group mb-3">
                                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <!-- Terms and Privacy Policy -->
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="form-group mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" name="terms" id="terms" class="form-check-input">
                                        <label class="form-check-label" for="terms">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-primary">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-primary">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </label>
                                    </div>
                                </div>
                            @endif

                            <!-- Already registered -->
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <a class="text-primary" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <!-- Register Button -->
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                this.submit();
                window.location.href = "{{ route('user.dashboard') }}";
            });
        });
    </script>
@endpush
