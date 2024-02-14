BasePath = localStorage.getItem("BasePath");

class VehiclesManagers{
  fetchValues(brand, model, registration, capacity, department) {
    this.brand = document.getElementById(brand).value;
    this.model = document.getElementById(model).value;
    this.registration = document.getElementById(registration).value;
    this.capacity = document.getElementById(capacity).value;
    this.department = document.getElementById(department).value;
  }

  async getVehicle() {
    const res = await fetch(`${BasePath}/api/vehicles`, {
      method: "GET",
      headers: { "content-type": "application/json" }
    });
    return await res.json();
  }

  async addVehicle() {
    this.fetchValues("vehicle_brand", "vehicle_model", "vehicle_registration", "vehicle_capacity", "vehicle_department");

    await fetch(`${BasePath}/api/vehicles`, {
      method: "POST",
      headers: { "content-type": "application/json" },
      body: JSON.stringify({
        "brand": this.brand,
        "model": this.model,
        "registration": this.registration,
        "capacity": this.capacity,
        "department_id": this.department
      })
    });
  }

  async removeVehicle(id) {
    await fetch(`${BasePath}/api/vehicles`, {
      method: "DELETE",
      headers: { "content-type": "application/json" },
      body: JSON.stringify({
        "id": id,
      })
    });
  }

  async insertTable(table, template) {
    table.innerHTML = " ";
    const vehicleRow = await vehicle.getVehicle();
    vehicleRow.forEach(row => {
      const newTemplate = template.innerHTML.replace(/{{(\w*)}}/g, (_, key) => {
        return row.hasOwnProperty(key) ? row[key] : "";
      });
      table.insertAdjacentHTML("beforeend", newTemplate);
    });
  }
}

const vehicle = new VehiclesManagers();
let template = document.querySelector("#vehicleRowTemplate");

async function onPageReload() {
  let table = document.querySelector("#vehicleTable");
  await vehicle.insertTable(table, template);

  let removeBtns = table.querySelectorAll(".vehicle-remove");
  removeBtns.forEach(item => {
    console.log("okok")
    item.addEventListener("click", async (e) => {
      await vehicle.removeVehicle(e.target.dataset.id);
      await onPageReload();
    })
  })
}


(async () => {
  await onPageReload();
})();

let btn = document.getElementById("addVehicle");

btn.addEventListener("click", async () => {
  await vehicle.addVehicle();
  await onPageReload();
})