new Vue({
    el: '#app-login',
    data() {
        return {
            input: {
                email: "",
                password: ""
            }
        }
    },
    methods: {
        login: function () {

            var storedEmail = localStorage.getItem('email');
            var storedPw = localStorage.getItem('pw');

            if (this.input.email == storedEmail && this.input.password == storedPw) {
                //An alert message to pop up when the user has registered their account and entered the correct details
                alert('You are successfully logged in.');

                //When the user clicks the sign in button, they should be directed to the booking app home page
                location.href = "home.html";
            } else {
                //An alert error message to pop up when the user hasn't registered their account
                alert('User does not exist. Please create your account now.');
            }
        }
    }

})