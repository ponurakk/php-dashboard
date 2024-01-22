BasePath = localStorage.getItem("BasePath");

class CouriersManagers {
    fetchValues(name, lastName, phoneNumber, startHour, finishHour, department) {
        this.name = document.getElementById(name).value;
        this.lastName = document.getElementById(lastName).value;
        this.phoneNumber = document.getElementById(phoneNumber).value;
        this.startHour = document.getElementById(startHour).value;
        this.finishHour = document.getElementById(finishHour).value;
        this.department = document.getElementById(department).value;
    }

    async getCourier() {
        const res = await fetch(`${BasePath}/api/couriers`, {
            method: "GET",
            headers: { "content-type": "application/json" }
        });
        return await res.json();
    }

    async addCourier() {
        this.fetchValues("courier_name", "courier_last_name", "courier_phone_number", "courier_start_hour", "courier_start_hour", "courier_department");

        await fetch(`${BasePath}/api/couriers`, {
            method: "POST",
            headers: { "content-type": "application/json" },
            body: JSON.stringify({"name":this.name,"lastname":this.lastName,"phone_number":this.phoneNumber,"hours_from":this.startHour,"hours_to":this.finishHour,"department_id":this.department})
        });
    }
    async insertTable(table, template){
        table.innerHTML = " ";
        const courierRow = await courier.getCourier();
        courierRow.forEach(row => {
            const newTemplate = template.innerHTML.replace(/{{(\w*)}}/g, (_, key) => {
                return row.hasOwnProperty(key) ? row[key] : "";
            });
            table.insertAdjacentHTML("beforeend", newTemplate);
        });
    }
}


const courier = new CouriersManagers();
const table = document.querySelector("#courierTable");
let template = document.querySelector("#courierRowTemplate");
(async () => {
  await courier.insertTable(table, template);
})();


let btn = document.getElementById("addCourier");

btn.addEventListener("click", async () => {
    await courier.addCourier();
    await courier.insertTable(table, template);
})
