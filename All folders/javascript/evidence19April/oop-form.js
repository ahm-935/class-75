class DynamicForm {
    constructor(_form) {
        this.form = document.querySelector(_form);
        console.log(this.form);
        this.form.addEventListener("submit", (e) => { this.manageForm(e); });
    }
    manageForm(e) {
        e.preventDefault();
        console.log(e.target);
        // console.log(e);
        let name = this.form.name.value,
            email = this.form.email.value,
            feedback = this.form.feedback.value,
            ratings = this.form.ratings.value,
            userType = this.form.Usertype.value,
            features = [];

        this.form.features.forEach((checkbox) => {
            if (checkbox.checked) {
                //  console.log(checkbox.value);
                features.push(checkbox.value);
            }
        })
        let validName = this.validateName(name),
            validEmail = this.validateEmail(email),
            // validRatings = this.validateRatings(ratings),
            validFeatures = this.validateFeatures(features);

        if (validName && validEmail && validFeatures) {
            let newWin = window.open("", "", "width=450, height=500");
            newWin.document.writeln(
                `<ul>
                <li>Name: ${name}</li>
                <li>Email: ${email}</li>
                <li>Feedback: ${feedback}</li>
                <li>Ratings: ${ratings}</li>
                <li>User Type: ${userType}</li>
                <li>Features: ${features}</li>
                </ul>`
            );
            newWin.document.writeln("<button onclick='window.close();'>Close</button>");
        }

    }
    validateName(_name) {
        let error = document.querySelector("#nameError");
        if (_name == "") {
            error.innerText = "Name is required";
            return false;
        } else {
            error.innerText = "";
            return true;
        }
    }
    validateEmail(_email) {
        let emailRegex = /^[a-zA-Z0-9._]{3,30}[@]{1}[a-zA-Z0-9]{2,20}[.]{1}[a-zA-Z]{2,6}$/;
        // alert(emailRegex.test(_email));
        let error = document.querySelector("#emailError");
        if (_email == "") {
            error.innerText = "Email is required"
            return false;
        } else if (emailRegex.test(_email) == false) {
            error.innerText = "Email is not valid"
            return false;
        } else {
            error.innerText = "";
            return true;
        }
    }
    // validateRatings(_ratings) {
    //     let error = document.querySelector("#ratingsError");
    //     if (_ratings == "") {
    //         error.innerText = "Ratings is required";
    //         return false;
    //     } else {
    //         error.innerText = "";
    //         return true;
    //     }
    // }
    validateFeatures(_features) {
        let error = document.querySelector("#featuresError");
        if (_features.length == 0) {
            error.innerText = "At least one feature must be selected";
            return false;
        } else {
            error.innerText = "";
            return true;
        }
        }
}
