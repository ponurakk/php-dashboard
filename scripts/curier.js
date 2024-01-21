class curiersMenagers{
    constructor(cName, cLastName, cPhoneNumber, cStartHour, cFinishHour, cDepantment){
        this.cName = document.getElementById(cName).value;
        this.cLastName = document.getElementById(cLastName).value;
        this.cPhoneNumber = document.getElementById(cPhoneNumber).value;
        this.cStartHour = document.getElementById(cStartHour).value;
        this.cFinishHour = document.getElementById(cFinishHour).value;
        this.cDepantment = document.getElementById(cDepantment).value;
    }

    async getCurier(){
        const res =  await fetch(`${BasePath}/api/couriers`, {
            method: 'GET',
            headers: {
                'content-type' : 'application/json'
            }
        });
        console.log(res);
    }
}

let btn = document.getElementById('addCurier');

btn.addEventListener("click", ()=>{
    let curier = new curiersMenagers("courier_name", "courier_last_name", "courier_phone_number", "courier_start_hour", "courier_start_hour", "courier_department"); 
    curier.getCurier();
})
    
