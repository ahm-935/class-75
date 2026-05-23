class DynamicForm {
    constructor(_form) {
        this.form = document.querySelector(_form);
        console.log(this.form);
        this.form.addEventListener('submit', (e) => { this.handleForm(e); });
    }
    handleForm(e) {
        e.preventDefault();
        let name = this.form.name.value,
            email = this.form.email.value,
            position = this.form.position.value,
            coverLetter = this.form.coverLetter.value,
            employmentType = this.form.employmentType.value,
            experience = this.form.experience.value;
        // skills = [],

            // this.form.skills.forEach((checkbox) => {
            //     if (checkbox.checked) {
            //         //  console.log(checkbox.value);
            //         skills.push(checkbox.value);
            //     }
            // })
        //  console.log(skills);

        let validEmail = this.validateEmail(email);

        if (validEmail) {

            let newWin = window.open("", "", "width=450,height=500");
            newWin.document.write(
                `<h2>Job Application Form</h2>
                <p><strong>Name:</strong> ${name}</p>
                <p><strong>Email:</strong> ${email}</p>
                <p><strong>Position Applied For:</strong> ${position}</p>
                <p><strong>Employment Type:</strong> ${employmentType}</p>
                <p><strong>Experience Level:</strong> ${experience}</p>
                <h3>Cover Letter:</h3>
                <p>${coverLetter}</p>
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