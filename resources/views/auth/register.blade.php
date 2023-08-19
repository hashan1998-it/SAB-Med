<x-guest-layout>
    <x-authentication-card>
            <h2>Registeration Form</h2>
            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="container-fluid mt-4">
                    <div class="row">
                      <div class="col-sm-6">
                        <div>
                            <x-label for="name" value="{{ __('Name') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div >
                            <x-label for="index" value="{{ __('Index Number') }}" />
                            <x-input id="index" class="block mt-1 w-full" type="text" name="index" :value="old('index')" autofocus autocomplete="index" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-6">
                        <div class="mt-4">
                            <x-label for="faculty" value="{{ __('Faculty') }}" />
                            <select name="faculty" id="faculty" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option value="">Select Faculty</option>
                                <option value="Faculty of Social Sciences and Languages">Faculty of Social Sciences and Languages</option>
                                <option value="Faculty of Agriculture Sciences">Faculty of Agriculture Sciences</option>
                                <option value="Faculty of Applied Sciences">Faculty of Applied Sciences</option>
                                <option value="Faculty of Geomatics">Faculty of Geomatics</option>
                                <option value="Faculty of Management">Faculty of Management</option>
                                <option value="Faculty of Medicine">Faculty of Medicine</option>
                                <option value="Faculty of Technology">Faculty of Technology</option>
                                <option value="Faculty of Computing">Faculty of Computing</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="mt-4">
                            <x-label for="department" value="{{ __('Department') }}" />
                            <x-input id="department" class="block mt-1 w-full" type="text" name="department" :value="old('department')" required autofocus autocomplete="index" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mt-4">
                            <x-label for="phone_number" value="{{ __('Phone Number') }}" />
                            <x-input id="phone_number" class="block mt-1 w-full" type="number" name="phone_number" required/>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="mt-4">
                            <x-label for="address" value="{{ __('Address') }}" />
                            <x-input id="address" class="block mt-1 w-full" type="text" name="address" required  />
                        </div>
                      </div>
                    </div>
                  </div>

                <div class="mt-4 px-3">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="mt-4">
                            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                      </div>
                    </div>
                  </div>




                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />
                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif
                <div class="flex items-center justify-between mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
    </x-authentication-card>
</x-guest-layout>




