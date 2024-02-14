BasePath = localStorage.getItem("BasePath");

class StatusManager {
  async getStatus() {
    const res = await fetch(`${BasePath}/api/status`, {
      method: "GET",
      headers: { "content-type": "application/json" }
    });

    return await res.json();
  }

  async insertTable(table, template) {
    table.innerHTML = " ";
    const statusRow = await this.getStatus();
    statusRow.forEach(row => {
      const newTemplate = template.innerHTML.replace(/{{(\w*)}}/g, (_, key) => this.replace(key, row));
      table.insertAdjacentHTML("beforeend", newTemplate);
    });
  }

  replace(key, row) {
    switch (key) {
      case "payment_status":
        if (!row.hasOwnProperty(key)) return "";

        if (row[key] == "paid") {
          return '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M9 12l2 2l4 -4" /></svg>';
        } else if (row[key] == "new_payment") {
          return '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" /><path d="M9 9l6 6m0 -6l-6 6" /></svg>';
        }
        return row[key];

      default:
        return row.hasOwnProperty(key) ? row[key] : "";
    }
  }
}

const deliveryStatus = new StatusManager();
let template = document.querySelector("#statusRowTemplate");

(async () => {
  let table = document.querySelector("#statusTable");
  await deliveryStatus.insertTable(table, template);
})();
