<template>
    <form @submit.prevent="submitForm">
        <input type="text" v-model="form.email" placeholder="Email">
        <input type="text" v-model="form.username" placeholder="Username">
        <input type="password" v-model="form.password" placeholder="Password">
        <input type="password" v-model="form.password_confirmation" placeholder="Confirm Password">

        <button type="submit">Register</button>
    </form>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: '',
                username: '',
                password: '',
                password_confirmation: '',
            },
        };
    },
    methods: {
        submitForm() {
            axios.post('/register', this.form)
            .then(response => {
                // Handle success
            })
            .catch(error => {
                // Handle error
            })
        },
    },
};
</script>
