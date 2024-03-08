
let btn = document.getElementById('add-btn');
btn.addEventListener('click' , addFood)
    function addFood(e){
        let currentbtn = e.currentTarget;
        console.log(currentbtn);
        let currentInput = currentbtn.previousElementSibling;
        console.log(currentInput.value);
        let currentFoodName = currentInput.value;
        let newLi = document.createElement('li');
        newLi.className = `list-group-item d-flex justify-content-between`;
        newLi.innerHTML = `
        <h3 class="flex-grow-1">${currentFoodName}</h3>
                <button class=" btn btn-dark mx-2">Read</button>
                <button class=" btn btn-danger ">Delete</button>
        `

        let peranList = document.getElementById('parentList');
        peranList.appendChild(newLi);
        
    };



let thirdPromise = new Promise (function (resolve , reject) {
        setTimeout(function () {
            resolve({ username : "john" , age:15 , car:"aston martin", colour:"yellow"})
        },2000)
    })

    thirdPromise.then(function (user) {
    return user.username;
}).then(function (output) {
    console.log(output)
})


async function getAllUser (){
    try{
        let linked = await fetch('');
        let jsonData = await linked.json();
        document.write(JSON.stringify(jsonData))
    }
    catch{
        console.log("error")
    }

}

