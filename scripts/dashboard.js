class okok{
    constructor(cName, cLastName, cPhoneNumber, cStartHour, cFinishHour, cDepantment){
        this.cName = document.getElementById(cName).value;
        this.cLastName = document.getElementById(cLastName).value;
        this.cPhoneNumber = document.getElementById(cPhoneNumber).value;
        this.cStartHour = document.getElementById(cStartHour).value;
        this.cFinishHour = document.getElementById(cFinishHour).value;
        this.cDepantment = document.getElementById(cDepantment).value;
    }

    addCurier(){
        

        const res =  fetch(url, {
            method: 'post',
            headers: {
                'content-type' : 'appLocation/json'
            },
            body: JSON.stringify(body)
        });
        fetch()
    }
}

let btn = 
asd.addCurier();