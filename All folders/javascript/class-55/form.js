// alert()
class DynamicFormValue {
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
            gender = this.form.gender.value,
            district = this.form.district.value,
            remarks = this.form.remarks.value,
            skills = [];



        this.form.skills.forEach((checkbox) => {
            if (checkbox.checked) {
                //  console.log(checkbox.value);
                skills.push(checkbox.value);
            }
        })
        //  console.log(skills);
        let validName = this.validateName(name),
            validEmail = this.validateEmail(email),
            validSkills = this.validateSkills(skills),
            validGender = this.validateGender(gender);

        if (validSkills && validEmail && validGender) {
            let newWin = window.open("", "", "width=800, height=900");
            newWin.document.writeln(
                `<ul>
                    <li>Name: ${name}</li>
                    <li>Email: ${email}</li>
                    <li>Gender: ${gender}</li>
                    <li>District: ${district}</li>
                    <li>Remarks: ${remarks}</li>
                    <li>Skills: ${skills}</li>
                </ul>`);
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
    validateSkills(num) {
        let error = document.querySelector("#skillsError");
        if (num < 1) {
            error.innerText = "Select at least one skill";
            return false;
        } else {
            error.innerText = "";
            return true;
        }
    }
    validateGender(_gender) {
        let error = document.querySelector("#genderError");
        if (_gender == "") {
            error.innerText = "Please select your gender";
            return false;
        } else {
            error.innerText = "";
            return true;
        }
    }
}



