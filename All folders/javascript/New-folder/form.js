class DynamicForm {
    constructor(_form) {
        this.form = document.querySelector(_form);
        console.log(this.form);
        this.form.addEventListener("submit", (e) => { this.handelForm(e); });

    }
    handelForm(e) {
        e.preventDefault();
        // console.log(e);
        let name = this.form.name.value,
            email = this.form.email.value,
            age = this.form.age.value,
            gender = this.form.gender.value,
            Interests = [],
            Agreement = [];


        // this.form.agreements.forEach((checkbox) => {
        //     if (checkbox.checked) {
        //         // console.log(checkbox.value);
        //         agreements.push(checkbox.value);
        //     }
        // });

       let validEmail = this.validateEmail(email);

        if (validEmail) {

            let newWin = window.open("", "", "width=450,height=500");
            newWin.document.write(
                `<h2>Registration Form</h2>
                <p><strong>Name:</strong> ${name}</p>
                <p><strong>Email:</strong> ${email}</p>
                <p><strong>Age:</strong> ${age}</p>
                <p><strong>Interests:</strong> ${interests}</p>
        `);
            newWin.document.write("<button onclick='window.close()'>Close</button>");
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
}