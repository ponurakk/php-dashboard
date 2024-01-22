BasePath = localStorage.getItem("BasePath");

class CouriersManagers {
    constructor(name, lastName, phoneNumber, startHour, finishHour, depantment) {
        this.name = document.getElementById(name).value;
        this.lastName = document.getElementById(lastName).value;
        this.phoneNumber = document.getElementById(phoneNumber).value;
        this.startHour = document.getElementById(startHour).value;
        this.finishHour = document.getElementById(finishHour).value;
        this.depantment = document.getElementById(depantment).value;
    }

    async getCourier() {
        const res = await fetch(`${BasePath}/api/couriers`, {
            method: "GET",
            headers: { "content-type": "application/json" }
        });
        return await res.json();
    }

    async addCourier() {
        const res = await fetch(`${BasePath}/api/couriers`, {
            method: "POST",
            headers: { "content-type": "application/json" }
        });
        console.log(res);
    }
}

const courier = new CouriersManagers("courier_name", "courier_last_name", "courier_phone_number", "courier_start_hour", "courier_start_hour", "courier_department");
const table = document.querySelector("#courierTable");
let template = document.querySelector("#courierRowTemplate");

(async () => {
    const courierRow = await courier.getCourier();
    courierRow.forEach(row => {
        const newTemplate = template.innerHTML.replace(/{{(\w*)}}/g, (_, key) => {
            return row.hasOwnProperty(key) ? row[key] : "";
        });
        table.insertAdjacentHTML("beforeend", newTemplate);
    });
})();

let btn = document.getElementById("addCourier");

btn.addEventListener("click", () => {
    courier.addCourier();
})
