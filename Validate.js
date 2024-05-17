new Vue({
    el: '#app',
    data: {
        name: '',
        email: '',
        message: '',
        errors: {},
        successMessage: ''
    },
    methods: {
        validateFormWithVue() {
            this.errors = {};
            if (!this.name) {
                this.errors.name = 'İsim gereklidir.';
            }
            if (!this.email) {
                this.errors.email = 'E-posta gereklidir.';
            } else if (!this.validEmail(this.email)) {
                this.errors.email = 'Geçerli bir e-posta girin.';
            }
            if (!this.message) {
                this.errors.message = 'Mesaj gereklidir.';
            }
            if (Object.keys(this.errors).length === 0) {
                this.redirectToSuccessPage();
            }
        },
        validEmail(email) {
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        },
        clearForm() {
            this.name = '';
            this.email = '';
            this.message = '';
            this.errors = {};
            this.successMessage = '';
        },
        redirectToSuccessPage() {
            const url = `showform.html?name=${encodeURIComponent(this.name)}&email=${encodeURIComponent(this.email)}&message=${encodeURIComponent(this.message)}`;
            window.location.href = url;
        },
        validateFormWithJS(event) {
            this.errors = {};
            const name = this.$refs.name.value;
            const email = this.$refs.email.value;
            const message = this.$refs.message.value;
            if (!name) {
                this.errors.name = 'İsim gereklidir.';
            }
            if (!email) {
                this.errors.email = 'E-posta gereklidir.';
            } else if (!this.validEmail(email)) {
                this.errors.email = 'Geçerli bir e-posta girin.';
            }
            if (!message) {
                this.errors.message = 'Mesaj gereklidir.';
            }
            if (Object.keys(this.errors).length === 0) {
                this.redirectToSuccessPage();
            }
            event.preventDefault(); // Prevent default form submission
        }
    }
});
