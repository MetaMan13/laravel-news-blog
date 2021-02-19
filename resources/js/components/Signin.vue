<template>
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <i class="fas fa-blog text-4xl font-semibold text-green-400"></i>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Sign in to your account
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Or
                <a href="#" class="font-medium text-gray-600 hover:text-green-400">
                    Register a new account
                </a>
                </p>
        </div>
        <form class="mt-8 space-y-6" action="http://localhost:3000/api/signin" method="POST" @submit.prevent="validateForm" autocomplete="off">
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email-address" class="sr-only">Email address</label>
                    <input @keydown="clearErrors" id="email-address" name="email" type="email" v-model="form.email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border bg-gray-50 border-gray-300 placeholder-gray-50 text-gray-900 rounded-t-md focus:outline-none focus:ring-green-400 focus:border-green-400 focus:z-10 sm:text-sm" placeholder="Email address">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input @keydown="clearErrors" id="password" name="password" type="password" v-model="form.password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border bg-gray-50 border-gray-300 placeholder-gray-50 text-gray-900 rounded-b-md focus:outline-none focus:ring-green-400 focus:border-green-400 focus:z-10 sm:text-sm" placeholder="Password">
                </div>
                <div class="pt-2 pb-2 transition ease-in-out duration-200" v-if="errors != null">
                    <p class="text-red-400 text-xs">Wrong email or password</p>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-green-400 focus:ring-green-400 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                        Remember me
                    </label>
                </div>

                <div class="text-sm">
                    <a href="#" class="font-medium text-green-400 hover:text-green-600">
                        Forgot your password?
                    </a>
                </div>
            </div>

            <div>
                <button v-bind:disabled="ableToSubmit" type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                    <!-- Heroicon name: solid/lock-closed -->
                    <svg class="h-5 w-5 text-green-500 group-hover:text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    </span>
                    Sign in
                </button>
            </div>
        </form>
    </div>
</div>
</template>

<script>
export default {
    data(){
        return{
            form: {
                email: '',
                password: '',
            },
            errors: null,
            user: null,
            ableToSubmit: false,
        }
    },

    methods: {
        validateForm(){
            console.log('hewo')
            axios.post('http://localhost:3000/api/signin', this.form)
            .then((response) => {
                this.errors = response.data.errors;
                if(response.data.user != null)
                {
                    this.user = response.data.user;
                    this.updateGlobalUser();
                }
            })
        },
        clearErrors()
        {
            this.errors = null;
        },
        updateGlobalUser(){
            if(this.user == null){
                console.log('No user logged in')
            }else{
                console.log(`Current logged user: ${this.user[0].name}`);
            }
        }
    }
}
</script>