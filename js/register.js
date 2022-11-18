new Vue({
  el: '#app-register',
  data() {
    return {
      input: {
        email: "",
        password: "",
        confirmpassword: ""
      }
    }
  },
  methods: {
    register: function () {

      //Email and password validation
      var lowerCaseLetters = /[a-z]/g;
      var upperCaseLetters = /[A-Z]/g;
      var numbers = /[0-9]/g;

      if (this.input.email == 0) {
        alert("Please fill in email or phone number");

      } else if (this.input.password == 0) {
        alert('Please fill in password');

      } else if (this.input.email == 0 && this.input.password == 0 && this.input.confirmpassword == 0) {
        alert('Please fill in email and password');

      } else if (this.input.password != this.input.confirmpassword) {
        alert('Please ensure password and confirm password match.');

      } else if (this.input.password.length > 8) {
        alert('Max of 8');

      } else if (!this.input.password.match(numbers)) {
        alert('Please add 1 number');

      } else if (!this.input.password.match(upperCaseLetters)) {
        alert('Please add 1 uppercase letter');

      } else if (!this.input.password.match(lowerCaseLetters)) {
        alert('Please add 1 lowercase letter');

      } else {
        //Local storage for the users details
        localStorage.setItem('email', this.input.email);
        localStorage.setItem('pw', this.input.password);
        //An alert message to pop up when the user has successfully created their aaccount
        alert('Your account has been successfully created');
        //When the user clicks on sign up button, they should be directed to the login page
        location.href='login.php';
      }
    }
  }
})
