import * as Yup from 'yup';
import Alpine from 'alpinejs'
window.Alpine = Alpine
import kingshottIodine from '@kingshott/iodine';


// Alpine.data('form', () => {
//   return {
//     async submitForm() {
//       alert('form submited');
//       const schema = Yup.object().shape({
//         first_name: Yup.string().required('First name is required'),
//         last_name: Yup.string().required('Last name is required'),
//         user_account: Yup.string().required('User Account is required'),
//         password: Yup.string().min(8, 'Password must be at least 8 characters'),
//         confirm_password: Yup.string().min(8, 'Password must be at least 8 characters'),
//         continent: Yup.string().required('User Account is required'),
//         country: Yup.string().oneOf(['US', 'CA', 'FR', 'DE'],'Please choose a valid country').required('Please select a country'),   
//         terms: Yup.boolean().oneOf([true],'You must accept the terms and conditions to proceed').required('You must accept the terms and conditions to proceed'),
//         bsi_code: Yup.boolean().oneOf([true],'You must accept the bsi code of conduct').required('You must accept the bsi code of conduct'),
//         privacy: Yup.boolean().oneOf([true],'You must accept privacy and policy').required('You must accept privacy and policy'),
  
//       });
  
//       try {
//         const values = { 
//            first_name: this.first_name,
//            last_name: this.last_name ,
//            user_account: this.user_account ,
//            password: this.password ,
//            confirm_password: this.confirm_password  ,
//            continent: this.continent,
//            country: this.country,
//            terms: this.terms,
//            bsi_code: this.bsi_code,
//            privacy: this.privacy,
//           };
//         await schema.validate(values, { abortEarly: false });
//         // Form data is valid, submit the form here
//       } catch (error) {
//         if (error instanceof Yup.ValidationError) {
//           this.errors = error.inner.reduce((acc, err) => {
//             acc[err.path] = err.message;
//             return acc;
//           }, {});
//         }
//       }
//     }

//   }


// });

  
// Alpine.start();


function form() {
  return {
    inputElements: [],
    init() {
      //Set up custom Iodine rules
      Iodine.rule(
        "matchingPassword",
        (value) => value === document.getElementById("password").value
      );
      Iodine.setErrorMessage(
        "matchingPassword",
        "Password confirmation needs to match password"
      );
      //Store an array of all the input elements with 'data-rules' attributes
      this.inputElements = [...this.$el.querySelectorAll("input[data-rules]")];
      console.log(this.inputElements);
      this.initDomData();
      this.updateErrorMessages();
    },
    initDomData: function () {
      //Create an object attached to the component state for each input element to store its state
      this.inputElements.map((ele) => {
        this[ele.name] = {
          serverErrors: JSON.parse(ele.dataset.serverErrors),
          blurred: false
        };
      });
    },
    updateErrorMessages: function () {
      //map throught the input elements and set the 'errorMessage'
      this.inputElements.map((ele) => {
        this[ele.name].errorMessage = this.getErrorMessage(ele);
      });
    },
    getErrorMessage: function (ele) {
      //Return any server errors if they're present
      if (this[ele.name].serverErrors.length > 0) {
        return input.serverErrors[0];
      }
      //Check using iodine and return the error message only if the element has not been blurred
      const error = Iodine.assert(ele.value, JSON.parse(ele.dataset.rules));
      if (!error.valid && this[ele.name].blurred) {
        return error.error;
      }
      //return empty string if there are no errors
      return "";
    },
    submit: function (event) {
      console.log('form submitted');
      const invalidElements = this.inputElements.filter((input) => {
        return (
          Iodine.assert(input.value, JSON.parse(input.dataset.rules)) !== true
        );
      });
      console.log(invalidElements);

      console.log(invalidElements.length);
      if (invalidElements.length > 0) {
  
        event.preventDefault();
        document.getElementById(invalidElements[0].id).scrollIntoView();
        //We set all the inputs as blurred if the form has been submitted
        this.inputElements.map((input) => {
          this[input.name].blurred = true;
        });
        //And update the error messages.
        this.updateErrorMessages();
      } else {
        // If there are no invalid elements, submit the form and show an alert message
        this.$el.submit();
        alert('Form submitted successfully!');
      }
    },
    change: function (event) {
      //Ignore all events that aren't coming from the inputs we're watching
      if (!this[event.target.name]) {
        return false;
      }
      if (event.type === "input") {
        this[event.target.name].serverErrors = [];
      }
      if (event.type === "focusout") {
        this[event.target.name].blurred = true;
      }
      //Whether blurred or on input, we update the error messages
      this.updateErrorMessages();
    }
  };
}

Alpine.data("form", form);
Alpine.start();
