    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-8">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-gray-800" id="userModalLabel">Sign Up</h3>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x text-gray-700"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="fullName" class="mb-2 block text-gray-800">Name</label>
                            <input type="text" class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                id="fullName" placeholder="Enter Your Name" required />
                            <div class="invalid-feedback">Please enter name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="mb-2 block text-gray-800">Email address</label>
                            <input type="email" class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                id="email" placeholder="Enter Email address" autocomplete="email" required />
                            <div class="invalid-feedback">Please enter email.</div>
                        </div>
                        <div class="mb-5">
                            <label for="password" class="mb-2 block text-gray-800">Password</label>
                            <input type="password" class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                id="password" placeholder="Enter Password" required />
                            <div class="invalid-feedback">Please enter password.</div>
                            <span class="block mt-1 text-sm text-gray-500">
                                By Signup, you agree to our
                                <a href="#!" class="text-green-600">Terms of Service</a>
                                &
                                <a href="#!" class="text-green-600">Privacy Policy</a>
                            </span>
                        </div>

                        <button type="submit" class="btn inline-flex items-center gap-x-2 bg-green-600 text-white border-green-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 justify-center">
                            Sign Up
                        </button>
                    </form>
                </div>
                <div class="modal-footer flex border-0 justify-center mt-3">
                    Already have an account?
                    <a href="#" class="text-green-600 ml-1">Sign in</a>
                </div>
            </div>
        </div>
    </div>