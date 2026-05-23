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
