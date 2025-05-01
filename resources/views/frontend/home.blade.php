<x-frontend-layout>

    <section>
        <div class="container py-10 text-center space-y-4">
            <h1 class="text-3xl font-bold">Do you want to become an agent?</h1>
            <p>Fill up Agent Registration form to become an agent and join with us to earning unlimited</p>
            <div>
                <!-- Modal toggle -->
                <button data-modal-target="request-modal" data-modal-toggle="request-modal" type="button"
                    class="btn-primary cursor-pointer" type="button">Register Now</button>
            </div>


            <!-- Main modal -->
            <div id="request-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Sign in to our platform
                            </h3>
                            <button type="button"
                                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="request-modal">
                                <i class="fa-solid fa-xmark"></i>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="form-group">
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                            Name</label>
                                        <input type="text" name="name" id="name" class="w-full">
                                    </div>
                                    <div class="form-group">
                                        <label for="email"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                            Email</label>
                                        <input type="email" name="email" id="email" class="w-full">
                                    </div>
                                    <div class="form-group">
                                        <label for="number"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                            Contact Number</label>
                                        <input type="number" name="number" id="number" class="w-full">
                                    </div>
                                    <div class="form-group">
                                        <label for="address"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                            Address</label>
                                        <input type="text" name="address" id="address" class="w-full">
                                    </div>
                                    <div class="form-group">
                                        <label>Photo</label>
                                        <input type="file" name="image" accept="image/*" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn-primary ">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section>
        <div class="container py-10 flex items-center gap-4">
            <div>
                <h1 class="text-3xl font-bold">About Us</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit esse rerum expedita quod praesentium saepe neque, blanditiis minus consequatur voluptas veniam, sapiente dolorem impedit soluta placeat libero ipsam quis quos. Quod minus optio ex aliquam doloremque. Voluptates, numquam. Similique officia architecto cupiditate aliquam, illum ducimus illo officiis amet consectetur commodi.</p>
                <a href="" class="btn-primary">Read More</a>
            </div>
            <img src="{{ asset('frontend/images/leleforweb.png') }}" alt="about">
        </div>
    </section>
</x-frontend-layout>
