BasePath = localStorage.getItem("BasePath");

class DepartmentsManagers {
  fetchValues(name, street, home_number, locale_number, post_code, city, phone_number, email) {
    this.name = document.getElementById(name).value;
    this.street = document.getElementById(street).value;
    this.home_number = document.getElementById(home_number).value;
    this.locale_number = document.getElementById(locale_number).value;
    this.post_code = document.getElementById(post_code).value;
    this.city = document.getElementById(city).value;
    this.phone_number = document.getElementById(phone_number).value;
    this.email = document.getElementById(email).value;
  }

  async getDepartment() {
    const res = await fetch(`${BasePath}/api/departments`, {
      method: "GET",
      headers: { "content-type": "application/json" }
    });
    return await res.json();
  }

  async addDepartment() {
    this.fetchValues("department_name", "department_street", "department_home_number", "department_locale_number", "department_post_code", "department_city", "department_phone_number", "department_email");

    await fetch(`${BasePath}/api/departments`, {
      method: "POST",
      headers: { "content-type": "application/json" },
      body: JSON.stringify({
        "name": this.name,
        "street": this.street,
        "home_number": this.home_number,
        "locale_number": this.locale_number,
        "post_code": this.post_code,
        "city": this.city,
        "phone_number": this.phone_number,
        "email": this.email
      })
    });
  }

  async insertTable(table, template) {
    table.innerHTML = " ";
    const departmentRow = await department.getDepartment();
    departmentRow.forEach(row => {
      const newTemplate = template.innerHTML.replace(/{{(\w*)}}/g, (_, key) => {
        return row.hasOwnProperty(key) ? row[key] : "";
      });
      table.insertAdjacentHTML("beforeend", newTemplate);
    });
  }
}

const department = new DepartmentsManagers();
const table = document.querySelector("#departmentTable");
let template = document.querySelector("#departmentRowTemplate");

(async () => {
  await department.insertTable(table, template);
})();

let btn = document.getElementById("addDepartment");

btn.addEventListener("click", async () => {
  await department.addDepartment();
  await department.insertTable(table, template);
})
